@extends('admin_layout')
@section('admin_content')


<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
                    <div class="crse_content">
                        <h1>Course Information</h1>
                        <div class="col-lg-12 col-md-12">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="cell-ta">Course Name</th>
                                            <th class="text-center">Course Category</th>
                                            <th class="text-center">Course Time Duration</th>
                                            <th class="text-center">Instructor Name</th>
                                            <th class="text-center" >Edit</th>
                                            <th class="text-center" >Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                            
                                        @foreach ($courses as $course) 

                                         <tr>
                                                
                                            <td class="cell-ta">{{$course->course_name}}</td>
                                            <td class="text-center">{{$course->course_category}} </td>
                                            <td class="text-center">{{$course->course_time_duration}} Minutes </td>
                                            <td class="text-center">{{$course->instructor_name}} </td>
                                            <td class="text-center">

                                            <button onclick="editCourseInfo({{$course->course_id}})"  data-toggle="modal" data-target="#editModal" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></button>
                                            </td>

                                            <td class="text-center">
                                                <button onclick="deleteCourseInfo({{$course->course_id}})"  data-toggle="modal" data-target="#deleteStudentModal" title="delete" class="gray-s"><i class="uil uil-trash-alt">
                                                    </i></button>

                                                
                                            </td>

                                        </tr>  
                                         @endforeach
        
                                    </tbody>
                                </table>
                            </div>


                            <div class="modal" id="editModal">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                          
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">User Information</h4>
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
                                          <input type="text" id="edit-student-email" placeholder="Enter Your Roll" class="form-control">
                                      </div>
                                       <div class="form-group">
                                          <label>Enter Your Contact Number</label>
                                          <input type="text" id="edit-student-contact_number" placeholder="Enter Contact Number" class="form-control">
                                      </div>
                          
                                       <div class="form-group">
                                          <label>Enter Your Class</label>
                                          <input type="text" id="edit-student-student_class" placeholder="Enter Your Class" class="form-control">
                          
                                      </div>

                                       <div class="form-group">
                                          <label>Enter Your Institute</label>
                                          <input type="text" id="edit-student-student_institute" placeholder="Enter Your Institute" class="form-control">
                          
                                      </div>
                          
                                    </div>
                          
                          
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" onclick="updateUserInfo()"  >Update</button>
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