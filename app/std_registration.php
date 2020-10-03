<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class std_registration extends Model
{
    protected $fillable = [
       'user_id','std_class', 'std_institute'];
}
