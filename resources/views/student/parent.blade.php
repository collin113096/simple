@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Step 2: Parent Information</span>
                </div>

                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father Last Name</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father Middle Name</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father First Name</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father Occupation</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father Contact</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div><hr>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother Last Name</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div>
                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother Middle Name</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother First Name</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother Occupation</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother Contact</label>
                        <div class="col-md-6"><input class="form-control" type="text"></div>
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
