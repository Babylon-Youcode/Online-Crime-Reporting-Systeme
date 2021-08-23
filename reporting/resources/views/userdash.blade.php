
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scalep.0"> 
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

  <div class="">
   <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
    <img src="img/logo3.png" class="d-flex align-items-center col-md-2 " width="100" height="40">
 
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">  <i class="fas fa-home"></i> Home</a></li>
      <li><a href="{{ route('user.news') }}" class="nav-link px-2 text-white">News</a></li>

    </ul>

  <div class="text-end" style="color: white">
      <i id="icon" class="far fa-user"></i>
    <a >{{ Auth::user()->name }} </a>

      
      <a class="btn btn-light" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
      </form>
    </div>
   </header> 
  </div>

  <!-- End Header -->
  <div class="container text-center mt-5">
    <h2>
      <span class="article">Services</span>
    </h2>
    <div id="services" class="d-flex p-5">
      <div class="col-sm-6 col-xs-12 text-center fadeInDown"> 
        <div class="content">
          <h3>
            <a href="{{ route('raport.create') }}" class="nav-link px-2 text-dark">New Reporting</a></h3>
        <div>
          <i class="far fa-lightbulb"></i>
          </div>  

        </div>
      </div>
      <div class="col-sm-6 col-xs-12 text-center fadeInDown animated"> 
        <div class="content">
          <h3>
            <a href="{{ route('raport.veiw') }}" class="nav-link px-2 text-dark"> My Reportings</a></h3>

          </h3>
        <div>
          <i class="fas fa-link"></i>
          </div>  

        </div>
      </div>
      
    </div>



  </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>
</html>




