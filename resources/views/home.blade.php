@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="alert-heading">Check Your Notifications</h4>
                <p>After submitting your requirement, check your notification often. Before you go to the school ensure that your application for enrollment is approved.</p>
                </p>
            </div>
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Step 1: Personal Information</span>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Last Name</label>
                        <input class="col-md-6 form-control" type="text">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Middle Name</label>
                        <input class="col-md-6 form-control" type="text">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">First Name</label>
                        <input class="col-md-6 form-control" type="text">
                    </div><hr>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Barangay</label>
                        <input class="col-md-6 form-control" type="text">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Municipality</label>
                        <input class="col-md-6 form-control" type="text">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Province</label>
                        <input class="col-md-6 form-control" type="text">
                    </div><hr>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Birth Date</label>
                        <input class="col-md-6 form-control" type="date">
                    </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Birth Place</label>
                        <input class="col-md-6 form-control" type="text">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Religion</label>
                        <input class="col-md-6 form-control" type="text">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Gender</label>
                        <select class="col-md-6 custom-select" name="" id="">
                            <option value="">Male</option>
                            <option value="">Female</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Grade</label>
                        <select class="col-md-6 custom-select" name="" id="">
                            <option value="">Grade 1</option>
                            <option value="">Grade 2</option>
                        </select>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-lg btn-success">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
