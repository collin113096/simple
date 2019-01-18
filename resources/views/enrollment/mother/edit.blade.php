@extends('enrollment.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Edit Mother Information</span>
                </div>
                <form method="post" action="{{ route('mother.update',compact('mother')) }}">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother Last Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="last_name" value="{{ $mother->last_name }}"></div>
                    </div>                  
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother Middle Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="middle_name" value="{{ $mother->middle_name }}"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother First Name</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="first_name" value="{{ $mother->first_name }}"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother Occupation</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="occupation" value="{{ $mother->occupation }}"></div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Mother Contact</label>
                        <div class="col-md-6"><input class="form-control" type="text" name="contact" value="{{ $mother->contact }}"></div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
