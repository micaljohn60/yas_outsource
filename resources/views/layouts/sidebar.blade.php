<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outsource Project</title>
    <script src="https://kit.fontawesome.com/0e4c6fcdab.js" crossorigin="anonymous"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/side_bar_style.css') }}" rel="stylesheet"> --}}

    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href={{env("APP_ENV") != 'production' ? asset('css/app.css')  : "https://64872825b9783b3819d4d787--spontaneous-cendol-4f8351.netlify.app/css/app.css" }} rel="stylesheet">


    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <style>
        .dropzone {
            background: #e3e6ff;
            border-radius: 13px;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
            border: 2px dotted #1833FF;
            margin-top: 50px;
        }
    </style>

</head>

<body>
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">

            <ul>
                <li class="w-full">
                    <h1 class="text-6xl text-gray-700 text-center my-10 font-bold">Best Biz</h1>
                </li>
            </ul>

            <ul class="space-y-2">
                <li>
                    <a href="{{ Auth::user()->type->value == 'buyer' ? route('buyer.dashboard') : route('seller.dashboard') }}"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('seller/dashboard') || request()->is('buyer/dashboard') ? 'bg-gray-200' : '' }}">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>


                @if (Auth::user()->type->value == 'buyer')
                    <li>
                        <a href="{{ route('proposal.create') }}"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('proposals/create') ? 'bg-gray-200' : '' }}">
                            {{-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg> --}}
                            <svg fill="currentColor"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <path
                                    d="M23.93,2H8.07a2.8,2.8,0,0,0-2.8,2.8V27.2A2.8,2.8,0,0,0,8.07,30H23.93a2.8,2.8,0,0,0,2.8-2.8V4.8A2.8,2.8,0,0,0,23.93,2Zm.94,25.2a.94.94,0,0,1-.94.93H8.07a.94.94,0,0,1-.94-.93V4.8a.94.94,0,0,1,.94-.93H23.93a.94.94,0,0,1,.94.93Z" />
                                <path
                                    d="M21.44,15.07H16.93V10.56a.93.93,0,1,0-1.86,0v4.51H10.56a.93.93,0,1,0,0,1.86h4.51v4.51a.93.93,0,1,0,1.86,0V16.93h4.51a.93.93,0,1,0,0-1.86Z" />
                            </svg>
                            {{-- <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.146 3.248a2 2 0 0 1 3.708 0A7.003 7.003 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752zM10.586 19a1.5 1.5 0 0 0 2.829 0h-2.83zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5z" fill="#0D0D0D"/></svg> --}}
                            <span class="flex-1 ml-3 whitespace-nowrap">Create Proposal</span>

                        </a>
                    </li>

                    <li>
                        <a href="{{ route('proposal.index') }}"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('proposals') ? 'bg-gray-200' : '' }}">
                            {{-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg> --}}
                            {{-- <svg fill="currentColor"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <path
                                    d="M23.93,2H8.07a2.8,2.8,0,0,0-2.8,2.8V27.2A2.8,2.8,0,0,0,8.07,30H23.93a2.8,2.8,0,0,0,2.8-2.8V4.8A2.8,2.8,0,0,0,23.93,2Zm.94,25.2a.94.94,0,0,1-.94.93H8.07a.94.94,0,0,1-.94-.93V4.8a.94.94,0,0,1,.94-.93H23.93a.94.94,0,0,1,.94.93Z" />
                                <path
                                    d="M21.44,15.07H16.93V10.56a.93.93,0,1,0-1.86,0v4.51H10.56a.93.93,0,1,0,0,1.86h4.51v4.51a.93.93,0,1,0,1.86,0V16.93h4.51a.93.93,0,1,0,0-1.86Z" />
                            </svg> --}}

                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32"
                                enable-background="new 0 0 32 32" xml:space="preserve">
                                <line fill="currentColor" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                    x1="12" y1="16" x2="27" y2="16" />
                                <rect x="5" y="14" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-miterlimit="10" width="4" height="4" />
                                <line fill="currentColor" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                    x1="12" y1="8" x2="27" y2="8" />
                                <rect x="5" y="6" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-miterlimit="10" width="4" height="4" />
                                <line fill="currentColor" stroke="currentColor" stroke-width="2" stroke-miterlimit="10"
                                    x1="12" y1="24" x2="27" y2="24" />
                                <rect x="5" y="22" fill="currentColor" stroke="currentColor"
                                    stroke-width="2" stroke-miterlimit="10" width="4" height="4" />
                            </svg>
                            {{-- <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.146 3.248a2 2 0 0 1 3.708 0A7.003 7.003 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752zM10.586 19a1.5 1.5 0 0 0 2.829 0h-2.83zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5z" fill="#0D0D0D"/></svg> --}}
                            <span class="flex-1 ml-3 whitespace-nowrap">Proposals</span>

                        </a>
                    </li>
                @elseif(Auth::user()->type->value == 'seller')
                    <li>
                        <a href="{{ route('biz.create') }}"
                            class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('bizs/create') ? 'bg-gray-200' : '' }}">
                            {{-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg> --}}
                            <svg fill="currentColor"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                viewBox="0 0 32 32" data-name="Layer 1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <path
                                    d="M23.93,2H8.07a2.8,2.8,0,0,0-2.8,2.8V27.2A2.8,2.8,0,0,0,8.07,30H23.93a2.8,2.8,0,0,0,2.8-2.8V4.8A2.8,2.8,0,0,0,23.93,2Zm.94,25.2a.94.94,0,0,1-.94.93H8.07a.94.94,0,0,1-.94-.93V4.8a.94.94,0,0,1,.94-.93H23.93a.94.94,0,0,1,.94.93Z" />
                                <path
                                    d="M21.44,15.07H16.93V10.56a.93.93,0,1,0-1.86,0v4.51H10.56a.93.93,0,1,0,0,1.86h4.51v4.51a.93.93,0,1,0,1.86,0V16.93h4.51a.93.93,0,1,0,0-1.86Z" />
                            </svg>
                            {{-- <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.146 3.248a2 2 0 0 1 3.708 0A7.003 7.003 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752zM10.586 19a1.5 1.5 0 0 0 2.829 0h-2.83zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5z" fill="#0D0D0D"/></svg> --}}
                            <span class="flex-1 ml-3 whitespace-nowrap">Create Biz</span>

                        </a>
                    </li>
                @endif


                <li>
                    <a href="{{ route('notifications.index') }}"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 {{ request()->is('notifications') ? 'bg-gray-200' : '' }}">
                        <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.146 3.248a2 2 0 0 1 3.708 0A7.003 7.003 0 0 1 19 10v4.697l1.832 2.748A1 1 0 0 1 20 19h-4.535a3.501 3.501 0 0 1-6.93 0H4a1 1 0 0 1-.832-1.555L5 14.697V10c0-3.224 2.18-5.94 5.146-6.752zM10.586 19a1.5 1.5 0 0 0 2.829 0h-2.83zM12 5a5 5 0 0 0-5 5v5a1 1 0 0 1-.168.555L5.869 17H18.13l-.963-1.445A1 1 0 0 1 17 15v-5a5 5 0 0 0-5-5z"
                                fill="currentColor" />
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap">Notifications</span>

                    </a>
                </li>




                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a href=""
                            class="flex ml-1 items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                            <svg aria-hidden="true"
                                class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <button class="ml-3 whitespace-nowrap">
                                Logout
                            </button>
                            {{-- <span class="flex-1 ml-3 whitespace-nowrap">Log Out</span> --}}
                        </a>
                    </form>
                </li>

            </ul>
        </div>
    </aside>
    <div class="grid md:grid-cols-4 lg:grid-cols-8">
        {{-- <div class="md:col-span-1 md:flex md:justify-end">
            <nav class="text-left">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase p-4 border-b border-gray-100">Best Biz</h1>
                    <div class="px-4 cursor-pointer md:hidden" id="burger">
                        <svg class="w-6 h-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                </div>
                <ul class="text-sm mt-6 hidden md:block" id="menu">
                    <li class="text-gray-700 font-bold py-3">
                        <a href="
                        
                        {{

                            Auth::user()->type->value == 'buyer' ?
                            route("buyer.dashboard")
                            :
                            route("seller.dashboard")
        
        
                            }}
                        
                        
                        " class="block px-4 flex justify-start border-r-4 border-primary">
                            <svg class="w-5 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="text-xl">Dashboard</span>
                            
                        </a>
                    </li>



                    @if (Auth::user()->type->value == 'buyer')
                    <li class="py-3">
                        <a href="#" class="block px-4 flex justify-start border-r-4 border-white">
                            <svg class="w-5 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                            <span class="text-xl">Create Proposal</span>
                            
                        </a>
                    </li>
                    <li class="py-3">
                        <a href="#" class="block px-4 flex justify-start border-r-4 border-white">
                            <svg class="w-5 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                </path>
                            </svg>
                            <span class="text-xl">My Proposal Lists</span>
                            
                        </a>
                    </li>
                @elseif(Auth::user()->type->value == 'seller')
                <li class="py-3">
                    <a href="{{route('biz.create')}}" class="block px-4 flex justify-start border-r-4 border-white">
                        <svg class="w-5 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                        <span class="text-xl">Create Biz</span>
                        
                    </a>
                </li>
                @endif



                    
                    <li class="py-3">
                        <a href="#" class="block px-4 flex justify-start border-r-4 border-white">
                            <div class="w-5 mr-2">
                                <i class="fa-regular fa-bell fa-lg pt-4"></i>
                            </div>
                            <span class="text-xl">Notifications</span>
                            
                        </a>
                    </li>
                    <li class="py-3">
                        <a href="#" class="block px-4 flex justify-start border-r-4 border-white">
                            <div class="w-5 mr-2">
                                <i class="fa-solid fa-arrow-right-from-bracket fa-lg pt-4"></i>
                            </div>
                            <span class="text-2xl">Logout</span>
                            
                        </a>
                    </li>
                </ul>
            </nav>
            
        </div> --}}


    </div>
    @yield('dashboard_content')

    {{-- <div class="wrapper"> --}}

    <!-- Sidebar  -->
    {{-- <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Out Source</h3>
            </div>

            <ul class="list-unstyled components">

                <li class="{{ (request()->is('buyer/dashboard')) ? 'active' : '' }}">
                    <a href="{{

                    Auth::user()->type->value == 'buyer' ?
                    route("buyer.dashboard")
                    :
                    route("seller.dashboard")


                    }}" aria-expanded="false" class="dropdown-toggle"> <i class="fa-solid fa-chart-line mx-3 ml-5"></i>Dashboard</a>
                </li>

                

                @if (Auth::user()->type->value == 'buyer')
                <li class="{{ (request()->is('proposals/create')) ? 'active' : '' }}">
                    <a href="{{route("proposal.create")}}"><i class="fa-solid fa-plus mx-3"></i> Create Proposal</a>
                </li>
                <li class="{{ (request()->is('proposals')) ? 'active' : '' }}">
                    <a href="{{route("proposal.index")}}" ><i class="fa-regular fa-file-lines mx-3"></i> My Proposal Lists</a>
                </li>
                @elseif(Auth::user()->type->value == 'seller')
                <li>
                    <a href="{{route('biz.create')}}"><i class="fa-solid fa-plus mx-3"></i> Create Biz</a>
                </li>
                @endif
                
                <li class="{{ (request()->is('notifications')) ? 'active' : '' }}">
                    <a href="{{route('notifications.index')}}"><i class="fa-regular fa-bell mx-3"></i> Notifications</a>
                </li>
              
                    
                    <form action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <button class="logout-button">
                            <i class="fa-solid fa-right-from-bracket mx-3"></i>
                            Logout
                        </button>
                    </form>
                    
                
        </nav> --}}


    <!-- Page Content  -->
    {{-- <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="#">Language</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">{{ Auth::user()->first_name }}</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
           

        </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script> --}}
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>


    {{-- <script>
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block', 'image'],
            

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']                                         // remove formatting button
            ];
        var editor = new Quill('#editor', {
          modules: { toolbar: toolbarOptions },
          theme: 'snow',
        });
        var delta = editor.getContents();
        console.log(delta)
      </script> --}}
    <script>
        $(document).ready(function() {
            $('#datepicker').datepicker();
            $('#example').DataTable();
            $('#proposal').DataTable();
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


</body>

</html>
