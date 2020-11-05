@extends("master")

@section("content")
  <div class="">
    <div class="overlay"></div>
    <img class="contact-img" src="{{URL::to('/')}}/Main/images/img2.jpg" alt="">
  </div>
  <div class="container-fluid bg-dark p-5 contact">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-white mt-5 fontweight-bold">About Us</h1>
        <div class="underline mb-5"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-light p-5">
    <div class="row">
      <div class="">
        <h1>Our Mission</h1>
        <p></p>
      </div>
    </div>
  </div>
  <div class="container text-center mb-5" style="background: #ebeeee;">
    <div class="row">
      <div class="col-md-6 mt-5">
        <h5 class="text-secondary text-center font-italic">Since 2020, we have helped more than 100 people</h5>
        <h3 class="text-center font-weight-bold" style="color: #e58839;">200 People</h3>
        <h5 class="text-secondary text-center font-italic">working in</h5>
        <h3 class="text-center font-weight-bold" style="color: #e58839;">200 cities</h3>

      </div>
      <div class="col-md-6 ">
        <img height="400" class="" src="{{URL::to('/')}}/Main/images/world.png" alt="">
      </div>
    </div>
  </div>
  <div class="mt-5 text-white"></div>
@endsection
