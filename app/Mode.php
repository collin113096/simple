<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function grades(){

    	return $this->belongsToMany('App\Grade','fees')->withPivot('registration','tuition','misc','computer');
    }
}
