<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class otp extends Model
{
    protected $fillable=['user_id','otp'];

}
