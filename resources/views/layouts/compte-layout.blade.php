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
                    <a href="/inscription" class="sidebar-link {{ request()->is('inscription') ? 'active' : '' }}">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="{{ asset('page_admin_script/script.js') }}"></script>
</body>
</html>
