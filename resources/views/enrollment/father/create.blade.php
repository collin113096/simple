@extends('enrollment.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Step 2: Father Information</span>
                </div>
                <form method="post" action="{{ route('father.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father Last Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="last_name"></div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father Middle Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="middle_name"></div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father First Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="first_name"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father Occupation</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="occupation"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Father Contact</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="contact"></div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-lg btn-success" type="submit">Next</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
