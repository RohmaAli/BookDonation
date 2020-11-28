@extends("admin.master")

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <title>Customer Dashboard</title>
</head>
<body>

<section>

<article class="col-xl-10 col-10" style="margin-left:200px; margin-top:0px">


<!-- Cards -->
<section>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-10 col-xl-10 col-md-8 ml-auto">
              <div class="row pt-md-5 mb-md-5 mt-3">

                <div class="col-xl-6 col-sm-6 p-2">
                  <div class="card card-common">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <i class="fas fa-book fa-3x text-info"></i>

                        <div class="text-right text-secondary">
                        @php
                          $books = DB::table('books');
                          $customers = DB::table('customers')

                        @endphp
                          <h5>Total Books Available</h5>
                          <h3>{{$books->count()}}</h3>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="card-footer text-secondary">
                   <i class="fas fa-sync mr-3"></i>
                   <span>Update Now</span>
                 </div> -->
                  </div>
                </div>
                <div class="col-xl-6 col-sm-6 p-2">
                  <div class="card card-common">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <i class="fas fa-book fa-3x text-warning "></i>
                        <div class="text-right text-secondary">
                        @php 
                            $mybooks = DB::table('books')->where('user_id', auth()->user()->id)
                        @endphp
                          <h5>My books</h5>
                          <h3>{{$mybooks->count()}}</h3>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="card-footer text-secondary">
                   <i class="fas fa-sync mr-3"></i>
                   <span>Update Now</span>
                 </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- end of cards -->
                            </div>

                            <div class="container-fluid">
        <div class="row">
          <img style="margin-left:100px; margin-top: 0px" width="900px" height="300px" src="images/book.jpg" alt="">
        </div>
        </div>


</article>
</section>

    
</body>
</html>

   
@endsection