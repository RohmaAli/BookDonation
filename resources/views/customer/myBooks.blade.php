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
             
               
             <form action="{{route('customer.viewAddBook')}}" method="get">
             @csrf
             <!-- <button type="button" name="addBook" class="btn btn-success" data-toggle="modal" data-target="#bookModal">Add Books</button> -->

              <br> <br>
            

            <!-- Button trigger modal -->
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
               <!-- <h3 class="text-muted text-center mb-3 font-weight-bold">My Books</h3> -->


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
                       <td>{{$book->category->title}}</td>
                       <!-- <td><button type="button" class="btn btn-success"><i class="fa fa-download"></i> </button></td> -->
                        <td>
                          <a href="{{ url('/customer/download/book', $book->uuid) }}" type="button" class="btn btn-success"><i class="fa fa-download"></i></a>
                          <a href="{{ url('/customer/delete/book', $book->id) }}" type="button" class="btn btn-success"><i class="fa fa-trash"></i></a>

                        </td>
                     </tr>
                    @endforeach
                     
                   </tbody>
                 </table>
               

                 </form>
                

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
