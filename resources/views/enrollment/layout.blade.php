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
      @foreach($grades as $grade)
      <a href="#grade{{ $grade->id }}" data-toggle="modal" class="dropdown-item">{{ $grade->name }}</a>
      @endforeach
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
 @if($student != null)
 <a class="dropdown-item" href="{{ route('requirement.edit',['id' => $student->id]) }}">Edit Requirement</a>
 @endif
 <div class="dropdown-divider"></div>
@endsection
