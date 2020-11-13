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
        // file_put_contents('course.txt',json_encode($response));
        return view('home',['course'=>$course,]);
        // return view('home');
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

    


    // Instructor Course Add Content Controller

  

    public function add_content(){
        return view('instructor/add_content');
    }

    public function delete_course(Request $request){
        $course_id=$request->course_id;
        $instructor_id=Session::get('user_id');
        file_put_contents("Course_id.txt",$course_id);
        $course=course::where('instructor_id',$instructor_id)->where('id',$course_id)->delete();
    }



        // Instructor Single Course Content Controller

    public function course_details(Request $request){

        $course_id=$request->course;
        $course_details= course::where('id',$course_id)->first();
        $instructor_id=$course_details->instructor_id;
        $instructor_name = User::where('id',$instructor_id)->first()->name;
        // file_put_contents("test.txt",$instructor_name);
        $videos= $course_details->videoes;


        return view('course/course_details',['course_details'=>$course_details,'instructor_name'=>$instructor_name,'videoes'=>$videos]);

    }

    
    // Student Single Course Content Controller

    public function course_detail(Request $request){
        $user_id = auth()->user()->id;

        $course_id=$request->course;
        $course_details= course::where('id',$course_id)->first();
        $instructor_id=$course_details->instructor_id;
        $instructor_name = User::where('id',$instructor_id)->first()->name;
        $videos= $course_details->videoes;
        if(stu_course::where('user_id',$user_id)->where('course_id',$course_id)->first())
        {
            $enroll = 1;
        }
        else
        {
            $enroll = 0;
        }

        return view('course/course_detail',['course_details'=>$course_details,'instructor_name'=>$instructor_name,'videoes'=>$videos,'enroll'=>$enroll]);

    }


        // Student Course Category (ART/CRAFT) View Content Controller

    public function courses(){
        return view('course/courses');
    }



        // Student Courses Category Content View Content Controller

    public function course(Request $request){
         $request->name;
         $response = array();

        $course= course::where('course_category',$request->name)->get();
        for($i=0;$i<sizeof($course);$i++)
        {
            $ins_id = $course[$i]->instructor_id;
            $instructor_name = User::where('id',$ins_id)->first()->name;
            array_push($response,['course_id'=>$course[$i]->id,'course_name'=>$course[$i]->course_name,'course_duration'=>$course[$i]->course_time_duration,'course_image'=>$course[$i]->course_image,'course_category'=>$course[$i]->course_category,'instructor_name'=>$instructor_name]);   
        }
        $course = json_decode(json_encode($response));
        // file_put_contents('course.txt',json_encode($response));
        return view('course/course',['courses'=>$course]);

    }



  


    public function StudentCourseEnrollment(Request $request)
    {
        $course_id=$request->id;
        $user_id=Session::get('user_id');

        stu_course::create([
            'course_id'=>$course_id, 
            'user_id'=>$user_id,
            ]);
    }


    public function ReportToAdmin(Request $request)
    {
        $course_id=$request->course_id;
        $user_id=Session::get('user_id');
        $report_description=$request->report_description;
        file_put_contents("report.txt",$course_id);


        Report_admin::create([
            'course_id'=>$course_id, 
            'report_description'=>$report_description,
            ]);
    }





    public function course_view(Request $request){

        $id=$request->id;

        $video_view=video::where('course_id',$id)->get();
        file_put_contents('content.txt',$video_view);

        $response = array();

        for($i=0;$i<sizeof($video_view);$i++)
        {
            $video_title=$video_view[$i]->video_title;            
            $video_time_duration=$video_view[$i]->video_time_duration;
            $video_embed=$video_view[$i]->video_embed;

            // file_put_contents('content.txt',$video_name);

            array_push($response,['video_title'=>$video_title,'video_time_duration'=>$video_time_duration,'video_embed'=>$video_embed]);
        }
        
        $content = json_decode(json_encode($response));


        return view('course/course_view',['contents'=>$content]);


    }



    public function sign_out(Request $request){

        if(session()->has('user_id'))
        {

            $user_id=Session::get('user_id');
            // file_put_contents("logout1.txt",$user_id);

            session()->pull('user_id',null);
            $user_id=Session::get('user_id');
            // file_put_contents("logout2.txt",$user_id);
        }
        return view('registration/login');
    }


   
}

