@extends('layouts.sidebar')

@section('dashboard_content')

    <div class="p-4 sm:ml-64 px-6 py-6 md:col-span-5 lg:col-span-7 bg-gray-100 h-full">
        @if (count($notifications) <= 0)
            <h1>No new notification</h1>
        @else
            @foreach ($notifications as $notification)
                <div class="w-full flex flex-col sm:flex-row flex-grow overflow-hidden" onclick='fetchProposal({{$notification->data["biz_id"]}},{{$notification->data["id"]}},{{Auth::user()->type->value == "buyer" ? 1 : 2 }},{{$notification->notifiable_id}})'>
                    <div class="sm:w-1/3 md:1/4 w-full flex-shrink flex-grow-0 pt-4 px-3"> 
                        <div class="sticky top-0  w-full">
                            <ul class="bg-white h-screen rounded-md flex sm:flex-col overflow-auto content-center ">
                                <!-- nav goes here -->

                                <li>
                                    <a href="#"
                                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.146 3.248a2 2 0 0 1 3.708 0A7.003 7.003 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752zM10.586 19a1.5 1.5 0 0 0 2.829 0h-2.83zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5z"
                                                fill="currentColor" />
                                        </svg>
                                        <span class="flex-1 ml-3 whitespace-nowrap text-xl">Notifications</span>
                                    </a>
                                </li>

                                <li class="mt-3 p-2">
                                    <a class="  ">
                                        <div id="{{$notification->notifiable_id}}" class="p-2 bg-white hover:bg-gray-200 rounded hover:cursor-pointer">
                                            <div class="flex items-center">
                                                <div id={{ 'leading' }}
                                                    class="bg-orange-400 w-12 h-12 flex justify-center items-center rounded-md uppercase font-bold text-white">
                                                    t
                                                </div>
                                                <div class="ml-4">
                                                    <p  class="text-md line-clamp-1 w-56">{{ Auth::user()->type->value == 'buyer' ? "Your Proposal was Accepted" : "Someone Sent you a Proposal"}}</p>
                                                    <p  class="text-sm text-gray-700 mt-1 line-clamp-2 w-56">Test</p>

                                                </div>

                                            </div>


                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <main role="main" class="w-full h-screen flex-grow py-6 mt-3 overflow-auto bg-white rounded-md">
                        <!-- content area -->

                        <div id="form" class="hidden">
                            <form method="POST" 
                                action="{{ route('proposal.biz.accept', ['proposal' => $notification->data['id'], 'biz_id' => $notification->data['biz_id']]) }}">                            
                            
                                @csrf
                                <input
                                class="bg-main m-1 p-3 text-white font-bold rounded-md hover:cursor-pointer checked:bg-secondary-400 hover:bg-secondary-200"
                                type="submit" value="Accept" />

                            <input
                                class="bg-red-600 m-1 p-3 mr-2 text-white font-bold rounded-md hover:cursor-pointer checked:bg-secondary-400 hover:bg-secondary-200"
                                type="submit" value="Decline" />
                            </form>
                        </div>

                        <div class="p-3">
                            <h1 id="heading" class="text-2xl text-gray-700 font-bold"></h1>
                            <p id="body" class="mt-2">
                                
                            </p>
                        </div>

                    </main>
                </div>

                

                {{-- <div class="notification">
                    <div class="body">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h5 class="mt-3 ms-3">Some sent you a proposal to your biz</h5>
                                    
                                    <p class="fs-6 ms-3">Notification Description</p>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center justify-content-center">

                                    <p class="fs-6 ms-3 mt-3"><a
                                            href="{{ route('notification.proposal.show', [
                                                'proposal' => $notification->data['id'],
                                                'biz_id' => $notification->data['biz_id'],
                                            ]) }}"
                                            class="text-decoration-none">See Detail</a></p>
                              

                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            @endforeach
        @endif
    </div>


    <script>
        function fetchProposal(bizId,ProposalId,userValue,notiId) {
            var url = '{{ route("notification.proposal.show",[ ":proposalId", ":bizId"]) }}';
            url = url.replace(':proposalId',ProposalId);
            url = url.replace(':bizId',bizId);
          const xhttp = new XMLHttpRequest();

          xhttp.open("GET", url,false);
          xhttp.send();
        //   var jsonData = JSON.stringify(xhttp.response)
            var data = JSON.parse(xhttp.response);
            console.log(data.proposal.description);
            if(userValue == 1){
              document.getElementById("form").remove();
            }   
            else{
                var form = document.getElementById("form");
                form.classList.remove("hidden");
                form.className += "flex justify-end visible"; 
            }    
            var noti = document.getElementById(notiId);  
            noti.classList.remove('bg-white');  
            noti.className += " bg-gray-300";
            document.getElementById("heading").textContent =  "{{Auth::user()->type->value == 'buyer' ? 'Your Proposel was Accepted ' : 'Someone Sent You a Proposal'}} "
            document.getElementById("body").innerHTML  = data.proposal.description;
        }
    </script>



@endsection
