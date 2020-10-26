@extends('instructor_home_layout')
@section('instructor_content')


<head>
    <link href="{{asset('assets')}}/frontend\css\instructor-dashboard.css?{{time()}}" rel="stylesheet">
	<link href="{{asset('assets')}}/frontend\css\instructor-responsive.css?{{time()}}" rel="stylesheet">
</head>
    <div class="sa4d25">
        <div class="container-fluid">			
            <div class="row">
                <div class="col-lg-12">	
                    <h2 class="st_title"><i class="uil uil-apps"></i> Instructor Dashboard</h2>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card_dash">
                        <div class="card_dash_left">
                            <h5>My Courses</h5>
                            <h2>$350</h2>
                            <span class="crdbg_1">New $50</span>
                        </div>
                        <div class="card_dash_right">
                            <img src="images/dashboard/achievement.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card_dash">
                        <div class="card_dash_left">
                            <h5>Total Enroll</h5>
                            <h2>1500</h2>
                            <span class="crdbg_2">New 125</span>
                        </div>
                        <div class="card_dash_right">
                            <img src="images/dashboard/graduation-cap.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card_dash">
                        <div class="card_dash_left">
                            <h5>Total Courses</h5>
                            <h2>130</h2>
                            <span class="crdbg_3">New 5</span>
                        </div>
                        <div class="card_dash_right">
                            <img src="images/dashboard/online-course.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card_dash">
                        <div class="card_dash_left">
                            <h5>Total Students</h5>
                            <h2>2650</h2>
                            <span class="crdbg_4">New 245</span>
                        </div>
                        <div class="card_dash_right">
                            <img src="images/dashboard/knowledge.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card_dash1">
                        <div class="card_dash_left1">
                            <i class="uil uil-book-alt"></i>
                            <h1>Jump Into Course Creation</h1>
                        </div>
                        <div class="card_dash_right1">
                            <button class="create_btn_dash" onclick="window.location.href = 'create_new_course.html';">Create Your Course</button>
                        </div>
                    </div>
                </div>					
            </div>
           
        </div>
    </div>
    
@endsection