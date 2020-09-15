<?php

namespace App\Http\Controllers;

use App\ins_registration;
use App\instructor_registration;
use App\std_registration;
use Illuminate\Http\Request;

class data_insert_controller extends Controller
{
    public function std_data_insert(Request $request)
    {
        std_registration::create($request->all());
        return view('homepage');
        // file_put_contents('file.txt','Hello');
        
    }


    public function insert_instructor_data(Request $request)
    {
        ins_registration::create($request->all());
        return view('homepage');

        
    }



}
