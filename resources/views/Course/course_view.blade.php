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

                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/9gTw2EDkaDQ" frameborder="0"
                                        uk-video="automute: true" allowfullscreen uk-responsive></iframe>
                                </div>

                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/YcApt9RgiT0" frameborder="0"
                                        allowfullscreen></iframe>
                                </div>

                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/CGSdK7FI9MY" frameborder="0"
                                        allowfullscreen uk-responsive></iframe>
                                </div>
                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/4I1WgJz_lmA" frameborder="0"
                                        allowfullscreen uk-responsive></iframe>
                                </div>
                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/dDn9uw7N9Xg" frameborder="0"
                                        allowfullscreen uk-responsive></iframe>
                                </div>
                            </li>
                            <li>
                                <div class="video-responsive">
                                    <iframe src="https://www.youtube.com/embed/CPcS4HtrUEU" frameborder="0"
                                        allowfullscreen uk-responsive></iframe>
                                </div>
                            </li>

                        </ul>

                    </div>

                </div>

                <!-- course sidebar -->

                <div class="course-sidebar">
                    <div class="course-sidebar-title">
                        <h3> Table of Contents </h3>
                    </div>
                    <div class="course-sidebar-container" data-simplebar>

                        <ul class="course-video-list-section" uk-accordion>

                            <li>
                                <a class="uk-accordion-title" href="#"> Getting Started with HTML5 </a>
                                <div class="uk-accordion-content">
                                    <!-- course-video-list -->
                                    <ul class="course-video-list highlight-watched">
                                        <li class="watched"> <a href="#"> What Is HTML? <span> 2 min </span> </a> </li>
                                        <li class="watched"> <a href="#"> Introduction to HTML5 <span> 3 min </span>
                                            </a>
                                        </li>
                                        <li class="watched"> <a href="#"> Getting the Browser <span> 5 min </span> </a>
                                        </li>
                                        <li class="watched"> <a href="#"> Setting Up the Editor <span> 2 min </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="uk-open">
                                <a class="uk-accordion-title" href="#"> Your First webpage </a>
                                <div class="uk-accordion-content">
                                    <!-- course-video-list -->
                                    <ul class="course-video-list highlight-watched"
                                        uk-switcher=" connect: #video-slider  ; animation: uk-animation-slide-right-small, uk-animation-slide-left-medium">
                                        <li class="watched"> <a href="#"> Creating First Page <span> 23 min </span> </a>
                                        </li>
                                        <li> <a href="#"> Headings in HTML <span> 23 min </span> </a> </li>
                                        <li> <a href="#"> The paragraph tag <span> 23 min </span> </a> </li>
                                        <li> <a href="#"> Emphasis and Strong Tag <span> 23 min </span> </a> </li>
                                        <li> <a href="#"> Text Formatting <span> 23 min </span> </a> </li>
                                        <li> <a href="#"> Working with Images <span> 23 min </span> </a> </li>
                                    </ul>

                                </div>
                            </li>

                            <li>
                                <a class="uk-accordion-title" href="#"> Some Special Tags </a>
                                <div class="uk-accordion-content">
                                    <!-- course-video-list -->
                                    <ul class="course-video-list">
                                        <li> <a href="course-lesson-1.html"> Inserting Images <span> 23 min </span> </a> </li>
                                        <li> <a href="course-lesson-1.html"> Constructing Lists <span> 23 min </span> </a> </li>
                                        <li> <a href="course-lesson-1.html"> Horizontal Rule Tag <span> 23 min </span> </a> </li>
                                        <li> <a href="course-lesson-1.html"> Validation <span> 23 min </span> </a> </li>
                                        <li> <a href="course-lesson-1.html"> Comments Tag <span> 23 min </span> </a> </li>
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