@extends("admin.master")

@section("content")
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<!-- add Category -->

   <section>
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-10 col-xl-10 col-md-8 ml-auto mt-5">
           <div class="row">
             <div class="col-lg-12 col-12 text-right mr-5 mb-3">
             <form action="{{route('create_book')}}" method="POST">
             @csrf
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookModal">Add Books</button>
            <!-- Button trigger modal -->



             </form>
             </div>
             <div class="col-lg-12 col-xl-12 col-12 ml-auto">
               <!-- table -->
               <h3 class="text-muted text-center mb-3 font-weight-bold">My Books</h3>


                 <table class="table text-center table-dark table-hover">
                   <thead>
                     <tr class="text-muted">
                       <th>#</th>
                       <th>Book Name</th>
                       <th>Category</th>
                       <th>Status</th>
                     </tr>
                   </thead>
                   @php
                   $i = 0;
                   @endphp
                   <tbody>
                   @foreach($books as $book)
                     <tr>
                       <th>{{++$i}}</th>
                       <td>{{$book->title}}</td>
                       <td>{{$book->category}}</td>
                       <td><button type="button" class="badge btn-success w-100 py-2">Approved</button></td>
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
  <!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" role="dialog" aria-labelledby="bookModalLabel" aria-hidden="true">
<div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
           <h3 class="modal-title">Upload Books</h3>
           <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <div class="modal-body">
           <form action="{{ route('store_book') }}" method="post" enctype="multipart/form-data">
           @csrf
             <div class="form-group">
               <input type="text" name="title" class="form-control" placeholder="Title(required)" required>
             </div>
             <div class="form-group">
               <input type="text" name="category" class="form-control" placeholder="Category(required)" required>
             </div>
             <div class="form-group">
               <input type="file" name="cover" value="" class="form-control" id="exmapleInputFile" aria-describedby="fileHelp" required>
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
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});   
</script>
    @endsection
