@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">    
         	<div class="card">
         		<div class="card-header">
         			Edit Payment
         		</div>
         		<div class="card-body">
         	    <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Person Name</label>
                <div class="col-md-6">
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">OR</label>
                <div class="col-md-6">
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Amount</label>
                <div class="col-md-6">
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">Date</label>
                <div class="col-md-6">
                  <input class="form-control" type="text">
                </div>
              </div>
         		</div>
         		<div class="card-footer d-flex justify-content-end">
         			<button class="btn btn-primary px-4" type="submit">Save</button>
         		</div>
         	</div>
        </div>
    </div>
</div>
@endsection
