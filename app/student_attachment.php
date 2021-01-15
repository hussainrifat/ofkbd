<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student_attachment extends Model
{
    protected $guarded=[];


    public function getStudentData()
    {
        return $this->belongsTo(User::class,'student_id','id');
    }

   

}
