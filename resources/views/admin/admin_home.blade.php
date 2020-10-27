@extends('admin_layout')
@section('admin_content')


<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
</head>
<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-xl-12 col-lg-12">

                <div class="page-container">
                    <div class="main-content">
                        <div class="card">
                            <div class="card-body">
                                <h4>Data Table</h4>
                                <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. Below is an example of zero configuration.</p>
                                <div class="m-t-25">
                                    <table id="student_table" class="table">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Email</th>
                                                <th>Contact</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
                                          
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                               
                               
                            </div>
                        </div>
    
                    </div>
                </div>
    
       
    
               
            </div>
          

        </div>
    </div>
</div>


<script>
    $(document).ready( function () {
    $('#student_table').DataTable();
} );
</script>
{{-- OFK MAIN BODY END --}}
@endsection