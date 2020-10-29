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
                                                                   <?php
                                                                    $id = $_GET['id'];

                                                                    ?>
                                                                    <input class="prompt srch_explore" type="text" placeholder="Insert your lecture title." id="video_name" data-purpose="edit-course-title" maxlength="60" id="lecture[title]" value="">	
                                                                <input type="hidden" id="hidden_input" value="{{$id}}">														
                                                                </div>
                                                            </div>									
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Video Link*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text" placeholder="Insert your video embed link" id="video_embed" data-purpose="edit-course-title" maxlength="60" id="lecture[title]" value="">															
                                                                </div>
                                                            </div>	
                                                        </div>
                                                        <div class="ui search focus mt-30 lbel25">
                                                            <label>Time Duration*</label>
                                                            <div class="ui left icon input swdh19 swdh55">
                                                                <input class="prompt srch_explore" type="number" min="0" id="video_time_duration" required="" placeholder="0">															
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
                                                        
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                 </div>
                            </div>
                            
                           
                        </div>
                      
                </div>
            </div>
        </div>
    </div> 


  

    {{-- <script src="{{asset('assets')}}/frontend\js/jquery-steps.min.js"></script>

	<script>
		$('#add-course-tab').steps({
		  onFinish: function () {
			alert('Wizard Completed');
		  }
		});		
	</script> --}}
    
@endsection