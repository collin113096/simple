<?php

namespace App\Enrollment;

use Illuminate\Database\Eloquent\Model;
use Student;

class Requirement extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'url',
    	'type',
    	'student_id',
    ];

    public function student(){
    	return $this->belongsTo(Student::class);
    }

}
