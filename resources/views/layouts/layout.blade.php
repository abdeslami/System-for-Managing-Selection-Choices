
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
    </script>
<link rel="stylesheet" href="app.css">
</head>
<body class="container-fluid">
    
    <nav class="navbar navbar-expand-xl  m-3 h4 px-5 border border-dark rounded sticky-top">
        <div class="container-fluid">
            <ul class="navbar-nav flex-fill justify-content-center align-items-center">
                <li class="nav-item mx-3"> <!-- Added mx-3 class for horizontal margin -->
                    <a class="nav-link" href="/acceuil">Acceuil</a>
                </li>
                <li class="nav-item mx-3"> <!-- Added mx-3 class for horizontal margin -->
                    <a class="nav-link" href="#">À propos</a>
                </li>
                <li class="nav-item mx-3"> <!-- Added mx-3 class for horizontal margin -->
                    <a class="nav-link" href="#">Formations</a>
                </li>
                <li class="nav-item mx-auto"> <!-- Added mx-3 class for horizontal margin -->
                    <a class="nav-brand" href="#"><img src="images/logo.png" alt=""></a>
                </li>
                <li class="nav-item mx-3"> <!-- Added mx-3 class for horizontal margin -->
           
                   <!-- Right Side Of Navbar -->
<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                    <button class="btn btn-primary fs-5 p-3">{{ __('Se connecter') }}</button> <!-- Normal button for "Se connecter" -->
                </a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">
                    <button class="btn btn-outline-primary fs-5 p-3">{{ __('Register') }}</button> <!-- Outlined button for "Register" -->
                </a>
            </li>
        @endif
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <button class="btn btn-primary">{{ __('Logout') }}</button> <!-- Normal button for "Logout" -->
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    @endguest
</ul>


                </li>
            </ul>
        </div>
    </nav>
    
    
    
    
    
    
    @yield("content")
    <script src="app.js"></script>
</body>
</html>