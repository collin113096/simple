@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					Add Fee
				</div>
				<form method="post" action="{{ route('fee.store') }}">
				@csrf
				<div class="card-body">

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Mode of Payment</label>
						<div class="col-md-6">
							<select class="custom-select" name="mode">
								<option hidden>Choose Mode</option>
								@foreach($modes as $mode)
									<option value="{{ $mode->id }}">{{ $mode->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Grade</label>
						<div class="col-md-6">
							<select class="custom-select" name="grade">
								<option hidden>Choose Grade</option>
								@foreach($grades as $grade)
									<option value="{{ $grade->id }}">{{ $grade->name }}</option>
								@endforeach
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Registration Fee</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="registration"></select>
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Tuition Fee</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="tuition"></select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Misc Fee</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="misc"></select>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-4 col-form-label text-md-right">Computer Fee</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="computer"></select>
						</div>
					</div>

				</div>
				<div class="card-footer d-flex justify-content-end">
					<button class="btn btn-success" type="submit">Save</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection