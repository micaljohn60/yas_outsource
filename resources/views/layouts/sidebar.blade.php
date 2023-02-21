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

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
    <div class="grid md:grid-cols-4 lg:grid-cols-8">
        <div class="md:col-span-1 md:flex md:justify-end">
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
                        <a href="#" class="block px-4 flex justify-start border-r-4 border-primary">
                            <svg class="w-5 mr-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="text-2xl">Dashboard</span>
                            
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
                            <span class="text-2xl">Create Biz</span>
                            
                        </a>
                    </li>
                    <li class="py-3">
                        <a href="#" class="block px-4 flex justify-start border-r-4 border-white">
                            <div class="w-5 mr-2">
                                <i class="fa-regular fa-bell fa-lg pt-4"></i>
                            </div>
                            <span class="text-2xl">Notifications</span>
                            
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
            
        </div>
        @yield('dashboard_content')
    </div>

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
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
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
