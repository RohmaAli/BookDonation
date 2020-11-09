@extends("admin.master")

@section("content")
<section>
<article class="col-xl-10 col-12" style="margin-left:200px; margin-top:100px">

<h3 class="text-muted text-center mb-3">My Books</h3>
<form action="route('delete')" method="POST">
@csrf
<table class="table text-center table-dark table-hover">
    <thead>
        <tr class="text-muted">
        <th>#</th>
        <th>Book Name</th>
        <th>Category</th>
        <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
            <tr>
                <th>1</th>
                <td>{{$book->title}}</td>
                <td>{{$book->category}}</td>
                <td><button type="button" class="badge btn-danger w-100 py-2" name="bookID" value="{{$book->id}}">Delete</button></td>
            </tr>
    @endforeach
    </tbody>
</table>
</form>
</article>
</section>
   
@endsection