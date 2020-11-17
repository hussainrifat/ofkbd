@extends('instructor_home_layout')
@section('instructor_content')
<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-xl-12 col-lg-12">
       
                <div class="section3125 mt-50">
                    <h4 class="item_title">Latest Courses</h4>
                    <div class="la5lo1">
                        <div class="owl-carousel featured_courses owl-theme">
                            
                            {{-- course item start from here --}}
                            @foreach($course as $course)


                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <a href="course_details?course={{$course->id}}" class="fcrse_img">
                                        <img src="{{$course->course_image}}" alt="">
                                        <div class="course-overlay">
                                           
                                            <div class="crse_timer">
                                                Duration: {{$course->course_time_duration}} Minutes
                                            </div>
                                        </div>
                                    </a>
                                    <div class="fcrse_content">
                                       
                                       
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
          



           
        </div>
    </div>
</div>
{{-- OFK MAIN BODY END --}}
@endsection