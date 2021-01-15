@extends('student_layout')
@section('student_content')


<head>

       <link href="{{asset('assets')}}/css\texteditor.css?{{time()}}" rel="stylesheet">
        <link href="{{asset('assets')}}/css\jquery-te-1.4.0.css?{{time()}}" rel="stylesheet"> 
        {{-- <link href="{{asset('assets')}}/js\jquery-te-1.4.0.min.js?{{time()}}" rel="stylesheet">  --}}
    <link href="{{asset('assets')}}/frontend\css\instructor-dashboard.css?{{time()}}" rel="stylesheet">
    <link href="{{asset('assets')}}/frontend\css\instructor-responsive.css?{{time()}}" rel="stylesheet">
        <link href="{{asset('assets')}}/frontend\css\instructor-responsive.css?{{time()}}" rel="stylesheet">

        <script src="{{asset('assets')}}/js\jquery-te-1.4.0.min.js?{{time()}}"></script>


</head>
<div class="sa4d25">
    <div class="container">			
    				
        <div class="row">
            <div class="col-12">
                        
                        <div class="step-content">

                            <form action="submit_attachment" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="step-tab-panel step-tab-info active" id="tab_step1"> 
                                <div class="tab-from-content">
                                    <div class="title-icon">
                                        <h3 class="title"><i class="uil uil-info-circle"></i>Student Attachment Information</h3>
                                    </div>
                                    <div class="course__form">
                                        <div class="general_info10">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="ui search focus mt-30 lbel25">
                                                        <label>Title*</label>
                                                        <div class="ui left icon input swdh19">
                                                            <input class="prompt srch_explore" type="text" placeholder="Insert your Attachment title." name="title"  maxlength="60">															
                                                            <div class="badge_num">60</div>
                                                        </div>
                                                    </div>									
                                                </div>
                                           
                                                <div class="col-lg-12 col-md-12">
                                                    

                                                    <div class="course_des_textarea mt-30 lbel25">
                                                        <label>Description*</label>
                                                        <div class="course_des_bg">
                                                    
                                                            <div class="textarea_dt">															
                                                                <div class="ui form swdh339">
                                                                    <div class="field">

                                                                        <textarea  class="jqte-test" name="description" ></textarea>

                                                                    </div>
                                                                </div>										
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                       
                                           

                                         

                                                <div class="col-lg-4 col-md-6">
                                                    <div class="mt-30 lbel25">
                                                        <label>Category*</label>
                                                    </div>
                                                    <select class="ui hj145 dropdown cntry152 prompt srch_explore" name="category">
                                                        <option value="inspiring">Art</option>
                                                        <option value="parenting">Craft</option>
                                                        <option value="social_cause">Calligraphy</option>
                                                        <option value="art">Programming</option>
                
                                                        <option value="web_design">Web Design</option>
                                                        <option value="case_solving">Case Solving</option>
                                                        <option value="rubiks_cube_solving">Rubiks Cube Solving</option>
                                                       
                                                
                                                    </select>
                                                </div>

                                          
                                        
            												
                                            </div>
                                        </div>

                                        {{-- image --}}

                                       
                                       
                                                    <div class="col-lg-12">	
                                                        <div class="view_all_dt">	
                                                            <div class="view_img_left">	
                                                                <div class="view__img">	
                                                                    <img class="insert_blog_image" src="assets\frontend\images\courses\add_img.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="view_img_right">	
                                                                <h4>Upload Your Attachment Image</h4>
                                                                <p>Upload your image here. It must meet our image quality standards to be accepted. Important guidelines: 750x422 pixels; .jpg, .jpeg,. gif, or .png. no text on the image.</p>
                                                                <div class="upload__input">
                                                                    <div class="input-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" name="image"
                                                                            id="attachment_image" onchange="readURL(this)">
                                                                            <label class="custom-file-label insert_blog_image_label" for="inputGroupFile04">No Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                
                                                    </div>
                                                    <div class="col-lg-2 col-md-12">
                                                        <button class="part_btn_save prt-sv" type="submit" >Submit Your Attachment</button>
                                                    </div>
                                      
                                   

                                    </div>
                                </div>


                               
                            </div>
                            
                            

                            </form>
                        </div>
                        
                </div>
            </div>
        </div>
    </div> 



    <script src="resources\js\ck\ckeditor.js?{{time()}}"></script>
    <script>
CKEDITOR.replace('textarea');
</script>



    
@endsection