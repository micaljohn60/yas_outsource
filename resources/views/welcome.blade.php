@extends('layouts.app')

@section('content')
    <div class="lg:container mx-auto  bg-gray-200">

        <div class="flex justify-center items-center">
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
        </div>
    </div>


  <div class="container mx-auto mt-2">
    <div class="border-b border-gray-200 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center " id="myTab" data-tabs-toggle="#myContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg bg-gray-200" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Recent upload from Sellers</button>
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
                            <div id={{"leading".$key}} class="bg-orange-400 w-12 h-12 flex justify-center items-center rounded-md uppercase font-bold text-white">EC
                            </div>
                            <div class="ml-4">
                                <p class="font-bold">{{ $biz->name }}</p>
                                <p class="text-sm text-gray-700 mt-1 truncate w-56">{{ $biz->biz_detail }}</p>
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
