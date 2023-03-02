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
            <div class="flex items-center flex-shrink-0 text-white mr-6">
              <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
              <a href="/">
                <span class="font-semibold text-xl tracking-tight">Outsource</span>
              </a>
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
                      <a href="{{ route('pricinglists') }}" class="inline-block text-lg font-semibold px-4 py-2 leading-none text-white  border-white hover:border-transparen hover:text-gray-600 mt-4 lg:mt-0">Register</a>
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
    <main class="">
        @yield('content')
    </main>

    <script>
        const menu = document.getElementById('menu');
        const toggle = () => menu.classList.toggle("hidden");
    </script>
</body>

</html>
