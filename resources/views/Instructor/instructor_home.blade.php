@extends('instructor_home_layout')
@section('instructor_content')
<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-xl-12 col-lg-12">
       
                <div class="section3125 mt-50">
                    <h4 class="item_title">Courses</h4>
                    <div class="la5lo1">
                        <div class="owl-carousel featured_courses owl-theme">
                            
                            {{-- course item start from here --}}
                            @foreach($course as $course)


                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <a href="course_details?course={{$course->id}}" class="fcrse_img">
                                        <img src="{{$course->course_image}}" alt="">
                                        <div class="course-overlay">
                                            <div class="badge_seller">Featured</div>
                                            <div class="crse_reviews">
                                                <i class='uil uil-star'></i>3.8
                                            </div>
                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                            <div class="crse_timer">
                                                Duration: {{$course->course_time_duration}} Minutes
                                            </div>
                                        </div>
                                    </a>
                                    <div class="fcrse_content">
                                        <div class="eps_dots more_dropdown">
                                            <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                            <div class="dropdown-content">
                                                <span><i class='uil uil-share-alt'></i>Share</span>
                                                <span><i class="uil uil-heart"></i>Save</span>
                                                <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                             </div>																										
                                        </div>
                                       
                                        <a href="course_details?course={{$course->id}}" class="crse14s">{{$course->course_name}}</a>
                                        <a href="#" class="crse-cate">{{$course->course_category}}</a>
                                        <div class="auth1lnkprce">
                                            <p class="cr1fot">By <a href="#">{{$course->instructor_name}}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
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