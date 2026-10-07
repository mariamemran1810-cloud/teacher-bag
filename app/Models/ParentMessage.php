<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentMessage extends Model
{
    protected $fillable = ['student_id','sender','message','seen'];
    public function student() { return $this->belongsTo(\App\Models\Student::class); }
}
