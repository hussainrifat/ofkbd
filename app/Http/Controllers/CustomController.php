<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\User;
use Session;


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

        $instructor_id = Session::get('user_id');

        $course = Course::where('instructor_id',$instructor_id)->get();
        $user_name= User::where('id',$instructor_id)->first()->name;
    
        
        return view('instructor/instructor_courses',['courses'=>$course,'user_name'=>$user_name]);
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
        $course= course::all();
        return view('course/art');
    }

    public function courses(){
        return view('course/courses');
    }

    public function course(Request $request){
         $request->name;
         $response = array();

        $course= course::where('course_category',$request->name)->get();
        for($i=0;$i<sizeof($course);$i++)
        {
            $ins_id = $course[$i]->instructor_id;
            $instructor_name = User::where('id',$ins_id)->first()->name;
            array_push($response,['course_name'=>$course[$i]->course_name,'course_duration'=>$course[$i]->course_time_duration,'course_image'=>$course[$i]->course_image,'course_category'=>$course[$i]->course_category,'instructor_name'=>$instructor_name]);   
        }
        $course = json_decode(json_encode($response));
        // file_put_contents('course.txt',json_encode($response));
        return view('course/course',['course'=>$course]);



    }

    public function course_details(){
        return view('course/course_details');
    }

    public function course_view(){
        
        return view('course/course_view');
    }

    public function sign_out(Request $request){
        return view('registration/login');
    }



   
}

