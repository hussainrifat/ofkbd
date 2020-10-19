<?php

namespace App\Http\Controllers;

use App\ins_registraion;
use App\ins_registration;
use App\instructor_registration;
use App\otp;
use App\std_registration;
use App\User;
use Session;
// use Hash;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class data_insert_controller extends Controller
{
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
        'email'=>$email,        'password' =>$password,
        ]);


        $user_id = User::where("email",$email)->first()->id;
        Session::put('user_id',$user_id);
        //file_put_contents("tes.txt",Session::get('user_id'));
        $this->send_otp($user_id);
        std_registration::create([
            'std_institute'=>$std_institute,
            'user_id'=>$user_id,
            'std_class'=>$std_class]);
    }

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


    //   $q=otp::where('user_id',$user_id)->where('otp',$user_otp)->first();
    //   $q->otp;
    // file_put_contents("tes.txt",$q);

    if(otp::where('user_id',$user_id)->where('otp',$user_otp)->first())
      {

     echo "ok"; }
     
        else {
            echo "not ok";
        }
       
    
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

        ins_registraion::create([
            'user_id'=>$user_id,
            'expertise'=>$expertise,
            ]);


            //file_put_contents("tes.txt",Session::get('user_id'));
            $this->send_otp($user_id);
        
        
    }



}
