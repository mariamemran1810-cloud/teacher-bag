<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['student_id','amount','type','due_date','paid','notes'];
    public function student() { return $this->belongsTo(\App\Models\Student::class); }
}
