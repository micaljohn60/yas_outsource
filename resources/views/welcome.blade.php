@extends('layouts.app')

@section('content')
    <div class="bg-white my-5 w-full flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
        <main class="bg-white md:w-2/3 lg:w-3/4 px-5">
            <div class="lg:container bg-white">
                <div class="container  mt-2">
                    <div class="border-b border-gray-200 dark:border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center " id="myTab"
                            data-tabs-toggle="#myContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg bg-gray-200 text-xl"
                                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">Recent upload from Sellers</button>
                            </li>
                        </ul>
                    </div>

                    <div id="myContent">
                        <div class="p-4 rounded-lg bg-gray-200 dark:bg-gray-800" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="container mx-auto">
                                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2">
                                    @foreach ($bizs as $key => $biz)
                                        <div class="p-2 bg-white border border-gray-200 rounded lg drop-shadow-md ">
                                            <a href="{{ route('biz.show', $biz->id) }}" target="_blank"
                                                rel="noopener noreferrer">
                                                <div class="flex items-center">
                                                    <div id={{ 'leading' . $key }}
                                                        class="bg-orange-400 w-12 h-12 flex justify-center items-center rounded-md uppercase font-bold text-white">
                                                        {{ $biz->name[0] }}
                                                    </div>
                                                    <div class="ml-4">
                                                        <p class="font-bold text-lg">{{ $biz->name }}</p>
                                                        <p class="text-sm text-gray-700 mt-1 line-clamp-2 w-56">
                                                            {{ $biz->biz_detail }}
                                                        </p>
                                                        <div class="flex items-center hover:text-blue-600">
                                                            <a target="_blank" href="{{ route('biz.show', $biz->id) }}"
                                                                class="lowercase text-xs hover:cursor-pointer hover:text-gray-600 mt-2">See
                                                                detail </a>
                                                            <i
                                                                class="fa-solid fa-arrow-up-right-from-square fa-xs px-1 pt-2 hover:text-blue-600"></i>
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
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center " id="myTab"
                            data-tabs-toggle="#myContent" role="tablist">
                            <li class="mr-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg bg-gray-200 text-xl"
                                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">Wishlists from Buyers</button>
                            </li>
                        </ul>
                    </div>

                    <div id="myContent">
                        <div class="p-4 rounded-lg bg-gray-200 dark:bg-gray-800" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="container mx-auto">
                                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-2">
                                    @foreach ($bizs as $key => $biz)
                                        <div class="p-2 bg-white border border-gray-200 rounded lg drop-shadow-md ">
                                            <div class="flex items-center">
                                                <div id={{ 'leading' . $key }}
                                                    class="bg-orange-400 w-12 h-12 flex justify-center items-center rounded-md uppercase font-bold text-white">
                                                    {{ $biz->name[0] }}
                                                </div>
                                                <div class="ml-4">
                                                    <p class="font-bold text-lg">{{ $biz->name }}</p>
                                                    <p class="text-sm text-gray-700 mt-1 line-clamp-2 w-56">
                                                        {{ $biz->biz_detail }}
                                                    </p>
                                                    <div class="flex items-center hover:text-blue-600">
                                                        <a
                                                            class="lowercase text-xs hover:cursor-pointer hover:text-gray-600 mt-2">See
                                                            detail </a>
                                                        <i
                                                            class="fa-solid fa-arrow-up-right-from-square fa-xs px-1 pt-2 hover:text-blue-600"></i>
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
            </div>
        </main>
        <aside class="bg-white md:w-1/3 lg:w-1/4 px-5 ">

            <a href="#"
                class="mt-3 block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Hot Discussion from Forum</h5>
                <ul class="max-w-md space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        At least 10 characters (and up to 100 characters)
                    </li>
                    <li>
                        At least one lowercase character
                    </li>
                    <li>
                        Inclusion of at least one special character, e.g., ! @ # ?
                    </li>
                </ul>
            </a>

            <figure class="max-w-lg mt-2">
                <img class="h-auto max-w-full rounded-lg" src="https://blog.hubspot.com/hs-fs/hubfs/NatureBox-Facebook-Ad.jpg?width=400&name=NatureBox-Facebook-Ad.jpg" alt="image description">
                
            </figure>
            <figure class="max-w-lg mt-2">
                <img class="h-auto max-w-full rounded-lg" src="https://blog.hubspot.com/hs-fs/hubfs/NatureBox-Facebook-Ad.jpg?width=400&name=NatureBox-Facebook-Ad.jpg" alt="image description">
                
            </figure>

        </aside>
    </div>




    <script>
        var colors = ["bg-orange-400", "bg-cyan-400", "bg-teal-500"]
        for (let i = 0; i < 6; i++) {
            var element = document.getElementById(`leading${i}`);
            element.classList.add(colors[Math.floor(Math.random() * colors.length)]);
        }
    </script>
@endsection
