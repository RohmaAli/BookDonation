@extends("admin.master")

@section("content")

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
                          <h5>Total Books</h5>
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
                        <i class="fas fa-users  fa-3x text-success d-block "></i>
                        <div class="text-right text-secondary">
                          <h5>Total Users</h5>
                          <h3>{{$customers->count()}}</h3>
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
 <!-- date and time -->
 <div class="container-fluid bg-light">
        <div class="row">
          <img style="margin-left:300px" width="900px" height="500px" src="images/book.jpg" alt="">
          <!-- <div class="col-lg-10 col-xl-10 col-12 ml-auto">
            <div class="row mt-4">
                <div class="col-6">
                  <div class="card bg-light">
                    <i class="far fa-clock -alt fa-8x text-warning d-block m-auto py-3"></i>
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
          </div> -->
        </div>
      </div>
    <!-- End of date and time -->
    
    
    <!-- tables -->
 
 <!-- end of tables -->



   
    <script>
    var element = document.getElementById("admin");
    element.classList.add("current");
    </script>

    @endsection
