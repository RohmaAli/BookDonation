@extends("admin.master")

@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <title>Customer Dashboard</title>
</head>
<body>

<section>

<article class="col-xl-10 col-12" style="margin-left:200px; margin-top:100px">

<div class="row">
                                <!-- <div class="col-xl-4">
                            
                                    
                                </div> -->
                                <div class="col-xl-10">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">My Total Books</p>
                                                            <h4 class="mb-0" style="color:green">{{$count}} pkr/-</h4>
                                                        </div>

                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-copy-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">Amount Recieved</p>
                                                            <h4 class="mb-0" style="color:green"> pkr/-</h4>
                                                        </div>

                                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card mini-stats-wid">
                                                <div class="card-body">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p class="text-muted font-weight-medium">Amount Credit</p>
                                                            <h4 class="mb-0" style="color:green"> pkr/-</h4>
                                                        </div>

                                                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->

                                </div>
                            </div>



<h3 class="text-muted text-center mb-3"> Books</h3>
<form action="route('delete')" method="POST">
@csrf
<table class="table text-center table-dark table-hover">
    <thead>
        <tr class="text-muted">
        <th>#</th>
        <!-- <th>Book Name</th> -->
        <th>Category</th>
        <th>Status</th>
        </tr>
    </thead>
    <tbody>
    @if($books ?? '')
    @foreach($books ?? '' as $book)
    {{$book}}
            <tr>
                <th>1</th>
                <td>{{$book->title}}</td>
                <td>{{$book->category}}</td>
                <td><button type="button" class="badge btn-danger w-100 py-2" name="bookID" value="{{$book->id}}">Delete</button></td>
            </tr>
    @endforeach
    @endif
    </tbody>
</table>
</form>
</article>
</section>

    
</body>
</html>

   
@endsection