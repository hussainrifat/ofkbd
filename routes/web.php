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
Route::get('art','CustomController@art');
Route::get('courses','CustomController@courses');
Route::get('course','CustomController@course');
Route::get('course_details','CustomController@course_details');
Route::get('course_view','CustomController@course_view');



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




