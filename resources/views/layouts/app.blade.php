<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Outsource') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- <script
        src={{ env('APP_ENV') != 'production' ? asset('js/app.js') : 'https://64872825b9783b3819d4d787--spontaneous-cendol-4f8351.netlify.app/js/app.js' }}
        defer></script> --}}
    <script src="https://kit.fontawesome.com/0e4c6fcdab.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/index_style.css')}}"> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="https://64872825b9783b3819d4d787--spontaneous-cendol-4f8351.netlify.app/css/app.css" rel="stylesheet"> --}}
    <link
        href={{ env('APP_ENV') != 'production' ? asset('css/app.css') : 'https://64872825b9783b3819d4d787--spontaneous-cendol-4f8351.netlify.app/css/app.css' }}
        rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body class="bg-gray-100">

    <div class="flex bg-teal-500 mx-auto">
        <div class="container mx-auto">
            <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
                <div class="flex items-center flex-shrink-0 text-white mr-6">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z" />
                    </svg>
                    <span class="font-semibold text-xl tracking-tight">BestBiz</span>
                </div>
                <div class="block lg:hidden">
                    <button onclick="toggle()"
                        class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
                <div id="menu" class=" w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                    <div class="text-sm lg:flex-grow">
                        <a href="#responsive-header"
                            class="block text-white mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-600 mr-4">
                            Seller
                        </a>
                        <a href="#responsive-header"
                            class="block text-white mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-600  mr-4">
                            Buyer
                        </a>
                        <a href="#responsive-header"
                            class="block text-white mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-600 mr-4">
                            Expert
                        </a>
                        <a href="{{ route('biz.index') }}"
                            class="block text-white mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-600 ">
                            Find Bizs
                        </a>
                    </div>
                    <div>

                        @guest
                            @if (Route::has('register'))
                                <a href="{{ route('price-plan.index') }}"
                                    class="inline-block text-lg font-semibold px-4 py-2 leading-none text-white  border-white hover:border-transparen hover:text-gray-600 mt-4 lg:mt-0">Register</a>
                            @endif

                            @if (Route::has('login'))
                                <a href="{{ route('login') }}"
                                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-black hover:bg-white mt-4 lg:mt-0">Login</a>
                            @endif
                        @else
                            <a href="
                  {{ Auth::user()->type->value == 'buyer' ? route('buyer.dashboard') : route('seller.dashboard') }}
                  
                  
                  "
                                class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-gray-700 mt-4 lg:mt-0">Go
                                to Dashboard</a>

                        @endguest

                    </div>
                </div>
            </nav>
        </div>

    </div>
    <form class="mt-2" action="{{ route('biz.index') }}" method="GET">
        <div class="grid md:grid-cols-1 md:gap-6 px-10 text-center">
            <div class="relative z-0 w-full mb-3 mt-3 group">
                <input type="text" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    placeholder="Search Here">
            </div>
        </div>
        <div class="grid md:grid-cols-5 md:gap-6 px-10 text-center">
            <div class="relative z-0 w-full mb-3 mt-3 group">
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a Category</option>
                    <option value="US">Hospital</option>
                    <option value="CA">Restaurant</option>
                    <option value="FR">Ecommerce</option>
                    <option value="DE">3D Graphic</option>
                </select>
            </div>
            <div class="relative z-0 w-full mb-3 mt-3 group">
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Select Price</option>
                    <option value="US">0 - 100 USD</option>
                    <option value="CA">100 - 200 USD</option>
                    <option value="FR">200 - 300 USD</option>
                    <option value="DE">300+ USD</option>
                </select>
            </div>
            <div class="relative z-0 w-full mb-3 mt-3 group">
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Select Location</option>
                    <option value="US">USA</option>
                    <option value="CA">Canada</option>
                    <option value="FR">Brazil</option>
                    <option value="DE">Japan</option>
                </select>
            </div>
            <div class="relative z-50 w-full mb-3 mt-3 group">

                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class="block w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    More Filter
                </button>

                <div id="popup-modal" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    More Filters
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="popup-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <div>
                                    <input type="text" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Key Words">
                                </div>

                                <div>
                                    <input type="number" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Estlibished After Year YYYY">
                                </div>

                                <div class="relative max-w-sm">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input datepicker type="date"
                                        class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Date Added">
                                </div>

                                <div class="flex">
                                  <h5 class="text-dark text-xl">
                                    Gross Revenue
                                </h5>
                                </div>
                                <div class="grid md:grid-cols-2">
                                    <div class="relative z-0 w-full mb-3 group pr-5">
                                        <input type="number" id="email"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                            placeholder="Min">
                                    </div>
                                    
                                    <div class="relative z-0 w-full mb-3 group pl-5">
                                      <input type="number" id="email"
                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                          placeholder="Max">
                                  </div>
                                </div>

                                <div class="flex">
                                  <h5 class="text-dark text-xl">
                                    Cash Flow
                                </h5>
                                </div>
                                <div class="grid md:grid-cols-2">
                                    <div class="relative z-0 w-full mb-3 group pr-5">
                                        <input type="number" id="email"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                            placeholder="Min">
                                    </div>
                                    
                                    <div class="relative z-0 w-full mb-3 group pl-5">
                                      <input type="number" id="email"
                                          class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                                          placeholder="Max">
                                  </div>
                                </div>


                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-end justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="staticModal" type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Go</button>
                               
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="relative z-0 w-full mb-3 mt-3 group">
                <button type="button"
                    class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>

            </div>


        </div>
    </form>

    <main class="">
        @yield('content')
    </main>
    {{-- <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        const menu = document.getElementById('menu');
        const toggle = () => menu.classList.toggle("hidden");
    </script>
</body>

</html>
