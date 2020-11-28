@extends("admin.master")

@section("content")

<!-- add Category -->
   <section>
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-10 col-xl-10 col-md-8 ml-auto mt-5">
           <div class="row">
             <div class="col-lg-12 col-12 text-right mr-5 mb-3">
             <form action="{{route('admin.viewAddBook')}}" method="get">
             @csrf
               <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#books"><i class="fa fa-plus"></i> Add Books</button> -->
               <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addcategory"><i class="fa fa-plus"></i> Add Books</button> -->
               <!-- <button type="submit" name="addBook" class="btn btn-success"><i class="fa fa-plus"></i> Add Books</button> -->

             </div>
             <div class="col-lg-12 col-xl-12 col-12 ml-auto">
               <!-- table -->
               <div class="row">
                <div class="col-md-1">
                <button type="submit" name="addBook" class="btn btn-success"><i class="fa fa-plus"></i> Add Books</button>
                </div>
                <div class="col-md-11">
                <h3 style="margin-left:0px" class="text-muted text-center mb-3 font-weight-bold">New Books</h3>

                </div>
               </div>
               <!-- <h3 class="text-muted text-center mb-3 font-weight-bold">New Books</h3> -->


                 <table class="table text-center table-dark table-hover">
                   <thead>
                     <tr class="text-muted">
                       <th>#</th>
                       <th>Book Name</th>
                       <th>Category</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                   @php
                    $i = 0;
                   @endphp
                   @foreach($books as $book)
                     <tr>
                      <td>{{++$i}}</td>
                       <td>{{$book->title}}</td>
                       <td>{{$book->category->title}}</td>
                       <td></td>
                       <td>
                       <a href="{{ url('/admin/download/book', $book->uuid) }}" type="button" class="btn btn-success"><i class="fa fa-download"></i></a>
                       <a href="{{ url('/admin/delete/book', $book->id) }}" type="button" class="btn btn-success"><i class="fa fa-trash"></i></a>

                          <!-- <button class="btn" name="delete" value=""><i class="fa fa-trash"></i></button> -->
                        </td>                     
                      </tr>
                    @endforeach
                    
                   </tbody>
                   
                 </table>
                 {{$books->links()}}

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
    var element = document.getElementById("books");
    element.classList.add("current");
    </script>

    @endsection
