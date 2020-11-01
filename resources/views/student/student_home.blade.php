@extends('student_layout')
@section('student_content')
<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-xl-9 col-lg-8">
       
                <div class="section3125 mt-50">
                    <h4 class="item_title">Courses</h4>
                <a href="{{url('courses')}}" class="see150">Explore all</a>
                    <div class="la5lo1">
                        <div class="owl-carousel featured_courses owl-theme">
                            
                            {{-- course item start from here --}}
                            @foreach($course as $course)


                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <a href="course_detail?course={{$course->course_id}}" class="fcrse_img">
                                        <img src="{{$course->course_image}}" alt="">
                                        <div class="course-overlay">
                                            <div class="badge_seller">Featured</div>
                                            <div class="crse_reviews">
                                                <i class='uil uil-star'></i>3.8
                                            </div>
                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                            <div class="crse_timer">
                                                Duration: {{$course->course_duration}} Minutes
                                            </div>
                                        </div>
                                    </a>
                                    <div class="fcrse_content">
                                     
                                       
                                        <a href="course_detail?course={{$course->course_id}}" class="crse14s">{{$course->course_name}}</a>
                                        <a href="#" class="crse-cate">{{$course->course_category}}</a>
                                        <div class="auth1lnkprce">
                                            <p class="cr1fot">By <a href="#">{{$course->instructor_name}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach






                          {{-- course item end here --}}



                    
                        </div>
                    </div>
                </div>
                

            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="right_side">
                
                    <div class="fcrse_3">
                        <div class="cater_ttle">
                            <h4>Top Categories</h4>
                        </div>
                        <ul class="allcate15">
                            <li><a href="{{url('course?name=art')}}" class="ct_item"><i class='uil uil-arrow'></i>Art</a></li>
                            <li><a href="{{url('course?name=craft')}}" class="ct_item"><i class='uil uil-graph-bar'></i>Craft</a></li>
                            <li><a href="{{url('course?name=robotics')}}" class="ct_item"><i class='uil uil-monitor'></i>Robotics</a></li>
                            <li><a href="{{url('course?name=programming')}}" class="ct_item"><i class='uil uil-ruler'></i>Programming</a></li>
                
                        </ul>
                    </div>
                    <div class="strttech120">
                        <h4>Become an Instructor</h4>
                        <p>Start Your Instructor Journey With OFK.</p>
                        <button class="Get_btn" onclick="window.location.href = 'register';">Register As Instructor</button>
                    </div>
                </div>
            </div>



            <div class="col-xl-12 col-lg-12">
                <div class="section3125 mt-30">
                    <h4 class="item_title">Course Review</h4>
                    <div class="la5lo1">
                        <div class="owl-carousel Student_says owl-theme">
                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <div class="say_content">
                                        <p>"অপরচুনিটিজ ফর কিডসের কোর্স থেকে আমি অনেক কিছু শিখতে পেরেছি। ধন্যবাদ অনেক!"</p>
                                    </div>
                                    <div class="st_group">
                                        <div class="stud_img">
                                            <img src="assets\frontend\images\left-imgs/img-4.jpg" alt="">												
                                        </div>
                                        <h4>Anila Khan</h4>
                                    </div>											
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <div class="say_content">
                                        <p>"Your course is really helpfull and well organized. Thanks OFK Thanks OFK and best wishes for OFK"</p>
                                    </div>
                                    <div class="st_group">
                                        <div class="stud_img">
                                            <img src="assets\frontend\images\left-imgs/img-3.jpg" alt="">												
                                        </div>
                                        <h4>Saif Abrar</h4>
                                    </div>											
                                </div>
                            </div>

                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <div class="say_content">
                                        <p>"অপরচুনিটিজ ফর কিডসের কোর্স থেকে আমি অনেক কিছু শিখতে পেরেছি। ধন্যবাদ অনেক!"</p>
                                    </div>
                                    <div class="st_group">
                                        <div class="stud_img">
                                            <img src="assets\frontend\images\left-imgs/img-4.jpg" alt="">												
                                        </div>
                                        <h4>Sabrina Hasin</h4>
                                    </div>											
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <div class="say_content">
                                        <p>"আমি আপনাদের রোবটিক্সের পুরো কোর্সটি দেখেছি এবং কয়েকটি ছোট ছোট প্রজেক্ট বানিয়েছি। আরো কোর্স বানালে উপকৃত হবো।"</p>
                                    </div>
                                    <div class="st_group">
                                        <div class="stud_img">
                                            <img src="assets\frontend\images\left-imgs/img-1.jpg" alt="">												
                                        </div>
                                        <h4>Mahmud Zayn</h4>
                                    </div>											
                                </div>
                            </div>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- OFK MAIN BODY END --}}
@endsection