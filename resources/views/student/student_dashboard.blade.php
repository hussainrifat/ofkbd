@extends('student_layout')
@section('student_content')


<head>
    <link href="{{asset('assets')}}/frontend\css\instructor-dashboard.css?{{time()}}" rel="stylesheet">
	<link href="{{asset('assets')}}/frontend\css\instructor-responsive.css?{{time()}}" rel="stylesheet">
</head>
    <div class="sa4d25">
        <div class="container-fluid">			
            <div class="row">
               
                
                <div class="col-lg-12 col-md-12">
                    <table class="table ucp-table">
                        <thead class="thead-s">
                            <tr>
                                <th class="cell-ta">Registration Number</th>
                                <th class="cell-ta">Name</th>
                                <th class="text-center" >Email</th>
                                <th class="text-center" >Class</th>
                                <th class="text-center" >Institute</th>

                                <th class="text-center" >Change Password</th>
                                <th class="text-center" >Edit Information</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                
                            {{-- @foreach ($users as $user)  --}}
    
                             <tr>
                                <td class="cell-ta">OFK{{$student->id}}</td>
                                <td class="cell-ta">{{$student->name}}</td>
                                <td class="text-center">{{$student->email}}</td>
                                <td class="text-center">{{$std_class}}</td>
                                <td class="text-center">{{$std_institute}}</td>

                                <td class="text-center">
                                  <button data-toggle="modal" data-target="#changePasswordModal" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></button>
                              </td>

                              <td class="text-center">
                                  <button onclick="editStudentDashboardProfileInfo({{$student->id}})"  data-toggle="modal" data-target="#editModal" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></button>
                              </td>
    
                            </tr>  
                             {{-- @endforeach --}}
    
                        </tbody>
                    </table>

                    
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
                          <input type="text" id="edit-student-id" placeholder="Enter Your ID" class="form-control">
          
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
                    <button type="button" class="btn btn-danger" onclick="updateStudentProfileInfo()"  >Update</button>
                  </div>
        
                </div>
              </div>
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
                  
                  </div>
        
        
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick="updatestudentPasswordInfo(({{$student->id}}))"  >Update</button>
                  </div>
        
                </div>
              </div>
            </div>


</div>
           
        </div>
    </div>
    
@endsection