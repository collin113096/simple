<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Father extends Model
{
    public $timestamps = false;

    public function students(){
    	return $this->hasMany(Student::class);
    }
}
