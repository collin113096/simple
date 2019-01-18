<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function modes(){

    	return $this->belongsToMany('App\Mode','fees')->withPivot('registration','tuition','misc','computer');
    }
}
