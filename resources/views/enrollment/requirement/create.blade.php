@extends('enrollment.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="d-block p-lg-4 h4">Step 4: Requirements</span>
                </div>
                <form method="post" action="{{ route('requirement.store') }}">
                    @csrf
                <div class="card-body">

                    <!--START -->
                    <div class="row align-items-baseline">
                        <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="birth_certificate">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/image.png') }}" alt="" id="birth_certificate_tag" width="100px">
                              Birth Certificate
                            </label>
                            <input class="collapse" id="birth_certificate" name="birth_certificate" type="file">
                        </div>

                        <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="certificate_of_transfer">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/image.png') }}" alt="" id="certificate_of_transfer_tag" width="100px">
                              Certificate of Transfer
                            </label>
                            <input class="collapse" id="certificate_of_transfer" name="certificate_of_transfer" type="file">
                        </div>

                        <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="certificate_of_good_moral_character">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/image.png') }}" alt="" id="certificate_of_good_moral_character_tag" width="100px">
                              Certificate of Good Moral Character
                            </label>
                            <input class="collapse" id="certificate_of_good_moral_character" name="certificate_of_good_moral_character" type="file">
                        </div>

                        <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="form137">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/image.png') }}" alt="" id="form137_tag" width="100px">
                              Form 137 / Transcript of Record
                            </label>
                            <input class="collapse" id="form137" name="form137" type="file">
                        </div>

                         <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="form138">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/image.png') }}" alt="" id="form138_tag" width="100px">
                              Form 138 / Report Card
                            </label>
                            <input class="collapse" id="form138" name="form138" type="file">
                        </div>


                         <div class="col-md-2">
                            <label class="d-block mx-auto text-center" for="picture">
                            <img class="d-block mx-auto mb-3" src="{{ asset('images/image.png') }}" alt="" id="picture_tag" width="100px">
                              Picture
                            </label>
                            <input class="collapse" id="picture" name="picture" type="file">
                        </div>



                    </div><!--ROW-->
                </div><!--CARD BODY -->
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-lg btn-success" type="submit">Next</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
        
 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                switch(input.id){
                    case "birth_certificate":
                        $('#birth_certificate_tag').attr('src', e.target.result);
                        break;
                    case "certificate_of_transfer":
                        $('#certificate_of_transfer_tag').attr('src', e.target.result);
                        break;
                    case "certificate_of_good_moral_character":
                        $('#certificate_of_good_moral_character_tag').attr('src', e.target.result);
                        break;
                    case "form137":
                        $('#form137_tag').attr('src', e.target.result);
                        break;
                    case "form138":
                        $('#form138_tag').attr('src', e.target.result);
                        break;
                    case "picture":
                        $('#picture_tag').attr('src', e.target.result);
                        break;
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("input").change(function(){
        readURL(this);
    });

</script>
@endsection
