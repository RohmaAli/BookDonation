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
               
               <h3 class="text-muted text-center mb-3 font-weight-bold">Categories</h3>
               <a href="{{route('category.view')}}" class="btn btn-success" type="button"><i class="fa fa-plus"></i>Add Category</a>
                <form action="{{route('category.actions')}}" method="post">
                @csrf
                 <table class="table text-center table-dark table-hover">
                   <thead>
                   @php
                    $i = 0;
                   @endphp
                     <tr class="text-muted">
                       <th>#</th>
                       <!-- <th>Book Name</th> -->
                       <th>Category title</th>
                       <th>Description</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                   @if($categories)
                      @foreach($categories as $category)
                      <tr>
                      <td>{{++$i}}</td>
                        <td>{{$category->title}}</td>
                        <td>{{$category->description}}</td>
                        <td>
                          <button class="btn" name="edit" value="{{$category->id}}"><i class="fa fa-edit"></i></button>
                          <button class="btn" name="delete" value="{{$category->id}}"><i class="fa fa-trash"></i></button>
                        </td>
                      </tr>
                      @endforeach
                  @else
                  <h4 style="color:red">no categories in database</h4>
                   @endif
                     
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
