<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['school_id','classroom_id','name','national_id','birthdate','gender','guardian_name','guardian_phone','status'];
}


