<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Reports</title>
    <link rel="stylesheet" href="/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
    <div class="">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">
         <img src="/img/logo3.png" class="d-flex align-items-center col-md-2 " width="100" height="40">
      
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
    
<div class="container-fluid">
    <div class="cards">
        @foreach ($reps as $item)

      <div class="cards_item"> 
        <div class="card">
          <div>
            <img class="card_image" src="{{asset('img/crimeimages/'.$item->victim_image)}}" height="100px" alt="...">  

            <div class="card_content">

              <h2 class="card_title">Crime Type : {{$item->crime_type}}</h2>
              <h2 class="card_title"> Victim Name : {{$item->victim_name}}</h2>
              <h2 class="card_title"> Victim Adresse : {{$item->victim_adresse}}</h2>
              <h2 class="card_title"> description</h2> 
              <p class="card_text">{{$item->discription}}.</p>
              <div class="card_date">
                <small>Crime Date : {{$item->crime_date}} </small>
                
              </div>
              
              <button class="btn btn-light btn-lg mt-3">status:  {{$item->reports_status}}</button>
            </div>
            
          </div>
        </div>

      </div>
      @endforeach
    </div>

</div>


    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 
  <script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>
    
  
</body>

