<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function home(){
        return view('home');
    }

    public function register(){
        return view('registration/register');
    }

    public function login(){
        return view('registration/login');
    }

    public function homepage(){
        return view('homepage');
    }

    public function otp(){
        return view('registration/otp');
    }

    public function main(){
        return view('main');
    }



    // Instructor Function
    public function instructor_home(){
        return view('instructor/instructor_home');
    }

    public function instructor_dahsboard(){
        return view('instructor/instructor_dahsboard');
    }

    public function instructor_courses(){
        return view('instructor/instructor_courses');
    }


        // Student Function
        public function student_home(){
            return view('student/student_home');
        }

        public function student_dashboard(){
            return view('student/student_dashboard');
        }



    
    public function create_course(){
        return view('instructor/create_course');
    }

    public function art(){
        return view('course/art');
    }

    public function course(){
        return view('course/course');
    }

    public function course_details(){
        return view('course/course_details');
    }

    public function sign_out(Request $request){
        return view('registration/login');
    }



   
}

