@extends('instructor_home_layout')
@section('instructor_content')

<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
        
            
            <div class="col-md-12">
                <div class="_14d25">
                    <div class="row">
                       
                       
                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('art')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/art-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                              
                                   
                                <a href="{{url('art')}}" class="coursefont">Art</a>                                   
                                </div>
                            </div>											
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('craft')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/craft-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                
                                   
                                <a href="{{url('craft')}}" class="coursefont">Craft</a>                                   
                                </div>
                            </div>											
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('calligraphy')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/calligraphy-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                    
                                   
                                <a href="{{url('calligraphy')}}" class="coursefont">Calligraphy</a>                                   
                                </div>
                            </div>											
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="course_detail_view.html" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/robotics-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                 
                                   
                                <a href="{{url('robotics')}}" class="coursefont">Robotics</a>                                   
                                </div>
                            </div>											
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="course_detail_view.html" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/programming-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                  
                                <a href="{{url('web')}}" class="coursefont">Programming Language</a>                                   
                                </div>
                            </div>											
                        </div>


                 

                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="course_detail_view.html" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/web-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                   
                                <a href="{{url('web')}}" class="coursefont">Web Design </a>                                   
                                </div>
                            </div>											
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="course_detail_view.html" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/case-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                   
                                <a href="{{url('case')}}" class="coursefont">Case Solving </a>                                   
                                </div>
                            </div>											
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="course_detail_view.html" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/rubi-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                   
                                <a href="{{url('rubi')}}" class="coursefont">Rubik's Cube </a>                                   
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