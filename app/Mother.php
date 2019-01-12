<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Mother extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'last_name',
    	'middle_name',
    	'first_name',
    	'occupation',
    	'contact',
    ];

    public function students(){
    	return $this->hasMany(Student::class);
    }
}
