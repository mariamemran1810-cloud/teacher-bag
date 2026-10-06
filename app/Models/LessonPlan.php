<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonPlan extends Model
{
    protected $fillable = ['teacher_id','subject_id','classroom_id','title','date','objectives','activities','homework','ai_notes'];
}
