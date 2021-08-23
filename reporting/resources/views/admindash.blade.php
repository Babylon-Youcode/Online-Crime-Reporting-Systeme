<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Crime Reporting | SECURITY - DASHBOARD</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/dashboard.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        
    </head>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Crime Rporting Systeme</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="text-end" style="margin-right: 20px">
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
          
          <div class="container-fluid">
            <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link"href="{{ route('admin')}}">
                          <i class="fas fa-tachometer-alt"></i>
                          Dashboard
                        </a>
                      </li>
                    <li class="nav-item">
                      <a href="{{ route('dash.annonces.create') }}"class="nav-link" href="#">
                        <i class="fas fa-plus"></i>
                        Add News
                      </a>
                      
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('dash.report') }}" class="nav-link" href="#">
                        <span data-feather="shopping-cart"></span>
                        <i class="fas fa-link"></i>
                         Report Issues
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('dash.annonces') }}" class="nav-link" href="#">
                        <span data-feather="users"></span>
                        <i class="far fa-newspaper"></i>
                        Veiw News
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('veiw.users') }}" class="nav-link" href="#">
                        <i class="far fa-address-card"></i>
                        <span data-feather="bar-chart-2"></span>
                        View Users
                      </a>
                    </li>
                  </ul>
                </div>
              </nav>
          </div>

              <div class="count">  
                <button type="button" class="btn btn-primary position-relative">
                  total users <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary">{{ $usercount }} <span class="visually-hidden">unread messages</span></span>
                </button>
                <button type="button" class="btn btn-warning"> issues {{ $reportscount }}  </button>
              
              </div>

              <footer>
                <p class="text-center"> Crime Reporting System &copy;<?php echo date("Y ");?>Copyright. All Rights Reserved </p>
              </footer>
      
              
       
          
    







</body>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 
<script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>
</html>

