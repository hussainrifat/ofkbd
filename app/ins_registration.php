<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ins_registration extends Model
{
    protected $fillable = ['ins_name','ins_institute','ins_number','ins_email','ins_password','ins_expertise'];
}
