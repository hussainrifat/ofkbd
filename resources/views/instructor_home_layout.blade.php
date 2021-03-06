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
			<a href="{{url('instructor_home')}}"><img src="assets\frontend\images\logo.png" style="width:80px" alt=""></a>
			<a href="instructor_home"><img class="logo-inverse" src="assets\frontend\images\ct_logo.svg" alt=""></a>
		</div>

		

		<div class="header_right">
			<ul>

				<li>
					<a href="{{url('instructor_blog_view')}}" class="upload_btn" title="">Explore Blog</a>
				</li>
			
				{{-- <li>
					<a href="{{url('instructor_donation')}}" class="upload_btn" title="Donate Now">Donate Now</a>
				</li> --}}

				
			
				
				{{-- <li class="ui dropdown">
					<a href="#" class="opts_account" title="Account">
						<img src="assets\frontend\images\user.png" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="assets\frontend\images\user.png" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6>{{Session::get('user_name')}}</h6>
										<div class="mef78" title="Verify">
											<i class='uil uil-check-circle'></i>
										</div>
									</div>
									<span>{{Session::get('user_email')}}</span>
								</div>							
							</div>
							<a href="my_instructor_profile_view.html" class="dp_link_12">View Instructor Profile</a>						
						</div>
					
						<a href="{{url('sign_out')}}" class="item channel_item">Sign Out</a>
					</div>
				</li> --}}
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
						<a href="{{url('instructor_home')}}" class="menu--link" title="Home">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">Home</span>
						</a>
					</li>
			
					<li class="menu--item">
						<a href="{{url('instructor_dahsboard')}}" class="menu--link" title="Dashboard">
							<i class="uil uil-apps menu--icon"></i>
							<span class="menu--label">Instructor Profile</span>
						</a>
					</li>

					<li class="menu--item">
						<a href="{{url('instructor_courses')}}" class="menu--link" title="Courses">
							<i class='uil uil-book-alt menu--icon'></i>
							<span class="menu--label">My Courses</span>
						</a>
					</li>

					<li class="menu--item">
						<a href="{{url('instructor_blog')}}" class="menu--link" title="Courses">
							<i class='uil uil-book-alt menu--icon'></i>
							<span class="menu--label">My Blog</span>
						</a>
					</li>

					<li class="menu--item">
						<a href="{{url('create_course')}}" class="menu--link" title="Create Course">
							<i class='uil uil-plus-circle menu--icon'></i>
							<span class="menu--label">Create New Course</span>
						</a>
					</li>

					<li class="menu--item">
						<a href="{{url('create_post')}}" class="menu--link" title="Create Course">
							<i class='uil uil-plus-circle menu--icon'></i>
							<span class="menu--label">Add New Blog Post</span>
						</a>
					</li>

			
			

					{{-- <li class="menu--item">
						<a href="{{url('instructor_donation')}}" class="menu--link" title="Reviews">
						  <i class='uil uil-money-withdraw menu--icon'></i>
						  <span class="menu--label">Donate Now</span>
						</a>
					</li> --}}

					<li class="menu--item">
						<a href="{{url('sign_out')}}" class="menu--link" title="Reviews">
						  <i class='uil uil-sign-out-alt menu--icon'></i>
						  <span class="menu--label">Sign Out</span>
						</a>
					</li>

				</ul>
			
			</div>


		


			<div class="left_section pt-2">
				<ul>
					
				
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
		@yield('instructor_content')

		{{-- <footer class="footer mt-30">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-12">
						<div class="footer_bottm">
							<div class="row">
								<div class="col-md-6">
									<ul class="fotb_left">
										<li>
											<a href="{{url('instructor_home')}}">
												<div class="footer_logo">
													<img src="assets\frontend\images\logo1.svg" alt="">
												</div>
											</a>
										</li>
										<li>
											<p>© 2020 <strong>OFK</strong>. All Rights Reserved.</p>
										</li>
									</ul>
								</div>
								<div class="col-md-6">
									<div class="edu_social_links">
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-google-plus-g"></i></a>
										<a href="#"><i class="fab fa-linkedin-in"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
										<a href="#"><i class="fab fa-youtube"></i></a>
										<a href="#"><i class="fab fa-pinterest-p"></i></a>
									</div>
								</div>		
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer> --}}

		

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
	<script src="resources\js\instructor.js?{{time()}}"></script>



	
</body>

</html>