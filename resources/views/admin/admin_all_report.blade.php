@extends('admin_layout')
@section('admin_content')


<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
                    <div class="crse_content">
                        <h1>Feedback From Students</h1>
                        <div class="col-lg-12 col-md-12">
                                <table class="table ucp-table">
                                    <thead class="thead-s">
                                        <tr>
                                            <th class="cell-ta">Id</th>
                                            <th class="cell-ta">Course Name</th>
                                            <th class="cell-ta">Category</th>
                                            <th class="text-center">Message</th>
                                            <th class="text-center">Take Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($reports as $report) 

                                         <tr>
                                            <td class="cell-ta">{{$report->course_id}}</td>
                                            <td class="cell-ta">{{$report->course_name}}</td>
                                            <td class="cell-ta">{{$report->course_category}}</td>
                                            <td class="text-center">{{$report->report_description}} </td>  
                                            <td class="text-center">

                                            <button onclick="window.location.href='admin_all_courses'"   class="gray-s"><i class="uil uil-edit-alt"></i></button>
                                                </td>
                                            
                                        </tr>  
                                         @endforeach
        
                                    </tbody>
                                </table>
                            </div>


            </div>
          

        </div>
    </div>
</div> 


{{-- OFK MAIN BODY END --}}
@endsection