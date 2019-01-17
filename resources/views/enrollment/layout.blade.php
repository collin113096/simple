@extends('layouts.app')
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
$student = \App\Enrollment\Student::where('user_id',auth()->id())->first()
@endphp
@section('dropdown')
 <a class="dropdown-item" href="{{ route('student.edit',compact('student')) }}">
    {{ __('Profile') }}
</a>
@endsection
