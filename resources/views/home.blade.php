
@extends('admin.master')
@section('content')
<div class="container-fluid">
    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div> -->


  <!-- <div style="background-image:url('/Main/images/img2.jpg')"> -->
    <!-- <div class="overlay"></div> -->
    <!-- <img class="contact-img" src="{{URL::to('/')}}/Main/images/img2.jpg" alt="">
  </div> -->
  <!-- <div class="container-fluid bg-dark p-5 contact">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-white mt-5 fontweight-bold">About Us</h1>
        <div class="underline mb-5"></div>
      </div>
    </div>
  </div> -->
<!-- <div class="container-fluid bg-light p-5"> 
    <div class="row">
      <div class="">
        <h1>Our Mission</h1>
        <p></p>
      </div>
    </div>
  </div> --> 
  <div class="container-fluid bg-light">
        <div class="row">
          <div class="col-lg-10 col-xl-10 col-12 ml-auto">
            <div class="row mt-4">
                <div class="col-6">
                  <div class="card bg-light">
                    <i class="far fa-cleander -alt fa-8x text-warning d-block m-auto py-3" style="height:159px"></i>
                    <div class="card-body">
                    <p class="card-text text-center font-weight-bold text-uppercase"><?php echo date('l  m, Y'); ?></p>
                    </div>
                    </div>
                  </div>
                  <div class="col-6">
                      <div class="card bg-light">
                        <i class="far fa-clock -alt fa-8x text-danger d-block m-auto py-3"></i>
                        <div class="card-body">
                          <p class="card-text text-center font-weight-bold text-uppercase">3:50 AM</p>
                      </div>
                  </div>
                </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <section class="py-4" style="background: #536569; margin-left: 210px">
       <div class="container-fluid">
         <!-- title -->
         <div class="row text-white text-center">
           <div class="col m-4">
             <h1 class="display-4 mb-4">Books</h1>
             <div class="underline mb-4"></div>
              <p class="lead">Identifying Categories of Open Educational Resource Users. The physical versions of such books are available at free of cost.</p>
            </div>
          </div>
          <!-- end of title -->
          <!-- cards -->
          <div class="row">
            <div class="col-lg-4 col-sm-6 my-5">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/c.svg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Programing Books</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 my-5">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/bba.jpg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Business Books</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 my-5">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/math.jpg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Maths Books</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 my-5">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/islamic.jpg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Islamic Books</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 my-5">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/ee.jpg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Electrical Engineering</h5>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 my-5">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/medical.png" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Medical Books</h5>
                </div>
              </div>
            </div>
            <div class="col-md-12 mx-auto">
              <a href="{{route('categories')}}" style="border-radius: 10px !important; padding: 10px;" type="submit" class="col-md-4 btn btn-block bg-info m-auto text-light font-weight-bold">More Books</a>
            </div>
          </div>
          <!-- end of cards -->
       </div>
     </section>
   <!-- <div class="container text-center mb-5" style="background: #ebeeee;"> 
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
  <div class="mt-5 text-white"></div> --> -->


</div>
@endsection
