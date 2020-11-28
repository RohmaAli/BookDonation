@extends("admin.master")

@section("content")

<!-- add Category -->
   <section>
     <div class="container-fluid">
       <div class="row">
         <div class="col-lg-10 col-xl-10 col-md-8 ml-auto mt-5">
           <div class="row">
             <div class="col-lg-12 col-12 text-right mr-5 mb-3">
             <form action="{{route('admin.requestAction')}}" method="POST">
            @csrf
             </div>
             <div class="col-lg-12 col-xl-12 col-12 ml-auto">
               <!-- table -->
               <h3 class="text-muted text-center mb-3 font-weight-bold">Manage Request</h3>


                 <table class="table text-center table-dark table-hover">
                   <thead>
                     <tr class="text-muted">
                       <th>#</th>
                       <th>Book Name</th>
                       <th>Customer Name</th>
                       <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                   @php
                    $i = 0;
                    auth()->user()->notifications()
                   @endphp
                   
                   @foreach(auth()->user()->notifications as $notification)
                   @if($notification->read_at == null)
                     <tr>
                      <td>{{++$i}}</td>
                       <td>{{$notification->data['bookTitle']}}</td>
                       <td>{{$notification->data['customer']}} </td>
                       
                       <td>
                       <!-- <a href="{{url('/admin/request/actions', $notification->data['bookId'], $notification->data['customerId'] )}}" type="button"  class="btn btn-success"><i class="fas fa-check"></i>Allow</a> -->
                          <input type="hidden" name="cid" value="{{$notification->data['customerId']}}">
                          <input type="hidden" name="nid" value="{{$notification->id}}">
                          
                          <button class="btn btn-success" type="submit" name="allow" value="{{$notification->data['bookId']}}"><i class="fas fa-check"></i>Allow</button>
                          <button class="btn btn-danger" type="submit" name="deny" value="{{$notification->data['bookId']}}"><i class="fas fa-times"></i> Deny</button>
                          
                          <!-- <a href="" type="button" class="btn btn-danger"><i class="fas fa-times"></i> Deny</a> -->

                        </td>                     
                      </tr>
                      @endif
                      @endforeach  
                    
                    
                   </tbody>
                 </table>
                 
                 

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
