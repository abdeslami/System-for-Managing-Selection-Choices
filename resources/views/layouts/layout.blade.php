
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">


</head>
<body class="container-fluid">
    
    <nav class="navbar navbar-expand-xl  m-5 h4 px-5 border border-dark rounded">
        <div class="container-fluid">
            <ul class="navbar-nav flex-fill justify-content-center align-items-center">
                <li class="nav-item mx-3"> <!-- Added mx-3 class for horizontal margin -->
                    <a class="nav-link" href="#">Acceuil</a>
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
                    <button class="btn btn-primary fs-5" type="button">Search</button>
                    <button class="btn btn-outline-primary fs-5" type="button">Search</button>
                </li>
            </ul>
        </div>
    </nav>
    
    
    
    
    
    
    @yield("content")
    <script src="app.js"></script>
</body>
</html>