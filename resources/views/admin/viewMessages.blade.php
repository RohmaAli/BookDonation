@extends("admin.master")
@section("content")

<!-- tables -->
<section>
     <div class="container-fluid">
       <div class="row mb-5">
         <div class="col-lg-10 col-xl-10 col-md-8 ml-auto">
           <div class="row align-items-center">
             <div class="col-lg-11 col-12 mb-4 mb-xl-0">
               <h3 class="text-muted text-center mb-3">Messages</h3>
               <table class="table table-striped bg-light text-light">
                 <thead>
                   <tr class="text-muted">
                     <th>#</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Subject</th>
                     <th>Email</th>
                     <th>Message</th>
                     <th></th>
                     <th></th>
                   </tr>
                 </thead>
                 <tbody>
                 @php
                    $i = 0;
                 @endphp
                @foreach($messages as $m)
                   <tr class="text-muted">
                     <td>{{++$i}}</td>
                     <td>{{$m->firstName}}</td>
                     <td>{{$m->lastName}}</td>
                     <td>{{$m->subject}}</td>
                     <td>{{$m->email}}</td>
                     <td>{{$m->message}}</td>
                    
                   </tr>
                @endforeach
                 </tbody>
               </table>
               {{$messages->links()}}
               
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 <!-- end of tables -->






@endsection