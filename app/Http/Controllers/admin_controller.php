<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\std_registration;
use App\ins_registration;
use App\course;
use App\ins_registraion;
use App\video;
use App\admin_login;
use App\blog;
use App\Report_admin;
use App\parents_information;
use Illuminate\Support\Facades\Hash;


use function GuzzleHttp\json_decode;

class admin_controller extends Controller
{



    // Admin Login Page View
  public function admin_login(){
      return view('Registration\admin_login');
  }

  public function admin_login_check(Request $request){
    $username=$request->username;
    $password=$request->password;


    if ($value = admin_login::where('username', $username)->where('password', $password)->first()) {
        $request->session()->put('admin', $value);

            echo "admin";

    }

    else {
        echo "information Doesn't Matched";
    }
}

    // Admin Log Out Function

public function admin_log_out(Request $request){
  
   $request->session()->forget('admin');
   return redirect('admin_login');
 
}



    // Admin All Student Page Start Here

    public function admin_all_students(){
        $data = array();
        $students= std_registration::get();
        for($i=0;$i<sizeof($students);$i++)
        {
            $user_id=$students[$i]->user_id;
            $user_info= user::where('id',$user_id)->first();

            $name=$user_info->name;
            $email=$user_info->email;
            $contact_number=$user_info->contact_number;
            $class=$students[$i]->std_class;
            $instutite=$students[$i]->std_institute;

            array_push($data,['id'=>$user_id,'name'=>$name,'email'=>$email,'contact_number'=>$contact_number,'class'=>$class,'institute'=>$instutite]);

        }

            return view('admin/admin_all_students',['users'=>json_decode(json_encode($data))]);
        }


            // Admin All Student View Information

    public function editStudentProfileInfo(Request $request){
        $students= std_registration::where('user_id',$request->id)->first();
        $user_info= user::where('id',$request->id)->first();
        $name=$user_info->name;
        $email=$user_info->email;
        $contact_number=$user_info->contact_number;
        $class=$students->std_class;
        $instutite=$students->std_institute;
        return json_encode(['id'=>$request->id,'name'=>$name,'email'=>$email,'contact_number'=>$contact_number,'class'=>$class,'institute'=>$instutite]);
    }

        // Admin All Student Update Information

    public function updateStudentInfo(Request $request)
    {
        std_registration::where('user_id',$request->id)->update(['std_class'=>$request->class,'std_institute'=>$request->institute]);
        user::where('id',$request->id)->update(['name'=>$request->name,'contact_number'=>$request->contact_number,'email'=>$request->email]);
    }

            // Admin All Student Delete Information

    public function deleteStudentInfo(Request $request){
        $user_id=$request->user_id;
        $user=user::where('id',$user_id)->delete();
    }


      // Admin Student Ends Here



       // Admin Instructor Start Here

       public function view_admin_all_instructors(){
        $data = array();
        $instructors= ins_registraion::get();
        for($i=0;$i<sizeof($instructors);$i++)
        {
            $user_id=$instructors[$i]->user_id;
            $user_info= user::where('id',$user_id)->first();

            $name=$user_info->name;
            $email=$user_info->email;
            $contact_number=$user_info->contact_number;
            $expertise=$instructors[$i]->expertise;

            array_push($data,['id'=>$user_id,'name'=>$name,'email'=>$email,
            'contact_number'=>$contact_number,'expertise'=>$expertise
            ]);

        }

            return view('admin/admin_all_instructors',['instructors'=>json_decode(json_encode($data))]);
        }


        public function  editInstructorInfo(Request $request){
            $instructors= ins_registraion::where('user_id',$request->id)->first();
            $user_info= user::where('id',$request->id)->first();
            $name=$user_info->name;
            $email=$user_info->email;
            $contact_number=$user_info->contact_number;
            return json_encode(['id'=>$request->id,'name'=>$name,'email'=>$email,'contact_number'=>$contact_number]);
        }


