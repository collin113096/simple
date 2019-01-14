<?php

namespace App\Http\Controllers\Enrollment;

use App\Requirement;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequirementController extends Controller
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
        return view('enrollment.requirement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = Student::find(auth()->id());
        $student->requirements()->createMany([
            [
                'url' =>  $request->file('birth_certificate')->store('Birth Certificate'),
                'type' => "Birth Certificate",
            ],
             [
                'url' =>  $request->file('certificate_of_transfer')->store('Transfer'),
                'type' => "Certificate of Transfer",
            ],
             [
                'url' =>  $request->file('certificate_of_good_moral_character')->store('Good Moral'),
                'type' => "Certificate of Good Moral Character",
            ],
            [
                'url' =>  $request->file('form137')->store('Form 137'),
                'type' => "Transcript of Record",
            ],
            [
                'url' =>  $request->file('form138')->store('Form 138'),
                'type' => "Report Card",
            ],
            [
                'url' =>  $request->file('picture')->store('Picture'),
                'type' => "Picture",
            ],
        ]);
       

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function show(Requirement $requirement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function edit(Requirement $requirement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requirement $requirement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requirement  $requirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requirement $requirement)
    {
        //
    }
}
