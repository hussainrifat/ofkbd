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
                            <div class="step-tab-panel step-tab-info active" id="tab_step1"> 
                                <div class="tab-from-content">
                                    <div class="title-icon">
                                        <h3 class="title"><i class="uil uil-info-circle"></i>General Information</h3>
                                    </div>
                                    <div class="course__form">
                                        <div class="general_info10">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Course Title*</label>
                                                        <div class="ui left icon input swdh19">
                                                            <input class="prompt srch_explore" type="text" placeholder="Insert your course title." name="title" data-purpose="edit-course-title" maxlength="60" id="main[title]" value="">															
                                                            <div class="badge_num">60</div>
                                                        </div>
                                                    </div>									
                                                </div>
                                           
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="course_des_textarea mt-30 lbel25">
                                                        <label>Course Description*</label>
                                                        <div class="course_des_bg">
                                                            <ul class="course_des_ttle">
                                                                <li><a href="#"><i class="uil uil-bold"></i></a></li>
                                                                <li><a href="#"><i class="uil uil-italic"></i></a></li>
                                                                <li><a href="#"><i class="uil uil-list-ul"></i></a></li>
                                                                <li><a href="#"><i class="uil uil-left-to-right-text-direction"></i></a></li>
                                                                <li><a href="#"><i class="uil uil-right-to-left-text-direction"></i></a></li>
                                                                <li><a href="#"><i class="uil uil-list-ui-alt"></i></a></li>
                                                                <li><a href="#"><i class="uil uil-link"></i></a></li>
                                                                <li><a href="#"><i class="uil uil-text-size"></i></a></li>
                                                                <li><a href="#"><i class="uil uil-text"></i></a></li>
                                                            </ul>
                                                            <div class="textarea_dt">															
                                                                <div class="ui form swdh339">
                                                                    <div class="field">
                                                                        <textarea rows="5" name="description" id="id_course_description" placeholder="Insert your course description"></textarea>
                                                                    </div>
                                                                </div>										
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                       
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mt-30 lbel25">
                                                        <label>Course Category*</label>
                                                    </div>
                                                    <select class="ui hj145 dropdown cntry152 prompt srch_explore">
                                                        <option value="">Select Category</option>
                                                        <option value="1">Art</option>
                                                        <option value="2">Craft</option>
                                                        <option value="3">Calligraphy</option>
                                                        <option value="4">Programming</option>
                                                        <option value="5">Robotics</option>
                                                        <option value="6">Critical Thinking</option>
                                                        <option value="7">Design</option>
                                                
                                                    </select>
                                                </div>

                                                <div class="col-lg-5 col-md-6">															
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Time Duration*</label>
                                                        <div class="ui left icon input swdh19 swdh55">
                                                            <input class="prompt srch_explore" type="number" min="0" name="duration" required="" placeholder="0">															
                                                            <div class="badge_min">Minutes</div>
                                                        </div>
                                                    </div>									
                                                </div>

                                          
                                        
            												
                                            </div>
                                        </div>
                                   

                                    </div>
                                </div>
                            </div>
                            
                            <div class="step-tab-panel step-tab-gallery" id="tab_step2">
                                <div class="tab-from-content">
                                    <div class="title-icon">
                                        <h3 class="title"><i class="uil uil-image-upload"></i>Add Course Thumbnail Image</h3>
                                    </div>
                                    <div class="course__form">
                                        <div class="view_info10">
                                            <div class="row">
                                                <div class="col-lg-12">	
                                                    <div class="view_all_dt">	
                                                        <div class="view_img_left">	
                                                            <div class="view__img">	
                                                                <img src="assets\frontend\images\courses\add_img.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="view_img_right">	
                                                            <h4>Cover Image</h4>
                                                            <p>Upload your course image here. It must meet our course image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
                                                            <div class="upload__input">
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                                        <label class="custom-file-label" for="inputGroupFile04">No Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                            
                                                </div>
                                                <div class="col-lg-2 col-md-12">
                                                    <button class="part_btn_save prt-sv" type="submit">Save Lecture</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="step-tab-panel step-tab-location" id="tab_step3">
                                <div class="tab-from-content">
                                    <div class="title-icon">
                                        <h3 class="title"><i class="uil uil-film"></i>Course Content</h3>
                                    </div>
                                    <div class="course__form">
                                        <div class="row">
                                            <div class="col-lg-12">		
                                                <div class="extra_info">		
                                                    <h4 class="part__title">Add Video</h4>
                                                </div>
                                                <div class="view_info10">
                                                    <div class="row">
                                                   
                                                      
                                                        <div class="col-lg-4 col-md-12">															
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Video Title*</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="text" placeholder="Insert your lecture title." name="title" data-purpose="edit-course-title" maxlength="60" id="lecture[title]" value="">															
                                                                </div>
                                                            </div>									
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="part_input mt-30 lbel25">
                                                                <label>File*</label>
                                                                <div class="input-group">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="inputGroupFile06">
                                                                        <label class="custom-file-label" for="inputGroupFile06">No Choose file - (Pdf, Video)</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-6">	
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Time Duration</label>
                                                                <div class="ui left icon input swdh19">
                                                                    <input class="prompt srch_explore" type="number" name="sort" min="0" max="100" placeholder="0">															
                                                                </div>
                                                            </div>										
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">	
                                                            <div class="course_des_textarea mt-30 lbel25">
                                                                <label>Description*</label>
                                                                <div class="course_des_bg">
                                                                    <ul class="course_des_ttle">
                                                                        <li><a href="#"><i class="uil uil-bold"></i></a></li>
                                                                        <li><a href="#"><i class="uil uil-italic"></i></a></li>
                                                                        <li><a href="#"><i class="uil uil-list-ul"></i></a></li>
                                                                        <li><a href="#"><i class="uil uil-left-to-right-text-direction"></i></a></li>
                                                                        <li><a href="#"><i class="uil uil-right-to-left-text-direction"></i></a></li>
                                                                        <li><a href="#"><i class="uil uil-list-ui-alt"></i></a></li>
                                                                        <li><a href="#"><i class="uil uil-link"></i></a></li>
                                                                        <li><a href="#"><i class="uil uil-text-size"></i></a></li>
                                                                        <li><a href="#"><i class="uil uil-text"></i></a></li>
                                                                    </ul>
                                                                    <div class="textarea_dt">															
                                                                        <div class="ui form swdh339">
                                                                            <div class="field">
                                                                                <textarea rows="5" name="description" id="id_part_description" placeholder="Insert your course part description"></textarea>
                                                                            </div>
                                                                        </div>										
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
 
                                                        <div class="col-lg-5 col-md-6">															
                                                            <div class="ui search focus mt-30 lbel25">
                                                                <label>Time Duration*</label>
                                                                <div class="ui left icon input swdh19 swdh55">
                                                                    <input class="prompt srch_explore" type="number" min="0" name="duration" required="" placeholder="0">															
                                                                    <div class="badge_min">Minutes</div>
                                                                </div>
                                                            </div>									
                                                        </div>
                                                        <div class="col-lg-2 col-md-12">
                                                            <button class="part_btn_save prt-sv" type="submit">Save Lecture</button>
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
                            
                            <div class="step-tab-panel step-tab-amenities" id="tab_step4">
                                <div class="tab-from-content">
                                    <div class="title-icon">
                                        <h3 class="title"><i class="uil uil-file-copy-alt"></i>Extra Information</h3>
                                    </div>
                                   <div class="course__form">
                                        <div class="row">
                                            <div class="col-lg-12">		
                                                <div class="extra_info">		
                                                    <h4 class="part__title">Captions</h4>
                                                </div>
                                                <div class="view_info10">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="caption__check mt-30">
                                                                <div class="ui form">
                                                                    <div class="grouped fields">										
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>English<span class="filter__counter">(300)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>Español<span class="filter__counter">(210)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>Português<span class="filter__counter">(170)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>Italiano<span class="filter__counter">(174)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>Français<span class="filter__counter">(120)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>Polski<span class="filter__counter">(130)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>Deutsch<span class="filter__counter">(30)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>Bahasa Indonesia<span class="filter__counter">(20)</span></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ui form checkbox_sign cp_458">
                                                                            <div class="inline field">
                                                                                <div class="ui checkbox mncheck">
                                                                                    <input type="checkbox" tabindex="0" class="hidden">
                                                                                    <label>ภาษาไทย<span class="filter__counter">(10)</span></label>
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
                            </div>
                           
                        </div>
                        <div class="step-footer step-tab-pager">
                            <button data-direction="prev" class="btn btn-default steps_btn">PREVIOUS</button>
                            <button data-direction="next" class="btn btn-default steps_btn">Next</button>
                            <button data-direction="finish" class="btn btn-default steps_btn">Submit for Review</button>
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