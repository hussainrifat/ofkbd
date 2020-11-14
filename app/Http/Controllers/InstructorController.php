<?php

namespace App\Http\Controllers;

use App\blog;
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
use Illuminate\Support\Facades\Hash;


class InstructorController extends Controller
{


    public function instructor_home(Request $request){
        $user_name= Session::get('user_name');
        $user_email= Session::get('user_email');

        file_put_contents("session.txt",$user_name);

        $response = array();

                $course= course::
                orderBy('id','desc')
                ->take(5)
                ->get();

        for($i=0;$i<sizeof($course);$i++)
        {
            $ins_id = $course[$i]->instructor_id;
            $instructor_name = User::where('id',$ins_id)->first()->name;
            array_push($response,
            ['id'=>$course[$i]->id,
            'course_name'=>$course[$i]->course_name,
            'course_time_duration'=>$course[$i]->course_time_duration,
            'course_image'=>$course[$i]->course_image,
            'course_category'=>$course[$i]->course_category,
            'instructor_name'=>$instructor_name]);   
        }

        $course = json_decode(json_encode($response));
        return view('instructor/instructor_home',
        ['course'=>$course,'user_name'=>$user_name,'user_email'=>$user_email]);
    }




    
    public function instructor_dahsboard(){

        $instructor_id=Session::get('user_id');
        $instructor_info= user::where('id',$instructor_id)->first();
        
        $course = Course::where('instructor_id',$instructor_id)
        -> orderBy('id','desc')
        ->get();
        $user_name= User::where('id',$instructor_id)->first()->name;


        return view('instructor/instructor_dahsboard',['instructor'=>$instructor_info,'courses'=>$course,'user_name'=>$user_name,]);
    }




    public function instructor_courses(){

        $instructor_id = Session::get('user_id');
    
        $course = Course::where('instructor_id',$instructor_id)
        -> orderBy('id','desc')
        ->get();
        $user_name= User::where('id',$instructor_id)->first()->name;
    
        
        return view('instructor/instructor_courses',['courses'=>$course,'user_name'=>$user_name]);

    }

    


    public function delete_course(Request $request){
        $course_id=$request->course_id;
        $instructor_id=Session::get('user_id');
        file_put_contents("Course_id.txt",$course_id);
        $course=course::where('instructor_id',$instructor_id)->where('id',$course_id)->delete();
    }

    public function delete_blog(Request $request){
        $id=$request->id;
        $instructor_id=Session::get('user_id');
        $blog=blog::where('user_id',$instructor_id)->where('id',$id)->delete();
    }


    public function instructor_blog(){

        $instructor_id = Session::get('user_id');
    
        $blog = blog::where('user_id',$instructor_id)
        -> orderBy('id','desc')
        ->get();
        $user_name= User::where('id',$instructor_id)->first()->name;
    
        
        return view('instructor/instructor_blog',['blogs'=>$blog,'user_name'=>$user_name]);

    }

    public function view_create_course(){
        return view('instructor/create_course');
    }


    public function view_create_post(){

        return view('instructor/create_post');
    }



    //Instructor Profile Start Here


    public function  viewInstructorProfileInfo(Request $request){
        $instructors= ins_registraion::where('user_id',$request->id)->first();
        $user_info= user::where('id',$request->id)->first();
        $name=$user_info->name;
        $email=$user_info->email;
        $contact_number=$user_info->contact_number;
        $password=$user_info->password;

        return json_encode(['id'=>$request->id,'name'=>$name,'email'=>$email,'contact_number'=>$contact_number,'password'=>$password]);
    }


    public function updateInstructorProfileInfo(Request $request)
    {
        user::where('id',$request->id)->update(['name'=>$request->name,'contact_number'=>$request->contact_number,'email'=>$request->email,'password'=>$request->password]);
    }


    public function updateInstructorPasswordInfo(Request $request)
    {
      
    
          $data= (user::where('id', $request->id)->first());
          file_put_contents("oldpasswword.txt",$request->oldpassword);


          if (Hash::check($request->oldpassword, $data['password'])) {
              user::where('id', $request->id)->update(['password'=>Hash::make($request->newpassword)]);
  
              echo "ok";
          }
      
    

      else {
          echo "not ok";
      }

    }



}
