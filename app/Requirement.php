<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

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
