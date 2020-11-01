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

                    <div class="course-header">
                  
                    </div>

                    <div class="course-content-inner">

                        <ul id="video-slider" class="uk-switcher">


                            <li>
                                
                                @foreach ($contents as $content)
                                <li>
                                    <div class="video-responsive">
                                        <iframe src="{{$content->video_embed}}" frameborder="0"
                                            uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                                    </div>
                                </li>
                            @endforeach

                            </li>
                           
                         

                        </ul>

                    </div>

                </div>

                <!-- course sidebar -->

                <div class="course-sidebar">
                    <div class="course-sidebar-title">
                        <h3> Table of Course Contents </h3>
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
                                <li class="watched"> <a href="{{$content->video_embed}}"> {{$content->video_title}} <span> 
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


        <script>
            (function (window, document, undefined) {
                'use strict';
                if (!('localStorage' in window)) return;
                var nightMode = localStorage.getItem('gmtNightMode');
                if (nightMode) {
                    document.documentElement.className += ' night-mode';
                }
            })(window, document);


            (function (window, document, undefined) {

                'use strict';

                // Feature test
                if (!('localStorage' in window)) return;

                // Get our newly insert toggle
                var nightMode = document.querySelector('#night-mode');
                if (!nightMode) return;

                // When clicked, toggle night mode on or off
                nightMode.addEventListener('click', function (event) {
                    event.preventDefault();
                    document.documentElement.classList.toggle('night-mode');
                    if (document.documentElement.classList.contains('night-mode')) {
                        localStorage.setItem('gmtNightMode', true);
                        return;
                    }
                    localStorage.removeItem('gmtNightMode');
                }, false);

            })(window, document);
        </script>

        <script src="{{asset('assets')}}/frontend\course_js\jquery-2.2.4.min.js"></script>
        <script>
            function make_button_active(tab) {
                //Get item siblings
                var siblings = tab.siblings();

                /* Remove active class on all buttons
                siblings.each(function(){
                    $(this).removeClass('active');
                }) */

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