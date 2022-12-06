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
  

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
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


                    }}" aria-expanded="false" class="dropdown-toggle"> <i class="fa-solid fa-chart-line mr-5 ml-5"></i>Dashboard</a>
                </li>

                

                @if (Auth::user()->type->value == 'buyer' )
                <li class="{{ (request()->is('proposals/create')) ? 'active' : '' }}">
                    <a href="{{route("proposal.create")}}"><i class="fa-solid fa-plus mr-3"></i> Create Proposal</a>
                </li>
                <li class="{{ (request()->is('proposals')) ? 'active' : '' }}">
                    <a href="{{route("proposal.index")}}" ><i class="fa-regular fa-file-lines mr-3"></i> My Proposal Lists</a>
                </li>
                @elseif(Auth::user()->type->value == 'seller')
                <li>
                    <a href="{{route('biz.create')}}"><i class="fa-solid fa-plus mr-3"></i> Create Biz</a>
                </li>
                @endif
                {{-- <li>
                    <a href="#"><i class="fa-solid fa-plus mr-3"></i> Create Biz</a>
                </li> --}}
                <li class="{{ (request()->is('notifications')) ? 'active' : '' }}">
                    <a href="{{route('notifications.index')}}"><i class="fa-regular fa-bell mr-3"></i> Notifications</a>
                </li>
                <li>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                        @csrf
                        <input type="submit" value="logout"/>
                    </form>
                    {{-- <a href="#"> <i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a> --}}
                </li> 
        </nav>
        

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    {{-- <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button> --}}
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
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
            @yield('dashboard_content')
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
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
            
            $(document).ready(function () {
                $('#datepicker').datepicker();
                $('#example').DataTable();
                $('#proposal').DataTable();
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });


        </script>
</body>

</html>