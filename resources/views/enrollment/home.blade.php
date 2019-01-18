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
                
               <div class="card">
                 <div class="card-header">
                   Cash
                 </div>
                 <div class="card-body">
                    <table class="table table-borderless">
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
                        <td>1500</td>
                      </tr>
                       <tr>
                        <td>Tuition Fee</td>
                        <td>1000</td>
                      </tr>
                       <tr>
                        <td>Misc Fee</td>
                        <td>3000</td>
                      </tr>
                       <tr>
                        <td>Computer Fee</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold">Total</td>
                        <td class="font-weight-bold">2343240</td>
                      </tr>
                    </tbody>
                  </table>
                 </div>
               </div>
                

                <div class="card mt-3">
                 <div class="card-header">
                   Installment
                 </div>
                 <div class="card-body">
                    <table class="table table-borderless">
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
                        <td>1500</td>
                      </tr>
                       <tr>
                        <td>Tuition Fee</td>
                        <td>1000</td>
                      </tr>
                       <tr>
                        <td>Misc Fee</td>
                        <td>3000</td>
                      </tr>
                       <tr>
                        <td>Computer Fee</td>
                        <td>0</td>
                      </tr>
                      <tr>
                        <td class="font-weight-bold">Total</td>
                        <td class="font-weight-bold">2343240</td>
                      </tr>
                    </tbody>
                  </table>
                 </div>
               </div>

            </div>
          </div>
        </div>
      </div>
@endforeach
@endsection