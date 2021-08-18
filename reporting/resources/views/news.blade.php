
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scalep.0"> 
    <title>News</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
  
  <div class="">
    <header class=" p-3 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
    <img src="img/logo3.png" class="d-flex align-items-center col-md-2 " width="100" height="40">
 
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">  <i class="fas fa-home"></i> Home</a></li>
      <li><a href="{{ route('news') }}" class="nav-link px-2 text-white">News</a></li>
      <li><a href="#" class="nav-link px-2 text-white">About</a></li>
    </ul>

      <div class="col-md-3 text-end">
      <a href="{{ route('login') }}" type="button" class="btn btn-outline-light me-2">Login</a>
      <a href="{{ route('register') }}" type="button" class="btn btn-warning">Sign-up</a>
    </div>
    </header>
  </div>


  <div class="container mt-5">

    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($ans as $item)
      <div class="col">  
        <div class="card h-100">
          <img src="{{asset('img/'.$item->image)}}" class="card-img-top"  height="300px"  alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text">{{$item->discription}}.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted"> {{$item->date}} </small>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>

</body>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>
</html>    
  
  
  
