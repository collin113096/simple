@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">    
          <div class="card">
          	<div class="card-header">
          		Charges
          	</div>
          	<div class="card-body">
          		<button class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#charges">Record Charges</button>
          		<table class="table table-striped">
          			<thead>
          				<tr>
          					<th>Student Name</th>
          					<th>Particulars</th>
          					<th>Amount</th>
	          				<th>Date</th>
	          				<th>Action</th>		
	          			</tr>
          			</thead>
          			<tbody>
          				<tr>
          					<td>Pagtananan, Jiyo Collin B.</td>
          					<td>Tuition Fee</td>
          					<td>1000</td>
          					<td>01/15/2019</td>
          					<td class="d-flex justify-content-around">
          						<a class="btn btn-primary btn-sm" href="#charges">Edit</a>
          						<form action="">
			         				<button class="btn btn-danger btn-sm">Delete</button>
			         			</form>
          					</td>
          				</tr>
          			</tbody>
          		</table>
          	</div>
          </div>
          <div class="modal" id="charges">
          	<div class="modal-dialog">
          		<div class="modal-content">
          			<div class="modal-header">
          				Add Charges
          			</div>
          			<form action="">
          			<div class="modal-body">         				
          					<div class="form-group row">
          						<label class="col-md-4 col-form-label text-md-right">Person Name</label>
          						<div class="col-md-6">
          							<input class="form-control" type="text">
          						</div>
          					</div>
          					<div class="form-group row">
          						<label class="col-md-4 col-form-label text-md-right">Particulars</label>
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
          			<div class="modal-footer">
          				<button class="btn btn-primary">Save</button>
          			</div>
          			</form>
          		</div>
          	</div>
          </div>
        </div>
    </div>
</div>
@endsection
