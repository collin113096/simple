@extends('enrollment.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="{{ route('student.update',compact('student')) }}">
            @csrf
            @method('PATCH')
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Edit Personal Information</span>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Last Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="last_name" value="{{ $student->last_name }}"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">First Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="first_name" value="{{ $student->first_name }}"></div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Middle Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="middle_name" value="{{ $student->middle_name }}"></div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Barangay</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="barangay" value="{{ $student->barangay }}"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Municipality</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="municipality" value="{{ $student->municipality }}"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Province</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="province" value="{{ $student->province }}"></div>
                    </div><hr>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Birth Date</label>
                        <div class="col-md-6"><input class="form-control" type="date" name="birth_date" value="{{ $student->birth_date }}"></div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Birth Place</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="birth_place" value="{{ $student->birth_place }}"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Religion</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="religion" value="{{ $student->religion }}"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Gender</label>
                        <div class="col-md-6">
                            <select class="custom-select" name="gender">
                                <option value="" hidden>Choose Gender</option>
                                <option value="Male" {{ $student->gender == 'Male' ? 'selected':'' }}>Male</option>
                                <option value="Female" {{ $student->gender == 'Female' ? 'selected':'' }}>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Grade</label>
                        <div class="col-md-6">
                            <select class="custom-select" name="grade_id" id="">
                                <option value="" hidden>Choose Grade</option>
                                @foreach($grades as $grade)
                                 <option value="{{ $grade->id }}" {{ $student->grade_id == $grade->id ? 'selected':'' }}>{{ $grade->name }}</option>
                                 @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
