@extends('admin_layout')
@section('admin_content')


<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
                    <div class="crse_content">
                        <h1>Instructor Information</h1>
                        <div class="col-lg-12 col-md-12">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="cell-ta">Name</th>
                                            <th class="text-center" >Email</th>
                                            <th class="text-center">Contact Number</th>
                                            <th class="text-center" >Edit Information</th>
                                            <th class="text-center" >Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                            
                                        @foreach ($instructors as $instructor) 

                                         <tr>
                                                
                                            <td class="cell-ta">{{$instructor->name}}</td>
                                            <td class="text-center">{{$instructor->email}} </td>
                                            <td class="text-center">{{$instructor->contact_number}}</td>
                                            <td class="text-center">

                                            <button onclick="editInstructorInfo({{$instructor->id}})"  data-toggle="modal" data-target="#editModal" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></button>
                                            </td>

                                            <td class="text-center">
                                                <button onclick="deleteInstructorInfo({{$instructor->id}})"  data-toggle="modal" data-target="#deleteStudentModal" title="delete" class="gray-s"><i class="uil uil-trash-alt">
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
                                          <input type="text" id="edit-instructor-email" placeholder="Enter Your Roll" class="form-control">
                                      </div>
                                       <div class="form-group">
                                          <label>Enter Your Contact Number</label>
                                          <input type="text" id="edit-instructor-contact_number" placeholder="Enter Contact Number" class="form-control">
                                      </div>
                          
                                     
                                 
                          
                                    </div>
                          
                          
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" onclick="updateInstructorInfo()"  >Update</button>
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