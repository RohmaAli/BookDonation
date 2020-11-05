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
                     <th>Name</th>
                     <th>Number</th>
                     <th>Email</th>
                     <th>Message</th>
                     <th></th>
                     <th></th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr class="text-muted">
                     <td>1</td>
                     <td>Ali</td>
                     <td>03154533453</td>
                     <td>Ali95@gmail.com</td>
                     <td class="text-justify">Pakistan, officially the Islamic Republic of Pakistan, is a country in South Asia. It is
                      the world’s sixth-most populous country with a population exceeding 212,742,631 people. In area</td>
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
                   <tr class="text-muted">
                     <td>1</td>
                     <td>Hamza</td>
                     <td>03154531123</td>
                     <td>Hamza@gmail.com</td>
                     <td class="text-justify">Pakistan, officially the Islamic Republic of Pakistan, is a country in South Asia. It is
                      the world’s sixth-most populous country with a population exceeding 212,742,631 people. In area</td>
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
                   <tr class="text-muted">
                     <td>1</td>
                     <td>Hamza</td>
                     <td>03154530972</td>
                     <td>Hamza@gmail.com</td>
                     <td class="text-justify">Pakistan, officially the Islamic Republic of Pakistan, is a country in South Asia. It is
                      the world’s sixth-most populous country with a population exceeding 212,742,631 people. In area</td>
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
                   <tr class="text-muted">
                     <td>1</td>
                     <td>Abdullah </td>
                     <td>03154534324</td>
                     <td>abdullah@gmail.com</td>
                     <td class="text-justify">Pakistan, officially the Islamic Republic of Pakistan, is a country in South Asia. It is
                      the world’s sixth-most populous country with a population exceeding 212,742,631 people. In area</td>
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
               <!-- pagination -->
                 <nav>
                   <ul class="pagination justify-content-center">
                     <li class="nav-item">
                       <a href="#" class="page-link py-2 px-3">
                         <span class="">Previous</span>
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="#" class="page-link py-2 px-3">
                         1
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="#" class="page-link py-2 px-3">
                         2
                       </a>
                     </li>
                     <li class="nav-item">
                       <a href="#" class="page-link nav-link active bg-info text-white py-2 px-3">
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
                         <span class="">Next</span>
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

















    <script>
    var element = document.getElementById("mailbox");
    element.classList.add("current");
    </script>

    @endsection
