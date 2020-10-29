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
            // ins_registration::where('user_id',$request->id)->update(['expertise'=>$request->expertise]);
            user::where('id',$request->id)->update(['name'=>$request->name,'contact_number'=>$request->contact_number,'email'=>$request->email]);
        }

        public function deleteInstructorInfo(Request $request){
            $user_id=$request->user_id;
            $user=user::where('id',$user_id)->delete();
        }
    


}
