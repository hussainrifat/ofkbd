<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructor_rating extends Model
{
    protected $fillable=['course_id','user_id','rating','active_rating_status'];

}
