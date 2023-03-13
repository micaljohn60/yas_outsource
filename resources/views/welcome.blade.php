@extends('layouts.app')

@section('content')
    <div class="lg:container mx-auto  bg-gray-200">

        
            <form class="mt-2" action="{{route('biz.index')}}" method="GET">   
                <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="search" name="name" id="search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-main dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                    

                    {{-- <select class=" bg-main focus:outline-none text-white absolute right-2.5 bottom-2.5  hover:bg-gray-800 focus:ring-4  focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" name="search_options">
                        <option value="seller">Seller</option>
                        <option value="buyer">Buyer</option>
                        <option value="experts">Experts</option>
                    </select> --}}
                </div>
            </form>


        {{-- <div class="flex justify-center items-center">
            <form class="flex w-96">
                <input
                    class="
                w-full border-none bg-cyan-300 bg-transparent px-4 py-1 first-letter:text-gray-900
                text-black placeholder:text-black focus:outline-none
                "
                    type="text" name="Search Here" placeholder="Search Here" />

                <select class="m-2 px-4 py-2 bg-gray-200 focus:outline-none" name="search_options">
                    <option value="seller">Seller</option>
                    <option value="buyer">Buyer</option>
                    <option value="experts">Experts</option>
                </select>
            </form>
        </div> --}}
    </div>


  <div class="container mx-auto mt-2">
    <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center " id="myTab" data-tabs-toggle="#myContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg bg-gray-200 text-xl" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Recent upload from Sellers</button>
            </li>
        </ul>
    </div>

    <div id="myContent">
        <div class="p-4 rounded-lg bg-gray-200 dark:bg-gray-800" id="profile" role="tabpanel"
            aria-labelledby="profile-tab">
            <div class="container mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-2">
                    @foreach ($bizs as $key=> $biz)
                    
                    <div class="p-2 bg-white border border-gray-200 rounded lg drop-shadow-md ">
                        <a href="{{route('biz.show',$biz->id)}}" target="_blank" rel="noopener noreferrer">
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
                        </a>
                        
                        
                    </div>           
                             
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="container mx-auto mt-4">
        <div class="border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center " id="myTab" data-tabs-toggle="#myContent" role="tablist">
                <li class="mr-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg bg-gray-200 text-xl" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Wishlists from Buyers</button>
                </li>
            </ul>
        </div>
    
        <div id="myContent">
            <div class="p-4 rounded-lg bg-gray-200 dark:bg-gray-800" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
                <div class="container mx-auto">
                    <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-2">
                        @foreach ($bizs as $key=> $biz)
                        <div class="p-2 bg-white border border-gray-200 rounded lg drop-shadow-md ">
                            <div class="flex items-center">
                                <div id={{"leading".$key}} class="bg-orange-400 w-12 h-12 flex justify-center items-center rounded-md uppercase font-bold text-white">{{$biz->name[0]}}
                                </div>
                                <div class="ml-4">
                                    <p class="font-bold text-lg">{{ $biz->name }}</p>
                                    <p class="text-sm text-gray-700 mt-1 line-clamp-2 w-56">{{ $biz->biz_detail }}</p>
                                    <div class="flex items-center hover:text-blue-600">
                                        <a class="lowercase text-xs hover:cursor-pointer hover:text-gray-600 mt-2">See detail </a>
                                        <i class="fa-solid fa-arrow-up-right-from-square fa-xs px-1 pt-2 hover:text-blue-600"></i>
                                    </div>
                                </div>
                                
                            </div>
                            
                            
                        </div>           
                                 
                        @endforeach
    
                    </div>
                </div>
            </div>
        </div>
        </div>



    {{-- <div class="container mt-3">
        <div class="row">
            @foreach ($bizs as $biz)
                <div class="col-lg-3">
                    <div class="custom-card">
                        <div class="mini">
                            {{ $biz->created_at }}
                        </div>
                        <h5 class="d-flex justify-content-between title">{{ $biz->name }}
                            <div class="icon">
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                        </h5>
                        <p class="body text-truncate">{{ $biz->biz_detail }}</p>
                        <div class="d-flex justify-content-start  py-3">
                            <a href="{{ route('biz.show', $biz->id) }}"
                                class=" mx-3 font-weight-bold text-decoration-none text-dark">
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
