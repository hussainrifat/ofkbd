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
                                <td class="cell-ta">OFK{{$instructor->id}}</td>
                                <td class="cell-ta">{{$instructor->name}}</td>
                                <td class="text-center">{{$instructor->email}}</td>
                                <td class="text-center">{{$instructor->password}}</td>
                                <td class="text-center">
                              <a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
                                </td>
                                <td class="text-center">
                                    <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                </td>
    
                            </tr>  
                             {{-- @endforeach --}}
    
                        </tbody>
                    </table>
                </div>
            </div>


            
           
        </div>
    </div>
    
@endsection