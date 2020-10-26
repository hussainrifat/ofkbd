@extends('student_layout')
@section('student_content')

<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
        
            
            <div class="col-md-12">
                <div class="_14d25">
                    <div class="row">
                       
                       @foreach($course as $course)
                        <div class="col-lg-3 col-md-4">
                            <div class="fcrse_1 mb-30">
                                <a href="{{url('course_details')}}" class="fcrse_img">
                                    <img src="{{$course->course_image}}" alt="">
                                    <div class="course-overlay">
                                        <div class="crse_reviews">
                                            <i class='uil uil-star'></i>4.5
                                        </div>
                                        <span class="play_btn1"><i class="uil uil-play"></i></span>
                                        <div class="crse_timer">
                                           Duration: {{$course->course_duration}} Minutes
                                            
                                        </div>
                                        
                                    </div>
                                </a>
                                <div class="fcrse_content">
                                    <div class="eps_dots more_dropdown">
                                        <a href="{{url('art')}}"><i class='uil uil-ellipsis-v'></i></a>
                                        <div class="dropdown-content">
                                            <span><i class='uil uil-share-alt'></i>Share</span>
                                            <span><i class="uil uil-heart"></i>Save</span>
                                            <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                         </div>																										
                                    </div>
                                  
                                <a href="{{url('course_details')}}" class="crse14s">{{$course->course_name}}</a></a>
                                    <a href="{{url('art')}}" class="crse-cate">{{$course->course_category}}</a>
                                    <div class="auth1lnkprce">
                                    <p class="cr1fot">Instructor Name: <a href="">{{$course->instructor_name}}</a></p>
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

{{-- OFK MAIN BODY END --}}
@endsection