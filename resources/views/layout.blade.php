<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>Home - Opportunities For Kids</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  {{-- <link rel="stylesheet" href="{{asset('assets')}}/googlefont.css?{{time()}}"> --}}

  {{-- font awesome icon --}}
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100&display=swap" rel="stylesheet">
  {{-- <link rel="stylesheet" href="{{asset('assets')}}/font-awesome.min.css?{{time()}}"> --}}


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  {{-- <script src="{asset('assets')}}/js\rejistrationjquery.min.js"></script> --}}



  <!-- Vendor CSS Files -->
  <link href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="{{asset('assets')}}/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets')}}/css/style.css?{{time()}}" rel="stylesheet">


  <!--bootstrap CDN -->
  <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  {{-- <link href="{{asset('assets')}}/css\stackpathbootstrap.min.css" rel="stylesheet"> --}}


<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
{{-- <script src="{{asset('assets')}}/js\slim.min.js"></script> --}}


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
{{-- <script src="{{asset('assets')}}/js\popper.min.js"></script> --}}


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
{{-- <script src="{{asset('assets')}}/js\bootstrap3.min.js"></script> --}}


{{-- csrf token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{url('/')}}"><img src="assets/img/logo.png" alt="Logo" style="width:100px;height:1497px"></a></h1>

    
    
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <li><a href="#about">Services</a></li>
          <li><a href="#why-us">About Us</a></li>
    



        </ul>
      </nav><!-- .nav-menu -->
      <a href="{{url('register')}}" class="btn btn-warning btn-large" style="margin-left:20px">New Here? Register</a>

    </div>



    
  </header><!-- End Header -->


  <body>
    
 

  <div class="container-fluid" style="padding: 0px">
      @yield('content')

  </div>

</body>






   <!-- ======= Footer ======= -->
   <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span> Opportunities For Kids</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="#">Hussain Rifat</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>



</body>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('assets')}}/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{asset('assets')}}/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('assets')}}/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{asset('assets')}}/vendor/counterup/counterup.min.js"></script>
  <script src="{{asset('assets')}}/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{asset('assets')}}/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets')}}/js/main.js"></script>



         

 {{-- <script src="resources\js\std_reg_validate.js?{{time()}}"></script> --}}
<script src="resources\js\custom.js?{{time()}}"></script>

</html>