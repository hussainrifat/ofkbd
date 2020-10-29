<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\std_registration;
use App\ins_registration;
use App\course;
use App\video;

use function GuzzleHttp\json_decode;

class admin_controller extends Controller
{

    public function admin_home(){
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

    

        return view('admin/admin_home',['users'=>json_decode(json_encode($data))]);


    }


    public function editstudentinfo(Request $request){
        $students= std_registration::where('user_id',$request->id)->first();
        $user_info= user::where('id',$request->id)->first();
        $name=$user_info->name;
        $email=$user_info->email;
        $contact_number=$user_info->contact_number;
        $class=$students->std_class;
        $instutite=$students->std_institute;
        return json_encode(['id'=>$request->id,'name'=>$name,'email'=>$email,'contact_number'=>$contact_number,'class'=>$class,'institute'=>$instutite]);
    }

    public function updateSudentInfo(Request $request)
    {
        std_registration::where('user_id',$request->id)->update(['std_class'=>$request->class,'std_institute'=>$request->institute]);
        user::where('id',$request->id)->update(['name'=>$request->name,'contact_number'=>$request->contact_number,'email'=>$request->email]);
    }
}
