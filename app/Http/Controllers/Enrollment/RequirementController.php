<?php

namespace App\Http\Controllers\Enrollment;

use App\Enrollment\Requirement;
use App\Enrollment\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Store;

class RequirementController extends Controller
{
    public function create()
    {
        if(auth()->user()->cannot('create',Requirement::class)){
            return redirect()->route('home');
        }
        return view('enrollment.requirement.create');
    }

    public function store(Request $request)
    {
        // $student = Student::find(auth()->id());
        $requirement = new Store($request);
        $requirement->of_this_user(auth()->id());

        auth()->user()->status->requirement = true;
        auth()->user()->push();

        return redirect()->route('home');
    }
 
}
