<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outsource Project</title>
    <script src="https://kit.fontawesome.com/0e4c6fcdab.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/side_bar_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index_style.css') }}" rel="stylesheet">

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

</head>

<body>
    <form action="{{ route('biz.index') }}" method="GET">
    <div class="wrapper">
        <!-- Sidebar  -->
       

            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Out Source</h3>
                </div>

                <ul class="list-unstyled components mx-3">
                    <p class="text-dark fs-3">
                        Filter By
                    </p>

                    <hr>

                    <h5 class="text-dark">
                        Business Type
                    </h5>


                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" name="name" value="Ec Shop"
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            EC Shop
                        </label>
                    </div>
                    <div class="form-check mt-2">
                        <input class="form-check-input" name="name" value="Ec Shop" type="checkbox" value=""
                            id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Hospital


       
        </label>
    </div>
    <div class="form-check mt-2">
        <input class="form-check-input" name="name" value="Ec Shop" type="checkbox" value=""
            id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Restaurant/Bar
        </label>
    </div>

    <hr>

    <h5 class="text-dark mt-4">
        Price Range
    </h5>

    <li>
       
            <div class="price-input">
                <div class="field">

                    <input type="number" class="input-min" name="min_actual_sale_price" placeholder="min">
                </div>
                <div class="separator">-</div>
                <div class="field">

                    <input type="number" class="input-max" name="max_actual_sale_price" placeholder="max">
                </div>
            </div>
            <div>
                <input type="submit" value="Filter" class="filter-btn bg-main" />
            </div>
        
    </li>
    <hr>
    <h5 class="text-dark">
        Popular Search Words
    </h5>
    <span class="badge rounded-pill primary-bg fw-semibold p-2 m-1">EC Shop</span>
    <span class="badge rounded-pill primary-bg fw-semibold p-2 m-1">Restaurant/Bar</span>
    <span class="badge rounded-pill primary-bg fw-semibold p-2 m-1">Hospital</span>

    <span class="badge rounded-pill primary-bg fw-semibold p-2 m-1">Electronic</span>
    <span class="badge rounded-pill primary-bg fw-semibold p-2 m-1">IT</span>
    <span class="badge rounded-pill primary-bg fw-semibold p-2 m-1">Animation</span>
    <li>

    </li>


    {{-- <li>
                    <a href="#"><i class="fa-solid fa-plus mr-3"></i> Create Biz</a>
                </li> --}}




    {{-- <a href="#"> <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a> --}}

    </nav>


    <!-- Page Content  -->
    <div id="content">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    OutSource
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('biz.index') }}">Find Bizs</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }}
                                </a>


                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        Go to Dashboard
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </form>
        @yield('user_content')

    </div>
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
