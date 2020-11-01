@extends('student_layout')
@section('student_content')

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
                                    <img src="{{$course_details->course_image}}" alt="">
                                    <div class="course-overlay">
                                        <span class="play_btn1"><i class="uil uil-play"></i></span>
                                        <span class="_215b02">Preview this course</span>
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
                                    <i class="uil uil-star"></i>4.5
                                </div>
                                (8 ratings)
                            </div>
                          
                            
                            <div class="_215b05">										
                                Last updated {{$course_details->updated_at}}
                            </div>
                            <ul class="_215b31">										
                                <button  onclick="window.location.href='course_view?id={{$course_details->id}}'" class="subscribe-btn">Enroll Now</button>
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

                            {{-- <button  onclick="window.location.href='add_content?id={{$course_details->id}}'" class="subscribe-btn">Add New Content</button> --}}

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
                                    <div class="col-lg-5">
                                        <div class="reviews_left">
                                            <h3>Student Feedback</h3>
                                            <div class="total_rating">
                                                <div class="_rate001">4.6</div>														
                                                <div class="rating-box">
                                                    <span class="rating-star full-star"></span>
                                                    <span class="rating-star full-star"></span>
                                                    <span class="rating-star full-star"></span>
                                                    <span class="rating-star full-star"></span>
                                                    <span class="rating-star half-star"></span>
                                                </div>
                                                <div class="_rate002">Course Rating</div>	
                                            </div>
                                            <div class="_rate003">
                                                <div class="_rate004">
                                                    <div class="progress progress1">
                                                        <div class="progress-bar w-70" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                    </div>
                                                    <div class="_rate002">70%</div>
                                                </div>
                                                <div class="_rate004">
                                                    <div class="progress progress1">
                                                        <div class="progress-bar w-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                    </div>
                                                    <div class="_rate002">40%</div>
                                                </div>
                                                <div class="_rate004">
                                                    <div class="progress progress1">
                                                        <div class="progress-bar w-5" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                    </div>
                                                    <div class="_rate002">5%</div>
                                                </div>
                                                <div class="_rate004">
                                                    <div class="progress progress1">
                                                        <div class="progress-bar w-2" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                    </div>
                                                    <div class="_rate002">1%</div>
                                                </div>
                                                <div class="_rate004">
                                                    <div class="progress progress1">
                                                        <div class="progress-bar w-1" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <div class="rating-box">
                                                        <span class="rating-star full-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                        <span class="rating-star empty-star"></span>
                                                    </div>
                                                    <div class="_rate002">1%</div>
                                                </div>
                                            </div>
                                        </div>												
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="review_right">
                                            <div class="review_right_heading">
                                                <h3>Reviews</h3>
                                                <div class="review_search">
                                                    <input class="rv_srch" type="text" placeholder="Search reviews...">
                                                    <button class="rvsrch_btn"><i class='uil uil-search'></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review_all120">
                                            <div class="review_item">
                                                <div class="review_usr_dt">
                                                    <img src="images/left-imgs/img-1.jpg" alt="">
                                                    <div class="rv1458">
                                                        <h4 class="tutor_name1">John Doe</h4>
                                                        <span class="time_145">2 hour ago</span>
                                                    </div>
                                                </div>
                                                <div class="rating-box mt-20">
                                                    <span class="rating-star full-star"></span>
                                                    <span class="rating-star full-star"></span>
                                                    <span class="rating-star full-star"></span>
                                                    <span class="rating-star full-star"></span>
                                                    <span class="rating-star half-star"></span>
                                                </div>
                                                <p class="rvds10">Nam gravida elit a velit rutrum, eget dapibus ex elementum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce lacinia, nunc sit amet tincidunt venenatis.</p>
                                                <div class="rpt100">
                                                    <span>Was this review helpful?</span>
                                                    <div class="radio--group-inline-container">
                                                        <div class="radio-item">
                                                            <input id="radio-1" name="radio" type="radio">
                                                            <label for="radio-1" class="radio-label">Yes</label>
                                                        </div>
                                                        <div class="radio-item">
                                                            <input id="radio-2" name="radio" type="radio">
                                                            <label  for="radio-2" class="radio-label">No</label>
                                                        </div>
                                                    </div>
                                                    <a href="#" class="report145">Report</a>
                                                </div>
                                            </div>
                                            
                                            <div class="review_item">
                                                <a href="#" class="more_reviews">See More Reviews</a>
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