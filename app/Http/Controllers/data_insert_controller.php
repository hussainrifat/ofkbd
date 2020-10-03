<?php

namespace App\Http\Controllers;

use App\ins_registration;
use App\instructor_registration;
use App\std_registration;
use App\User;
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
        // $password= $request->password;
        $password=Hash::make($request->password);

        User::create([
        'name'=>$name, 
        'contact_number'=>$contact_number,
        'email'=>$email,        'password' =>$password,
        ]);
        $user_id = User::where("email",$email)->first()->id;
        std_registration::create([
            'std_institute'=>$std_institute,
            'user_id'=>$user_id,
            'std_class'=>$std_class]);
    
    }


    // public function insert_instructor_data(Request $request)
    // {
    //     ins_registration::create($request->all());
    //     return view('homepage');

        
    // }



}
