@extends('enrollment.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="alert-heading">Check Your Notifications</h4>
                <p>After you submited your requirement, check your notification often to ensure that your application for enrollment is approved.</p>
            </div>
            <form method="post" action="{{ route('student.store') }}">
            @csrf
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Step 1: Personal Information</span>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Last Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="last_name"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Middle Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="middle_name"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">First Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="first_name"></div>
                    </div><hr>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Barangay</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="barangay"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Municipality</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="municipality"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Province</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="province"></div>
                    </div><hr>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Birth Date</label>
                        <div class="col-md-6"><input class="form-control" type="date" name="birth_date"></div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Birth Place</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="birth_place"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Religion</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="religion"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Gender</label>
                        <div class="col-md-6">
                            <select class="custom-select" name="gender">
                                <option value="" hidden>Choose Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Grade</label>
                        <div class="col-md-6">
                            <select class="custom-select" name="grade" id="">
                                <option value="" hidden>Choose Grade</option>
                                <option value="Grade 1">Grade 1</option>
                                <option value="Grade 2">Grade 2</option>
                                <option value="Grade 3">Grade 3</option>
                                <option value="Grade 4">Grade 4</option>
                                <option value="Grade 5">Grade 5</option>
                                <option value="Grade 6">Grade 6</option>
                                <option value="Grade 7">Grade 7</option>
                                <option value="Grade 8">Grade 8</option>
                                <option value="Grade 9">Grade 9</option>
                                <option value="Grade 10">Grade 10</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-lg btn-success" type="submit">Next</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
