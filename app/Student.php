<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Requirement;
use App\Father;
use App\Mother;

class Student extends Model
{
    public $timestamps = false;

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
