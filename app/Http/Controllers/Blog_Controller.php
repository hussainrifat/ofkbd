<?php

namespace App\Http\Controllers;

use App\blog;
use App\User;
use Session;

use App\std_registration;
use App\ins_registraion;

use Illuminate\Http\Request;

class Blog_Controller extends Controller
{


        // Instructor Adding New Blog Post


    public function create_post(Request $request)
    {
                // course::create($request->all());
                $blog_title= $request->blog_title;
                $blog_description= $request->blog_description;
                $blog_category= $request->blog_category;
                //$course_image= $request->course_image;

                $instructor_id = Session::get('user_id');

                $blog_image = time().'.'.request()->blog_image->getClientOriginalExtension();               
               request()->blog_image->move(base_path('blog_image'), $blog_image);
      

                blog::create([
                    'user_id'=>$instructor_id,
                    'blog_title'=>$blog_title, 
                    'blog_description'=>$blog_description, 
                    'blog_categories'=>$blog_category, 
                    'blog_image'=>"blog_image/".$blog_image, 
                    ]);

    
    }


       // Instructor All Blog Post Show


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


  // Instructor Single Blog Post Show

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


  // Student All Blog Post Show

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

  // Student Single Blog Post Show


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
