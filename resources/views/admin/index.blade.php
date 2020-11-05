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
                        <i class="fas fa-users fa-3x text-info"></i>
                        <div class="text-right text-secondary">
                          <h5>Today Visitors</h5>
                          <h3>0</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-secondary">
                   <i class="fas fa-sync mr-3"></i>
                   <span>Update Now</span>
                 </div>
                  </div>
                </div>
                <div class="col-xl-6 col-sm-6 p-2">
                  <div class="card card-common">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <i class="fas fa-users fa-3x text-info"></i>
                        <div class="text-right text-secondary">
                          <h5>Monthly Visitors</h5>
                          <h3>0</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-secondary">
                   <i class="fas fa-sync mr-3"></i>
                   <span>Update Now</span>
                 </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- end of cards -->

    <!-- tables -->
 <section>
   <div class="container-fluid">
     <div class="row mb-5">
       <div class="col-xl-9 col-lg-9 col-md-8  ml-auto">
         <div class="row align-items-center">
           <div class="col-xl-6 col-12 mb-4 mb-xl-0">
             <h3 class="text-muted text-center mb-3">User Requests</h3>
             <table class="table table-striped bg-light text-light">
               <thead>
                 <tr class="text-muted">
                   <th>#</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Accept</th>
                   <th>Reject</th>
                 </tr>
               </thead>
               <tbody>
                 <tr class="text-muted">
                   <th>1</th>
                   <td>Hamza</td>
                   <td>hamza@gmail.com</td>

                   <td><button type="button" class="btn btn-success btn-sm">Accept</button></td>
                   <td><button type="button" class="btn btn-danger btn-sm">Reject</button></td>
                 </tr>
                 <tr class="text-muted">
                   <th>2</th>
                   <td>Hamza</td>
                   <td>hamza@gmail.com</td>

                   <td><button type="button" class="btn btn-success btn-sm">Accept</button></td>
                   <td><button type="button" class="btn btn-danger btn-sm">Reject</button></td>
                 </tr>
                 <tr class="text-muted">
                   <th>3</th>
                   <td>Hamza</td>
                   <td>hamza@gmail.com</td>

                   <td><button type="button" class="btn btn-success btn-sm">Accept</button></td>
                   <td><button type="button" class="btn btn-danger btn-sm">Reject</button></td>
                 </tr>
                 <tr class="text-muted">
                   <th>4</th>
                   <td>Hamza</td>
                   <td>hamza@gmail.com</td>

                   <td><button type="button" class="btn btn-success btn-sm">Accept</button></td>
                   <td><button type="button" class="btn btn-danger btn-sm">Reject</button></td>
                 </tr>
                 <tr class="text-muted">
                   <th>5</th>
                   <td>Hamza</td>
                   <td>hamza@gmail.com</td>

                   <td><button type="button" class="btn btn-success btn-sm">Accept</button></td>
                   <td><button type="button" class="btn btn-danger btn-sm">Reject</button></td>
                 </tr>
               </tbody>
             </table>

             <!-- pagination -->
             <nav>
               <ul class="pagination justify-content-center">
                 <li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     <span>&laquo;</span>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     1
                   </a>
                 </li><li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     2
                   </a>
                 </li><li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     3
                   </a>
                 </li><li class="nav-item">
                   <a href="#" class="page-link py-2 px-3 bg-info text-white">
                     4
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     <span>&raquo;</span>
                   </a>
                 </li>
               </ul>
             </nav>
             <!-- end of pagination -->

           </div>
           <div class="col-xl-6 col-12">
             <h3 class="text-muted text-center mb-3">Recent Books</h3>
             <table class="table text-center table-dark table-hover">
               <thead>
                 <tr class="text-muted">
                   <th>#</th>
                   <th>Book Name</th>
                   <th>Category</th>
                   <th>Status</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <th>1</th>
                   <td>c++</td>
                   <td>Programming</td>
                   <td><button type="button" class="badge btn-danger w-100 py-2">Pending</button></td>
                 </tr>
                 <tr>
                   <th>2</th>
                   <td>Financial Accounting</td>
                   <td>Business</td>
                   <td><button type="button" class="badge btn-danger w-100 py-2">Pending</button></td>
                 </tr>
                 <tr>
                   <th>3</th>
                   <td>Early Days</td>
                   <td>Islamiat</td>
                   <td><button type="button" class="badge btn-success w-100 py-2">Aproved</button></td>
                 </tr>
                 <tr>
                   <th>4</th>
                   <td>Algebra</td>
                   <td>Mathamatics</td>
                   <td><button type="button" class="badge btn-success w-100 py-2">Aproved</button></td>
                 </tr>
                 <tr>
                   <th>5</th>
                   <td>ECA</td>
                   <td>Electical Engineering</td>
                   <td><button type="button" class="badge btn-success w-100 py-2">Aproved</button></td>
                 </tr>
               </tbody>
             </table>
             <!-- pagination -->
             <nav>
               <ul class="pagination justify-content-center">
                 <li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     <span>Previous</span>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="#" class="page-link py-2 px-3 nav-link active bg-info text-white">
                     1
                   </a>
                 </li><li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     2
                   </a>
                 </li><li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     3
                   </a>
                 </li><li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     4
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="#" class="page-link py-2 px-3">
                     <span>Next</span>
                   </a>
                 </li>
               </ul>
             </nav>
             <!-- end of pagination -->
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- end of tables -->



    <!-- date and time -->
      <div class="container-fluid bg-light">
        <div class="row">
          <div class="col-lg-10 col-xl-10 col-12 ml-auto">
            <div class="row mt-4">
                <div class="col-6">
                  <div class="card bg-light">
                    <i class="far fa-cleander -alt fa-8x text-warning d-block m-auto py-3"></i>
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
    <!-- End of date and time -->
    <script>
    var element = document.getElementById("admin");
    element.classList.add("current");
    </script>

    @endsection
