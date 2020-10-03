<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course_rating extends Model
{
    protected $fillable=['course_id','rating','user_id','active_rating_status'];

}
