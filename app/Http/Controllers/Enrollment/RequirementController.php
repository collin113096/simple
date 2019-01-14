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
        return view('requirement.create');
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
                'url' =>  request('birth_certificate'),
                'type' => "Birth Certificate",
            ],
             [
                'url' =>  request('certificate_of_transfer'),
                'type' => "Certificate of Transfer",
            ],
             [
                'url' =>  request('certificate_of_good_moral_character'),
                'type' => "Certificate of Good Moral Character",
            ],
            [
                'url' =>  request('form137'),
                'type' => "Transcript of Record",
            ],
            [
                'url' =>  request('form138'),
                'type' => "Report Card",
            ],
            [
                'url' =>  request('picture'),
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
