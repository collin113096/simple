<?php

namespace App\Enrollment;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Status extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function user(){

    	return $this->belongsTo(User::class);
    }
}
