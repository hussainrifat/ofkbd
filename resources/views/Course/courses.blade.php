@extends('student_layout')
@section('student_content')

<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
        
            
            <div class="col-md-12">
                <div class="_14d25">
                    <div class="row">
                       
                       
                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('course?name=art')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/art-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                              
                                   
                                <a href="{{url('course?name=art')}}" class="coursefont">Art</a>                                   
                                </div>
                            </div>											
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('course?name=craft')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/craft-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                
                                   
                                <a href="{{url('course?name=craft')}}" class="coursefont">Craft</a>                                   
                                </div>
                            </div>											
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('course?name=calligraphy')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/calligraphy-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                    
                                   
                                <a href="{{url('course?name=calligraphy')}}" class="coursefont">Calligraphy</a>                                   
                                </div>
                            </div>											
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('course?name=robotics')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/robotics-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                 
                                   
                                <a href="{{url('course?name=robotics')}}" class="coursefont">Robotics</a>                                   
                                </div>
                            </div>											
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('course?name=programming')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/programming-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                  
                                <a href="{{url('course?name=programming')}}" class="coursefont">Programming Language</a>                                   
                                </div>
                            </div>											
                        </div>


                 

                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('course?name=web_design')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/web-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                   
                                <a href="{{url('course?name=web_design')}}" class="coursefont">Web Design </a>                                   
                                </div>
                            </div>											
                        </div>


                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('course?name=case_solving')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/case-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                   
                                <a href="{{url('course?name=case_solving')}}" class="coursefont">Case Solving </a>                                   
                                </div>
                            </div>											
                        </div>

                        <div class="col-lg-3 col-md-4">
                            <div class="courseblock mb-30">
                                <a href="{{url('course?name=rubiks_cube_solving')}}" class="fcrse_img">
                                    <img src="assets\frontend\images\courses/rubi-icon.png" alt="">
                                 
                                </a>
                                <div class="course_content">
                                   
                                <a href="{{url('course?name=rubiks_cube_solving')}}" class="coursefont">Rubik's Cube </a>                                   
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