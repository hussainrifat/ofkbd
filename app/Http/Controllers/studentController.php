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

class studentController extends Controller
{
    public function student_home(){
     
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
        ['course_id'=>$course[$i]->id,
        'course_name'=>$course[$i]->course_name,
        'course_duration'=>$course[$i]->course_time_duration,
        'course_image'=>$course[$i]->course_image,
        'course_category'=>$course[$i]->course_category,
        'instructor_name'=>$instructor_name]);   
    }

    $blog_response = array();

    $blog= blog::
    orderBy('id','desc')
    ->take(5)
    ->get();

    for($i=0;$i<sizeof($blog);$i++)
    {
        $ins_id = $blog[$i]->user_id;
        $instructor_name = User::where('id',$ins_id)->first()->name;
        array_push($blog_response,
        ['blog_id'=>$blog[$i]->id,
        'blog_title'=>$blog[$i]->blog_title,
        'blog_image'=>$blog[$i]->blog_image,
        'blog_categories'=>$blog[$i]->blog_categories,
        'instructor_name'=>$instructor_name]);   
    }

    $blog = json_decode(json_encode($blog_response));

    $course = json_decode(json_encode($response));




    return view('student/student_home',['course'=>$course,'blog'=>$blog]);
    }



    public function student_dashboard(){

        $student_id=Session::get('user_id');
        $student_info= user::where('id',$student_id)->first();
        $student_class= std_registration::where('user_id',$student_id)->first()->std_class;
        $student_institute= std_registration::where('user_id',$student_id)->first()->std_institute;


    $parents_info= parents_information::where('user_id',$student_id)->first();

    $father_name=$parents_info->father_name;
    $father_contact_number=$parents_info->father_contact_number;
    $mother_name=$parents_info->mother_name;
    $mother_contact_number=$parents_info->mother_contact_number;
    $present_address=$parents_info->present_address;



        $data = array();
        $enroll= stu_course::where('user_id',$student_id)->get();

        for($i=0;$i<sizeof($enroll);$i++)
        {
            $course_id=$enroll[$i]->course_id;
            $course_info= course::where('id',$course_id)->first();

            // file_put_contents('course.txt',$course_info);

            $instructor_id=$course_info->instructor_id;
            $instructor_name= user::where('id',$instructor_id)->first()->name;
    
            $course_id=$course_info->id;
            $course_name=$course_info->course_name;
            $course_image=$course_info->course_image;
            $course_category=$course_info->course_category;
            $course_time_duration=$course_info->course_time_duration;
    
            array_push($data,['instructor_name'=>$instructor_name,'course_id'=>$course_id,'course_image'=>$course_image,'course_name'=>$course_name,'course_category'=>$course_category,'course_time_duration'=>$course_time_duration,'course_name'=>$course_name,
          
            ]);
            
        }



        return view('student/student_dashboard',['student'=>$student_info,'std_class'=>$student_class,'std_institute'=>$student_institute,  'father_name'=>$father_name,'mother_name'=>$mother_name,'father_contact_number'=>$father_contact_number,'mother_contact_number'=>$mother_contact_number,
        'present_address'=>$present_address,'courses'=>json_decode(json_encode($data))]);
    }



      
    public function student_courses(){

        {
            $user_id = Session::get('user_id');
            $data = array();
            $enroll= stu_course::where('user_id',$user_id)->get();

            for($i=0;$i<sizeof($enroll);$i++)
            {
                $course_id=$enroll[$i]->course_id;
                $course_info= course::where('id',$course_id)->first();

                file_put_contents('course.txt',$course_info);

                $instructor_id=$course_info->instructor_id;
                $instructor_name= user::where('id',$instructor_id)->first()->name;
        
                $course_id=$course_info->id;
                $course_name=$course_info->course_name;
                $course_image=$course_info->course_image;
                $course_category=$course_info->course_category;
                $course_time_duration=$course_info->course_time_duration;
        
                array_push($data,['instructor_name'=>$instructor_name,'course_id'=>$course_id,'course_image'=>$course_image,'course_name'=>$course_name,'course_category'=>$course_category,'course_time_duration'=>$course_time_duration,'course_name'=>$course_name]);
                
            }
        
            return view('student/student_courses',['courses'=>json_decode(json_encode($data))]);
        }
        
    }



           // Student Profile Information Edit Update


           public function viewStudentDashboardProfileInfo(Request $request){

            $student= std_registration::where('user_id',$request->id)->first();

            $user_id=$student->user_id;
            $user_info= user::where('id',$user_id)->first();
            $name=$user_info->name;
            $email=$user_info->email;
            $contact_number=$user_info->contact_number;
            $std_class=$student->std_class;
            $std_institute=$student->std_institute;

            // file_put_contents('dashboard.txt',$std_institute);

            return json_encode(['id'=>$request->id,'name'=>$name,'email'=>$email,'contact_number'=>$contact_number,'std_class'=>$std_class,'std_institute'=>$std_institute]);

                
            }


            public function updateStudentProfileInfo(Request $request)
            {

                std_registration::where('user_id',$request->id)->update(['std_class'=>$request->std_class,'std_institute'=>$request->std_institute]);
                user::where('id',$request->id)->update(['name'=>$request->name,'contact_number'=>$request->contact_number,'email'=>$request->email]);
        
            }


            public function updatestudentPasswordInfo(Request $request)
            {
              

                $data= (user::where('id', $request->id)->first());

                if (user::where('id', $request->id)->where('password', $request->oldpassword)->first()) {
                    if (!Hash::check($data['password'], $request->oldpassword)) {
                        user::where('id', $request->id)->update(['password'=>$request->newpassword]);
            
                        echo "ok";
                    } 
                
                }

                else {
                    echo "not ok";
                }
            }

            public function updateStudentParentsInfo(Request $request)
            {
        
                $user_id= $request->id;
                $father_name= $request->father_name;
                $mother_name= $request->mother_name;
                $father_contact_number= $request->father_contact_number;
                $mother_contact_number= $request->mother_contact_number;
                $present_address= $request->present_address;
        
        
                if(parents_information::where('user_id',$user_id)->first())
                {
                    parents_information::where('user_id',$user_id)->update([
                        'father_name'=>$father_name, 
                        'mother_name'=>$mother_name, 
                        'father_contact_number'=>$father_contact_number, 
                        'mother_contact_number'=>$mother_contact_number, 
                        'present_address'=>$present_address, 
                        ]);
                }
                else{
                    parents_information::create([
                        'user_id'=>$user_id, 
                        'father_name'=>$father_name, 
                        'mother_name'=>$mother_name, 
                        'father_contact_number'=>$father_contact_number, 
                        'mother_contact_number'=>$mother_contact_number, 
                        'present_address'=>$present_address, 
                        ]);
                } 
        
            }



}
