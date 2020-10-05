<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ins_registraion extends Model
{
    protected $fillable=['user_id','expertise','admin_approval_status'];
}
