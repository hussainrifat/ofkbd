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

use function GuzzleHttp\json_decode;

class admin_controller extends Controller
{

    

  public function admin_login(){
      return view('Registration\admin_login');
  }

  public function admin_login_check(Request $request){
    $username=$request->username;
    $password=$request->password;


    if (admin_login::where('username', $username)->where('password', $password)->first()) {

            echo "admin";
        
    }
    else {
        echo "information Doesn't Matched";
    }
}



    // Admin Student Start Here

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


    public function editStudentInfo(Request $request){
        $students= std_registration::where('user_id',$request->id)->first();
        $user_info= user::where('id',$request->id)->first();
        $name=$user_info->name;
        $email=$user_info->email;
        $contact_number=$user_info->contact_number;
        $class=$students->std_class;
        $instutite=$students->std_institute;
        return json_encode(['id'=>$request->id,'name'=>$name,'email'=>$email,'contact_number'=>$contact_number,'class'=>$class,'institute'=>$instutite]);
    }

    public function updateStudentInfo(Request $request)
    {
        std_registration::where('user_id',$request->id)->update(['std_class'=>$request->class,'std_institute'=>$request->institute]);
        user::where('id',$request->id)->update(['name'=>$request->name,'contact_number'=>$request->contact_number,'email'=>$request->email]);
    }

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



        // Course Start Here

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
                $instructor_name=$instructor_info->name;

        
                array_push($data,['instructor_name'=>$instructor_name,'course_id'=>$course_id,'course_name'=>$course_name,'course_description'=>$course_description,'course_category'=>$course_category,'course_time_duration'=>$course_time_duration,'course_name'=>$course_name]);
                
            }
        
                return view('admin/admin_all_courses',['courses'=>json_decode(json_encode($data))]);
            }

            
            public function deleteCourseInfo(Request $request){
                $course_id=$request->course_id;
                $id=user::where('id',$course_id)->delete();
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
                  
                    file_put_contents("password.txt",$request->oldpassword);

                    if(user::where('id',$request->id)->where('password',$request->oldpassword)->first())
                    {
                        user::where('id',$request->id)->update(['password'=>$request->newpassword]);
              
                   echo "ok"; }
                   
                      else {
                          echo "not ok";
                      }

                }


                public function viewStudentDashboardProfileInfo(Request $request){

                    $student= std_registration::where('user_id',$request->id)->first();

                    $user_id=$student->user_id;
                    $user_info= user::where('id',$user_id)->first();
                    $name=$user_info->name;
                    $email=$user_info->email;
                    $contact_number=$user_info->contact_number;
                    $std_class=$student->std_class;
                    $std_institute=$student->std_institute;

                    return json_encode(['id'=>$request->id,'name'=>$name,'email'=>$email,'contact_number'=>$contact_number,'std_class'=>$std_class,'std_institute'=>$std_institute]);

                        
                    }


                    public function updateStudentProfileInfo(Request $request)
                    {

                        std_registration::where('user_id',$request->id)->update(['std_class'=>$request->std_class,'std_institute'=>$request->std_institute]);
                        user::where('id',$request->id)->update(['name'=>$request->name,'contact_number'=>$request->contact_number,'email'=>$request->email]);
                
                    }


                    public function updatestudentPasswordInfo(Request $request)
                    {
                      
                        file_put_contents("password.txt",$request->oldpassword);
    
                        if(user::where('id',$request->id)->where('password',$request->oldpassword)->first())
                        {
                            user::where('id',$request->id)->update(['password'=>$request->newpassword]);
                  
                       echo "ok"; }
                       
                          else {
                              echo "not ok";
                          }
    
                    }




                    
    public function viewCourseContentInfo(Request $request){

        $id=$request->id;
        $video_info= video::where('id',$request->id)->first();
        $video_title=$video_info->video_title;
        $video_time_duration=$video_info->video_time_duration;
        $video_embed=$video_info->video_embed;
        $video_description=$video_info->video_description;
       
        return json_encode(['id'=>$id,'video_title'=>$video_title,'video_time_duration'=>$video_time_duration,'video_embed'=>$video_embed,'video_description'=>$video_description,]);
    }


    public function updateCourseContentInfo(Request $request)
    {

        video::where('id',$request->id)->update(['video_title'=>$request->video_title,'video_description'=>$request->video_description,'video_time_duration'=>$request->video_time_duration,'video_embed'=>$request->video_embed]);
    }

    public function deleteCourseContentInfo(Request $request){
        $id=$request->id;
        $id=video::where('id',$id)->delete();
    }
                
        
               


}



