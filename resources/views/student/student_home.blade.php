@extends('student_layout')
@section('student_content')
<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">


            <div class="col-xl-12 col-lg-12">
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
                                            <div class="badge_seller">Newest Course</div>
                                           
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



            <div class="col-xl-12 col-lg-12">
                <div class="section3125 mt-50">
                    <h4 class="item_title">Blog</h4>
                <a href="{{url('student_blog_view')}}" class="see150">Explore all</a>
                    <div class="la5lo1">
                        <div class="owl-carousel featured_courses owl-theme">
                            @foreach($blog as $blog)

                            {{-- course item start from here --}}

                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <a href="" class="fcrse_img">
                                        <img src="{{$blog->blog_image}}" alt="">
                                       
                                    </a>
                                    <div class="fcrse_content">
                                     
                                       
                                        <a href="student_blog_details?blog={{$blog->blog_id}}" class="crse14s">{{$blog->blog_title}}</a>
                                        <a href="student_blog_details?blog={{$blog->blog_id}}" class="crse-cate">{{$blog->blog_categories}}</a>
                                        
                                    </div>
                                </div>
                            </div>
                          {{-- course item end here --}}
                          @endforeach
                        </div>
                    </div>
                </div>
            </div>


            



            <div class="col-xl-12 col-lg-12">
                <div class="right_side">
                
             
                    <div class="strttech120">
                        <h4>Become an Instructor</h4>
                        <p>Start Your Instructor Journey With OFK.</p>
                        <button class="Get_btn" onclick="window.location.href = 'register';">Register As Instructor</button>
                    </div>
                </div>
            </div>



            
        </div>
    </div>
</div>
{{-- OFK MAIN BODY END --}}
@endsection