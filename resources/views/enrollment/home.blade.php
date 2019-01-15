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

@endsection