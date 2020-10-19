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

// Instructor Pages
Route::get('instructor_home','CustomController@instructor_home');
Route::get('instructor_home_layout','CustomController@instructor_home_layout');
Route::get('instructor_dahsboard','CustomController@instructor_dahsboard');
Route::get('create_course','CustomController@create_course');


// Course Pages
Route::get('art','CustomController@art');
Route::get('course','CustomController@course');
Route::get('course_details','CustomController@course_details');



Route::post('std_data_insert','data_insert_controller@std_data_insert');
Route::post('insert_instructor_data','data_insert_controller@insert_instructor_data');
Route::post('send_otp','data_insert_controller@send_otp');
Route::post('match_otp','data_insert_controller@match_otp');



