<?php

namespace App\Http\Controllers;

use App\blog;
use App\User;

use App\std_registration;
use App\ins_registraion;

use Illuminate\Http\Request;

class Blog_Controller extends Controller
{

    public function instructor_blog_view(Request $request){

        $response = array();

       $blog= blog::get();

       for($i=0;$i<sizeof($blog);$i++)
       {
           $ins_id = $blog[$i]->user_id;
           $instructor_name = User::where('id',$ins_id)->first()->name;

           array_push($response,
           ['blog_id'=>$blog[$i]->id,
           'blog_title'=>$blog[$i]->blog_title,
           'blog_image'=>$blog[$i]->blog_image,
           'blog_categories'=>$blog[$i]->blog_categories,
           'instructor_name'=>$instructor_name]);  
 
       }

       $blog = json_decode(json_encode($response));
       return view('instructor/instructor_blog_view',['blogs'=>$blog]);

   }


   public function blog_details(Request $request){

    $blog_id=$request->blog;
    $blog_details= blog::where('id',$blog_id)->first();
    $instructor_id=$blog_details->user_id;
    $instructor_name = User::where('id',$instructor_id)->first()->name;


    return view('blog/blog_details',[
        'blog_details'=>$blog_details,
        'instructor_name'=>$instructor_name,
        ]);

}

public function student_blog_view(Request $request){

    $response = array();

   $blog= blog::get();

   for($i=0;$i<sizeof($blog);$i++)
   {
       $ins_id = $blog[$i]->user_id;
       $instructor_name = User::where('id',$ins_id)->first()->name;

       array_push($response,
       ['blog_id'=>$blog[$i]->id,
       'blog_title'=>$blog[$i]->blog_title,
       'blog_image'=>$blog[$i]->blog_image,
       'blog_categories'=>$blog[$i]->blog_categories,
       'instructor_name'=>$instructor_name]);  

   }

   $blog = json_decode(json_encode($response));
   return view('blog/student_blog_view',['blogs'=>$blog]);

}


public function student_blog_details(Request $request){

    $blog_id=$request->blog;
    $blog_details= blog::where('id',$blog_id)->first();
    $instructor_id=$blog_details->user_id;
    $instructor_name = User::where('id',$instructor_id)->first()->name;


    return view('blog/student_blog_details',[
        'blog_details'=>$blog_details,
        'instructor_name'=>$instructor_name,
        ]);

}



}
