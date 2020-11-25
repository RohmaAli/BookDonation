@extends("admin.master")

@section("content")

<!-- add Category -->
   <section>
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-10 col-xl-10 col-md-8 ml-auto mt-5">
           <div class="row">
             <!-- <div class="col-lg-12 col-12 text-right mr-5 mb-3">
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addcategory">New Category</button>
             </div> -->
             <div class="col-lg-12 col-xl-12 col-12 ml-auto">
               <!-- table -->
               <h3 style="margin-top:50px" class="text-muted text-center mb-3 font-weight-bold">Categories</h3>


                 <table class="table text-center table-dark table-hover">
                   <thead>
                     <tr class="text-muted">
                       <th>#</th>
                       <th>Category</th>
                        
                        <th>No. of Books</th>
                       <th>View</th>
                     </tr>
                   </thead>
                   <tbody>
                   @php
                   $i = 0;
                   @endphp
                   @foreach($categories as $cat)
                     <tr>
                       <th>{{++$i}}</th>
                       <td>{{$cat->title}}</td>
                       <td>{{$cat->books->count()}}</td>
                       <!-- <td><button type="button" class="badge btn-danger w-100 py-2">Pending</button></td> -->
                        <td><a href="{{url('/customer/view/categorywise/books',$cat->id)}}" type="button" class="btn btn-success"> <i class="fa fa-eye"></i>
                        </a></td>
                     </tr>
                     @endforeach
                     
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
 <!-- end of Category -->
 <!-- Category modal -->
   <div class="modal" id="addcategory">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h3 class="modal-title">Upload Image</h3>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
           <form action="" method="post" enctype="multipart/form-data">
             <div class="form-group">
               <input type="text" name="" class="form-control" placeholder="Title(e.g Milk)">
             </div>
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
 <!-- end of category modal -->



    <script>
    var element = document.getElementById("category");
    element.classList.add("current");
    </script>

    @endsection
