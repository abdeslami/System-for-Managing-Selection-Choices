
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>layout</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('page_admin_css/style.css') }}">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
new WOW().init();
</script>
        @yield("css/js links")

    </head>
<body>
    <div class="wrapper">
        <aside id="sidebar" class="expand d-flex flex-column justify-content-between">
            <div class="sidebar-logo">
                <img src="{{ asset('page_admin_image/Frame 1113 (1).png') }}" alt="">
            </div>
        
            @if(Auth::check() && Auth::user()->role === 'admin')
            <ul class="sidebar-nav d-flex flex-column justify-content-center">
                <li class="sidebar-item">
                    <a href="/dashboard/admin" class="sidebar-link {{ request()->is('dashboard/admin') ? 'active' : '' }}">
                        <img src="{{ asset('page_admin_image/dashboard (1).svg') }}" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard/admin/list_candidature" class="sidebar-link {{ request()->is('dashboard/admin/list_candidature') ? 'active' : '' }}">
                        <img src="{{ asset('page_admin_image/user-id-svgrepo-com (1).svg') }}" alt="">
                        <span>Liste des candidatures</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard/admin/compte_utilisateur" class="sidebar-link {{ request()->is('dashboard/admin/compte_utilisateur') ? 'active' : '' }}">
                        <img src="{{ asset('page_admin_image/user-profile-svgrepo-com.svg') }}" alt="">
                        <span>Comptes des utilisateurs</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard/admin/event" class="sidebar-link {{ request()->is('dashboard/admin/event') ? 'active' : '' }}">
                        <img width="31rem" height="31rem" src="{{ asset('page_admin_image/event.png') }}" alt="">
                        <span>Date Inscription et Choix</span>
                    </a>
                </li>
            </ul>
            @else
            <ul class="sidebar-nav d-flex flex-column justify-content-center">
                <li class="sidebar-item">
                    <a href="/suivi" class="sidebar-link {{ request()->is('suivi') ? 'active' : '' }}">
                        <img src="{{ asset('page_admin_image/dashboard (1).svg') }}" alt="">
                        <span>suivi candidature</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/inscription/step1" class="sidebar-link {{ request()->is('inscription/step1') ? 'active' : '' }}">
                        <img src="{{ asset('page_admin_image/user-id-svgrepo-com (1).svg') }}" alt="">
                        <span>formulaire d'inscription</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/choix_filiere" class="sidebar-link {{ request()->is('classement-choix') ? 'active' : '' }}">
                        <img src="{{ asset('page_admin_image/user-profile-svgrepo-com.svg') }}" alt="">
                        <span>classement des choix</span>
                    </a>
                </li>
            </ul>
            @endif
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <span>support@ensa.un</span>
                </a>
            </div>
        </aside>
        
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-0">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-menu" style="color: black;"></i>
                    </button>
                    
                </div>
                <form action="#" class="d-none d-sm-inline-block"></form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown p-3 ">
                            Bonjour,
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                {{ Auth::user()->name; }}
                                <i class="lni lni-chevron-down my-2"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded text-center">
                                @auth
                                    
                                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="border-0 " style="background-color: white">{{ __('Logout') }}</button>
                                </form>
                                @endauth
                            </div>
                            
                        </li>
                        
                    </ul>
                </div>
            </nav>
            <div class="container p-4">
                @yield("content")
               

            </div>
        </div>
    </div>
    <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
  ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="{{ asset('page_admin_script/script.js') }}"></script>
    <script>
document.querySelectorAll(".action-button").forEach(function(button) {
  button.addEventListener("click", function() {
    var element = document.querySelector(".multi_step_form");
    element.classList.add("animate__animated", "animate__backOutLeft", "animate__slower");
    
    // Remove animation classes after animation ends
    element.addEventListener("animationend", function() {
      element.classList.remove("animate__animated", "animate__backOutLeft", "animate__slower");
    });
  });
});

      </script>
</body>
</html>
