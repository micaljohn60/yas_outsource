@extends('layouts.user_side_bar')

@section('user_content')
<div class="container mx-auto mt-4">
    

    <div id="myContent">
        <div class="p-4 rounded-lg bg-gray-200 dark:bg-gray-800" id="profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <div class="container mx-auto">
                @if(count($bizs) <=0) 
                <div class="text-center text-red-500 text-xl">
                    No Biz Found
                </div>
                @else
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2">
                    @foreach ($bizs as $key=> $biz)
                    <div class="p-2 bg-white border border-gray-200 rounded lg drop-shadow-md ">
                        <div class="flex items-center">
                            <div id={{"leading".$key}} class="bg-orange-400 w-12 h-12 flex justify-center items-center rounded-md uppercase font-bold text-white">{{$biz->name[0]}}
                            </div>
                            <div class="ml-4">
                                <p class="font-bold text-lg">{{ $biz->name }}</p>
                                <p class="text-sm text-gray-700 mt-1 line-clamp-2 w-56">{{ $biz->biz_detail }}</p>
                                <div class="flex items-center hover:text-blue-600">
                                    <a target="_blank" href="{{route('biz.show',$biz->id)}}" class="lowercase text-xs hover:cursor-pointer hover:text-gray-600 mt-2">See detail </a>
                                    <i class="fa-solid fa-arrow-up-right-from-square fa-xs px-1 pt-2 hover:text-blue-600"></i>
                                </div>
                            </div>
                            
                        </div>
                        
                        
                    </div>           
                             
                    @endforeach

                </div>

                @endif
                
            </div>
            <div class="flex justify-center items-center">
                <a 
                    class="text-main no-underline cursor-pointer hover:text-white border border-main hover:bg-main focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Load More</a>

            </div>
            
        </div>
        
    </div>
    </div>

    {{-- <div class="container">
    <div class="row">
    @foreach ($bizs as $biz)
    <div class="col-lg-3">
        <div class="custom-card">
            <div class="mini">
                {{$biz->created_at}}
            </div>
            <h5 class="title">{{$biz->name}}</h5>
            <p class="body text-truncate" style="max-width: 200px;">{{$biz->biz_detail}}</p>
            <div class="d-flex justify-content-start mt-3 mb-2">
                <a href="{{route("biz.show",$biz->id)}}" class=" mx-3 font-weight-bold text-decoration-none text-dark">
                    See Detail
                </a>

            </div>
        </div>
    </div>
    @endforeach
</div>

</div> --}}
<script>
    var colors = ["bg-orange-400", "bg-cyan-400", "bg-teal-500"]
    for (let i = 0; i < 6; i++) {
    var element = document.getElementById(`leading${i}`);
    element.classList.add(colors[Math.floor(Math.random()*colors.length)]);
    }
</script>
@endsection
