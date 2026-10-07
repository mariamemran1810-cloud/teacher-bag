<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonPlan extends Model
{
    protected $fillable = ['teacher_id','subject_id','classroom_id','title','date','objectives','activities','homework','ai_notes','cognitive_goal','skill_goal','affective_goal','teaching_aids','introduction','lesson_steps','strategies','applications','assessment','students_needing_support','learning_difficulties','observed_problems','remedial_enrichment','student_progress','grades_record','notes_page','ai_source'];
}

