<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable=['instructor_id','course_name','course_description','course_time_duration','course_image','course_category','course_active_status','course_delete_status'];
}
