@extends('admin_layout')
@section('admin_content')


<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
                    <div class="crse_content">
                        <h1>Student Information</h1>
                        <div class="col-lg-12 col-md-12">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="cell-ta">Name</th>
                                            <th class="text-center" >Email</th>
                                            <th class="text-center">Contact Number</th>
                                            <th class="text-center">Student Class</th>
                                            <th class="text-center">Student Institute</th>
                                            <th class="text-center" >Edit</th>
                                            <th class="text-center" >Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                            
                                        @foreach ($users as $user) 

                                         <tr>
                                                
                                            <td class="cell-ta">{{$user->name}}</td>
                                            <td class="text-center">{{$user->email}} </td>
                                            <td class="text-center">{{$user->contact_number}}</td>
                                            <td class="text-center">{{$user->class}}</td>
                                            <td class="text-center">{{$user->institute}}</td>
                                            <td class="text-center">

                                            <button style="color: green;   border-color:green"  onclick="editStudentProfileInfo({{$user->id}})"  data-toggle="modal" data-target="#editModal" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></button>
                                            </td>

                                            <td class="text-center">
                                                <button style="color: red; border-color:red" onclick="deleteUserInfo({{$user->id}})"  data-toggle="modal" data-target="#deleteStudentModal" title="delete" class="gray-s"><i class="uil uil-trash-alt">
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
                                          <label>Edit Name</label>
                                          <input type="text" id="edit-student-name" placeholder="Enter Your Name" class="form-control">
                          
                                      </div>
                          
                                       <div class="form-group">
                                          <label>Edit Email</label>
                                          <input type="text" id="edit-student-email" placeholder="Enter Your Roll" class="form-control">
                                      </div>
                                       <div class="form-group">
                                          <label>Edit Contact Number</label>
                                          <input type="text" id="edit-student-contact_number" placeholder="Enter Contact Number" disabled class="form-control">
                                      </div>
                          
                                       <div class="form-group">
                                          <label>Edit Class</label>
                                          <input type="text" id="edit-student-student_class" placeholder="Enter Your Class" class="form-control">
                          
                                      </div>

                                       <div class="form-group">
                                          <label>Edit Institute</label>
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