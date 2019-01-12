<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Requirement;
use App\Father;
use App\Mother;

class Student extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'last_name',
        'middle_name',
        'first_name',
        'barangay',
        'municipality',
        'province',
        'birth_date',
        'birth_place',
        'religion',
        'gender',
        'grade',
        'father_id',
        'student_id',
    ];

    public function requirements(){
    	return $this->hasMany(Requirement::class);
    }

    public function father(){
    	return $this->belongsTo(Father::class);
    }

    public function mother(){
    	return $this->belongsTo(Mother::class);
    }
}
