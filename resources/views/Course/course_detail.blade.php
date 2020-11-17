@extends('student_layout')
@section('student_content')

<style>
    
.leave-rating {
	height: 24px;
	float: left;
	position: relative
}

.leave-rating:hover input[type=radio]:checked~label {
	color: #dadada
}

.leave-rating input[type=radio] {
	display: inline-block;
	width: 1px;
	position: absolute;
	opacity: 0;
	pointer-events: none;
	height: 100%;
	margin-left: 50%;
	left: 0;
	top: 0;
	transform: translateX(-50%)
}

.leave-rating input[type=radio]:checked~label {
	color: #ffc600
}

.leave-rating label {
	font-size: 24px;
	float: right;
	letter-spacing: 0;
	color: #dadada;
	cursor: pointer;
	transition: .3s
}

.leave-rating label:hover,
.leave-rating label:hover~label {
	color: #ffc600!important
}

.leave-rating-title {
	display: block;
	margin: 0 0 4px
}

.welcome-text .leave-rating-container {
	text-align: center;
	margin: 0 auto;
	margin-top: 15px;
	left: 50%;
	width: 100%;
	display: block
}

.welcome-text .leave-rating {
	position: relative;
	left: 50%;
	transform: translateX(-50%) scale(1.2)
}
</style>

<div class="_215b01">
    {{-- @foreach($course_details as $course) --}}

    <div class="container-fluid">			
        <div class="row">
            <div class="col-lg-12">
                <div class="section3125">							
                    <div class="row justify-content-center">						
                        <div class="col-xl-4 col-lg-5 col-md-6">						
                            <div class="preview_video">						
                                <a href="{{$course_details->course_image}}" class="fcrse_img" data-toggle="modal" data-target="#videoModal">
                                    <img onclick="window.location.href='course_view?id={{$course_details->id}}'" src="{{$course_details->course_image}}" alt="">
                                    <div class="course-overlay">
                                        <span onclick="window.location.href='course_view?id={{$course_details->id}}'" class="_215b02">Preview this course</span>
                                    </div>
                                </a>
                            </div>
                         
                        </div>
                        <div class="col-xl-8 col-lg-7 col-md-6">
                            <div class="_215b03">
                                <h2>{{$course_details->course_name}}</h2>

                                </span>
                            </div>
                            <div class="_215b05">
                                <div class="crse_reviews mr-2">
                                    <i class="uil uil-star"></i> {{round($average_rating,1)}}
                                </div>
                                ({{$total_rating}} ratings)

                            </div>
                          
                            
                            <div class="_215b05">										
                                Last updated {{$course_details->updated_at}}
                            </div>
                            <ul class="_215b31">										
                                  @if($enroll ==0 )
                                <button  onclick="StudentCourseEnrollment({{$course_details->id}})" class="subscribe-btn">Enroll Now</button>
                                    @else
                                    <button  onclick="window.location.href='course_view?id={{$course_details->id}}'" class="subscribe-btn">Course View</button>
                                    @endif
                      
                                                       </ul>

                                                       
                     
                        </div>							
                    </div>							
                </div>							
            </div>															
        </div>
    </div>
    {{-- @endforeach --}}
</div>
<div class="_215b15 _byt1458">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="user_dt5">
                    <div class="user_dt_left">
                        <div class="live_user_dt">
                           
                            <div class="user_cntnt">
                                <a href="#" class="_df7852"> Instructor Name: {{$instructor_name}}</a>
                            </div>
                        </div>
                    </div>
      
                </div>
                <div class="course_tabs">
                    <nav>
                        <div class="nav nav-tabs tab_crse justify-content-center" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-selected="true">About</a>
                            <a class="nav-item nav-link" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-selected="false">Courses Content</a>
                            <a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-selected="false">Reviews</a>
                        </div>
                    </nav>						
                </div>
            </div>
        </div>
    </div>
</div>
<div class="_215b17">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="course_tab_content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-about" role="tabpanel">
                            <div class="_htg451">
                                <div class="_htg452">
                                    <h3>About Course</h3>
                                    
                                <span class="_5f7g11"> {{$course_details->course_description}}</span>
                                   
                                </div>
                        
                            
                    							
                            </div>							
                        </div>
                        <div class="tab-pane fade" id="nav-courses" role="tabpanel">
                            <div class="crse_content">
                                <div class="col-lg-12 col-md-12">
                                    <div class="table-responsive mt-50 mb-0">
                                        <table class="table ucp-table">
                                            <thead class="thead-s">
                                                <tr>
                                                    <th class="cell-ta">Video Title</th>
                                                    <th class="text-center" scope="col">Video Time Duration</th>
                                                    <th class="text-center" scope="col">Video Description</th>
                                               

                                                </tr>
                                            </thead>
                                            <tbody>
                                                    
                                                @foreach ($videoes as $video)

                                                <tr>
                                                        
                                                    <td class="cell-ta">{{$video->video_title}}</td>
                                                    <td class="text-center">{{$video->video_time_duration}} Minutes</td>
                                                    <td class="text-center">{{$video->video_description}}</td>
                                               
                                                  

                                                </tr> 
                                                @endforeach

                                               
                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-reviews" role="tabpanel">
                            <div class="student_reviews">
                                <div class="row">
                                   
                                    <div class="col-lg-7">


                                        @if($enroll == 1)
                                          @if ($give == 1)
                                            

                                        <div class="col-lg-12 col-md-12">
                                            <div class="course_des_textarea mt-30 lbel25">
                                                <label>Add Ratings</label>
                                                
                                                <div class="course_des_bg">
                                            
                                                    <div class="textarea_dt">															
                                                        <div class="ui form swdh339">
                                                            <div class="field">
                                                                <input type="number" name="" min="1" max="5" value="1" id="student_rating">

                                                            </div>
                                                        </div>										
                                                    </div>
                                                </div>
                                                <label>Add Review</label>
                                                
                                                <div class="course_des_bg">
                                            
                                                    <div class="textarea_dt">															
                                                        <div class="ui form swdh339">
                                                            <div class="field">
                                                                <textarea name="textarea" class="jqte-test" id="student_review" ></textarea>

                                                            </div>
                                                        </div>										
                                                    </div>
                                                </div>

                                            </div>

                                            <button type="button" class="btn btn-danger" onclick="add_review({{$course_details->id}})"  >Add Review</button>


                                        </div>
                                        <br>
                                        @else
                                        <label> <strong>Review Already Given </strong> </label>

                                        @endif

                                        
                                            @else
                                            <label> <strong>To Add Course Review Please Enroll This Course First </strong> </label>

                                        
                                            @endif


                                  
                                    
                                </div>

                                
            <div class="col-xl-12 col-lg-12">
                <div class="section3125 mt-30">
                    <h4 class="item_title">Course Review</h4>
                    <div class="la5lo1">
                        <div class="owl-carousel Student_says owl-theme">
                            @foreach ($review as $review)

                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <p> Student Rating : {{$review->rating}} <i class="fas fa fa-star"></i></p>


                                    <div class="say_content">
                                        <p> {{$review->review}}</p>
                                    </div>
                                    <div class="st_group">
                                        
                                        <h4>Student Name: {{$review->student_name}}</h4>
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
                </div>
            </div>
        </div>
    </div>
</div>


{{-- OFK MAIN BODY END --}}
@endsection