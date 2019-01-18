<?php

namespace App\Http\Controllers\Enrollment;

use App\Enrollment\Mother;
use App\Enrollment\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MotherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->cannot('create',Mother::class)){
            return redirect()->route('home');
        }
        return view('enrollment.mother.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $mother_record = Mother::create(request()->all());

        auth()->user()->status->mother = true;
        auth()->user()->push();

        $student = Student::find(auth()->id());
        $student->mother_id = $mother_record->id;
        $student->save();
        return redirect()->route('requirement.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function show(Mother $mother)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function edit(Mother $mother)
    {
        return view('enrollment.mother.edit',compact('mother'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mother $mother)
    {
        $mother->update(request()->all());
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mother  $mother
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mother $mother)
    {
        //
    }
}
