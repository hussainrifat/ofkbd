<?php

namespace App\Http\Controllers;

use App\ins_registraion;
use App\ins_registration;
use App\instructor_registration;
use App\otp;
use App\std_registration;
use App\User;
use App\course;

use Session;
// use Hash;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class data_insert_controller extends Controller
{


    // Student And Instructor Registration Start Here
    public function std_data_insert(Request $request)
    {
        
        // std_registration::create($request->all());

        $name= $request->name;
        $std_institute= $request->institute;
        $std_class= $request->class;
        $contact_number= $request->contact_number;
        $email= $request->email;
        $password=Hash::make($request->password);


        User::create([
        'name'=>$name, 
        'contact_number'=>$contact_number,
        'email'=>$email,        
        'password' =>$password,
        ]);


        $user_id = User::where("email",$email)->first()->id;
        Session::put('user_id',$user_id);
        $this->send_otp($user_id);

        std_registration::create([
            'std_institute'=>$std_institute,
            'user_id'=>$user_id,
            'std_class'=>$std_class]);
    }


    
    public function insert_instructor_data(Request $request)
    {
        // ins_registration::create($request->all());

        $name= $request->ins_name;
        $contact_number= $request->ins_number;
        $email= $request->ins_email;
        $password=Hash::make($request->ins_password);
        $expertise= $request->ins_expertise;

        user::create([
        'name'=>$name, 
        'contact_number'=>$contact_number,
        'email'=>$email,        
        'password' =>$password,
        ]);
        $user_id = User::where("email",$email)->first()->id;
        Session::put('user_id',$user_id);
        $this->send_otp($user_id);



        ins_registraion::create([
            'user_id'=>$user_id,
            'expertise'=>$expertise,
            ]);

            //file_put_contents("tes.txt",Session::get('user_id'));
        
        
    }

        // Student And Instructor Registration Ends Here


        // OTP Match Start Here


   function send_otp($user_id)
   {
    $otp=mt_rand(1000,9999); 
     if(otp::where('user_id',$user_id)->first())
     {
         otp::where('user_id',$user_id)->update(['otp'=>$otp]);
     }
     else{
        otp::create([
            'user_id'=>$user_id,
            'otp'=>$otp,
        ]);
     }  
   }

   public function match_otp(Request $request)
   {
      $user_otp= $request->user_otp;
      $user_id= Session::get('user_id');


    if(otp::where('user_id',$user_id)->where('otp',$user_otp)->first())
      {

     echo "ok"; }
     
        else {
            echo "not ok";
        }
   }

           // OTP Match Ends Here



    
    
           // Registration Email And Mobile Number Check Start Here



    public function email_check(Request $request)
    {
        $email= $request->email;

                if(user::where('email',$email)->first())
                {
          
               echo "match"; }
               
                  else {
                      echo "not match";
                  }

    }

    public function number_check(Request $request)
    {
        $contact_number= $request->contact_number;

                if(user::where('contact_number',$contact_number)->first())
                {
          
               echo "match"; }
               
                  else {
                      echo "not match";
                  }

    }

    // Registration Email And Mobile Number Check Ends Here



    public function login_check(Request $request){
        $contact_number=$request->contact_number;
        $password=$request->password;


        if (user::where('contact_number', $contact_number)->where('password', $password)->first()) {

            $user_id= User::where("contact_number",$contact_number)->first()->id;
            Session::put('user_id',$user_id);
            // $this->create_course($user_id);

            
            // file_put_contents("userid.txt",$user_id);

            // $this->create_course($user_id);


            if (ins_registraion::where('user_id', $user_id)->first()) {
                echo "instructor";
            } 
            
            else if(std_registration::where('user_id', $user_id)->first()) {

                echo "student";
            } 
            
        }
        else {
            echo "information Doesn't Matched";
        }
    }


    public function create_course(Request $request)
    {
                // course::create($request->all());
                $course_name= $request->course_name;
                $course_description= $request->course_description;
                $course_time_duration= $request->course_time_duration;
                $course_category= $request->course_category;
                //$course_image= $request->course_image;

                $instructor_id = Session::get('user_id');
                file_put_contents("test.txt",$instructor_id);

                $course_image = time().'.'.request()->course_image->getClientOriginalExtension();               
               request()->course_image->move(base_path('course_image'), $course_image);
      

                course::create([
                    'instructor_id'=>$instructor_id,
                    'course_name'=>$course_name, 
                    'course_description'=>$course_description, 
                    'course_time_duration'=>$course_time_duration, 
                    'course_category'=>$course_category, 
                    'course_image'=>"course_image/".$course_image, 
                    ]);


              

    }

        

           



}
