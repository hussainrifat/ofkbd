<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class instructor_review extends Model
{
    protected $fillable=['course_id','user_id','review_text','active_review_status'];

}
