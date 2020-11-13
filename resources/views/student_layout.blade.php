<!DOCTYPE html>
<html lang="en">

	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="description" content="Gambolthemes">
		<meta name="author" content="Gambolthemes">		
		<title>OFK</title>
		
		<!-- Favicon Icon -->
		<link rel="icon" type="image/png" href="assets\frontend\images\logo.png">
		
		<!-- Stylesheets -->
    
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet'>
		<link href="{{asset('assets')}}/frontend\vendor\unicons-2.0.1\css\unicons.css?{{time()}}" rel='stylesheet'>
		<link href="{{asset('assets')}}/frontend\css\vertical-responsive-menu.min.css?{{time()}}" rel="stylesheet">
		<link href="{{asset('assets')}}/frontend\css\style2.css?{{time()}}" rel="stylesheet">
		<link href="{{asset('assets')}}/frontend\css\responsive.css?{{time()}}" rel="stylesheet">
		
		<!-- Vendor Stylesheets -->
		<link href="{{asset('assets')}}/frontend\vendor\fontawesome-free\css\all.min.css?{{time()}}" rel="stylesheet">
		<link href="{{asset('assets')}}/frontend\vendor\OwlCarousel\assets\owl.carousel.css?{{time()}}" rel="stylesheet">
		<link href="{{asset('assets')}}/frontend\vendor\OwlCarousel\assets\owl.theme.default.min.css?{{time()}}" rel="stylesheet">
		<link href="{{asset('assets')}}/frontend\vendor\bootstrap\css\bootstrap.min.css?{{time()}}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{asset('assets')}}/frontend\vendor\semantic\semantic.min.css?{{time()}}">	

			{{-- csrf token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
	</head>

<body>
	<!-- Header Start -->
	<header class="header clearfix">
		<button type="button" id="toggleMenu" class="toggle_menu">
		  <i class='uil uil-bars'></i>
		</button>
		<button id="collapse_menu" class="collapse_menu">
			<i class="uil uil-bars collapse_menu--icon "></i>
			<span class="collapse_menu--label"></span>
		</button>
		<div class="main_logo" id="logo">
			<a href="{{url('student_home')}}"><img src="assets\frontend\images\logo.png" style="width:80px" alt=""></a>
			<a href="student_home"><img class="logo-inverse" src="assets\frontend\images\ct_logo.svg" alt=""></a>
		</div>

		<div class="top-category">
			<div class="ui compact menu cate-dpdwn">
				<div class="ui simple dropdown item">
					<a href="#" class="option_links p-0" title="categories"><i class="uil uil-apps"></i></a>
					<div class="menu dropdown_category5">
						<a href="{{url('courses')}}" class="item channel_item">Explore New Course</a>
						<a href="{{url('course?name=art')}}" class="item channel_item">Art</a>
						<a href="{{url('course?name=craft')}}" class="item channel_item">Craft</a>
						<a href="{{url('course?name=calligraphy')}}" class="item channel_item">Calligraphy</a>
						<a href="{{url('course?name=robotics')}}" class="item channel_item">Robotics</a>
						<a href="{{url('course?name=programming')}}" class="item channel_item">Programming Language</a>
						<a href="{{url('course?name=web_design')}}" class="item channel_item">Web Design</a>
						<a href="{{url('course?name=case_solving')}}" class="item channel_item">Case Solving</a>
						<a href="{{url('course?name=rubiks_cube_solving')}}" class="item channel_item">Rubiks Cube</a>
					</div>
				</div>
			</div>
		</div>


	
	
		<div class="header_right">
			<ul>
			
				<li>
					<a href="{{url('student_donation')}}" class="upload_btn" title="Donate Now">Donate Now</a>
				</li>

				
			
				
			</ul>
		</div>
	</header>
	<!-- Header End -->




	<!-- Left Sidebar Start -->
	<nav class="vertical_nav">
		<div class="left_section menu_left" id="js-menu" >
			<div class="left_section">
				<ul>
					<li class="menu--item">
						<a href="{{url('student_home')}}" class="menu--link" title="Home">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">Home</span>
						</a>
					</li>
			
					<li class="menu--item">
						<a href="{{url('student_dashboard')}}" class="menu--link" title="Dashboard">
							<i class="uil uil-user-square menu--icon"></i>
							<span class="menu--label">Student Profile</span>
						</a>
					</li>

					{{-- <li class="menu--item">
						<a href="{{url('courses')}}" class="menu--link" title="Courses">
							<i class='uil uil-book-alt menu--icon'></i>
							<span class="menu--label">All Courses</span>
						</a>
					</li> --}}

					<li class="menu--item">
						<a href="{{url('student_courses')}}" class="menu--link" title="Courses">
							<i class='uil uil-bookmark-full menu--icon'></i>
							<span class="menu--label">My Courses</span>
						</a>
					</li>



					<li class="menu--item">
						<a href="instructor_all_reviews.html" class="menu--link" title="Reviews">
						  <i class='uil uil-star menu--icon'></i>
						  <span class="menu--label">Reviews</span>
						</a>
					</li>

					
					<li class="menu--item">
						<a href="{{url('student_donation')}}" class="menu--link">
						  <i class='uil uil-money-withdraw menu--icon'></i>
						  <span class="menu--label">Donate Now</span>
						</a>
					</li>

					<li class="menu--item">
						<a href="{{url('sign_out')}}" class="menu--link" title="Reviews">
						  <i class='uil uil-sign-out-alt menu--icon'></i>
						  <span class="menu--label">Sign Out</span>
						</a>
					</li>

				

				
				</ul>
			</div>


			<div class="left_footer">
				
				<div class="left_footer_content">
					<p>© 2020 <strong>OFK</strong>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</nav>
	<!-- Left Sidebar End -->



	<!-- OFK Main Body Start -->
	<div class="wrapper">
		@yield('student_content')


	</div>
	<!-- Body End -->


	<script src="{{asset('assets')}}/frontend\js\vertical-responsive-menu.min.js?{{time()}}"></script>
	<script src="{{asset('assets')}}/frontend\js\jquery-3.3.1.min.js?{{time()}}"></script>
	<script src="{{asset('assets')}}\frontend\vendor\bootstrap\js\bootstrap.bundle.min.js?{{time()}}"></script>
	<script src="{{asset('assets')}}/frontend\vendor\OwlCarousel\owl.carousel.js?{{time()}}"></script>
	<script src="{{asset('assets')}}/frontend\vendor\semantic\semantic.min.js?{{time()}}"></script>
	<script src="{{asset('assets')}}/frontend\js\custom.js?{{time()}}"></script>
	{{-- <script src="{{asset('assets')}}/frontend\js\custom1.js?{{time()}}"></script> --}}
	<script src="resources\js\custom.js?{{time()}}"></script>
	<script src="resources\js\student.js?{{time()}}"></script>

	

	
</body>

</html>