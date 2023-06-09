<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Outsource') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/0e4c6fcdab.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/index_style.css')}}"> --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<body class="bg-gray-100">

    <div class="flex bg-teal-500 mx-auto">
      <div class="container mx-auto">
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <div class="grid md:grid-cols-1 md:gap-6 px-10 text-center">
              <div class="relative z-0 w-full group"> 
                <input type="text" placeholder="Find your Biz Here" id="" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              </div>
            </div>
            <div class="block lg:hidden">
              <button  onclick="toggle()" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
              </button>
            </div>
            <div id="menu" class=" w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                  <a href="#responsive-header" class="block text-white mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-600 mr-4">
                    Seller
                  </a>
                  <a href="#responsive-header" class="block text-white mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-600  mr-4">
                    Buyer
                  </a>
                  <a href="#responsive-header" class="block text-white mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-600 mr-4">
                    Expert
                  </a>
                  <a href="{{route('biz.index')}}" class="block text-white mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-gray-600 ">
                    Find Bizs
                  </a>
                </div>
                <div>
                  
                  @guest
                      @if(Route::has('register'))
                      <a href="{{ route('price-plan.index') }}" class="inline-block text-lg font-semibold px-4 py-2 leading-none text-white  border-white hover:border-transparen hover:text-gray-600 mt-4 lg:mt-0">Register</a>
                      @endif
                     
                      @if (Route::has('login'))
                      <a href="{{ route('login') }}" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-black hover:bg-white mt-4 lg:mt-0">Login</a>
                      
                       @endif
                   @else
                  <a href="
                  {{Auth::user()->type->value == 'buyer' ? route('buyer.dashboard') : route('seller.dashboard')}}
                  
                  
                  " class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-gray-700 mt-4 lg:mt-0">Go to Dashboard</a>

                  @endguest
                  
                </div>
              </div>
          </nav>
    </div>
    
    </div>
    <form class="mt-2" action="{{ route('biz.index') }}" method="GET">
      <div class="grid md:grid-cols-4 md:gap-6 px-10 text-center">
          <div class="relative z-0 w-full mb-3 mt-3 group">
              <input type="email" id="email"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                  placeholder="Search with Category" required>
          </div>
          <div class="relative z-0 w-full mb-3 mt-3 group">
              <input type="email" id="email"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                  placeholder="Search with Location" required>
          </div>
          <div class="relative z-0 w-full mb-3 mt-3 group">
              <input type="email" id="email"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                  placeholder="Search with Price" required>
          </div>

          <div class="relative z-0 w-full mb-3 mt-3 group">
              <button type="button"
                  class="px-3 w-full py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>

          </div>
      </div>
  </form>
    <main class="">
        @yield('content')
    </main>

    <script>
        const menu = document.getElementById('menu');
        const toggle = () => menu.classList.toggle("hidden");
    </script>
</body>

</html>
