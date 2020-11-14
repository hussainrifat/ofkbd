<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Registration Pages

Route::get('/','CustomController@home');
Route::get('register','CustomController@register');
Route::get('/login','CustomController@login');
Route::get('/main','CustomController@main');
Route::get('otp','CustomController@otp');
Route::get('sign_out','CustomController@sign_out');



// Layout Pages
Route::get('instructor_home_layout','CustomController@instructor_home_layout');


// Instructor Pages
Route::get('instructor_home','InstructorController@instructor_home');
Route::get('instructor_dahsboard','InstructorController@instructor_dahsboard');
Route::get('create_course','InstructorController@view_create_course');
Route::get('create_post','InstructorController@view_create_post');
Route::get('instructor_courses','InstructorController@instructor_courses');
Route::get('instructor_blog','InstructorController@instructor_blog');

// Adding New Courses
Route::post('create_course','data_insert_controller@create_course');
Route::post('create_post','blog_Controller@create_post');
Route::post('delete_course','InstructorController@delete_course');
Route::post('delete_blog','InstructorController@delete_blog');


// Edit And Update Instructor Profile Information

Route::post('viewInstructorProfileInfo','InstructorController@viewInstructorProfileInfo');
Route::post('updateInstructorProfileInfo','InstructorController@updateInstructorProfileInfo');
Route::post('updateInstructorPasswordInfo','InstructorController@updateInstructorPasswordInfo');






// Student Pages
Route::get('student_home','studentController@student_home');
Route::get('student_dashboard','studentController@student_dashboard');
Route::post('ReportToAdmin','CustomController@ReportToAdmin');
Route::get('student_courses','studentController@student_courses');
Route::post('add_review','studentController@add_review');


// Edit And Update Student Dahsboard

Route::post('viewStudentDashboardProfileInfo','studentController@viewStudentDashboardProfileInfo');
Route::post('updateStudentProfileInfo','studentController@updateStudentProfileInfo');
Route::post('updatestudentPasswordInfo','studentController@updatestudentPasswordInfo');
Route::post('updateStudentParentsInfo','studentController@updateStudentParentsInfo');






// Course Pages
Route::get('add_content','CustomController@add_content');
Route::post('insert_content','data_insert_controller@insert_content');
Route::get('courses','CustomController@courses');
Route::get('course','CustomController@course');

Route::get('course_details','CustomController@course_details');
Route::get('course_detail','CustomController@course_detail');


// Blog Pages
Route::get('instructor_blog_view','Blog_Controller@instructor_blog_view');
Route::get('blog_details','Blog_Controller@blog_details');
Route::get('student_blog_view','Blog_Controller@student_blog_view');
Route::get('student_blog_details','Blog_Controller@student_blog_details');



Route::get('course_view','CustomController@course_view');
Route::post('StudentCourseEnrollment','CustomController@StudentCourseEnrollment');





Route::post('std_data_insert','data_insert_controller@std_data_insert');
Route::post('insert_instructor_data','data_insert_controller@insert_instructor_data');
Route::post('send_otp','data_insert_controller@send_otp');
Route::post('match_otp','data_insert_controller@match_otp');


// Checking
Route::post('email_check','data_insert_controller@email_check');
Route::post('number_check','data_insert_controller@number_check');
Route::post('login_check','data_insert_controller@login_check');



// Admin Pages
Route::get('admin_all_instructors','admin_controller@view_admin_all_instructors');
Route::get('admin_all_students','admin_controller@admin_all_students');
Route::get('admin_all_courses','admin_controller@admin_all_courses');
Route::get('admin_all_report','admin_controller@admin_all_report');

Route::get('admin_login','admin_controller@admin_login');
Route::post('admin_login_check','admin_controller@admin_login_check');


// Edit And Update

// Edit And Update Admin All Student Dahsboard

Route::post('editStudentProfileInfo','admin_controller@editStudentProfileInfo');
Route::post('updateStudentInfo','admin_controller@updateStudentInfo');
Route::post('deleteStudentInfo','admin_controller@deleteStudentInfo');


// Edit And Update Admin All Instructor Dahsboard

Route::post('editInstructorInfo','admin_controller@editInstructorInfo');
Route::post('updateInstructorInfo','admin_controller@updateInstructorInfo');
Route::post('deleteInstructorInfo','admin_controller@deleteInstructorInfo');


// Edit And Update Admin All Course Dahsboard

Route::post('deleteCourseInfo','admin_controller@deleteCourseInfo');







// Edit And Update Video Content Instructor Dashboard

Route::post('viewCourseContentInfo','admin_controller@viewCourseContentInfo');
Route::post('updateCourseContentInfo','admin_controller@updateCourseContentInfo');
Route::post('deleteCourseContentInfo','admin_controller@deleteCourseContentInfo');



// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/instructor_donation', 'SslCommerzPaymentController@instructor_donation');
Route::get('/student_donation', 'SslCommerzPaymentController@student_donation');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END





