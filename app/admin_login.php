<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_login extends Model
{
    protected $fillable = [
        'id','username', 'password'];
}
