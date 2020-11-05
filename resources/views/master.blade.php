<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Book Donation Project</title>
    <!-- Bootstrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
      <!-- Custom Link -->
    <link href="{{URL::to('/')}}/Main/css/frontend.css" rel="stylesheet" type="text/css">
    <!-- Super Slides-->
    <link rel="stylesheet" href="{{URL::to('/')}}/Main/css/superslides.css">
    <!-- lightbox-->
    <link rel="stylesheet" href="{{URL::to('/')}}/Main/css/lightbox.css">
    <!-- Online Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top nav-menu">
      <a href="" class="navbar-brand text-light text-uppercase">
        <span class="h2 font-weight-bolder text-white">Book</span><span class="h1 text-white">Donation</span>
      </a>
      <button type="button" class="navbar-toggler nav-button" data-toggle="collapse" data-target="#myNavbar">
        <div class="bg-light line1"></div>
        <div class="bg-light line2"></div>
        <div class="bg-light line3"></div>
      </button>
      <div class="collapse navbar-collapse justify-content-end text-uppercase font-weight-bold" id="myNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="{{route("index")}}" class="nav-link m-2 menu-item nav-active">Home</a>
          </li>
          <li class="nav-item">
            <a href="{{route("categories")}}" class="nav-link m-2 menu-item">Categories</a>
          </li>
          <li class="nav-item">
            <a href="{{route("gallery")}}" class="nav-link m-2 menu-item">Gallery</a>
          </li>

          <li class="nav-item">
            <a href="{{route("aboutus")}}" class="nav-link m-2 menu-item">About Us</a>
          </li>
          <li class="nav-item">
            <a href="{{route("contact")}}" class="nav-link m-2 menu-item">Contact</a>
          </li>
          <li class="nav-item">
            <a href="{{route("home")}}" class="nav-link m-2 menu-item">SignIn/signup</a>
          </li>
          
        </ul>
      </div>
    </nav>
    <!-- end of navbar -->
        @yield("content")

        <!-- footer -->
    <footer class="px-5 text-white" style="background: #546569">
      <div class="container-fluid">
        <div class="row text-light py-4">
          <div class="col-lg-4 col-sm-6">
            <h5 class="pb-3">About Us</h5>
            <p class="small">Islamic Relief is an independent non-governmental organisation (NGO) founded in the UK in 1984 by a group of medical doctors and activists.</p>
          </div>
          <div class="col-lg-2 col-sm-6">
            <h5 class="pb-3">Visit Us</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#" class="footer-link">Home</a>
              </li>
              <li>
                <a href="#" class="footer-link">Categories</a>
              </li>
              <li>
                <a href="#" class="footer-link">Gallery</a>
              </li>
              <li>
                <a href="#" class="footer-link">About Us</a>
              </li>
              <li>
                <a href="#" class="footer-link">Contact</a>
              </li>

            </ul>
          </div>
          <div class="col-lg-6 col-sm-6">
            <h5 class="pb-3">Stay Connected</h5>
            <p class="small">Together we will inspire and enable people to
              respond rapidly to disasters and fight poverty through our
              Islamic values, expertise and global reach.</p>
              <ul class="list-inline">
                <li class="list-inline-item">
                  <i class="fab fa-facebook fa-2x text-primary"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fab fa-google-plus fa-2x text-danger"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fab fa-instagram fa-2x text-danger"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fab fa-twitter fa-2x text-info"></i>
                </li>
                <li class="list-inline-item">
                  <i class="fab fa-youtube fa-2x text-danger"></i>
                </li>
              </ul>
          </div>
        </div>
        <div class="row">
          <div class="col text-center text-light border-top pt-3">
              <p>Book Donation &copy; 2020 Copyright, All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->




    <script src="{{URL::to('/')}}/Main/jquery/jquery.superslides.min.js" charset="utf-8"></script>
    <script src="{{URL::to('/')}}/Main/js/script.js" charset="utf-8"></script>
      <script src="{{URL::to('/')}}/Main/js/typed.min.js" charset="utf-8"></script>
      <script src="{{URL::to('/')}}/Main/js/lightbox.js" charset="utf-8"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>
