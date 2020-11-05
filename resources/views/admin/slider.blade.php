@extends('admin.master')

@section('content')
<!-- add slider -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10 col-xl-10 col-md-8 ml-auto mt-5">
            <div class="row">
              <div class="col-lg-12 col-12 text-right mr-5 mb-3">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addIntro">Upload Image</button>
              </div>
              <div class="col-lg-12 col-xl-12 col-12 ml-auto">
                <!-- table -->
                <h3 class="text-muted text-center mb-3 font-weight-bold">Slider Images</h3>
                <table class="table text-center table-dark table-striped">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Image</th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="">
                      <td>1</td>
                      <td>image1.jpg</td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                       </a>
                      </td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-trash-alt fa-lg text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr class="">
                      <td>2</td>
                      <td>image2.jpg</td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                       </a>
                      </td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-trash-alt fa-lg text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr class="">
                      <td>3</td>
                      <td>image3.jpg</td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                       </a>
                      </td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-trash-alt fa-lg text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr class="">
                      <td>4</td>
                      <td>image4.jpg</td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                       </a>
                      </td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-trash-alt fa-lg text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr class="">
                      <td>5</td>
                      <td>image5.jpg</td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                       </a>
                      </td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-trash-alt fa-lg text-danger"></i>
                        </a>
                      </td>
                    </tr>
                    <tr class="">
                      <td>6</td>
                      <td>image6.jpg</td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>edit</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-edit fa-lg text-success mr-2"></i>
                       </a>
                      </td>
                      <td>
                        <a href="#" data-toggle="tooltip" title="<h6>Delete</h6>" data-html="true" data-placement="top">
                          <i class="fas fa-trash-alt fa-lg text-danger"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- end of table -->
                <!-- pagination -->
                  <nav>
                    <ul class="pagination justify-content-center">
                      <li class="nav-item">
                        <a href="#" class="page-link py-2 px-3">
                          <span class="">&laquo;</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="page-link py-2 px-3 nav-link active bg-info text-white">
                          1
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="page-link py-2 px-3">
                          2
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="page-link py-2 px-3">
                          3
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="page-link py-2 px-3">
                          4
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="page-link py-2 px-3">
                          5
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="page-link py-2 px-3">
                          6
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="page-link py-2 px-3">
                          <span class="">&raquo;</span>
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
  var element = document.getElementById("slider");
  element.classList.add("current");
  </script>


@endsection
