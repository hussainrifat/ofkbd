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
use App\course_feedback;
use Illuminate\Support\Facades\Hash;


class studentController extends Controller
{
    public function student_home(){
     
        $response = array();


    
    $course= course::
    orderBy('id','desc')
    ->take(5)
    ->where('course_active_status','Approved')
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


        return view('student/student_dashboard',['parents_info'=>$parents_info,'student'=>$student_info,'std_class'=>$student_class,'std_institute'=>$student_institute,  'courses'=>json_decode(json_encode($data))]);
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



         // Student Courses Category Content View Content Controller

         public function courses(){
            return view('course/courses');
        }
    

         public function course(Request $request){
            $request->name;
            $response = array();
   
           $course= course::where('course_category',$request->name)
           ->where('course_active_status','Approved')
           ->get();
   
    
   
           foreach($course as $course)
           {
               
               $ins_id = $course->instructor_id;
                   $instructor_name = User::where('id',$ins_id)->first()->name;
                   $course_id=$course->id;
       
                   // course rating start here
                   $average_ratings= course_feedback::where('course_id',$course_id)->get();
       
                   $sum=0;
           
                   if(sizeof($average_ratings)==0)
                   {
                       $average_rating='No Rating Yet';
                   }
                   else
           
                   {
                       for($i=0;$i<sizeof($average_ratings);$i++)
           
                       {
                           $rating=$average_ratings[$i]->rating;
                           $sum= ($sum+$rating);
               
                       }
                       $average_rating=$sum/sizeof($average_ratings);
                       $total_rating=sizeof($average_ratings);
               
                       
                   }
           
       
                   //course rating ends here
       
                   array_push($response,['course_id'=>$course->id,'course_name'=>$course->course_name,'course_duration'=>$course->course_time_duration,'course_image'=>$course->course_image,'course_category'=>$course->course_category,'instructor_name'=>$instructor_name,
                   'average_rating'=>$average_rating
                   ]);   
           }
   
   
   
           $course = json_decode(json_encode($response));
           // file_put_contents('course.txt',json_encode($response));
           return view('course/course',['courses'=>$course]);
   
       }




       // Student Single Course Content Controller

    public function course_detail(Request $request){
        $user_id = auth()->user()->id;

        $course_id=$request->course;
        $course_details= course::where('id',$course_id)->first();
        $instructor_id=$course_details->instructor_id;
        $instructor_name = User::where('id',$instructor_id)->first()->name;
        $videos= $course_details->videoes;

       


        if(stu_course::where('user_id',$user_id)->where('course_id',$course_id)->first())
        {
            
            $enroll = 1;

            if(course_feedback::where('student_id',$user_id)->where('course_id',$course_id)->first())
            {
                $give=0;
            }
            
            else
             $give = 1;
        }
        else
        {
            $enroll = 0;
            $give=0;
        }


        $average_ratings= course_feedback::where('course_id',$course_id)->get();

        $sum=0;

        if(sizeof($average_ratings)==0)
        {
            $average_rating='No Rating Yet';
            $total_rating="0";

        }
        else

        {
            for($i=0;$i<sizeof($average_ratings);$i++)

            {
                $rating=$average_ratings[$i]->rating;
                $sum= ($sum+$rating);
    
            }
            $average_rating=$sum/sizeof($average_ratings);


           
                $total_rating=sizeof($average_ratings);

    
        }

       


        $review_info= course_feedback::where('course_id',$course_id)
        ->  orderBy('id','desc')
        ->get();

        

     $response= array();
        for($i=0;$i<sizeof($review_info);$i++)
        {
            // $rating= $review_info[$i]->rating;
            // $review=$review_info[$i]->review;
            $student_id=$review_info[$i]->student_id;
            $student_name= User::where('id',$student_id)->first()->name;
             file_put_contents('review.txt',$student_name);


            array_push($response,
            ['rating'=> $review_info[$i]->rating,
            'review'=>$review_info[$i]->review,
            'student_name'=>$student_name
            ]);

        }

        $review = json_decode(json_encode($response));


        

        return view('course/course_detail',['course_details'=>$course_details,'instructor_name'=>$instructor_name,'videoes'=>$videos,'enroll'=>$enroll,'review'=>$review,
        'average_rating'=> $average_rating,
        'total_rating'=> $total_rating,'give'=>$give]);

    }



    
    public function course_view(Request $request){

        $id=$request->id;

        $video_view=video::where('course_id',$id)->get();
        file_put_contents('content.txt',$video_view);

        $response = array();

        for($i=0;$i<sizeof($video_view);$i++)
        {
            $video_title=$video_view[$i]->video_title;            
            $video_time_duration=$video_view[$i]->video_time_duration;
            $video_embed=$video_view[$i]->video_embed;

            // file_put_contents('content.txt',$video_name);

            array_push($response,['video_title'=>$video_title,'video_time_duration'=>$video_time_duration,'video_embed'=>$video_embed]);
        }
        
        $content = json_decode(json_encode($response));


        return view('course/course_view',['contents'=>$content]);


    }





    public function StudentCourseEnrollment(Request $request)
    {
        $course_id=$request->id;
        $user_id=Session::get('user_id');

        stu_course::create([
            'course_id'=>$course_id, 
            'user_id'=>$user_id,
            ]);
    }


    public function ReportToAdmin(Request $request)
    {
        $course_id=$request->course_id;
        $user_id=Session::get('user_id');
        $report_description=$request->report_description;
        file_put_contents("report.txt",$course_id);


        Report_admin::create([
            'course_id'=>$course_id, 
            'report_description'=>$report_description,
            ]);
    }



    public function add_review(Request $request)
    {
        $course_id=$request->id;
        $student_rating=$request->student_rating;
        $student_review=$request->student_review;
        $student_id = auth()->user()->id;
        $instructor_id= course::where('id',$course_id)->first()->instructor_id;


        // file_put_contents("review.txt",$instructor_id);


       course_feedback::create([
            'course_id'=>$course_id, 
            'student_id'=>$student_id, 
            'instructor_id'=>$instructor_id, 
            'rating'=>$student_rating, 
            'review'=>$student_review, 
            ]);
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

           

                    if (Hash::check($request->oldpassword, $data['password'])) {
                        user::where('id', $request->id)->update(['password'=>Hash::make($request->newpassword)]);
            
                        echo "ok";
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
