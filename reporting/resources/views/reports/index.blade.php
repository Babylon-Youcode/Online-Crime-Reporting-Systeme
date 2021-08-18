<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title> Reports </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
    
  
<body>
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Crime Rporting Systeme</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="text-end">
      <a > Welcome {{ Auth::user()->name }}</a>
  
          <a href="">
              <a href="{{ route('logout') }}"
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
              <a class="nav-link active" aria-current="page" href="{{ route('admin') }}">
                <span data-feather="home"></span>
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dash.annonces.create') }}"class="nav-link" href="#">
                <span data-feather="file"></span>
                Add News
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dash.report') }}" class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                 Report Issues
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('dash.annonces') }}" class="nav-link" href="#">
                <span data-feather="users"></span>
                Veiw News
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                View Users
              </a>
            </li>
          </ul>
        </div>
      </nav>
  
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  
        <h2>All reports</h2>
        <div class="table-responsive"  id="panel">
          <div class="panel panel-default ">
            <table class="table table-bordered table-dark">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">crime type</th>
                      <th scope="col">victim name</th>
                      <th scope="col">victim adress</th>
                      <th scope="col">description</th>
                      <th scope="col">victm image</th>
                      <th scope="col">crime date</th>
                      <th scope="col">roprted id</th>
                      <th scope="col">action</th>
                  </tr>
              </thead>
              <tbody>
          
          
                  @foreach ($reps as $item)
                      <tr>
                          <th scope="row">{{$item->id}}</th>
                          <td>{{$item->crime_type}}</td>
                          <td>{{$item->victim_name}}</td>
                          <td>{{$item->victim_adresse}}</td>
                          <td>{{$item->discription}}</td>
                          <td> <img src="{{asset('img/crimeimages/'.$item->victim_image)}}"></td>
                          <td>{{$item->crime_date}}</td>
                          <td>{{$item->user_id}}</td>
          
                          
                          <td>
                            <a class="btn btn-danger"href="">delete</a>
                            <a class="btn btn-danger"href="{{ route('update_status',$item->id) }}">update status</a>
                          </td>
                          
          
                      </tr>
                  @endforeach
          
              </tbody>
          </table>
  </div>
      </div>
      <div class="line"></div>
      <footer>
  <p class="text-center">
  Crime Reporting System &copy;<?php echo date("Y ");?>Copyright. All Rights Reserved    
  </p>
  </footer>
  </div>
  
  </div>
  
        </div>
      </main>
    </div>
  </div>
</body>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

</html>
