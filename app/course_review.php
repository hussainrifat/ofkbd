<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_review extends Model
{
    protected $fillable=['course_id','review_text','user_id','active_review_status'];

}
