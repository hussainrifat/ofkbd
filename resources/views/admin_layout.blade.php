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
		<link href="{{asset('assets')}}/frontend\css\night-mode.css?{{time()}}" rel="stylesheet">
		
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
			<a href="{{url('admin_all_students')}}"><img src="assets\frontend\images\logo.png" style="width:80px" alt=""></a>
			<a href="student_home"><img class="logo-inverse" src="assets\frontend\images\ct_logo.svg" alt=""></a>
		</div>

		<div class="search120">
			<div class="ui search">
			  <div class="ui left icon input swdh10">
				<input class="prompt srch10" type="text" placeholder="Learn Anything From OFK For Free">
				<i class='uil uil-search-alt icon icon1'></i>
			  </div>
			</div>
		</div>
		<div class="header_right">
			<ul>
			
			
			
				
				<li class="ui dropdown">
					<a href="#" class="opts_account" title="Account">
						<img src="assets\frontend\images\user.png" alt="">
					</a>
					<div class="menu dropdown_account">
						<div class="channel_my">
							<div class="profile_link">
								<img src="assets\frontend\images\user.png" alt="">
								<div class="pd_content">
									<div class="rhte85">
										<h6>admin</h6>
										<div class="mef78" title="Verify">
											<i class='uil uil-check-circle'></i>
										</div>
									</div>
									<span>admin@mail.com</span>
								</div>							
							</div>
						</div>
						<div class="night_mode_switch__btn">
							<a href="#" id="night-mode" class="btn-night-mode">
								<i class="uil uil-moon"></i> Night mode
								<span class="btn-night-mode-switch">
									<span class="uk-switch-button"></span>
								</span>
							</a>
						</div>
						<a href="{{url('sign_out')}}" class="item channel_item">Sign Out</a>
					</div>
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
						<a href="{{url('admin_all_students')}}" class="menu--link" title="Dashboard">
							<i class='uil uil-home-alt menu--icon'></i>
							<span class="menu--label">All Student</span>
						</a>
                    </li>
                    
                    <li class="menu--item">
						<a href="{{url('admin_all_instructors')}}" class="menu--link" title="Dashboard">
							<i class="uil uil-apps menu--icon"></i>
							<span class="menu--label">All Instructors</span>
						</a>
					</li>

					<li class="menu--item">
						<a href="{{url('admin_all_courses')}}" class="menu--link" title="Courses">
							<i class='uil uil-book-alt menu--icon'></i>
							<span class="menu--label">All Courses</span>
						</a>
					</li>



					<li class="menu--item">
						<a href="{{url('admin_all_reviews')}}" class="menu--link" title="Reviews">
						  <i class='uil uil-star menu--icon'></i>
						  <span class="menu--label">All Reviews</span>
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
		@yield('admin_content')

		
	</div>
	<!-- Body End -->


	<script src="{{asset('assets')}}/frontend\js\vertical-responsive-menu.min.js?{{time()}}"></script>
	<script src="{{asset('assets')}}/frontend\js\jquery-3.3.1.min.js?{{time()}}"></script>
	<script src="{{asset('assets')}}\frontend\vendor\bootstrap\js\bootstrap.bundle.min.js?{{time()}}"></script>
	<script src="{{asset('assets')}}/frontend\vendor\OwlCarousel\owl.carousel.js?{{time()}}"></script>
	<script src="{{asset('assets')}}/frontend\vendor\semantic\semantic.min.js?{{time()}}"></script>
	<script src="{{asset('assets')}}/frontend\js\custom.js?{{time()}}"></script>
	{{-- <script src="{{asset('assets')}}/frontend\js\custom1.js?{{time()}}"></script> --}}
	<script src="{{asset('assets')}}/frontend\js\night-mode.js?{{time()}}"></script>
	<script src="resources\js\custom.js?{{time()}}"></script>
	<script src="resources\js\admin.js?{{time()}}"></script>

	
</body>

</html>