@extends('layouts.app')
@section('home')
<a class="navbar-brand" href="{{ url('/home') }}">
        {{ config('app.name', 'Laravel') }}
</a>
@endsection
@section('link')
@cannot('click-enroll')
<li class="nav-item">
  <a class="btn btn-primary" href="{{ route('student.create') }}">Enroll Now</span></a>
</li> 
@endcannot
<li class="nav-item">
  <a class="nav-link" href="">Schedule</a>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Tuition</a>
  <div class="dropdown-menu">
      <a href="" class="dropdown-item">Link1</a>
         <a href="" class="dropdown-item">Link2</a>
         <a href="" class="dropdown-item">Link3</a>
         <a href="" class="dropdown-item">Link4</a>
         <a href="" class="dropdown-item">Link5</a>
         <a href="" class="dropdown-item">Link6</a>
         <a href="" class="dropdown-item">Link7</a>
         <a href="" class="dropdown-item">Link8</a>
         <a href="" class="dropdown-item">Link9</a>
         <a href="" class="dropdown-item">Link10</a>
         <a href="" class="dropdown-item">Link11</a>
         <a href="" class="dropdown-item">Link12</a>   
  </div>
</li>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">Transaction</a>
  <div class="dropdown-menu">
         <a class="dropdown-item" href="">Charges <span class="badge badge-danger">5</span></a>
          <a class="dropdown-item" href="">Payment <span class="badge badge-danger">10</span></a>
         <a class="dropdown-item" href="">Balance <span class="badge badge-danger">10</span></a>
  </div>
</li>
<li class="nav-item">
  <a class="nav-link" href="">Notifications <span class="badge badge-danger">10</span></a>
</li>      
@endsection
@php
$student = \App\Enrollment\Student::where('user_id',auth()->id())->first();
if($student != null){
  $father = \App\Enrollment\Father::find($student->father_id);
  $mother = \App\Enrollment\Mother::find($student->mother_id);
  $requirement = \App\Enrollment\Requirement::where('student_id', $student->id)->first();
}else{
  $father = null;
  $mother = null;
  $requirement = null;
}

@endphp
@section('dropdown')
 @if($student != null)
 <a class="dropdown-item" href="{{ route('student.edit',compact('student')) }}">Edit Student</a>
 @endif
@if($father != null)
   <a class="dropdown-item" href="{{ route('father.edit',compact('father')) }}">Edit Father</a>
@endif
@if($mother != null)
 <a class="dropdown-item" href="{{ route('mother.edit',compact('mother')) }}">Edit Mother</a>
 @endif
 @if($requirement != null)
 <a class="dropdown-item" href="{{ route('requirement.edit',compact('requirement')) }}">Edit Requirement</a>
 @endif
 <div class="dropdown-divider"></div>
@endsection
