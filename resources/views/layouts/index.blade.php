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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="d-flex justify-content-between align-items-center">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Out Source</label>
        <input type="text" class="mb-3" />
        <ul class="d-flex justify-content-end">      
          <li><a href="#">Pricings</a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Register</a></li>
        </ul>
    </nav>

    <div class="container-fluid">
        @yield('content')
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>


        <script>
            $(document).ready(function () {
                $('#example').DataTable();
                $('#proposal').DataTable();
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });


        </script>
</body>

<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase text-align-left">Footer Content</h5>
          <p>Here you can use rows and columns to organize your footer content.</p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Privacy Policy</a>
            </li>
            <li>
              <a href="#!">Terms & Conditions</a>
            </li>
           
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Social Medias</h5>
  
          <ul class="list-unstyled  link-size">
            <li>
              <a href="#!"><i class="fab fa-facebook fa-2x" style="color: #3b5998;"></i></a>
              <a href="#!"><i class="fab fa-instagram ing-gradient fa-2x"></i></a>
              
            </li>           
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2022 Copyright:
      <a href="#"> outsource.com.jp</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->

</html>