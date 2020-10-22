@extends('student_layout')
@section('student_content')
<div class="sa4d25">
    <div class="container-fluid">			
        <div class="row">
            <div class="col-xl-9 col-lg-8">
       
                <div class="section3125 mt-50">
                    <h4 class="item_title">Courses</h4>
                    <a href="#" class="see150">Explore all</a>
                    <div class="la5lo1">
                        <div class="owl-carousel featured_courses owl-theme">
                            
                            {{-- course item start from here --}}
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <a href="course_detail_view.html" class="fcrse_img">
                                        <img src="assets\frontend\images\courses/art-1.jpg" alt="">
                                        <div class="course-overlay">
                                            <div class="badge_seller">Featured</div>
                                            <div class="crse_reviews">
                                                <i class='uil uil-star'></i>4.5
                                            </div>
                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                            <div class="crse_timer">
                                                25 hours
                                            </div>
                                        </div>
                                    </a>
                                    <div class="fcrse_content">
                                        <div class="eps_dots more_dropdown">
                                            <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                            <div class="dropdown-content">
                                                <span><i class='uil uil-share-alt'></i>Share</span>
                                                <span><i class="uil uil-heart"></i>Save</span>
                                                <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                             </div>																										
                                        </div>
                                        <div class="vdtodt">
                                            <span class="vdt14">5k views</span>
                                            <span class="vdt14">5 days ago</span>
                                        </div>
                                        <a href="course_detail_view.html" class="crse14s">আর্টের হাতেখড়ি</a>
                                        <a href="#" class="crse-cate">Art</a>
                                        <div class="auth1lnkprce">
                                            <p class="cr1fot">By <a href="#">Asfia Tabassum Borna</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <a href="course_detail_view.html" class="fcrse_img">
                                        <img src="assets\frontend\images\courses/robotics-1.jpg" alt="">
                                        <div class="course-overlay">
                                            <div class="badge_seller">Featured</div>
                                            <div class="crse_reviews">
                                                <i class='uil uil-star'></i>3.8
                                            </div>
                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                            <div class="crse_timer">
                                                25 hours
                                            </div>
                                        </div>
                                    </a>
                                    <div class="fcrse_content">
                                        <div class="eps_dots more_dropdown">
                                            <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                            <div class="dropdown-content">
                                                <span><i class='uil uil-share-alt'></i>Share</span>
                                                <span><i class="uil uil-heart"></i>Save</span>
                                                <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                             </div>																										
                                        </div>
                                        <div class="vdtodt">
                                            <span class="vdt14">1k views</span>
                                            <span class="vdt14">2 days ago</span>
                                        </div>
                                        <a href="course_detail_view.html" class="crse14s">রোবটিক্সের হাতেখড়ি ( আর্ডুইনো )</a>
                                        <a href="#" class="crse-cate">Robotics</a>
                                        <div class="auth1lnkprce">
                                            <p class="cr1fot">By <a href="#">Fahad Kabir Sezan</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <a href="course_detail_view.html" class="fcrse_img">
                                        <img src="assets\frontend\images\courses/art-2.jpg" alt="">
                                        <div class="course-overlay">
                                            <div class="badge_seller">Featured</div>
                                            <div class="crse_reviews">
                                                <i class='uil uil-star'></i>4.2
                                            </div>
                                            <span class="play_btn1"><i class="uil uil-play"></i></span>
                                            <div class="crse_timer">
                                                25 hours
                                            </div>
                                        </div>
                                    </a>
                                    <div class="fcrse_content">
                                        <div class="eps_dots more_dropdown">
                                            <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                            <div class="dropdown-content">
                                                <span><i class='uil uil-share-alt'></i>Share</span>
                                                <span><i class="uil uil-heart"></i>Save</span>
                                                <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                             </div>																										
                                        </div>
                                        <div class="vdtodt">
                                            <span class="vdt14">7k views</span>
                                            <span class="vdt14">14 days ago</span>
                                        </div>
                                        <a href="course_detail_view.html" class="crse14s">হাত দিয়ে যায় আঁকা ( Hand Shape Art )</a>
                                        <a href="#" class="crse-cate">Art</a>
                                        <div class="auth1lnkprce">
                                            <p class="cr1fot">By <a href="#">Sharmin Sultana</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                          {{-- course item end here --}}



                    
                        </div>
                    </div>
                </div>
                <div class="section3125 mt-30">
                    <h4 class="item_title">Newest Courses</h4>
                    <a href="#" class="see150">See all</a>
                    <div class="la5lo1">
                        <div class="owl-carousel featured_courses owl-theme">
                            
                                   {{-- course item start from here --}}
                                   <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="assets\frontend\images\courses/art-1.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Featured</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.5
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                                 </div>																										
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">5k views</span>
                                                <span class="vdt14">5 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">আর্টের হাতেখড়ি</a>
                                            <a href="#" class="crse-cate">Art</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Asfia Tabassum Borna</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
    
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="assets\frontend\images\courses/robotics-1.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Featured</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>3.8
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                                 </div>																										
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">1k views</span>
                                                <span class="vdt14">2 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">রোবটিক্সের হাতেখড়ি ( আর্ডুইনো )</a>
                                            <a href="#" class="crse-cate">Robotics</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Fahad Kabir Sezan</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
    
    
                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="assets\frontend\images\courses/art-2.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Featured</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.2
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                                 </div>																										
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">7k views</span>
                                                <span class="vdt14">14 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">হাত দিয়ে যায় আঁকা ( Hand Shape Art )</a>
                                            <a href="#" class="crse-cate">Art</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Sharmin Sultana</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="assets\frontend\images\courses/art-2.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Featured</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.2
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                                 </div>																										
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">7k views</span>
                                                <span class="vdt14">14 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">হাত দিয়ে যায় আঁকা ( Hand Shape Art )</a>
                                            <a href="#" class="crse-cate">Art</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Sharmin Sultana</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="fcrse_1 mb-20">
                                        <a href="course_detail_view.html" class="fcrse_img">
                                            <img src="assets\frontend\images\courses/art-2.jpg" alt="">
                                            <div class="course-overlay">
                                                <div class="badge_seller">Featured</div>
                                                <div class="crse_reviews">
                                                    <i class='uil uil-star'></i>4.2
                                                </div>
                                                <span class="play_btn1"><i class="uil uil-play"></i></span>
                                                <div class="crse_timer">
                                                    25 hours
                                                </div>
                                            </div>
                                        </a>
                                        <div class="fcrse_content">
                                            <div class="eps_dots more_dropdown">
                                                <a href="#"><i class='uil uil-ellipsis-v'></i></a>
                                                <div class="dropdown-content">
                                                    <span><i class='uil uil-share-alt'></i>Share</span>
                                                    <span><i class="uil uil-heart"></i>Save</span>
                                                    <span><i class="uil uil-windsock"></i>Report To Admin</span>
                                                 </div>																										
                                            </div>
                                            <div class="vdtodt">
                                                <span class="vdt14">7k views</span>
                                                <span class="vdt14">14 days ago</span>
                                            </div>
                                            <a href="course_detail_view.html" class="crse14s">হাত দিয়ে যায় আঁকা ( Hand Shape Art )</a>
                                            <a href="#" class="crse-cate">Art</a>
                                            <div class="auth1lnkprce">
                                                <p class="cr1fot">By <a href="#">Sharmin Sultana</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
    
    
    
                              {{-- course item end here --}}
                        </div>
                    </div>
                </div>
                

                {{-- Popular Instructor Section Start Here (Expand) --}}
                {{-- <div class="section3125 mt-50">
                    <h4 class="item_title">Popular Instructors</h4>
                    <a href="all_instructor.html" class="see150">See all</a>
                    <div class="la5lo1">
                        <div class="owl-carousel top_instrutors owl-theme">
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <div class="tutor_img">
                                        <a href="instructor_profile_view.html"><img src="assets\frontend\images\left-imgs/img-1.jpg" alt=""></a>												
                                    </div>
                                    <div class="tutor_content_dt">
                                        <div class="tutor150">
                                            <a href="instructor_profile_view.html" class="tutor_name">John Doe</a>
                                            <div class="mef78" title="Verify">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="tutor_cate">Wordpress &amp; Plugin Tutor</div>
                                        <ul class="tutor_social_links">
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <div class="tut1250">
                                            <span class="vdt15">100K Students</span>
                                            <span class="vdt15">15 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <div class="tutor_img">
                                        <a href="instructor_profile_view.html"><img src="assets\frontend\images\left-imgs/img-2.jpg" alt=""></a>											
                                    </div>
                                    <div class="tutor_content_dt">
                                        <div class="tutor150">
                                            <a href="instructor_profile_view.html" class="tutor_name">Kerstin Cable</a>
                                            <div class="mef78" title="Verify">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="tutor_cate">Language Learning Coach, Writer, Online Tutor</div>
                                        <ul class="tutor_social_links">
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <div class="tut1250">
                                            <span class="vdt15">14K Students</span>
                                            <span class="vdt15">11 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <div class="tutor_img">
                                        <a href="instructor_profile_view.html"><img src="assets\frontend\images\left-imgs/img-3.jpg" alt=""></a>												
                                    </div>
                                    <div class="tutor_content_dt">
                                        <div class="tutor150">
                                            <a href="instructor_profile_view.html" class="tutor_name">Jose Portilla</a>
                                            <div class="mef78" title="Verify">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="tutor_cate">Head of Data Science, Pierian Data Inc.</div>
                                        <ul class="tutor_social_links">
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <div class="tut1250">
                                            <span class="vdt15">1M Students</span>
                                            <span class="vdt15">25 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <div class="tutor_img">
                                        <a href="instructor_profile_view.html"><img src="assets\frontend\images\left-imgs/img-4.jpg" alt=""></a>											
                                    </div>
                                    <div class="tutor_content_dt">
                                        <div class="tutor150">
                                            <a href="instructor_profile_view.html" class="tutor_name">Farhat Amin</a>
                                            <div class="mef78" title="Verify">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="tutor_cate">Cookery Coach</div>
                                        <ul class="tutor_social_links">
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <div class="tut1250">
                                            <span class="vdt15">1.5K Students</span>
                                            <span class="vdt15">9 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>									
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <div class="tutor_img">
                                        <a href="instructor_profile_view.html"><img src="assets\frontend\images\left-imgs/img-5.jpg" alt=""></a>												
                                    </div>
                                    <div class="tutor_content_dt">
                                        <div class="tutor150">
                                            <a href="instructor_profile_view.html" class="tutor_name">Kyle Pew</a>
                                            <div class="mef78" title="Verify">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="tutor_cate">Microsoft Certified Trainer - 380,000+ Udemy Students</div>
                                        <ul class="tutor_social_links">
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <div class="tut1250">
                                            <span class="vdt15">300K Students</span>
                                            <span class="vdt15">18 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <div class="tutor_img">
                                        <a href="instructor_profile_view.html"><img src="assets\frontend\images\left-imgs/img-7.jpg" alt=""></a>												
                                    </div>
                                    <div class="tutor_content_dt">
                                        <div class="tutor150">
                                            <a href="instructor_profile_view.html" class="tutor_name">Jaysen Batchelor</a>
                                            <div class="mef78" title="Verify">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="tutor_cate">Illustrator &amp; Designer</div>
                                        <ul class="tutor_social_links">
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <div class="tut1250">
                                            <span class="vdt15">491K Students</span>
                                            <span class="vdt15">13 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <div class="tutor_img">
                                        <a href="instructor_profile_view.html"><img src="assets\frontend\images\left-imgs/img-8.jpg" alt=""></a>												
                                    </div>
                                    <div class="tutor_content_dt">
                                        <div class="tutor150">
                                            <a href="instructor_profile_view.html" class="tutor_name">Quinton Batchelor</a>
                                            <div class="mef78" title="Verify">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="tutor_cate">Photographer & Instructor</div>
                                        <ul class="tutor_social_links">
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <div class="tut1250">
                                            <span class="vdt15">364K Students</span>
                                            <span class="vdt15">6 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_1 mb-20">
                                    <div class="tutor_img">
                                        <a href="instructor_profile_view.html"><img src="assets\frontend\images\left-imgs/img-6.jpg" alt=""></a>												
                                    </div>
                                    <div class="tutor_content_dt">
                                        <div class="tutor150">
                                            <a href="instructor_profile_view.html" class="tutor_name">Eli Natoli</a>
                                            <div class="mef78" title="Verify">
                                                <i class="uil uil-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="tutor_cate">Entrepreneur - Passionate Teacher</div>
                                        <ul class="tutor_social_links">
                                            <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" class="ln"><i class="fab fa-linkedin-in"></i></a></li>
                                            <li><a href="#" class="yu"><i class="fab fa-youtube"></i></a></li>
                                        </ul>
                                        <div class="tut1250">
                                            <span class="vdt15">615K Students</span>
                                            <span class="vdt15">12 Courses</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	 --}}
                {{-- Popular Instructor Section End Here --}}

            </div>
            <div class="col-xl-3 col-lg-4">
                <div class="right_side">
                
                    <div class="fcrse_3">
                        <div class="cater_ttle">
                            <h4>Top Categories</h4>
                        </div>
                        <ul class="allcate15">
                            <li><a href="#" class="ct_item"><i class='uil uil-arrow'></i>Art</a></li>
                            <li><a href="#" class="ct_item"><i class='uil uil-graph-bar'></i>Craft</a></li>
                            <li><a href="#" class="ct_item"><i class='uil uil-monitor'></i>Robotics</a></li>
                            <li><a href="#" class="ct_item"><i class='uil uil-ruler'></i>Programming</a></li>
                
                        </ul>
                    </div>
                    <div class="strttech120">
                        <h4>Become an Instructor</h4>
                        <p>Start Your Instructor Journey With OFK.</p>
                        <button class="Get_btn" onclick="window.location.href = 'register';">Register As Instructor</button>
                    </div>
                </div>
            </div>



            <div class="col-xl-12 col-lg-12">
                <div class="section3125 mt-30">
                    <h4 class="item_title">Course Review</h4>
                    <div class="la5lo1">
                        <div class="owl-carousel Student_says owl-theme">
                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <div class="say_content">
                                        <p>"অপরচুনিটিজ ফর কিডসের কোর্স থেকে আমি অনেক কিছু শিখতে পেরেছি। ধন্যবাদ অনেক!"</p>
                                    </div>
                                    <div class="st_group">
                                        <div class="stud_img">
                                            <img src="assets\frontend\images\left-imgs/img-4.jpg" alt="">												
                                        </div>
                                        <h4>Anila Khan</h4>
                                    </div>											
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <div class="say_content">
                                        <p>"Your course is really helpfull and well organized. Thanks OFK Thanks OFK and best wishes for OFK"</p>
                                    </div>
                                    <div class="st_group">
                                        <div class="stud_img">
                                            <img src="assets\frontend\images\left-imgs/img-3.jpg" alt="">												
                                        </div>
                                        <h4>Saif Abrar</h4>
                                    </div>											
                                </div>
                            </div>

                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <div class="say_content">
                                        <p>"অপরচুনিটিজ ফর কিডসের কোর্স থেকে আমি অনেক কিছু শিখতে পেরেছি। ধন্যবাদ অনেক!"</p>
                                    </div>
                                    <div class="st_group">
                                        <div class="stud_img">
                                            <img src="assets\frontend\images\left-imgs/img-4.jpg" alt="">												
                                        </div>
                                        <h4>Sabrina Hasin</h4>
                                    </div>											
                                </div>
                            </div>
                            <div class="item">
                                <div class="fcrse_4 mb-20">
                                    <div class="say_content">
                                        <p>"আমি আপনাদের রোবটিক্সের পুরো কোর্সটি দেখেছি এবং কয়েকটি ছোট ছোট প্রজেক্ট বানিয়েছি। আরো কোর্স বানালে উপকৃত হবো।"</p>
                                    </div>
                                    <div class="st_group">
                                        <div class="stud_img">
                                            <img src="assets\frontend\images\left-imgs/img-1.jpg" alt="">												
                                        </div>
                                        <h4>Mahmud Zayn</h4>
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
{{-- OFK MAIN BODY END --}}
@endsection