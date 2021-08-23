<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>annonces</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  
    <link href="/css/dashboard.css" rel="stylesheet">
</head>
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
              <a class="nav-link" href="{{ route('veiw.users') }}">
                <i class="far fa-address-card"></i>
                <span data-feather="bar-chart-2"></span>
                View Users
              </a>
            </li>
          </ul>
        </div>
      </nav>
  </div>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div > 
      <h1>All News</h1>
        <table class="table table-bordered">
            <thead class="table table-bordered table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">discription</th>
                    <th scope="col">date</th>
                    <th scope="col">image</th>
        
                    <th scope="col">action</th>
                </tr>
            </thead >
            <tbody >
        
        
                @foreach ($ans as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->title}}</td>
                        <td>{{$item->discription}}</td>
                        <td>{{$item->date}}</td>
                        <td> <img src="{{asset('img/newsimages/'.$item->image)}}" height="50px"> </td>
                        <td>
                        
                          <a class="btn btn-warning" href="{{ route('dash.annonces.edit',$item->id) }}"> <i class="fa fa-pencil"></i></a>
                          <a class="btn btn-danger" href="{{ route('dash.annonces.delete',$item->id) }}"  onclick= " return confirm( 'Are you sure' ) " ><i class="fa fa-trash"></i></a>           
                            
                          @endforeach
            </tbody>
        </table>
    </div>
</main>


<script>
  function go(link) {
  if (confirm( 'Are you sure' )) {
    windows.location.href = link;
  }
}
</script>


<script src="/js/index.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>

    
</body>
</html>

