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
                                            <th class="text-center" >Active Status</th>


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

                                            <td class="text-center">
                                                <button onclick="ViewCourseActiveStatus({{$course->course_id}})"  data-toggle="modal" data-target="#CourseStatusModal" class="gray-s">{{$course->course_active_status}}<i class="uil ">
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
                                      <h4 class="modal-title">Course Information</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                      <div class="form-group">
                                          <input type="hidden" id="edit-course-id" placeholder="Enter Your ID" class="form-control">

                                      </div>
                                      <div class="form-group">
                                          <label>Enter Your Course Name</label>
                                          <input type="text" id="edit-course-name" placeholder="Enter Your Course Name" class="form-control">

                                      </div>

                                       <div class="form-group">
                                          <label>Enter Your Course Category</label>
                                          <input type="text" id="edit-course-category" placeholder="Enter Your Course Category" class="form-control">
                                      </div>
                                       <div class="form-group">
                                          <label>Enter Your Course Time Duration</label>
                                          <input type="text" id="edit-course-time-duration" placeholder="Enter Your Course Time Duration" class="form-control">
                                      </div>



                                    </div>


                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" onclick="updateAdminCourseInfo()"  >Update</button>
                                    </div>

                                  </div>
                                </div>
                              </div>


                              <div class="modal" id="CourseStatusModal">
                                <div class="modal-dialog">
                                  <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">Course Status</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <input type="hidden" id="edit-course" placeholder="Enter Your ID" class="form-control">

                                        </div>



                                          <div class="form-group">
                                            <label>Course Status</label>
                                            <input type="text" id="edit-course-active-status" placeholder="Enter Your Course Status" class="form-control">
                                        </div>

                                    </div>


                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" onclick="updateCourseStatusInfo()"  >Update</button>
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