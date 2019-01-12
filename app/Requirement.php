<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Requirement extends Model
{
    public $timestamps = false;

    public function student(){
    	return $this->belongsTo(Student::class);
    }
}
