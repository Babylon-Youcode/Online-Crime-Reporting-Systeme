<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporting</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
  <div class="">
    <header class=" p-3 d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
     <img src="/img/logo3.png" class="d-flex align-items-center col-md-2 " width="100" height="40">
  
     <ul class="nav col-12 col-md-auto mb-2mb-md-0">
       <li><a href="{{ route('home') }}" class="nav-link px-2 text-white">  <i class="fas fa-home"></i> Home</a></li>
       <li><a href="{{ route('news') }}" class="nav-link px-2 text-white">News</a></li>
       <li><a href="#" class="nav-link px-2 text-white">About</a></li>
 
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

 
  <main class="reporting">

    <div class="text-center mt-5">
      <h2>
        <span class="article">New Report</span>
      </h2>
    </div>
    <div class="reporting-form">
      <form action="{{ route('raport.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="left-column">
            <div>
                <label for="na">Crime Type <span>*</span></label>
                <select  class="form-select"  name="crime_type" id="" placeholder="Select">
                  <option value="Terrorisme">Terrorisme</option>
                  <option value="Burglary and Robbery">Burglary and Robbery</option>
                  <option value="Murder">Murder</option>
                  <option value="kidnapping">kidnapping</option>
                  <option value="child abuse">child abuse</option>
                  <option value="arson">arson</option>
                  <option value="other">other! write in the decription</option>
                 </select>
            </div>
            <div>
                <label for="pa">Victim Name <span>*</span></label>
                <input type="title" name="victim_name"  id="exampleFormControlFile1">
            </div>
            <div>
                <label >Victim Adresse <span>*</span></label>
                <input type="title" name="victim_adresse" id="exampleFormControlFile1">
            </div>
            <div>
              <label >Upload Image <span>*</span></label>
              <input class="upload" type="file" name="image" id="exampleFormControlFile1">
          </div>
        </div>
        <div class="right-column">
            <div>
              <label for="pa">Crime Date <span>*</span></label>
                <input type="date" name="date" id="exampleFormControlFile1">
            </div>
            <div>
                <label for="br">Description</label>
                <textarea name="discription" id="br" cols="30" rows="10"></textarea>
            </div>
        </div>
        
        <button onclick="report()" type="submit" value="Confirme"> Confirme </button>
      </form>
    </div>
    


  
  </main>

<script src="/js/index.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>

</body>
</html>