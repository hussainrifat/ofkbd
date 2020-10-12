<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function home(){
        return view('home');
    }

    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function homepage(){
        return view('homepage');
    }

    public function otp(){
        return view('otp');
    }

    public function main(){
        return view('main');
    }


    public function instructor_home(){
        return view('instructor/instructor_home');
    }

    public function instructor_dahsboard(){
        return view('instructor/instructor_dahsboard');
    }

    
    public function create_course(){
        return view('instructor/create_course');
    }



   
}

