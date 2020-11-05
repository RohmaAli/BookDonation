@extends('admin.master')

@section('content')
<!-- add slider -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 col-xl-10 col-md-8 ml-auto mt-5">
            <div class="row">
              <!-- <div class="col-lg-12 col-12 text-right mr-5 mb-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addIntro">Upload Image</button>
              </div> -->
              <div class="col-lg-12 col-xl-12 col-12 ml-auto">
                <!-- table -->
                <h3 class="text-muted text-center mb-3 font-weight-bold">User Request</h3>
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
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end of add slider -->
  <!-- add image modal -->
    <div class="modal" id="addIntro">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Upload Image</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input type="file" name="" value="" class="form-control" id="exmapleInputFile" aria-describedby="fileHelp">
              </div>
              <input type="hidden" name="submit">
              <button type="submit" class="btn btn-success" width="20%">Upload</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  <!-- add of image modal -->


  <script>
  var element = document.getElementById("user");
  element.classList.add("current");
  </script>


@endsection
