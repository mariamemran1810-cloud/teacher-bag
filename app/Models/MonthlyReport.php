<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonthlyReport extends Model
{
    protected $fillable = ['teacher_id','classroom_id','month','summary','attendance_rate','average_score'];
}
