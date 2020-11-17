@extends('student_layout')
@section('student_content')


<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
        
            
            <div class="col-md-12">
                <div class="_14d25">
                    <div class="row">
                       
                       @foreach($courses as $course)
                        <div class="col-lg-3 col-md-4">
                            <div class="fcrse_1 mb-30">
                            <a href="course_detail?course={{$course->course_id}}"  class="fcrse_img">
                                    <img src="{{$course->course_image}}" alt="">
                                    <div class="course-overlay">
                                        
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
                                            <span  data-toggle="modal" data-target="#reporttoadmin" > <i class="uil uil-windsock"></i>Feedback To Admin</span>
                                         </div>																										
                                    </div>
                                  
                                <a href="course_detail?course={{$course->course_id}}"  class="crse14s">{{$course->course_name}}</a></a>
                                    <a href="" class="crse-cate">{{$course->course_category}}</a>
                                    <div class="auth1lnkprce">
                                    <p class="cr1fot">Instructor Name: <a href="#">{{$course->instructor_name}}</a></p>
                                    </div>
                                </div>
                            </div>	
                            
                            <div class="modal" id="reporttoadmin">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                            
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Help us understand what's happening with this Course?</h4>
                                    </span>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                            
                                    <!-- Modal body -->
                                    <div class="modal-body">
                            
                                        
                                        <div class="textarea_dt">															
                                            <div class="ui form swdh339">
                                                <div class="field">
                            
                                                    <textarea rows="5" name="description" id="report_description" placeholder=" How would you describe the problem? "></textarea>
                                                </div>
                                            </div>										
                                        </div>
                            
                                    </div>
                            
                            
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" onclick="SendReportToAdmin({{$course->course_id}})"  >Give Your Feedback</button>
                                    </div>
                            
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