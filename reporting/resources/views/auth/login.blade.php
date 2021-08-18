
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Signin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">


    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<div class="">
    <header class=" p-3 d-flex align-items-center justify-content-center justify-content-md-between">
    <img src="img/logo3.png" class="d-flex align-items-center col-md-2 " width="100" height="40">
 
    <ul class="nav col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="" class="nav-link px-2 text-white">  <i class="fas fa-home"></i> Home</a></li>
      <li><a href="{{ route('news') }}" class="nav-link px-2 text-white">News</a></li>
      <li><a href="#" class="nav-link px-2 text-white">About</a></li>
    </ul>

    </header>
</div>

<body class="text-center" style="background-image: url(background.jp);">

    <main class="form-signin">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 fw-normal">sign in</h1>

            <div class="">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control" @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>

            <div class="">
                <label for="">{{ __('Password') }}</label>

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" class="form-control" placeholder="">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>
            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <button class="w-100 btn btn-lg " type="submit">
                {{ __('Login') }}
            </button>


            <div class="text-center not">

                @if (Route::has('password.request'))
                    <a class="link-warning" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>

            <div class="text-center not">
        Not a member? <a class="link-warning" href=" {{ __("register") }} ">Sign Up</a>
      </div>
        </form>
    </main>



</body>

</html>
