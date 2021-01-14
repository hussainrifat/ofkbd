@extends('admin_layout')
@section('admin_content')


<div class="sa4d25">
    <div class="container-fluid">
        <div class="row">
                    <div class="crse_content">
                        <h1>Blog Information</h1>
                        <div class="col-lg-12 col-md-12">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="cell-ta">Blog Name</th>
                                            <th class="text-center">Blog Category</th>
                                            <th class="text-center">Author Name</th>
                                            <th class="text-center" >Delete</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($blog as $blog)

                                         <tr>

                                            <td class="cell-ta">{{$blog->blog_title}}</td>
                                            <td class="text-center">{{$blog->blog_categories}} </td>
                                            <td class="text-center">{{$blog->author_name}} </td>

                                        
                                            <td class="text-center">
                                                <button style="color: red; border-color:red" onclick="deleteBlog({{$blog->blog_id}})"   title="delete" class=""><i class="uil uil-trash-alt">
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








            </div>


        </div>
    </div>
</div>


{{-- OFK MAIN BODY END --}}
@endsection