@extends('enrollment.layout')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators"> 
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('images/slider/one.jpg') }}" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
	    <h5>Mission Statement</h5>
	    <p>Pagsanjan Academy which was founded in 1923 is committed to foster quality education to the youth of the community of Pagsanjan and its vicinities. It is a non-secretarian school for boys and girls which aims to give them a round, complete and general education and thus to promote their intellectual and moral development.</p>
	  </div>
    </div>
  <!--   <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/slider/two.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/slider/three.jpg') }}" alt="Third slide">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@foreach($grades as $grade)
 <!-- Modal -->
      <div class="modal fade" id="grade{{ $grade->id}}">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">{{ $grade->name }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="carouselExampleControls{{ $grade->id}}" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                     @if(!empty($grade))
                     <div class="card">
                       <div class="card-header">
                         Cash
                       </div>
                       <div class="card-body">
                          <table class="table table-hover">
                          <caption>Enroll with Only 1,500 pesos everything to pay by installment for whole year. <strong>Note: Books - Cash</strong></caption>
                          <thead>
                            <tr>
                              <th>Fee</th>
                              <th>Amount</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Registration Fee</td>
                              <td>{{ count($grade->modes) != 0 ? $grade->modes[0]->pivot->registration : '' }}</td>
                            </tr>
                             <tr>
                              <td>Tuition Fee</td>
                              <td>{{ count($grade->modes) != 0 ? $grade->modes[0]->pivot->tuition : '' }}</td>
                            </tr>
                             <tr>
                              <td>Misc Fee</td>
                              <td>{{  count($grade->modes) != 0 ? $grade->modes[0]->pivot->misc : ''  }}</td>
                            </tr>
                             <tr>
                              <td>Computer Fee</td>
                              <td>{{  count($grade->modes) != 0 ? $grade->modes[0]->pivot->computer : ''  }}</td>
                            </tr>
                            <tr>
                              <td class="font-weight-bold">Total</td>
                              <td class="font-weight-bold">{{ count($grade->modes) != 0 ? collect([$grade->modes[0]->pivot->registration, $grade->modes[0]->pivot->tuition, $grade->modes[0]->pivot->misc, $grade->modes[0]->pivot->computer])->sum() : '' }}</td>
                            </tr>
                          </tbody>
                        </table>
                       </div>
                     </div>
                     @endif
                  </div>
                  <div class="carousel-item">
                      @if(!empty($grade))
                      <div class="card">
                         <div class="card-header">
                           Installment
                         </div>
                         <div class="card-body">
                            <table class="table table-hover">
                            <caption>Enroll with Only 1,500 pesos everything to pay by installment for whole year. <strong>Note: Books - Cash</strong></caption>
                            <thead>
                              <tr>
                                <th>Fee</th>
                                <th>Amount</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Registration Fee</td>
                                <td>{{  count($grade->modes) != 0 ? $grade->modes[1]->pivot->registration : ''  }}</td>
                              </tr>
                               <tr>
                                <td>Tuition Fee</td>
                                <td>{{  count($grade->modes) != 0 ? $grade->modes[1]->pivot->tuition : ''  }}</td>
                              </tr>
                               <tr>
                                <td>Misc Fee</td>
                                <td>{{  count($grade->modes) != 0 ? $grade->modes[1]->pivot->misc : ''  }}</td>
                              </tr>
                               <tr>
                                <td>Computer</td>
                                <td>{{  count($grade->modes) != 0 ? $grade->modes[1]->pivot->computer : ''  }}</td>
                              </tr>
                              <tr>
                                <td class="font-weight-bold">Total</td>
                                <td class="font-weight-bold">{{ count($grade->modes) != 0 ? collect([$grade->modes[1]->pivot->registration, $grade->modes[1]->pivot->tuition, $grade->modes[1]->pivot->misc, $grade->modes[1]->pivot->computer])->sum() : '' }}</td>
                              </tr>
                            </tbody>
                          </table>
                         </div>
                       </div>
                        @endif
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls{{ $grade->id}}" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true">sdfsdf</span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls{{ $grade->id}}" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true">sdfsdf</span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
@endforeach
@endsection