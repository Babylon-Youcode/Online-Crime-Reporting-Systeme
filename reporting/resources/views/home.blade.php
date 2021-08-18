
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
  </div>

</header></div>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero">
    <div class="container-fluid" style="height:500px">
      <div class="warper-text"> <strong>IT'S AN HOUNOR <br> FOR US TO PROTECT YOU</strong><div> 
      
  </section><!-- End Hero -->
{{-- 
  <div class="progress">
    <div class="progress-bar bg-danger" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="75"></div>
    
      <div class="progress-bar bg-light" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="75"></div>
    
    
      <div class="progress-bar bg-primary" role="progressbar" style="width: 34%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="75"></div>
    
  </div> --}}

<div class="container align-items-center justify-content-center" id="section2">
  <div>
    <h1 id="why">Why Reporting CRIME Online</h1>
  </div>
  
  <div class="row align-items-center justify-content-center">
  <div class="col-md-8 " >
    <p class="mr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim vero perferendis aspernatur minima et provident vel exercitationem atque? Alias est nisi nulla qui quasi nam vitae sunt! Recusandae, fuga debitis?</p>
  </div>
  <div class="row">
    <div class="col-lg-3">
      <img src="img/icons/police-station.png" class="" role="img">
      <p>You dont have to go to plice station.</p>
    </div><!-- /.col-lg-3 -->
    <div class="col-lg-3">
      <img src="img/icons/police-man.png" class="" role="img" >

      <p>The policeman will be with you if necessary.</p>
     
    </div><!-- /.col-lg-3 -->
    <div class="col-lg-3">
      <img src="img/icons/target.png" class="" role="img">

      <p>police departement.</p>
    </div><!-- /.col-lg-3 -->
    <div class="col-lg-3">
      <img src="img/icons/search.png" class=""  role="img">
      <p>Searching for missing persons.</p>
      
    </div><!-- /.col-lg-3 -->
  </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>
</html>


