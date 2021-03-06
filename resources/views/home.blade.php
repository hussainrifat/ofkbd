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


  {{-- font awesome icon --}}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?{{time()}}" rel="stylesheet">


  <!--bootstrap CDN -->
  <link rel="stylesheet" href="https://cdnjs.com/libraries/ekko-lightbox" >

  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>

</head>

<style>
  .row {
  margin: 15px;
}
</style>

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
     
          <li><a href="{{url('/login')}}">Sign In</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{url('register')}}" class="btn btn-warning btn-large" style="margin-left:20px">New Here? Register</a>
      <a href="{{url('visitor_donation')}}" class="btn btn-warning btn-large" style="margin-left:20px">Donate Now</a>

    </div>
  </header><!-- End Header -->

  <section class="bgimage" style="background-image: url('{{ asset('assets/img/slider-bg-1.png')}}'">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h5 style="text-align: center">Opportunities For Kids</h5>
          <p style="text-align: center; color:white; font-size:25px; font-weight:300">A Free Online Learning Platform For Kids & Teenagers in Bangladesh</p>
        <p style="text-align: center; color:#753475"><a href="{{url('student_home')}}" class="btn btn-warning btn-large">Start Learning From Here</a></p>
        </div>
      </div>
    </div>
  </section>







  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Our Activity</h2>
          <p style="color: #063e81">What Do We Provide?</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about-ofk.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
           
            <ul>
              
              <li><i class="icofont-check-circled"> Online Video Tutorials</i> 
              <li><i class="icofont-check-circled"> Free Online Training Sessions</i> 
              <li><i class="icofont-check-circled"> Free Offline Sessions At Schools</i> 
              <li><i class="icofont-check-circled"> Bi-Weekly Sessions At Our Learning Centers</i>
              <li><i class="icofont-check-circled"> Online Certification</i>
              <li><i class="icofont-check-circled"> Inspiring Training Session</i>

            </ul>
            <a href="{{url('student_home')}}" class="learn-more-btn">Join Now</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">
          

          <div class="col-lg-3 col-6 text-center">
            <img src="assets\img\tutorial.png" style="height: 80px" alt="Tutorial">
            <span data-toggle="counter-up">{{$total_course}}</span>
            <p>Course</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <img src="assets\img\instructor.png" style="height: 80px" alt="Instructor">
            <span data-toggle="counter-up">{{$total_instructor}}</span>
            <p>Instructors</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <img src="assets\img\blog.png" style="height: 80px" alt="Blog">
            <span data-toggle="counter-up">{{$total_blog}}</span>
            <p>Blogs</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <img src="assets\img\students.png" style="height: 80px" alt="Student">
            <span data-toggle="counter-up">{{$total_student}}</span>
            <p>Online Students</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    
    <div class="container">
      <div class="row">
        <a href="field_work\bg1.jpeg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="field_work\bg1.jpeg" class="img-fluid rounded">
        </a>
        <a href="field_work\bg2.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="field_work\bg2.jpg" class="img-fluid rounded">
        </a>
        <a href="field_work\bg3.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="field_work\bg3.jpg" class="img-fluid rounded">
        </a>
      </div>
      <div class="row">
        <a href="field_work\bg4.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="field_work\bg4.jpg" class="img-fluid rounded">
        </a>
        <a href="field_work\bg5.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="field_work\bg5.jpg" class="img-fluid rounded">
        </a>
        <a href="field_work\bg6.jpg" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
          <img src="field_work\bg6.jpg" class="img-fluid rounded">
        </a>
      </div>
    </div>
    

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose OFK?</h3>
              <p style="font-size: 15px; font-weight:300">Opportunities for Kids is trying to create a digital classroom for children and teens with the tagline of “শিখো, শেখাও এবং দেখাও তোমার প্রতিভা সারা বিশ্বকে” where they can learn what they want to learn outside of the traditional classroom syllabus & showcase their talents by exploring their creativity. There are Art videos for those who want to learn Art, there are Craft videos for those who want to learn craft with 12 more different skills. We use one more tagline in addition to this one, “When You Do Something With Passion, Age Is No Bar”.

              </p>
              
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fa fa-video-camera" style="color: #063e81"></i>
                    <h4 style="color: #063e81">Online Interective Video Tutorial</h4>
                    <p>	Creating online video courses on 12 different skills, all of which have 10 to 20 or more videos and are divided into different sections along with quizzes. Anyone can complete these courses according to age. We have more than 100 videos so far.</p>
                  </div>
                </div>

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fa fa-comments" style="color: #063e81"></i>
                    <h4 style="color: #063e81">Online & Offline Workshop</h4>
                    <p>	Organizing various online & offline competitions & provides certificates as recognition of excellency in different categories which motivate our audiences to do more creative works. 

                    </p>
                  </div>
                </div>

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="fa fa-superpowers" style="color: #063e81"></i>
                    <h4 style="color: #063e81">Super Kids Program</h4>
                    <p>	Providing 3 months periodical training based on particular skill to the top 10 students under Super Kids program </p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section>
    <!-- End Why Us Section -->

  

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
              <i class="fa fa-paint-brush" style="color: #ffbb2c;"></i>
              <h3>Art</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="fa fa-scissors" style="color: #5578ff;"></i>
              <h3>Craft</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3>Calligraphy</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="fa fa-code" style="color: #e361ff;"></i>
              <h3>Programming</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="fa fa-linode" style="color: #47aeff;"></i>
              <h3>Robotics</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="fa fa-cube" style="color: #ffa76e;"></i>
              <h3>Rubiks Cube Solving</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="fa fa-lightbulb-o" style="color: #11dbcf;"></i>
              <h3>Critical Thinking</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="fa fa-html5" style="color: #4233ff;"></i>
              <h3>Web Design</h3>
            </div>
          </div>
          
          
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->



     <!-- ======= About Section ======= -->
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Creative Bengali</h2>
          <p style="color: #063e81">What Do We Provide?</p>
        </div>

        <div class="row">
          <div class="col-lg-6  order-lg-1">
            <img src="assets/img/creative-logo.png" class="img-fluid" style="width:300px;margin-left:40px" alt="">
          </div>
          <div class="col-lg-6  order-lg-2 content">
           
            <ul>
              
              <li><i class="icofont-check-circled"> Skills Sharing And Showcasing Online Platform  </i> 
              <li><i class="icofont-check-circled"> Group Members Can Share Their Art,Craft Works </i> 
              <li><i class="icofont-check-circled"> Group Member Can Attend Any Competition For Free  </i> 
              <li><i class="icofont-check-circled"> Bi-Weekly Sessions At Our Learning Centers</i>
              <li><i class="icofont-check-circled"> You Can Share Your Talented Work With Others     </i>

            </ul>
            <a href="{{url('student_home')}}" class="learn-more-btn">Join Now</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Courses</h2>
          <p style="color: #063e81">Our Courses</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          @foreach($course as $course)

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{$course->course_image}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{$course->course_category}}</h4>
                  <p class="price">Free</p>
                </div>

                <h3><a href="course_detail?course={{$course->course_id}}">{{$course->course_name}}</a></h3>
            
              </div>
            </div>
          </div> 
          <!-- End Course Item-->
          @endforeach

        </div>



      </div>
    </section><!-- End Popular Courses Section -->



    


  </main><!-- End #main -->

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
        <a href="https://www.facebook.com/OfkbdOfficial/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/Ofkbd/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/opportunitiesforkids" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>



</body>

<script>
  $(document).on("click", '[data-toggle="lightbox"]', function(event) {
event.preventDefault();
$(this).ekkoLightbox();
});
</script>

</html>