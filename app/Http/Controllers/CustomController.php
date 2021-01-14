<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\ins_registraion;
use App\parents_information;
use App\std_registration;
use App\stu_course;
use App\User;
use App\video;
use Session;
use App\stu_courses;
use App\Report_admin;
use App\blog;
use App\course_feedback;



class CustomController extends Controller


{


    public function home(){


        $response = array();

        $course= course::
        orderBy('id','desc')
        ->take(3)
        ->get();
        for($i=0;$i<sizeof($course);$i++)
        {
            $ins_id = $course[$i]->instructor_id;
            $instructor_name = User::where('id',$ins_id)->first()->name;
            array_push($response,
            ['course_id'=>$course[$i]->id,
            'course_name'=>$course[$i]->course_name,
            'course_duration'=>$course[$i]->course_time_duration,
            'course_image'=>$course[$i]->course_image,
            'course_category'=>$course[$i]->course_category,
            'instructor_name'=>$instructor_name]);   
        }
        $course = json_decode(json_encode($response));


        $total_student=sizeof(std_registration::get());
        $total_instructor=sizeof(ins_registraion::get());
        $total_course=sizeof(course::get());
        $total_blog=sizeof(blog::get());



        return view('home',['course'=>$course,
        'total_student'=>$total_student,
        'total_instructor'=>$total_instructor,
        'total_course'=>$total_course,
        'total_blog'=>$total_blog,
        ]);
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

    


    public function sign_out(Request $request){
        auth()->logout();
        return view('registration/login');
    }


   
}

