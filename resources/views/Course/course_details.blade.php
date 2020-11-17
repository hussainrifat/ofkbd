@extends('instructor_home_layout')
@section('instructor_content')

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
                                <button  onclick="window.location.href='course_view?id={{$course_details->id}}'" class="subscribe-btn">Course View</button>

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


                                @if($match ==1)
                                <button  onclick="window.location.href='add_content?id={{$course_details->id}}'" class="subscribe-btn">Add New Content</button>
                                @else
                                    @endif

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
                                                    <th class="text-center" scope="col">Video Link</th>
                                                    <th class="text-center" scope="col">Video Description</th>

                                                    @if($match ==1)
                                                    <th class="text-center" scope="col">Edit</th>
                                                    <th class="text-center" scope="col">Delete</th>                                                   
                                                    @else
                                                        @endif
                                                  

                                                </tr>
                                            </thead>
                                            <tbody>
                                                    
                                                @foreach ($videoes as $video)

                                                <tr>
                                                        
                                                    <td class="cell-ta">{{$video->video_title}}</td>
                                                    
                                                    <td class="text-center">{{$video->video_time_duration}} Minutes</td>
                                                    <td class="cell-ta">{{$video->video_embed}}</td>

                                                    <td class="text-center">{{$video->video_description}}</td>
                                                    

                                                    
                                                    @if($match ==1)
                                                    <td class="text-center">
                                                        <button onclick="editCourseModal({{$video->id}})"  data-toggle="modal" data-target="#editCourseModal" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></button>
                                                    </td>


                                                    <td class="text-center">
                                                        <button onclick="deleteCourseContentInfo({{$video->id}})"  data-toggle="modal" data-target="#deleteStudentModal" title="delete" class="gray-s"><i class="uil uil-trash-alt">
                                                            </i></button>
        
                                                    </td>                                                 
                                                    @else
                                                        @endif

                                                    
                                                
                                                </tr> 

                                                <div class="modal" id="editCourseModal">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                              
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                          <h4 class="modal-title">Video Information</h4>
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                              
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                      
                                                            <div class="form-group">
                                                                <input type="hidden" id="edit-video-id" placeholder="Enter Your ID" class="form-control">
                                                
                                                            </div>
                                                         
                                                          <div class="form-group">
                                                              <label>Video Title</label>
                                                              <input type="text" id="edit-video-title" class="form-control">
                                              
                                                          </div>
                        
                                                          <div class="form-group">
                                                            <label>Video Description</label>
                                                            <input type="text" id="edit-video-description" class="form-control">
                                            
                                                        </div>
        
                                                        <div class="form-group">
                                                            <label>Video Time Duration</label>
                                                            <input type="text" id="edit-video-time-description" class="form-control">
                                            
                                                        </div>
        
                                                        <div class="form-group">
                                                            <label>Video Embed</label>
                                                            <input type="text" id="edit-video-embed" class="form-control">
                                            
                                                        </div>
                                              
                                                          
                                                        
                                                        </div>
                                              
                                              
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-danger" onclick="updateCourseContentInfo({{$video->id}})"  >Update</button>
                                                        </div>
                                              
                                                      </div>
                                                    </div>
                                                  </div>
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
                                  
                                    <div class="col-xl-12 col-lg-12">
                                                                 
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
    </div>
</div>


{{-- OFK MAIN BODY END --}}
@endsection