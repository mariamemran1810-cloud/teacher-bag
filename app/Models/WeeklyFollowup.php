<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeeklyFollowup extends Model
{
    protected $fillable = ['teacher_id','classroom_id','week','summary','issues','plan_next'];
}
