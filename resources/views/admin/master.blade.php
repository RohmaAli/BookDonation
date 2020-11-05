<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Book Donation</title>

        <!-- Online Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Custom Style Sheet -->
    <link href="{{URL::to("/")}}/Main/css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
        <!-- Custom Font Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

        <!-- Online Icons -->
    <link href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">



  </head>
  <body>
        <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button type="button" class="navbar-toggler mb-2 bg-light" data-toggle="collapse" data-target="#myProject">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myProject">
        <div class="container-fluid">
          <div class="row">

            <!-- Sidebar -->
            <div class="col-lg-2 col-xl-2 col-md-3 fixed-top top-navbar sidebar">
              <a href="" class="navbar-brand text-light d-block mx-auto text-center bottom-border my-3 mb-4">Book<br>Donation</a>
              <div class="bottom-border pb-3">
                <img src="{{URL::to('/')}}/Main/images/user/hamza.jpg" width="40" class="rounded">
                  <a href="" class="text-white">M Hamza</a>
              </div>
              <ul class="nav navbar-nav flex-column mt-4">
                <li class="nav-item">
                  <a href="{{route('admin-index')}}" class="nav-link text-white p-3 mb-2" id="admin"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('mailbox')}}" id="mailbox" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Mailbox</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('category')}}" id="category" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-image text-light fa-lg mr-3"></i>Categories</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('books')}}" id="books" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-book-reader text-light fa-lg mr-3"></i>Books</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('slider')}}" id="slider" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-folder-plus text-light fa-lg mr-3"></i>Slider</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user')}}" id="user" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="far fa-user-circle text-light fa-lg mr-3"></i>User Request</a>
                </li>
                <!-- <li class="nav-item">
                  <a href="" id="slider" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-file-alt text-light fa-lg mr-3"></i>User Review</a>
                </li> -->
              </ul>
            </div>
            <!-- End of Sidebar-->

            <!-- Top Navigation Bar -->
            <div class="col-lg-10 col-xl-10 col-md-9 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Admin Pannel</h4>
                </div>
                <div class="col-md-5">

                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item icon-parent">
                      <a href="#" class="nav-link icon-bullet"><i class="fas fa-comments fa-lg text-muted"></i></a>
                    </li>
                    <li class="nav-item icon-parent">
                      <a href="#" class="nav-link icon-bullet"><i class="fas fa-bell fa-lg text-muted"></i></a>
                    </li>
                    <li class="nav-item ml-auto">
                      <a href="#" class="nav-link text-muted font-weight-bold" data-toggle="modal" data-target="#sign-out">
                      <i class="fas fa-sign-out-alt fa-lg text-secondary"></i>Logout</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End of Top Navigation Bar -->
          </div>
        </div>
      </div>
    </nav>
    <!-- End of Navigation Bar -->

    <!-- Modal -->
      <div class="modal" id="sign-out">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Are you sure, want to leave..!!!</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-footer">
              <button type="button" name="button" class="btn btn-success" data-dismiss="modal">Stay Here</button>
              <a href="" class="btn btn-danger">Logout</a>

            </div>
          </div>
        </div>
      </div>
    <!-- End of Modal-->

@yield("content")

    <!-- Footer -->
<footer>
  <div class="container-fluid text-center py-3">
    <p class="m-0">Boo Donation | Developed by Hamza & Abdullah | 2020</p>
  </div>
</footer>
        <!-- End of Footer -->

        <!-- Online Bootstrap CDN's -->
  <script  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" ></script> -->

  </body>
</html>