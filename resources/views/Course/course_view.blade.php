<!doctype html>
<html lang="en">


<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus - Professional Learning Management HTML Template">


    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets')}}/frontend/css/course.css?{{time()}}">
    <link rel="stylesheet" href="{{asset('assets')}}/frontend/css/course_bootstrap.css?{{time()}}"> 
    <link rel="stylesheet" href="{{asset('assets')}}/frontend/css/course_framework.css?{{time()}}"> 

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="{{asset('assets')}}/frontend/css/course_icon.css?{{time()}}"> 

 
</head>


<body class="course-watch-page">

        <!-- Wrapper -->
        <div id="wrapper">

            <div class="course-layouts">

                <div class="course-content bg-dark">

                   

                    <div class="course-content-inner">

                        <ul id="video-slider" class="uk-switcher">


                            
                    
                            @foreach ($contents as $content)
                                <li>
                                  
                                    <div class="video-responsive">
                                        <iframe src="{{$content->video_embed}}" frameborder="0"
                                            uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                                    </div>
                                </li>
                            @endforeach
                              

                            
                           
                         

                        </ul>

                    </div>

                </div>

                <!-- course sidebar -->

                <div class="course-sidebar">
                    <div class="course-sidebar-title">
                        <h3> Table of Contents </h3>

                        <button type="button" onclick="goBack()" class="btn btn-primary btn-sm" style="margin-left: 20px">Back To Course</button>

                        


                    </div>

                    
                    
                    <div class="course-sidebar-container" data-simplebar>

                        <ul class="course-video-list-section" uk-accordion>

                   
                            <?php
                            $id = $_GET['id'];

                            ?>
                            <li class="uk-open">
                                <div class="uk-accordion-content">
                                    <!-- course-video-list -->


                                   
                                    <ul class="course-video-list highlight-watched"
                                        uk-switcher=" connect: #video-slider  ; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">

                                        @foreach ($contents as $content)
                                <li> <a href="{{$content->video_embed}}"> {{$content->video_title}} <span> 
                                    {{$content->video_time_duration}} Min </span> </a>
                                        </li>
                                        @endforeach
                                    </ul>


                                </div>
                            </li>

                        
                        </ul>


                    </div>

                    

                </div>

            </div>
            



        </div>

        


        

        <script src="{{asset('assets')}}/frontend\course_js\jquery-2.2.4.min.js"></script>
        <script>


            function make_button_active(tab) {
                //Get item siblings
                var siblings = tab.siblings();

                
                //Add the clicked button class
                tab.addClass('watched');
            }

            //Attach events to highlight-watched
            $(document).ready(function () {

                if (localStorage) {
                    var ind = localStorage['tab']
                    make_button_active($('.highlight-watched li').eq(ind));
                }

                $(".highlight-watched li").click(function () {
                    if (localStorage) {
                        localStorage['tab'] = $(this).index();
                    }
                    make_button_active($(this));
                });

            });

            function goBack() {
      window.history.back();
    }
        </script>




    <!-- javaScripts
    ================================================== -->
    <script src="{{asset('assets')}}/frontend\course_js\framework.js"></script>
    <script src="{{asset('assets')}}/frontend\course_js\jquery-3.3.1.min.js"></script>
    <script src="{{asset('assets')}}/frontend\course_js\simplebar.js"></script>
    <script src="{{asset('assets')}}/frontend\course_js\main.js"></script>
    <script src="{{asset('assets')}}/frontend\course_js\bootstrap-select.min.js"></script>


</body>


</html>