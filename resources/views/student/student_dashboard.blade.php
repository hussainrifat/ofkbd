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
                                <th class="text-center" >Password</th>
                                <th class="text-center" >Edit</th>
                                <th class="text-center" >Delete</th>
    
                            </tr>
                        </thead>
                        <tbody>
                                
                            {{-- @foreach ($users as $user)  --}}
    
                             <tr>
                                <td class="cell-ta">OFK{{$student->id}}</td>
                                <td class="cell-ta">{{$student->name}}</td>
                                <td class="text-center">{{$student->email}}</td>
                                <td class="text-center">{{$student->password}}</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger" class="uil uil-trash-alt" data-dismiss="modal" data-target="#editModal" onClick="update_data" >Update</button>
                                </td>
                                <td class="text-center">
                                <button type="button" class="btn btn-danger" class="uil uil-trash-alt" data-dismiss="modal" data-target="#deleteModal" onClick="update_data" >Delete</button>

                                </td>
    
                            </tr>  
                             {{-- @endforeach --}}
    
                        </tbody>
                    </table>
                </div>
            </div>

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
                          <label>Enter Your Name</label>
                          <input type="text" id="name" placeholder="Enter Your Name" class="form-control">
          
                      </div>
          
                       <div class="form-group">
                          <label>Enter Your Email</label>
                          <input type="text" id="email" placeholder="Enter Your Roll" class="form-control">
                      </div>
          
                       <div class="form-group">
                          <label>Enter Your Password</label>
                          <input type="text" id="student_class" placeholder="Enter Your Class" class="form-control">
          
                      </div>
          
                    </div>
          
          
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger"  data-toggle="modal" data-dismiss="modal" onClick="update_data" >Update</button>
                    </div>
          
                  </div>
                </div>
              </div>


              
            <div class="modal" id="deleteModal">
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
                          <label>Enter Your Name</label>
                          <input type="text" id="name" placeholder="Enter Your Name" class="form-control">
          
                      </div>
          
                       <div class="form-group">
                          <label>Enter Your Email</label>
                          <input type="text" id="email" placeholder="Enter Your Roll" class="form-control">
                      </div>
          
                       <div class="form-group">
                          <label>Enter Your Password</label>
                          <input type="text" id="student_class" placeholder="Enter Your Class" class="form-control">
          
                      </div>
          
                    </div>
          
          
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal" onClick="update_data" >Update</button>
                    </div>
          
                  </div>
                </div>
              </div>

</div>
           
        </div>
    </div>
    
@endsection