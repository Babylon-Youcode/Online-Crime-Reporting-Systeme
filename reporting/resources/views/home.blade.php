
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
  <header class="p-4 d-flex fixed-top flex-wrap align-items-center justify-content-center justify-content-md-between">
    <img src="img/logo3.png" class="d-flex align-items-center col-md-2 " width="100" height="40">
 
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">  <i class="fas fa-home"></i> Home</a></li>
      <li><a href="{{ route('news') }}" class="nav-link px-2 text-white">News</a></li>
    </ul>

      <div class="col-md-3 text-end">
      <a href="{{ route('login') }}" type="button" class="btn btn-outline-light me-2">Login</a>
      <a href="{{ route('register') }}" type="button" class="btn btn-warning">Sign-up</a>
    </div>
  </header>
  </div>


  <!-- End Header -->


  <div class="main-page wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to Online Crime Reporting Systeme</h6>
                <h2>IT'AN <em> HOUNOR</em> FOR US TO <span>PROTECT</span> YOU</h2>

              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="img/cop3.png" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="img/cop.png" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="img/icons/police-station.png" alt="reporting">
                  </div>
                  <div class="right-text">
                    <h4>Reporting Online</h4>
                    <p>You dont have to go to plice station to reporting a Crime</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="img/icons/police-man.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Fast Response</h4>
                    <p>The policeman will be with you as soon as possible if necessary</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="img/icons/search.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Missing persons</h4>
                    <p> List of Missing persons, you can help us to find them , any information is important</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="img/icons/target.png" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Most Wanted</h4>
                    <p>You can see here the Most Wanted Criminals </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="bann">
  </div>

  <div class="container">
    <footer class="row row-cols-5 py-5 my-5 border-top">
      <div class="col">
        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        </a>
        <p class="text-muted">OCRS&copy; 2021</p>
      </div>
  
      <div class="col">
  
      </div>
  
      <div class="col">
        <h5>Emergency Numbers</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Police (city): 19  for fix or 112 for mobile phones </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Police: 177 (Outside of city : Royal Gendarmerie) </a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">protection civilel: 15</a></li>
        </ul>
      </div>
  
      <div class="col">
        <h5></h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a></li>
        </ul>
      </div>
  
      <div class="col">
        <h5>Important Links</h5>  
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="www.maroc.ma" class="nav-link p-0 text-muted"> Maroc.ma</a></li>
          <li class="nav-item mb-2"><a href="https://adala.justice.gov.ma/AR/home.aspx" class="nav-link p-0 text-muted"> Adala justice</a></li>
          <li class="nav-item mb-2"><a href="https://www.idarati.ma/" class="nav-link p-0 text-muted">idarati</a></li>
          <li class="nav-item mb-2"><a href="https://chikaya.ma/" class="nav-link p-0 text-muted">Chikaya</a></li>
          <li class="nav-item mb-2"><a href="https://emploi-public.ma/" class="nav-link p-0 text-muted">emploi-public</a></li>
        </ul>
      </div>
    </footer>
  </div>






</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>
</html>


