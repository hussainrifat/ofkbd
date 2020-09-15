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


Route::get('/','CustomController@home');
Route::get('/register','CustomController@register');
Route::get('/homepage','CustomController@homepage');
Route::get('/main','CustomController@main');


Route::post('std_data_insert','data_insert_controller@std_data_insert');
Route::post('insert_instructor_data','data_insert_controller@insert_instructor_data');

