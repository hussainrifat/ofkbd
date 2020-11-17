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
use App\course_feedback;

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


    public function add_content(){
        return view('instructor/add_content');
    }


    public function insert_content(Request $request){

        $video_name=$request->video_name;
        $video_link=$request->video_link;
        $video_description= $request->video_description;
        $video_time_duration= $request->video_time_duration;
        $course_id=$request->course_id;


                   file_put_contents("video.txt",$course_id);

                   video::create([
                    'video_title'=>$video_name, 
                    'video_embed'=>$video_link, 
                    'video_description'=>$video_description, 
                    'video_time_duration'=>$video_time_duration, 
                    'course_id'=>$course_id, 
                    ]);
                }




    public function instructor_courses(){

        $instructor_id = Session::get('user_id');
    
        $course = Course::where('instructor_id',$instructor_id)
        -> orderBy('id','desc')
        ->get();
        $user_name= User::where('id',$instructor_id)->first()->name;
    
        
        return view('instructor/instructor_courses',['courses'=>$course,'user_name'=>$user_name]);

    }


    
        // Instructor Single Course Content Controller

        public function course_details(Request $request){

            $course_id=$request->course;
            $course_details= course::where('id',$course_id)->first();
            $instructor_id=$course_details->instructor_id;
            $instructor_name = User::where('id',$instructor_id)->first()->name;
            // file_put_contents("test.txt",$instructor_name);
            $videos= $course_details->videoes;
            $user_id = auth()->user()->id;
    
    
            if($instructor_id==$user_id)
            {
                $match = 1;
            }
            else
            {
                $match = 0;
            }
    
            $review_info= course_feedback::where('course_id',$course_id)
            ->  orderBy('id','desc')
            ->get();
    
    
            $average_ratings= course_feedback::where('course_id',$course_id)->get();
    
            $sum=0;
    
            if(sizeof($average_ratings)==0)
            {
                $average_rating='No Rating Yet';
                $total_rating="0";
    
            }
            else
    
            {
                for($i=0;$i<sizeof($average_ratings);$i++)
    
                {
                    $rating=$average_ratings[$i]->rating;
                    $sum= ($sum+$rating);
        
                }
                $average_rating=$sum/sizeof($average_ratings);
    
    
               
                    $total_rating=sizeof($average_ratings);
      
            }
    
    
    
            $response= array();
            for($i=0;$i<sizeof($review_info);$i++)
            {
                // $rating= $review_info[$i]->rating;
                // $review=$review_info[$i]->review;
                $student_id=$review_info[$i]->student_id;
                $student_name= User::where('id',$student_id)->first()->name;
                 file_put_contents('review.txt',$student_name);
    
    
                array_push($response,
                ['rating'=> $review_info[$i]->rating,
                'review'=>$review_info[$i]->review,
                'student_name'=>$student_name
                ]);
    
            }
    
            $review = json_decode(json_encode($response));
    
    
    
            return view('course/course_details',['course_details'=>$course_details,'instructor_name'=>$instructor_name,'videoes'=>$videos,'match'=>$match,'review'=>$review,
            'average_rating'=>$average_rating,'total_rating'=>$total_rating]);
    
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
