
@extends("admin.master")


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:100px">
                <div class="card-header">Add new book</div>

                <div class="card-body">

                    <form action="{{url('/admin/store/book')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        Title:
                        <br>
                        <input type="text" name="title" class="form-control">

                        <br>
                        <label for="size">Category:</label>
                                 @if(count($categories) > 0 )
                                  <select name="cat"  class="form-control" id="cat" required>
                                                    
                                    @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                      @endforeach
                                   </select>
                                   @else
                                     <p style="color:red">enter categories first from admin pannel</p>
                                 @endif
                        <br>

                        Cover File:
                        <br>
                        <input type="file" name="cover" required>

                        <br><br>

                        <!-- <input type="submit" value=" Upload book " class="btn btn-primary"> -->
                        <button name="addBook" class="btn btn-primary" type="submit">Upload book</button>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection 