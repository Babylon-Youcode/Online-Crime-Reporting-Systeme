@extends('layouts.app')
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
        <link rel="stylesheet" href="css/admindash.css">
        <link rel="stylesheet" href="css/animate.css">
        
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <div class="container-fluid">
                <div class="row">
                  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                      <ul class="nav flex-column">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">
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
            <!-- Page Content Holder -->
            <div id="content">
             
                <div clas="col-md-12">
                    <img src="" class="img-thumbnailclass="img-thumbnail">
                    </div>
         
                
                <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            
                        </div>
                    </div>
                </nav>

                <div class="line"></div>
                <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Total Number Of Users</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="panel panel strover sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-link fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Total Number Of Cases</div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>

                    
                    
            </div>
                <div class="line"></div>
                
            </div>
            
        </div>

       
    </body>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 
    <script src="https://kit.fontawesome.com/aae4dc3f4b.js" crossorigin="anonymous"></script>
</html>
