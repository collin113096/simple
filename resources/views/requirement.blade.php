@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Step 3: Requirements</span>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-file col-md-8 d-block mx-auto">
                            <label class="custom-file-label">Birth Certificate</label>
                            <input class="custom-file-input" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file col-md-8 d-block mx-auto">
                            <label class="custom-file-label">Certificate of Transfer</label>
                            <input class="custom-file-input" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file col-md-8 d-block mx-auto">
                            <label class="custom-file-label">Picture</label>
                            <input class="custom-file-input" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file col-md-8 d-block mx-auto">
                            <label class="custom-file-label">Certificate of Good Moral Character</label>
                            <input class="custom-file-input" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file col-md-8 d-block mx-auto">
                            <label class="custom-file-label">Form 137 / Transcript of Record</label>
                            <input class="custom-file-input" type="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-file col-md-8 d-block mx-auto">
                            <label class="custom-file-label">Form 138 / Report Card</label>
                            <input class="custom-file-input" type="file">
                        </div>
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
