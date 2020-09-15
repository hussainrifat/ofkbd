<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class std_registration extends Model
{
    
    protected $fillable = ['std_name','std_institute','std_class','std_number','std_email','std_password'];
}
