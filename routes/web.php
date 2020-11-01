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
Route::get('instructor_home','CustomController@instructor_home');
Route::get('instructor_home_layout','CustomController@instructor_home_layout');
Route::get('instructor_dahsboard','CustomController@instructor_dahsboard');
Route::get('create_course','CustomController@create_course');
Route::get('instructor_courses','CustomController@instructor_courses');




// Student Pages
Route::get('student_home','CustomController@student_home');
Route::get('student_layout','CustomController@student_layout');
Route::get('student_dashboard','CustomController@student_dashboard');


// Course Pages
Route::get('add_content','CustomController@add_content');
Route::post('insert_content','data_insert_controller@insert_content');
Route::get('courses','CustomController@courses');
Route::get('course','CustomController@course');
// Route::get('course_details','CustomController@course_details');

// Route::get("/course_details", function(){
//     return View ("course/course_details");
//  });


Route::get('course_view','CustomController@course_view');


Route::post('delete_course','CustomController@delete_course');
Route::get('course_details','CustomController@course_details');
Route::get('course_detail','CustomController@course_detail');


Route::post('std_data_insert','data_insert_controller@std_data_insert');
Route::post('insert_instructor_data','data_insert_controller@insert_instructor_data');
Route::post('send_otp','data_insert_controller@send_otp');
Route::post('match_otp','data_insert_controller@match_otp');


// Checking
Route::post('email_check','data_insert_controller@email_check');
Route::post('number_check','data_insert_controller@number_check');
Route::post('login_check','data_insert_controller@login_check');


// Adding Video & Courses
Route::post('create_course','data_insert_controller@create_course');




// Admin Pages
Route::get('admin_all_instructors','admin_controller@view_admin_all_instructors');
Route::get('admin_all_students','admin_controller@admin_all_students');
Route::get('admin_all_courses','admin_controller@admin_all_courses');

Route::get('admin_login','admin_controller@admin_login');
Route::post('admin_login_check','admin_controller@admin_login_check');


// Edit And Update
Route::post('editStudentInfo','admin_controller@editStudentInfo');
Route::post('updateStudentInfo','admin_controller@updateStudentInfo');
Route::post('deleteStudentInfo','admin_controller@deleteStudentInfo');


Route::post('editInstructorInfo','admin_controller@editInstructorInfo');
Route::post('updateInstructorInfo','admin_controller@updateInstructorInfo');
Route::post('deleteInstructorInfo','admin_controller@deleteInstructorInfo');


Route::post('deleteCourseInfo','admin_controller@deleteCourseInfo');



Route::post('viewInstructorProfileInfo','admin_controller@viewInstructorProfileInfo');
Route::post('updateInstructorProfileInfo','admin_controller@updateInstructorProfileInfo');
Route::post('updateInstructorPasswordInfo','admin_controller@updateInstructorPasswordInfo');


Route::post('viewStudentDashboardProfileInfo','admin_controller@viewStudentDashboardProfileInfo');
Route::post('updateStudentProfileInfo','admin_controller@updateStudentProfileInfo');
Route::post('updatestudentPasswordInfo','admin_controller@updatestudentPasswordInfo');


Route::post('viewCourseContentInfo','admin_controller@viewCourseContentInfo');
Route::post('updateCourseContentInfo','admin_controller@updateCourseContentInfo');
Route::post('deleteCourseContentInfo','admin_controller@deleteCourseContentInfo');





