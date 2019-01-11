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
                    
                    <!--START -->
                    <div class="form-group">
                        <div class="input-group">
                        <div class="custom-file col-md-8 mx-auto">
                            <label class="custom-file-label">Birth Certificate</label>
                            <input class="custom-file-input" id="birth_certificate" name="birth_certificate" type="file">
                        </div>
                        </div>
                    </div>
                    <div class="form-group">
                         <div class="collapse">
                            <button class="input-group-text dropdown-toggle" data-toggle="dropdown" data-target="birth_certificate_dropdown">Action</button>
                            <div class="dropdown-menu" id="birth_certificate_dropdown">
                                <a class="dropdown-item" data-toggle="modal" href="#birth_certificate_modal">View</a>
                                <a class="dropdown-item" href="#">Remove</a>
                            </div>
                        </div>
                    </div>

                     <div class="modal" id="birth_certificate_modal">
                        <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <div class="modal-title">
                                         Birth Certificate
                                     </div>
                                 </div>
                                 <div class="modal-body">
                                    <img class="" src="" alt="" id="birth_certificate_tag" width="100%">
                                 </div>
                                 <div class="modal-footer">
                                    <button class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                 </div>
                             </div>
                        </div>
                    </div> 
                    <!-- END -->       

                     <!--START -->
                    <div class="form-group">
                        <div class="input-group">
                        <div class="custom-file col-md-8 mx-auto">
                            <label class="custom-file-label">Certificate of Transfer</label>
                            <input class="custom-file-input" id="certificate_of_transfer" name="certificate_of_transfer" type="file">
                        </div>
                        <div class="collapse">
                            <button class="input-group-text dropdown-toggle" data-toggle="dropdown" data-target="certificate_of_transfer_dropdown">Action</button>
                            <div class="dropdown-menu" id="certificate_of_transfer_dropdown">
                                <a class="dropdown-item" data-toggle="modal" href="#certificate_of_transfer_modal">View</a>
                                <a class="dropdown-item" href="#">Remove</a>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="modal" id="certificate_of_transfer_modal">
                        <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <div class="modal-title">
                                         Certificate of Transfer
                                     </div>
                                 </div>
                                 <div class="modal-body">
                                    <img class="" src="" alt="" id="certificate_of_transfer_tag" width="100%">
                                 </div>
                                 <div class="modal-footer">
                                    <button class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                 </div>
                             </div>
                        </div>
                    </div> 
                    <!-- END --> 

                     <!--START -->
                    <div class="form-group">
                        <div class="input-group">
                        <div class="custom-file col-md-8 mx-auto">
                            <label class="custom-file-label">Good Moral Character</label>
                            <input class="custom-file-input" id="certificate_of_good_moral_character" name="certificate_of_good_moral_character" type="file">
                        </div>
                        <div class="collapse">
                            <button class="input-group-text dropdown-toggle" data-toggle="dropdown" data-target="certificate_of_good_moral_character_dropdown">Action</button>
                            <div class="dropdown-menu" id="certificate_of_good_moral_character_dropdown">
                                <a class="dropdown-item" data-toggle="modal" href="#certificate_of_good_moral_character_modal">View</a>
                                <a class="dropdown-item" href="#">Remove</a>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="modal" id="certificate_of_good_moral_character_modal">
                        <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <div class="modal-title">
                                         Certificate of Good Moral Character
                                     </div>
                                 </div>
                                 <div class="modal-body">
                                    <img class="" src="" alt="" id="certificate_of_good_moral_character_tag" width="100%">
                                 </div>
                                 <div class="modal-footer">
                                    <button class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                 </div>
                             </div>
                        </div>
                    </div> 
                    <!-- END --> 

                     <!--START -->
                    <div class="form-group">
                        <div class="input-group">
                        <div class="custom-file col-md-8 mx-auto">
                            <label class="custom-file-label">Transcript of Record</label>
                            <input class="custom-file-input" id="form137" name="form137" type="file">
                        </div>
                        <div class="collapse">
                            <button class="input-group-text dropdown-toggle" data-toggle="dropdown" data-target="form137_dropdown">Action</button>
                            <div class="dropdown-menu" id="form137_dropdown">
                                <a class="dropdown-item" data-toggle="modal" href="#form137_modal">View</a>
                                <a class="dropdown-item" href="#">Remove</a>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="modal" id="form137_modal">
                        <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <div class="modal-title">
                                         Form 137 / Transcript of Record
                                     </div>
                                 </div>
                                 <div class="modal-body">
                                    <img class="" src="" alt="" id="form137_tag" width="100%">
                                 </div>
                                 <div class="modal-footer">
                                    <button class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                 </div>
                             </div>
                        </div>
                    </div> 
                    <!-- END --> 

                     <!--START -->
                    <div class="form-group">
                        <div class="input-group">
                        <div class="custom-file col-md-8 mx-auto">
                            <label class="custom-file-label">Report Card</label>
                            <input class="custom-file-input" id="form138" name="form138" type="file">
                        </div>
                        <div class="collapse">
                            <button class="input-group-text dropdown-toggle" data-toggle="dropdown" data-target="form138_dropdown">Action</button>
                            <div class="dropdown-menu" id="form138_dropdown">
                                <a class="dropdown-item" data-toggle="modal" href="#form138_modal">View</a>
                                <a class="dropdown-item" href="#">Remove</a>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="modal" id="form138_modal">
                        <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <div class="modal-title">
                                         Form 138 / Report Card
                                     </div>
                                 </div>
                                 <div class="modal-body">
                                    <img class="" src="" alt="" id="form138_tag" width="100%">
                                 </div>
                                 <div class="modal-footer">
                                    <button class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                 </div>
                             </div>
                        </div>
                    </div> 
                    <!-- END --> 

                     <!--START -->
                    <div class="form-group">
                        <div class="input-group">
                        <div class="custom-file col-md-8 mx-auto">
                            <label class="custom-file-label">Picture</label>
                            <input class="custom-file-input" id="picture" name="picture" type="file">
                        </div>
                        <div class="collapse">
                            <button class="input-group-text dropdown-toggle" data-toggle="dropdown" data-target="picture_dropdown">Action</button>
                            <div class="dropdown-menu" id="picture_dropdown">
                                <a class="dropdown-item" data-toggle="modal" href="#picture_modal">View</a>
                                <a class="dropdown-item" href="#">Remove</a>
                            </div>
                        </div>
                        </div>
                    </div>

                     <div class="modal" id="picture_modal">
                        <div class="modal-dialog">
                             <div class="modal-content">
                                 <div class="modal-header">
                                     <div class="modal-title">
                                         Picture
                                     </div>
                                 </div>
                                 <div class="modal-body">
                                    <img class="" src="" alt="" id="picture_tag" width="100%">
                                 </div>
                                 <div class="modal-footer">
                                    <button class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button>
                                 </div>
                             </div>
                        </div>
                    </div> 
                    <!-- END -->   



                   
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <button class="btn btn-lg btn-success">Next</button>
                </div>
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
