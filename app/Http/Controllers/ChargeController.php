<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargeController extends Controller
{
    public function create(){

    	return view('charge.create');
    }
}