        public function updateInstructorInfo(Request $request)
        {
            user::where('id',$request->id)->update(['name'=>$request->name,'contact_number'=>$request->contact_number,'email'=>$request->email]);
        }

        public function deleteInstructorInfo(Request $request){
            $user_id=$request->user_id;
            $user=user::where('id',$user_id)->delete();
        }



       // Admin Feedback Start Here

    public function admin_all_report(){

        $data=array();
        $reports= report_admin::get();


        for($i=0;$i<sizeof($reports);$i++)
        {
            $course_id=$reports[$i]->course_id;
            $course_name= course::where('id',$course_id)->first()->course_name;
            $course_category= course::where('id',$course_id)->first()->course_category;

            $report_description=$reports[$i]->report_description;
            array_push($data,['course_id'=>$course_id,'course_name'=>$course_name,
            'course_category'=>$course_category,'report_description'=>$report_description]);

        }


            return view('admin/admin_all_report',['reports'=>json_decode(json_encode($data))]);
        }




    // Admin Course Start Here


        public function admin_all_courses(){
            $data = array();
            $courses= course::get();
            for($i=0;$i<sizeof($courses);$i++)
            {
                $instructor_id=$courses[$i]->instructor_id;
                $instructor_info= user::where('id',$instructor_id)->first();

                $course_id=$courses[$i]->id;
                $course_name=$courses[$i]->course_name;
                $course_description=$courses[$i]->course_description;
                $course_category=$courses[$i]->course_category;
                $course_time_duration=$courses[$i]->course_time_duration;
                $course_active_status=$courses[$i]->course_active_status;

                $instructor_name=$instructor_info->name;


                array_push($data,['instructor_name'=>$instructor_name,'course_id'=>$course_id,'course_name'=>$course_name,'course_description'=>$course_description,'course_category'=>$course_category,'course_time_duration'=>$course_time_duration,'course_active_status'=>$course_active_status]);

            }

                return view('admin/admin_all_courses',['courses'=>json_decode(json_encode($data))]);
            }


            public function deleteCourseInfo(Request $request){
                $course_id=$request->course_id;
                $id=course::where('id',$course_id)->delete();
            }





    public function  editAdminCourseInfo(Request $request){

        // $instructors= ins_registraion::where('user_id',$request->id)->first();
        $course_info= course::where('id',$request->id)->first();

        return json_encode(['id'=>$course_info->id,
        'course_name'=>$course_info->course_name,
        'course_category'=>$course_info->course_category,
        'course_time_duration'=>$course_info->course_time_duration,


        ]);
    }

    public function updateAdminCourseInfo(Request $request)
    {
        course::where('id',$request->id)->update(['course_name'=>$request->course_name,'course_category'=>$request->course_category,'course_time_duration'=>$request->course_time_duration]);
    }

  


    public function    ViewCourseActiveStatus(Request $request){

        // $instructors= ins_registraion::where('user_id',$request->id)->first();
        $course_info= course::where('id',$request->course_id)->first();


        return json_encode(['id'=>$course_info->id,
        'course_active_status'=>$course_info->course_active_status,

        ]);
    }


    public function updateCourseActiveStatus(Request $request)
    {
        course::where('id',$request->id)->update(['course_active_status'=>$request->edit_course_active_status]);
    }



    public function admin_all_blog(){

        $data=array();
        $blog= blog::get();


        for($i=0;$i<sizeof($blog);$i++)
        {

            $author_id=$blog[$i]->user_id;
            $author_name=User::where('id',$author_id)->first()->name;
           

            array_push($data,['blog_id'=>$blog[$i]->id,
            'blog_id'=>$blog[$i]->id,
            'blog_title'=>$blog[$i]->blog_title,
            'blog_categories'=>$blog[$i]->blog_categories,
            'author_name'=>$author_name

            ]);

        }


            return view('admin/admin_all_blog',['blog'=>json_decode(json_encode($data))]);
        }


        public function deleteBlog(Request $request){
            $blog_id=$request->blog_id;
            $id=blog::where('id',$blog_id)->delete();
        }




}

