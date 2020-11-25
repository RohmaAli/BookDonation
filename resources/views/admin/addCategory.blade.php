@extends("admin.master")
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

<!-- select2 css -->
<link href="{{asset('libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />

<!-- dropzone css -->
<link href="{{asset('libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Bootstrap Css -->
<link href="{{asset('css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="{{asset('css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <title>Book Donation System</title>
</head>
<body>
<div class="container" style="margin-left:500px; margin-top:50px">
    <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
    <div class="card">
        <div class="card-body">
        
            <h4 class="card-title">Basic Information</h4>
            <p class="card-title-desc">Fill all information below</p>
        
            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="row">
                                                <!-- <div class="col-sm-6"> -->
                                                   
                                                    <div class="form-group">
                                                    <label for="title"> <b>Enter Weight Detail</b> </label><br>
                                                    
                                                    <label id="title" for="ctitle">Category Title</label><br>
                                                    <input id="ctitle" name="ctitle" type="text" class="form-control" placeholder="">
                                                    <br>  
                                                    <label  for="des">Description</label><br>
                                                    <textarea name="description" id="des" class="form-control" cols="60" rows="5"></textarea>
                                                    <!-- <input id="des" name="description" type="text" class="form-control" placeholder="(optional)"> -->
                                                    <br>  
                                                    <button type="submit" name="addCat" class="form-control btn btn-primary mr-1 waves-effect waves-light"> Add Category</button>

                                                    </div>

                                                <!-- </div> -->
        
                                             
                                            </div>
        
                                        <br>
                                       
                    </form>
        
                                    </div> <!--end card-->
    </div> <!--end col-md-4-->
    <div class="col-md-2">
    </div>
    </div> <!--end row-->
</div> 
<!--end container-->

   

</body>
</html>
@endsection