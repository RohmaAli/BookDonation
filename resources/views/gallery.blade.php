@extends("master")

@section("content")
  <div class="">
    <div class="overlay"></div>
    <img class="contact-img" src="{{URL::to('/')}}/Main/images/img2.jpg" alt="">
  </div>
  <div class="container-fluid bg-dark p-5 contact">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center text-white mt-5 fontweight-bold">Gallery</h1>
        <div class="underline mb-5"></div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/img3.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/img3.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/img1.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/img1.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/img2.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/img2.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/img2.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/img3.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/img1.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/img1.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/books/c.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/books/c.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/books/islamic.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/books/islamic.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/books/ee.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/books/ee.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/books/math.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/books/math.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/books/medical.png" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/books/medical.png" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/books/bba.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/books/bba.jpg" height="200" width="250">
      </a>
    </div>
    <div class="col-md-3 pb-2 my-2">
      <a href="{{URL::to('/')}}/Main/images/img1.jpg" data-lightbox="college">
      <img class="rounded" src="{{URL::to('/')}}/Main/images/img1.jpg" height="200" width="250">
      </a>
    </div>

  </div>
</div>

@endsection
