<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $fillable=['course_id','video_embed','video_title','video_description','video_time_duration','video_active_status','video_delete_status'];
}
