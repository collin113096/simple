@extends('enrollment.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Step 4: Requirements</span>
                </div>
                <form method="post" action="{{ route('requirement.store') }}" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                   <div class="row mb-5">
                       <div class="col-md-2">                    
                            <select name="student_type" class="custom-select" id="student_type">
                                <option value="" hidden>Type of Student</option>
                                <option value="New Student">New Student</option>
                                <option value="Transferee Student">Transferee Student</option>
                                <option value="Old Student">Old Student</option>
                            </select>                                
                       </div>
                   </div>
                    <!--START -->
                    <div class="row align-items-baseline">
                        <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="birth_certificate">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/requirement/disable_document.png') }}" alt="" id="birth_certificate_tag" width="100px">
                              Birth Certificate
                            </label>
                            <input class="collapse" id="birth_certificate" name="birth_certificate" type="file">
                        </div>

                        <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="certificate_of_transfer">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/requirement/disable_document.png') }}" alt="" id="certificate_of_transfer_tag" width="100px">
                              Certificate of Transfer (For Transferee)
                            </label>
                            <input class="collapse" id="certificate_of_transfer" name="certificate_of_transfer" type="file">
                        </div>

                        <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="certificate_of_good_moral_character">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/requirement/disable_document.png') }}" alt="" id="certificate_of_good_moral_character_tag" width="100px">
                              Certificate of Good Moral Character
                            </label>
                            <input class="collapse" id="certificate_of_good_moral_character" name="certificate_of_good_moral_character" type="file">
                        </div>

                        <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="form137">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/requirement/disable_document.png') }}" alt="" id="form137_tag" width="100px">
                              Form 137 / Transcript of Record
                            </label>
                            <input class="collapse" id="form137" name="form137" type="file">
                        </div>

                         <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="form138">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/requirement/disable_document.png') }}" alt="" id="form138_tag" width="100px">
                              Form 138 / Report Card
                            </label>
                            <input class="collapse" id="form138" name="form138" type="file">
                        </div>


                         <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="picture">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/requirement/disable_document.png') }}" alt="" id="picture_tag" width="100px">
                              Picture
                            </label>
                            <input class="collapse" id="picture" name="picture" type="file">
                        </div>



                    </div><!--ROW-->
                </div><!--CARD BODY -->
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Next</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<input id="asset" type="hidden" value="{{ asset('images/requirement/') }}"">
<script src="{{ asset('js/image_viewer.js') }}"></script>
<script src="{{ asset('js/toggle_disable_and_src_attribute.js') }}"></script>
@endsection
