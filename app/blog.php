<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable=['user_id','blog_title','blog_description','blog_categories','blog_image'];

}
