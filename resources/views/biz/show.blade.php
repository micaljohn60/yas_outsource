@extends('layouts.app')

@section('content')
    <div class="lg:container mx-auto bg-white">

        <div class="w-full flex flex-col sm:flex-row flex-grow overflow-hidden">
            <div class="lg:w-9/12 w-full flex-shrink flex-grow-0 pt-4 px-3">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-semibold text-gray-700 mb-1">{{ $biz->name }}</h1>
                    <h1 class="text-3xl font-semibold text-gray-700 mb-1 flex items-center">

                        @if ($biz->currency == 'en')
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" id="dollar" data-name="Flat Color"
                                xmlns="http://www.w3.org/2000/svg" class="icon flat-color">
                                <path id="primary"
                                    d="M13.5,11h-3a2.5,2.5,0,0,1,0-5H11V7a1,1,0,0,0,2,0V6h.5A2.5,2.5,0,0,1,16,8.5a1,1,0,0,0,2,0A4.51,4.51,0,0,0,13.5,4H13V3a1,1,0,0,0-2,0V4h-.5a4.5,4.5,0,0,0,0,9h3a2.5,2.5,0,0,1,0,5H13V17a1,1,0,0,0-2,0v1h-.5A2.5,2.5,0,0,1,8,15.5a1,1,0,0,0-2,0A4.51,4.51,0,0,0,10.5,20H11v1a1,1,0,0,0,2,0V20h.5a4.5,4.5,0,0,0,0-9Z"
                                    style="fill: rgb(0, 0, 0);"></path>
                            </svg>
                        @endif
                        {{ $biz->actual_sale_price }}

                    </h1>
                </div>
                
                <hr class="h-px my-3 bg-gray-400 border-0 dark:bg-gray-700">

                
                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Wish Sale Start Date</button>
                    </li>
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Wish Sale Start Date</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Wish Sale Price</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Price After Wish Sale</button>
                    </li>
                </ul>
                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-tl-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">{{ $biz->start_date }}</button>
                    </li>
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">{{ $biz->end_date }}</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">{{ $biz->wish_sale_price }}</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-tr-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">{{ $biz->actual_sale_price }}</button>
                    </li>
                </ul>

                <h3 class="text-xl font-semibold text-gray-700 mt-3">Company Information</h3>
                <p class="mt-3 font-light text-gray-500 dark:text-gray-400">
                    {{ $biz->biz_detail }}</h1>
                </p>

                <h3 class="text-xl font-semibold text-gray-700 mt-5">Reason Sale</h3>
                <p class="mt-3 font-light text-gray-500 dark:text-gray-400">
                    {{ $biz->biz_detail }}</h1>
                </p>

                <h3 class="text-xl font-semibold text-gray-700 mt-5">Images : </h3>
                <p class="mt-3 font-light text-gray-500 dark:text-gray-400">
                    {{ $biz->biz_detail }}</h1>
                </p>

                @if(auth()->check())
                <div class="border border-main rounded-lg mt-10">
                    <label for="message" class="block mt-4 mx-5 first-letter:text-sm font-medium text-gray-900 dark:text-white">Comment Sections</label>
    
    
                    <div class="h-96 overflow-auto">
                        <div class="w-full rounded overflow-hidden shadow-sm px-6 py-4">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Anonmyous User</div>
                                <p class="text-gray-700 text-base">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                              </div>
                        </div>
                        <div class="w-full rounded overflow-hidden shadow-sm px-6 py-4">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Anonmyous User</div>
                                <p class="text-gray-700 text-base">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                                </p>
                              </div>
                        </div>
                    </div>
    
                    
    
                    <div>
                        <div>
                            
                            <textarea id="message" placeholder="What is your Opinion on this Biz?..." name="content" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-main focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                        </div>
                    </div>
                   </div>
                @endif

                @guest
                <label for="message" class="block mt-4 mx-5 first-letter:text-sm font-medium text-gray-900 dark:text-white">Please Login to make comments</label>
                @endguest

              

            </div>

            
        

            <div class="lg:w-1/5 h-screen flex-grow py-6 mt-3 overflow-auto bg-white rounded-md">
                <div class="flex justify-center">
                    @if (Auth::check())
                        <div class="col-lg-12  m-1 ">
                            @if (Auth::user()->type->value == 'buyer')
                                <form method="POST" enctype="multipart/form-data" action="/proposals/upload-to-biz">
                                    @csrf
                                    {{-- <input type="checkbox" id="isfile" name="isfile" onclick="showHideFile(this)" > --}}
                                    <div class="flex items-center mb-2">
                                        <span class="mr-3 text-sm font-medium text-gray-900 dark:text-gray-300">My
                                            Proposal</span>

                                        <label class="relative inline-flex items-center cursor-pointer">

                                            <input onclick="showHideFile(this)" type="checkbox" value=""
                                                class="sr-only peer">
                                            <div
                                                class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                            </div>


                                        </label>
                                        <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Select
                                            File</span>
                                    </div>

                                    <div class="proposal-card">
                                        <input type="hidden" name="biz_id" value={{ $biz->id }}>
                                        <input type="hidden" id="fielValue" name="type" value="my_proposal">
                                        <input type="file" id="file" name="file" style="display:none;">
                                        <select class="form-select rounded-lg focus:border-main " name="proposal_id"
                                            id="proposal" style="display:block;">
                                            @foreach ($proposals as $proposal)
                                                <option value={{ $proposal->id }}>{{ $proposal->title }}</option>
                                            @endforeach
                                        </select>
                                        <div class="d-flex justify-content-center">
                                            <input
                                                class="m-3 p-4 bg-main rounded-lg text-white font-semibold hover:cursor-pointer"
                                                type="submit" value="Sent Proposal">
                                        </div>
                                    </div>
                                </form>
                            @endif
                        </div>
                    @else
                    @endif
                </div>
            </div>


        </div>

        





        <script>
            function showHideFile(checkFile) {
                var file = document.getElementById("file");
                file.style.display = checkFile.checked ? "block" : "none";
                document.getElementById("fielValue").value = checkFile.checked ? "select_file" : "my_proposal";
                document.getElementById("proposal").style.display = checkFile.checked ? "none" : "block";
            }
        </script>
        </>
    @endsection
