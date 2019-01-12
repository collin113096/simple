<?php

namespace App\Http\Controllers;

use App\Father;
use App\Student;
use Illuminate\Http\Request;

class FatherController extends Controller
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
        return view('father.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $father_record = Father::create(request()->all());

        $student = Student::find(auth()->id());
        $student->father_id = $father_record->id;
        $student->save();
        return redirect()->route('mother.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Father  $father
     * @return \Illuminate\Http\Response
     */
    public function show(Father $father)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Father  $father
     * @return \Illuminate\Http\Response
     */
    public function edit(Father $father)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Father  $father
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Father $father)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Father  $father
     * @return \Illuminate\Http\Response
     */
    public function destroy(Father $father)
    {
        //
    }
}
