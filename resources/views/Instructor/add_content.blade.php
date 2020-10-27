@extends('instructor_home_layout')
@section('instructor_content')


<head>
    <link href="{{asset('assets')}}/frontend\css\instructor-dashboard.css?{{time()}}" rel="stylesheet">
	<link href="{{asset('assets')}}/frontend\css\instructor-responsive.css?{{time()}}" rel="stylesheet">



</head>
<div class="sa4d25">
    <div class="container">			
    				
        <div class="row">
            <div class="col-12">
                        
                        <div class="step-content">
                           
                            
                            

                             <div class="step-tab-panel step-tab-location" id="tab_step3">
                                <div class="tab-from-content">
                                    <div class="title-icon">
                                        <h3 class="title"><i class="uil uil-film"></i>Course Content</h3>
                                    </div>
                                    <div class="course__form">
                                        <div class="row">
                                            <div class="col-lg-12">		
                                                <div class="extra_info">		
                                                    <h4 class="part__title">Add New Video</h4>
                                                </div>
                                                <div class="view_info10">
                                                    <div class="row">
                                                   
                                                      
                                                        <div class="col-lg-4 col-md-12">															
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Video Title*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text" placeholder="Insert your lecture title." id="video_title" data-purpose="edit-course-title" maxlength="60" id="lecture[title]" value="">															
                                                                </div>
                                                            </div>									
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="part_input mt-30 lbel25">
                                                                <label>File*</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="video_image" onchange="videoIMG(this)">
                                                                        <label class="custom-file-label insert_video_image_label" >No Choose file </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ui search focus mt-30 lbel25">
                                                            <label>Time Duration*</label>
                                                            <div class="ui left icon input swdh19 swdh55">
                                                                <input class="prompt srch_explore" type="number" min="0" id="video_duration" required="" placeholder="0">															
                                                                <div class="badge_min">Minutes</div>
                                                            </div>
                                                        </div>	
                                                        <div class="col-lg-12 col-md-12">	
                                                            <div class="course_des_textarea mt-30 lbel25">
                                                                <label>Description*</label>
                                                                <div class="course_des_bg">
                                                                   
                                                                    <div class="textarea_dt">															
                                                                        <div class="ui form swdh339">
                                                                            <div class="field">
                                                                                <textarea rows="5" name="description" id="video_description" placeholder="Insert your course part description"></textarea>
                                                                            </div>
                                                                        </div>										
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
 
                                                        <div class="col-lg-5 col-md-6">															
                                                         								
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <button class="part_btn_save prt-sv" type="button" id="add_content">Add New Video</button>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="table-responsive mt-50 mb-0">
                                                                <table class="table ucp-table">
                                                                    <thead class="thead-s">
                                                                        <tr>
                                                                            <th class="text-center" scope="col">Lecture</th>
                                                                            <th class="cell-ta">Title</th>
                                                                            <th class="text-center" scope="col">Volume</th>
                                                                            <th class="text-center" scope="col">Duration</th>
                                                                            <th class="text-center" scope="col">Page</th>
                                                                            <th class="text-center" scope="col">File</th>
                                                                            <th class="text-center" scope="col">Controls</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="cell-ta">Lecture Content Title</td>
                                                                            <td class="text-center">25</td>
                                                                            <td class="text-center">6</td>
                                                                            <td class="text-center">0</td>
                                                                            <td class="text-center"><a href="#">Video</a></td>
                                                                            <td class="text-center">
                                                                                <a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
                                                                                <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="cell-ta">Lecture Content Title</td>
                                                                            <td class="text-center">25</td>
                                                                            <td class="text-center">0</td>
                                                                            <td class="text-center">3</td>
                                                                            <td class="text-center"><a href="#">File</a></td>
                                                                            <td class="text-center">
                                                                                <a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
                                                                                <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="save_content">
                                                                <button class="save_content_btn" type="Submit">Save Course Content</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive mt-30">
                                        <table class="table ucp-table" id="content-table">
                                            <thead class="thead-s">
                                                <tr>
                                                    <th class="text-center" scope="col">Content</th>
                                                    <th class="cell-ta">Title</th>
                                                    <th class="text-center" scope="col">lectures</th>
                                                    <th class="text-center" scope="col">Volume</th>
                                                    <th class="text-center" scope="col">Duration</th>
                                                    <th class="text-center" scope="col">Upload Date</th>
                                                    <th class="text-center" scope="col">Files</th>
                                                    <th class="text-center" scope="col">Controls</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="cell-ta">Course Content Title</td>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">50</td>
                                                    <td class="text-center">15</td>
                                                    <td class="text-center">6 April 2019</td>
                                                    <td class="text-center"><a href="#">View</a></td>
                                                    <td class="text-center">
                                                        <a href="#" title="Edit" class="gray-s"><i class="uil uil-edit-alt"></i></a>
                                                        <a href="#" title="Delete" class="gray-s"><i class="uil uil-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                 </div>
                            </div>
                            
                           
                        </div>
                        <div class="step-footer step-tab-pager">
                            <button data-direction="finish" class="btn btn-default steps_btn">Submit for Review</button>
                        </div>
                </div>
            </div>
        </div>
    </div> 


    <script>
        function fetch_expert()
        {
            var msg = $data;
            $("#expertise").html(msg);

        }
    </script>

    {{-- <script src="{{asset('assets')}}/frontend\js/jquery-steps.min.js"></script>

	<script>
		$('#add-course-tab').steps({
		  onFinish: function () {
			alert('Wizard Completed');
		  }
		});		
	</script> --}}
    
@endsection