<?php

namespace App\Http\Controllers;

use App\ins_registraion;
use App\ins_registration;
use App\instructor_registration;
use App\otp;
use App\std_registration;
use App\User;
use App\course;
use App\video;
use App\blog;


use Session;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class data_insert_controller extends Controller
{


    // Student And Instructor Registration Start Here
    public function std_data_insert(Request $request)
    {
        
        $name= $request->name;
        $std_institute= $request->institute;
        $std_class= $request->class;
        $contact_number= $request->contact_number;
        $email= $request->email;
        $password=Hash::make($request->password);
        // $password=$request->password;



        User::create([
        'name'=>$name, 
        'contact_number'=>$contact_number,
        'email'=>$email,        
        'password' =>$password,
        ]);


        $user = User::where("email",$email)->first();
        $user_id = $user->id;
        Session::put('user_id',$user_id);
        $otp_req = json_decode($this->send_otp2($user->contact_number));
        $otp = $otp_req->otp;
        $this->send_otp($otp,$user_id);
    


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
        $user = User::where("email",$email)->first();
        $user_id = $user->id;

    


        Session::put('user_id',$user_id);
        $otp_req = json_decode($this->send_otp2($user->contact_number));
        $otp = $otp_req->otp;
        $this->send_otp($otp,$user_id);



        ins_registraion::create([
            'user_id'=>$user_id,
            'expertise'=>$expertise,
            ]);

            //file_put_contents("tes.txt",Session::get('user_id'));
        
        
    }

        // Student And Instructor Registration Ends Here


        // OTP Match Start Here


   function send_otp($otp,$user_id)
   {
    
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

    public function send_otp2($mobile_number)
    {
        
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "http://13.250.7.83/exam/api/send_sms",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msisdn\"\r\n\r\n".$mobile_number."\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"msg\"\r\n\r\ntest\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
                "postman-token: 24205d22-b04d-11ff-d75e-37564e566b5c"
            ),
            ));

            $response = curl_exec($curl);
            return $response;

    }


    // Registration Email And Mobile Number Check Ends Here



    public function login_check(Request $request){
        $credentials = array(
            'contact_number' => $request->contact_number,
            'password'=>$request->password
            );

        $user = user::where('contact_number',$request->contact_number)->first();
        if ($user) {
                if (auth()->attempt($credentials)) {
                    //return redirect('');
                    $user_id = $user->id;
                    $user_email = $user->email;
                    $user_name = $user->name;
                    Session::put('user_id',$user_id);
                 Session::put('user_name',$user_name);
                 Session::put('user_email',$user_email);
                 if (ins_registraion::where('user_id', $user_id)->first()) {
                    echo "instructor";
                } 
                
                else if(std_registration::where('user_id', $user_id)->first()) {
    
                    echo "student";
                } 


                }else{
                    session()->flash('message', 'Invalid credentials');
                    return redirect()->back();
                }
        }
        else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }


        // if (user::where('contact_number', $contact_number)->where('password', $password)->first()) {

        //     $user_id= User::where("contact_number",$contact_number)->first()->id;
        //     $user_email= User::where("contact_number",$contact_number)->first()->email;
        //     $user_name= User::where("contact_number",$contact_number)->first()->name;

            
        //     file_put_contents("session.txt",$user_name);



        //     if (ins_registraion::where('user_id', $user_id)->first()) {
        //         echo "instructor";
        //     } 
            
        //     else if(std_registration::where('user_id', $user_id)->first()) {

        //         echo "student";
        //     } 
            
        // }
        // else {
        //     echo "information Doesn't Matched";
        // }
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
                // file_put_contents("test.txt",$instructor_id);

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

                    $course_id=course::where('course_name',$course_name)->first()->id;
                    session::put('course_id',$course_id);
                    // file_put_contents("Course_id.txt",$course_id);
       

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



}
