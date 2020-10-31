@extends('instructor_home_layout')
@section('instructor_content')


<head>
    <link href="{{asset('assets')}}/frontend\css\instructor-dashboard.css?{{time()}}" rel="stylesheet">
	<link href="{{asset('assets')}}/frontend\css\instructor-responsive.css?{{time()}}" rel="stylesheet">
</head>
    <div class="sa4d25">
        <div class="container-fluid">			
            <div class="row">
                <div class="col-lg-12">	
                    <h2 class="st_title"><i class="uil uil-apps"></i> Instructor Dashboard</h2>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card_dash">
                        <div class="card_dash_left">
                            <h5>My Courses</h5>
                            <h2>$350</h2>
                            <span class="crdbg_1">New $50</span>
                        </div>
                        <div class="card_dash_right">
                            <img src="images/dashboard/achievement.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card_dash">
                        <div class="card_dash_left">
                            <h5>Total Enroll</h5>
                            <h2>1500</h2>
                            <span class="crdbg_2">New 125</span>
                        </div>
                        <div class="card_dash_right">
                            <img src="images/dashboard/graduation-cap.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="card_dash">
                        <div class="card_dash_left">
                            <h5>Total Courses</h5>
                            <h2>130</h2>
                            <span class="crdbg_3">New 5</span>
                        </div>
                        <div class="card_dash_right">
                            <img src="images/dashboard/online-course.svg" alt="">
                        </div>
                    </div>
                </div>	
                
                
                <div class="col-lg-12 col-md-12" style="padding-top: 30px">
                    <table class="table ucp-table">
                        <thead class="thead-s">
                            <tr>
                                <th class="cell-ta">Registration Number</th>
                                <th class="cell-ta">Name</th>
                                <th class="text-center" >Email</th>
                                <th class="text-center" >Change Password</th>
                                <th class="text-center" >Edit Information</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                
                            {{-- @foreach ($users as $user)  --}}
    
                             <tr>
                                <td class="cell-ta">OFK100{{$instructor->id}}</td>
                                <td class="cell-ta">{{$instructor->name}}</td>
                                <td class="text-center">{{$instructor->email}}</td>

                                <td class="text-center">
                                    <button data-toggle="modal" data-target="#changePasswordModal" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></button>
                                </td>

                                <td class="text-center">
                                    <button onclick="editInstructorProfileInfo({{$instructor->id}})"  data-toggle="modal" data-target="#editModal" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></button>
                                </td>
                            
    
                            </tr>  
                             {{-- @endforeach --}}
    
                        </tbody>
                    </table>
                </div>
            </div>

           
            <div class="modal" id="editModal">
                <div class="modal-dialog">
                  <div class="modal-content">
          
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Instructor Information</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
          
                    <!-- Modal body -->
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="hidden" id="edit-instructor-id" placeholder="Enter Your ID" class="form-control">
            
                        </div>
                     
                      <div class="form-group">
                          <label>Enter Your Name</label>
                          <input type="text" id="edit-instructor-name" placeholder="Enter Your Name" class="form-control">
          
                      </div>
          
                       <div class="form-group">
                          <label>Enter Your Email</label>
                          <input type="text" id="edit-instructor-email" placeholder="Enter Your Email" class="form-control" >
                      </div>
                       <div class="form-group">
                          <label>Enter Your Contact Number</label>
                          <input type="text" id="edit-instructor-contact_number" placeholder="Enter Contact Number" class="form-control" disabled>
                      </div>
                      <div class="form-group">
                        {{-- <label>Enter Your Password</label> --}}
                        <input type="hidden" id="edit-instructor-password" placeholder="Enter Your Password" class="form-control">
                    </div>
          
                    
                 
          
                    </div>
          
          
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" onclick="updateInstructorProfileInfo()"  >Update</button>
                    </div>
          
                  </div>
                </div>
              </div>




              <div class="modal" id="changePasswordModal">
                <div class="modal-dialog">
                  <div class="modal-content">
          
                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Change Password</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
          
                    <!-- Modal body -->
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="hidden" id="edit-instructor-id" placeholder="Enter Your ID" class="form-control">
            
                        </div>
                     
                      <div class="form-group">
                          <label>Enter Your Old Password</label>
                          <input type="text" id="edit-instructor-old-password" class="form-control">
          
                      </div>
          
                       <div class="form-group">
                          <label>Enter Your New Password</label>
                          <input type="text" id="edit-instructor-new-password"  class="form-control" >
                      </div>
                    
                    </div>
          
          
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" onclick="updateInstructorPasswordInfo(({{$instructor->id}}))"  >Update</button>
                    </div>
          
                  </div>
                </div>
              </div>


            
           
        </div>
    </div>
    
@endsection