<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['school_id','classroom_id','name','national_id','birthdate','gender','guardian_name','guardian_phone','status'];
    public function classroom() { return $this->belongsTo(\App\Models\Classroom::class); }
    public function school() { return $this->belongsTo(\App\Models\School::class); }
}
