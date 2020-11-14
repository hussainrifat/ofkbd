@extends('student_layout')
@section('student_content')


<head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>

    <link href="{{asset('assets')}}/frontend\css\instructor-dashboard.css?{{time()}}" rel="stylesheet">
  <link href="{{asset('assets')}}/frontend\css\instructor-responsive.css?{{time()}}" rel="stylesheet">
  <link href="{{asset('assets')}}/frontend\css\profile.css?{{time()}}" rel="stylesheet">



  


</head>
    <div class="sa4d25">


<div class="container">
  <div class="row">
      <div class="col-12">
          <div class="card">

              <div class="card-body">
                  <div class="card-title mb-4">
                      <div class="d-flex justify-content-start">
                          <div class="image-container">
                              <img src="http://placehold.it/150x150" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                              <div class="middle">
                                  <input type="button" class="btn btn-secondary" id="btnChangePicture" value="Change" />
                                  <input type="file" style="display: none;" id="profilePicture" name="file" />
                              </div>
                          </div>
                          <div class="userData ml-3">
                              <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold">{{$student->name}}</h2>
                        

                              <button class="btn btn-danger btn-sm" onclick="editStudentDashboardProfileInfo({{$student->id}})" data-toggle="modal" data-target="#editModal"  >Edit Your Information</button>
                              

                              
                            
                          </div>

                         

                          
                          <div class="ml-auto">
                              <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-12">
                          <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Personal Information</a>
                              </li>


                        


                              <li class="nav-item">
                                <a class="nav-link" id="parentsInformation-tab" data-toggle="tab" href="#parentsInformation" role="tab" aria-controls="parentsInformation" aria-selected="false">Parents information</a>
                            </li>


                              <li class="nav-item">
                                <a class="nav-link" id="myCourses-tab" data-toggle="tab" href="#myCourses" role="tab" aria-controls="myCourses" aria-selected="false">My Courses</a>
                            </li>



                              <li class="nav-item">
                                <a class="nav-link" id="changePassword-tab" data-toggle="tab" href="#changePassword" role="tab" aria-controls="changePassword" aria-selected="false">Change Password</a>
                            </li>
                          </ul>






                          <div class="tab-content ml-1" id="myTabContent">
                              <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                  

                                  <div class="row">
                                      <div class="col-sm-3 col-md-2 col-5">
                                          <label style="font-weight:bold;">Full Name</label>
                                      </div>
                                      <div class="col-md-8 col-6">
                                        {{$student->name}}
                                      </div>
                                  </div>
                                  <hr />

                                  <div class="row">
                                      <div class="col-sm-3 col-md-2 col-5">
                                          <label style="font-weight:bold;">Email</label>
                                      </div>
                                      <div class="col-md-8 col-6">
                                        {{$student->email}}
                                      </div>
                                  </div>
                                  <hr />
                                  
                                  
                                  <div class="row">
                                      <div class="col-sm-3 col-md-2 col-5">
                                          <label style="font-weight:bold;">Contact Number</label>
                                      </div>
                                      <div class="col-md-8 col-6">
                                        {{$student->contact_number}}
                                      </div>
                                  </div>
                                  <hr />
                                  <div class="row">
                                      <div class="col-sm-3 col-md-2 col-5">
                                          <label style="font-weight:bold;">Class</label>
                                      </div>
                                      <div class="col-md-8 col-6">
                                        {{$std_class}}
                                      </div>
                                  </div>
                                  <hr />
                                  <div class="row">
                                      <div class="col-sm-3 col-md-2 col-5">
                                          <label style="font-weight:bold;">Institute Name</label>
                                      </div>
                                      <div class="col-md-8 col-6">
                                        {{$std_institute}}
                                      </div>
                                  </div>
                                  <hr />

                              </div>



                            


                              <div class="tab-pane fade" id="parentsInformation" role="tabpanel" aria-labelledby="parentsInformation-tab">

                                
                                @if($parents_info)
                                <div class="row">
                                  <div class="col-sm-3 col-md-2 col-5">
                                      <label style="font-weight:bold;">Father's Name</label>
                                  </div>
                                  <div class="col-md-8 col-6">
                                    {{$parents_info->father_name}}
                                  </div>
                              </div>
                              <hr />

                              
                              <div class="row">
                                <div class="col-sm-3 col-md-2 col-5">
                                    <label style="font-weight:bold;">Father's Contact Number</label>
                                </div>
                                <div class="col-md-8 col-6">
                                  {{$parents_info->father_contact_number}}
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                              <div class="col-sm-3 col-md-2 col-5">
                                  <label style="font-weight:bold;">Mother's Name</label>
                              </div>
                              <div class="col-md-8 col-6">
                                {{$parents_info->mother_name}}
                              </div>
                          </div>
                          <hr />

                          <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-weight:bold;">Mother's Contact Number</label>
                            </div>
                            <div class="col-md-8 col-6">
                              {{$parents_info->mother_contact_number}}
                            </div>
                        </div>
                        <hr />

                          <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-weight:bold;">Present Address</label>
                            </div>
                            <div class="col-md-8 col-6">
                              {{$parents_info->present_address}}
                            </div>
                        </div>
                        <hr />
                        
                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editParentsModal"  >Edit Parents Information</button>
                        @else
                        <div class="row">
                          <div class="col-sm-3 col-md-2 col-5">
                              <label style="font-weight:bold;">Father's Name</label>
                          </div>
                          <div class="col-md-8 col-6">
                            
                          </div>
                      </div>
                      <hr />

                      
                      <div class="row">
                        <div class="col-sm-3 col-md-2 col-5">
                            <label style="font-weight:bold;">Father's Contact Number</label>
                        </div>
                        <div class="col-md-8 col-6">

                        </div>
                    </div>
                    <hr />

                    <div class="row">
                      <div class="col-sm-3 col-md-2 col-5">
                          <label style="font-weight:bold;">Mother's Name</label>
                      </div>
                      <div class="col-md-8 col-6">
                       
                      </div>
                  </div>
                  <hr />

                  <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Mother's Contact Number</label>
                    </div>
                    <div class="col-md-8 col-6">
                      
                    </div>
                </div>
                <hr />

                  <div class="row">
                    <div class="col-sm-3 col-md-2 col-5">
                        <label style="font-weight:bold;">Present Address</label>
                    </div>
                    <div class="col-md-8 col-6">
                      
                    </div>
                </div>
                <hr />
                
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#editParentsModal"  >Edit Parents Information</button>
                  
                  @endif

                  
                      <hr />

                            </div>

                              <div class="tab-pane fade" id="myCourses" role="tabpanel" aria-labelledby="myCourses-tab">
                                <div class="col-md-12">
                                  <div class="_14d25">
                                      <div class="row">
                                         
                                         @foreach($courses as $course)
                                          <div class="col-lg-3 col-md-4">
                                              <div class="fcrse_1 mb-30">
                                              <a href="course_detail?course={{$course->course_id}}"  class="fcrse_img">
                                                      <img src="{{$course->course_image}}" alt="">
                                                      <div class="course-overlay">
                                                          <div class="crse_reviews">
                                                              <i class='uil uil-star'></i>4.5
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
                                                              <span  data-toggle="modal" data-target="#reporttoadmin" > <i class="uil uil-windsock"></i>Give Feedback</span>
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
                                                        <button type="button" class="btn btn-danger" onclick="SendReportToAdmin({{$course->course_id}})"  >Give Your Feedback To Admin</button>
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


                              

                              <div class="tab-pane fade" id="changePassword" role="tabpanel" aria-labelledby="changePassword-tab">
                                <div class="form-group">
                                  <input type="hidden" id="edit-student-id" placeholder="Enter Your ID" class="form-control">
                              </div>
                           
                            <div class="form-group">
                                <label>Enter Your Old Password</label>
                                <input type="text" id="edit-student-old-password" class="form-control">
                
                            </div>
                
                             <div class="form-group">
                                <label>Enter Your New Password</label>
                                <input type="text" id="edit-student-new-password"  class="form-control" >
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" onclick="updatestudentPasswordInfo(({{$student->id}}))"  >Update</button>
                            </div>

                          </div>
                
                      
                          </div>
                      </div>
                  </div>




                  <div class="modal" id="editModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
              
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Student Information</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
              
                        <!-- Modal body -->
                        <div class="modal-body">
      
                            <div class="form-group">
                                <input type="hidden" id="edit-student-id" placeholder="Enter Your ID" class="form-control">
                
                            </div>
                         
                          <div class="form-group">
                              <label>Enter Your Name</label>
                              <input type="text" id="edit-student-name" placeholder="Enter Your Name" class="form-control">
              
                          </div>
              
                           <div class="form-group">
                              <label>Enter Your Email</label>
                              <input type="text" id="edit-student-email" placeholder="Enter Your Email" class="form-control" >
                          </div>
                           <div class="form-group">
                              <label>Enter Your Contact Number</label>
                              <input type="text" id="edit-student-contact_number" placeholder="Enter Contact Number" class="form-control" >
                          </div>
                          <div class="form-group">
                            <label>Enter Your Your Class</label>
                            <input type="text" id="edit-student-student_class" placeholder="Enter Your Class" class="form-control" >
                        </div>
      
                        <div class="form-group">
                          <label>Enter Your Your Institute</label>
                          <input type="text" id="edit-student-student_institute" placeholder="Enter Your Institute" class="form-control" >
                      </div>
                       
                    
                        </div>
              
              
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" onclick="updateStudentProfileInfo({{$student->id}})"  >Update</button>
                        </div>
              
                      </div>
                    </div>
                  </div>



                  <div class="modal" id="editParentsModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
              
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Student Parents Information</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
              
                        <!-- Modal body -->
                        <div class="modal-body">


                          <div class="form-group">
                            <input type="hidden" id="id" value={{$student->id}} placeholder="Enter Your ID" class="form-control">
                        </div>
      
                           
                         
                          <div class="form-group">
                              <label>Enter Your Father Name</label>
                              <input type="text" id="father-name" placeholder="Enter Your Father Name" class="form-control">
              
                          </div>

                          <div class="form-group">
                            <label>Enter Your Father's Contact Number</label>
                            <input type="text" id="father-contact_number" placeholder="Enter Your Father's Contact Number" class="form-control">
            
                        </div>

                          <div class="form-group">
                            <label>Enter Your Mother Name</label>
                            <input type="text" id="mother-name" placeholder="Enter Your Mother Name" class="form-control">
            
                        </div>

                        <div class="form-group">
                          <label>Enter Your Mother's Contact Number</label>
                          <input type="text" id="mother-contact_number" placeholder="Enter Your Mother's Contact Number" class="form-control">
          
                      </div>

                        <div class="form-group">
                          <label>Present Address</label>
                          <input type="text" id="present_address" placeholder="Enter Your Present Address" class="form-control">
          
                      </div>
              
                        </div>
              
              
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" onclick="updateStudentParentsInfo()"  >Update</button>
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


    <script src="resources\js\profile.js?{{time()}}"></script>

    
@endsection