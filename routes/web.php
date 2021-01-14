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


Route::group(['middleware' => 'instructor'], function () {

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
Route::post('create_course','InstructorController@create_course');
Route::post('create_post','blog_Controller@create_post');
Route::post('delete_course','InstructorController@delete_course');
Route::post('delete_blog','InstructorController@delete_blog');


// Course Pages
Route::get('add_content','InstructorController@add_content');
Route::get('course_details','InstructorController@course_details');

// Course Pages video adding
Route::post('insert_content','InstructorController@insert_content');


// Edit And Update Instructor Profile Information

Route::post('viewInstructorProfileInfo','InstructorController@viewInstructorProfileInfo');
Route::post('updateInstructorProfileInfo','InstructorController@updateInstructorProfileInfo');
Route::post('updateInstructorPasswordInfo','InstructorController@updateInstructorPasswordInfo');


// Blog Pages
Route::get('instructor_blog_view','Blog_Controller@instructor_blog_view');
Route::get('blog_details','Blog_Controller@blog_details');


// Edit And Update Video Content Instructor Dashboard

Route::post('viewCourseContentInfo','InstructorController@viewCourseContentInfo');
Route::post('updateCourseContentInfo','InstructorController@updateCourseContentInfo');
Route::post('deleteCourseContentInfo','InstructorController@deleteCourseContentInfo');

Route::get('instructor_course_view','InstructorController@course_view');

    
});




// Student Middleware

Route::group(['middleware' => 'student'], function () {


    
// Student Pages
Route::get('student_home','studentController@student_home');
Route::get('student_dashboard','studentController@student_dashboard');
Route::post('ReportToAdmin','studentController@ReportToAdmin');
Route::get('student_courses','studentController@student_courses');
Route::post('add_review','studentController@add_review');
Route::get('quiz/{id}','studentController@quiz');
Route::post('test_insert','studentController@testDataInsert')->name("test_insert");



// Edit And Update Student Dahsboard
Route::post('viewStudentDashboardProfileInfo','studentController@viewStudentDashboardProfileInfo');
Route::post('updateStudentProfileInfo','studentController@updateStudentProfileInfo');
Route::post('updatestudentPasswordInfo','studentController@updatestudentPasswordInfo');
Route::post('updateStudentParentsInfo','studentController@updateStudentParentsInfo');


Route::get('courses','StudentController@courses');
Route::get('course','StudentController@course');
// Student Single Course View
Route::get('course_detail','StudentController@course_detail');

Route::get('course_view','StudentController@course_view');
Route::post('StudentCourseEnrollment','StudentController@StudentCourseEnrollment');

// Blog Pages
Route::get('student_blog_view','Blog_Controller@student_blog_view');
Route::get('student_blog_details','Blog_Controller@student_blog_details');


    
});




// Registration Pages

Route::get('/','CustomController@home');
Route::get('register','CustomController@register');
Route::get('/login','CustomController@login');
Route::get('/main','CustomController@main');
Route::get('otp','CustomController@otp');
Route::get('resend_otp','data_insert_controller@resend_otp');
Route::post('resend_otp_check','data_insert_controller@resend_otp_check');

Route::get('sign_out','CustomController@sign_out');




Route::post('std_data_insert','data_insert_controller@std_data_insert');
Route::post('insert_instructor_data','data_insert_controller@insert_instructor_data');
Route::post('send_otp','data_insert_controller@send_otp');
Route::post('match_otp','data_insert_controller@match_otp');


// Checking
Route::post('email_check','data_insert_controller@email_check');
Route::post('number_check','data_insert_controller@number_check');
Route::post('login_check','data_insert_controller@login_check');


Route::group(['middleware' => 'admin'], function () {

Route::get('admin_all_instructors','admin_controller@view_admin_all_instructors');
Route::get('admin_all_students','admin_controller@admin_all_students');
Route::get('admin_all_courses','admin_controller@admin_all_courses');
Route::get('admin_all_report','admin_controller@admin_all_report');
Route::get('admin_all_blog','admin_controller@admin_all_blog');

Route::get('admin_log_out','admin_controller@admin_log_out');


// Edit And Update in Admin All Student Dahsboard

Route::post('editStudentProfileInfo','admin_controller@editStudentProfileInfo');
Route::post('updateStudentInfo','admin_controller@updateStudentInfo');
Route::post('deleteStudentInfo','admin_controller@deleteStudentInfo');


// Edit And Update in Admin All Instructor Dahsboard

Route::post('editInstructorInfo','admin_controller@editInstructorInfo');
Route::post('updateInstructorInfo','admin_controller@updateInstructorInfo');
Route::post('deleteInstructorInfo','admin_controller@deleteInstructorInfo');


// Edit And Update Admin All Course Dahsboard
Route::post('editAdminCourseInfo','admin_controller@editAdminCourseInfo');
Route::post('updateAdminCourseInfo','admin_controller@updateAdminCourseInfo');
Route::post('deleteCourseInfo','admin_controller@deleteCourseInfo');
Route::post('deleteCourseInfo','admin_controller@deleteCourseInfo');


Route::post('ViewCourseActiveStatus','admin_controller@ViewCourseActiveStatus');
Route::post('updateCourseActiveStatus','admin_controller@updateCourseActiveStatus');

// Edit And Update Admin All Blog Dahsboard
// Route::post('editAdminCourseInfo','admin_controller@editAdminCourseInfo');
// Route::post('updateAdminCourseInfo','admin_controller@updateAdminCourseInfo');
Route::post('deleteBlog','admin_controller@deleteBlog');


    
});
// Admin Pages
Route::get('admin_login','admin_controller@admin_login');
Route::post('admin_login_check','admin_controller@admin_login_check');


// Edit And Update



// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/visitor_donation', 'SslCommerzPaymentController@visitor_donation');
Route::get('/student_donation', 'SslCommerzPaymentController@student_donation');

Route::post('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::post('/success', 'SslCommerzPaymentController@success');
Route::post('/fail', 'SslCommerzPaymentController@fail');
Route::post('/cancel', 'SslCommerzPaymentController@cancel');

Route::post('/ipn', 'SslCommerzPaymentController@ipn');
//SSLCOMMERZ END





