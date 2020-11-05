@extends("master")

@section("content")
  <div class="">
    <div class="overlay"></div>
    <img class="contact-img" src="{{URL::to('/')}}/Main/images/img2.jpg" alt="">
  </div>
  <div class="container-fluid bg-dark p-5 contact">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-white mt-5 fontweight-bold">Ctegories</h1>
        <div class="underline mb-5"></div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 my-3">
        <ul class="list-group">
          <li class="list-group-item disabled">Books Categories</li>
          <li class="list-group-item">All</li>
          <li class="list-group-item">Computer Science</li>
          <li class="list-group-item">Business</li>
          <li class="list-group-item">Electrical Engineering</li>
          <li class="list-group-item">English Litrature</li>
        </ul>
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-3 my-3">
            <div class="">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/c.svg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">The C Progrmming Language</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 my-3">
            <div class="">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/bba.jpg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Financial Accounting</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 my-3">
            <div class="">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/math.jpg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Abstract Algebra</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 my-3">
            <div class="">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/islamic.jpg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Secrete of Deveine Love</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 my-3">
            <div class="">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/ee.jpg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Electrical Engineering</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 my-3">
            <div class="">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/medical.png" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">One Eye or Two</h5>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 my-3">
            <div class="">
              <div class="card border-0 card-shadow">
                <img src="{{URL::to('/')}}/Main/images/books/c.svg" class="card-img">
                <div class="card-img-overlay">
                  <h5 class="text-white text-uppercase font-weight-bold p-2 heading">Programing Books</h5>
                </div>
              </div>
            </div>
          </div>





        </div>
      </div>
    </div>
  </div>
@endsection
