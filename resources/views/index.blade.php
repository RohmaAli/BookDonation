@extends("master")

@section("content")
  <!-- slider -->
  <section>
    <div id="slides">

      <div class="overlay"></div>

      <div class="slides-container">
        <img src="{{URL::to('/')}}/Main/images/img1.jpg" alt="">
        <img src="{{URL::to('/')}}/Main/images/img2.jpg" alt="">
        <img src="{{URL::to('/')}}/Main/images/img3.jpg" alt="">
      </div>

      <div class="titleMessage">
        <div class="heading1">
          <p class="main">Help the childeren <br> When They Need </p>
          <p class="sub typed"></p>

        </div>
      </div>

      <nav class="slides-navigation">
        <a href="#" class="next"></a>
        <a href="#" class="prev"></a>
      </nav>
    </div>
  </section>
  <!-- end of slider -->

    <!-- We are -->
      <section>
        <div class="container-fluid p-5 text-center" style="background: #546569">
          <div class="row">
            <div class="col-md-12">
              <h4 class="display-4 font-weight-bold text-light mt-1">Who we are</h4>
              <div class="underline"></div>
              <p class="we-sub">The ACT coalition is a non-profit organization made up of cause-based staff and volunteers striving to preserve and sustain our community.</p>
            </div>
          </div>
        </div>
      </section>
    <!-- and of we are section -->

    <!-- join us -->
  <section>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 p-5 box1">
          <i class="fas fa-book fa-5x bg-white mb-4" style="border-radius: 50%;"></i>
          <h1 class="text-white mb-3 font-weight-bold">Read Our Stories</h1>
          <p class="text-white">One of the best things about bookdonation site is that you can use virtually books.</p>
          <a href="#" class="box-btn">&nbsp;&nbsp; Read Stories  &nbsp;&nbsp;</a>
        </div>
        <div class="col-md-4 p-5 box2">
          <i class="fas fa-users fa-4x bg-white mb-4 p-3" style="border-radius: 50%;"></i>
          <h1 class="text-white mb-3 font-weight-bold">Join The Coalition</h1>
          <p class="text-white">If you want to support a poor students, you can join us to giving awareness.</p>
          <a href="#" class="box-btn">&nbsp;&nbsp; Join Now  &nbsp;&nbsp;</a>
        </div>
        <div class="col-md-4 p-5 box3">
          <i class="fas fa-university fa-4x bg-white mb-4 p-3" style="border-radius: 50%;"></i>
          <h1 class="text-white mb-3 font-weight-bold">Help In Education</h1>
          <p class="text-white">One of the best things about bookdonation Helping poor people.</p>
          <a href="#" class="box-btn">&nbsp;&nbsp; Let's Get Started  &nbsp;&nbsp;</a>
        </div>
      </div>
    </div>
  </section>
    <!-- and of join us section -->
    <!-- Collection -->
     <section class="py-4" style="background: #536569;">
       <div class="container-fluid">
         <!-- title -->
         <div class="row text-white text-center">
           <div class="col m-4">
             <h1 class="display-4 mb-4">Categories</h1>
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
     <!-- end of collection -->
     <!-- Users -->
<section class="p-5 customers">
  <div class="container-fluid">
    <!-- title -->
    <div class="row text-white text-center">
      <div class="col m-4">
        <h1 class="display-4 mb-4">User Reviews</h1>
        <div class="underline mb-4"></div>
         <p class="lead">One of the best things about bookdonation site is that you can use virtually books.</p>
       </div>
     </div>
     <!-- end of title -->

     <div class="row">
       <div class="col-md-6 mx-auto">
         <div class="carousel slide" data-ride="carousel" id="customer-carousel">
           <ol class="carousel-indicators">
             <li data-target="#customer-carousel" data-slide-to="0" class="active"></li>
             <li data-target="#customer-carousel" data-slide-to="1"></li>
             <li data-target="#customer-carousel" data-slide-to="2"></li>
           </ol>
           <div class="carousel-inner">
             <div class="carousel-item active text-center">
               <img src="{{URL::to('/')}}/Main/images/user/hamza.jpg" width="150" class="img-fluid rounded-circle m-5">
               <blockquote class="blockquote text-white">
                 <p class="mb-5">One of the best things about bookdonation site is that you can use virtually books.</p>
               </blockquote>
               <h5 class="text-light text-uppercase font-weight-bold mb-3">Hamza Mughal</h5>
               <ul class="list-inline mb-5">
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
               </ul>
             </div>
             <div class="carousel-item  text-center">
               <img src="{{URL::to('/')}}/Main/images/user/abdullahl.jpg" width="150" class="img-fluid rounded-circle m-5">
               <blockquote class="blockquote text-white">
                 <p class="mb-5">One of the best things about bookdonation site is that you can use virtually books.</p>
               </blockquote>
               <h5 class="text-light text-uppercase font-weight-bold mb-3">Abdullah Zia</h5>
               <ul class="list-inline mb-5">
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
               </ul>
             </div>
             <div class="carousel-item  text-center">
               <img src="{{URL::to('/')}}/Main/images/user/hamza.jpg" width="150" class="img-fluid rounded-circle m-5">
               <blockquote class="blockquote text-white">
                 <p class="mb-5">One of the best things about bookdonation site is that you can use virtually books.</p>
               </blockquote>
               <h5 class="text-light text-uppercase font-weight-bold mb-3">Hamza Mughal</h5>
               <ul class="list-inline mb-5">
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
                 <li class="list-inline-item"> <i class="fas fa-star text-warning"></i></li>
               </ul>
             </div>
           </div>
         </div>
       </div>
     </div>
  </div>
</section>
<!-- end of users -->
     <!-- contact -->
    <section>
      <div class="container-fluid  p-5" style="background: #546569;">
        <div class="row">
          <div class="col-md-12 m-auto">
            <h1 class="text-center text-white font-weight-bold">CONTACT US</h1>
            <div class="underline"></div>
            <form class="my-5" action="{{route('storeContact')}}" method="POST">
            @csrf
              <div class="form-group col-md-6 m-auto">
                <input type="text" class="form-control mb-3" name="fname" placeholder="First Name">
              </div>
              <div class="form-group col-md-6 m-auto">
                <input class="form-control mb-3" type="text" name="lname" placeholder="Last Name">
              </div>
              <div class="form-group col-md-6  m-auto">
                <input type="email" class="form-control mb-3" name="email" placeholder="Email">
              </div>
              <div class="form-group col-md-6 m-auto">
                <input class="form-control mb-3" type="text" name="subject" placeholder="Subject">
              </div>
              <div class="form-group col-md-6 m-auto">
                <textarea class="form-control mb-4 " name="message" placeholder="Enter your messege here...." rows="8" cols="80"></textarea>
              </div>
              <button type="submit" style="border-radius: 10px !important; padding: 10px;" class="col-md-4 btn btn-block bg-info m-auto text-light font-weight-bold">Send Message</button>

              <!-- <a style="border-radius: 10px !important; padding: 10px;" type="submit" class="col-md-4 btn btn-block bg-info m-auto text-light font-weight-bold">Subscribe</a> -->
            </form>
          </div>
        </div>
      </div>
    </section>
     <!-- end of contact -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3317.718250557515!2d72.78447685030363!3d33.742101041363675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa6bc26bfa2db%3A0x2344c019578abeac!2sCOMSATS%20University%2C%20Islamabad%2C%20Wah%20Campus!5e0!3m2!1sen!2s!4v1597139632427!5m2!1sen!2s" style="width: 100%;" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

@endsection
