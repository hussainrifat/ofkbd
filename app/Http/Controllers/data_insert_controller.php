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

    // Student, Instructor Registration Section 01
    //


    // Section 01 Student And Instructor Registration Start Here
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

        
    }



       // Section 02 : OTP

    
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

        user::where('id',$user_id)->update(['mobile_verification'=>'1']);

     echo "ok"; }
     
        else {
            echo "not ok";
        }
   }


   public function resend_otp(){
    return view('registration/resend_otp');
}



    public function resend_otp_check(Request $request){

        $contact_number=$request->contact_number;

        $user_id= user::where('contact_number',$contact_number)->first()->id;
        $user= user::where('contact_number',$contact_number)->first();

        Session::put('user_id',$user_id);



        $otp_req = json_decode($this->send_otp2($user->contact_number));
        $otp = $otp_req->otp;
        $this->send_otp($otp,$user_id);

    }

   
       
     



     //Registration Duplicate Email Check

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



        //Registration Duplicate Contact Number Check


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


    //BD apps API for OTP send
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



    // Student & Instructor Login Check

    public function login_check(Request $request){


        $credentials = array(
            'contact_number' => $request->contact_number,
            'password'=>$request->password
            );

        $user = user::where('contact_number',$request->contact_number)->first();
        if ($user) {
                if (auth()->attempt($credentials)) {
                    $user_id = $user->id;
                    Session::put('user_id',$user_id);

                if (user::where('id', $user_id)->where('mobile_verification','1')->first()) {
                    if (auth()->user()->instructor) {
                        echo "instructor";
                    } 
                    
                    else if(auth()->user()->student) {
                        echo "student";
                    } 

                    } 
                    else
                    echo "otp_error";


                }

                else{
                    session()->flash('message', 'Invalid credentials');
                    return redirect()->back();
                }
        }
        else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }

    }








}
