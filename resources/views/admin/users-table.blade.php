<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>layout</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../../../../../page_admin_css/style.css">
    
        <link rel="stylesheet" href="https://unpkg.com/ag-grid/dist/styles/ag-grid.css">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/ag-grid-community@31.1.1/styles/ag-theme-quartz.css" />
        
        <!-- Load ag-Grid scripts -->
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-community/dist/ag-grid-community.min.noStyle.js"></script>
        <!-- Load Excel export module -->
        <script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise/dist/ag-grid-enterprise.min.js"></script>
    
    </head> <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<body>
    <div class="wrapper">
        <aside id="sidebar" class="expand d-flex flex-column justify-content-between">
            <div class="sidebar-logo">
                <img src="../../../../../../page_admin_image/Frame 1113 (1).png" alt="">
            </div>
        
            @if(Auth::check() && Auth::user()->role === 'admin')
            <ul class="sidebar-nav d-flex flex-column justify-content-center">
                <li class="sidebar-item">
                    <a href="/dashboard/admin" class="sidebar-link {{ request()->is('admin') ? 'active' : '' }}">
                        <img src="../../../page_admin_image/dashboard (1).svg" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard/admin/list_candidature" class="sidebar-link {{ request()->is('list-candidatures') ? 'active' : '' }}">
                        <img src="../../../page_admin_image/user-id-svgrepo-com (1).svg" alt="">
                        <span>Liste des candidatures</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/dashboard/admin/compte_utilisateur" class="sidebar-link {{ request()->is('comptes-utilisateurs') ? 'active' : '' }}">
                        <img src="../../../page_admin_image/user-profile-svgrepo-com.svg" alt="">
                        <span>Comptes des utilisateurs</span>
                    </a>
                </li>
            </ul>
            @else
            <ul class="sidebar-nav d-flex flex-column justify-content-center">
                <li class="sidebar-item">
                    <a href="/suivi" class="sidebar-link {{ request()->is('suivi') ? 'active' : '' }}">
                        <img src="../../../page_admin_image/dashboard (1).svg" alt="">
                        <span>suivi candidature</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/inscription" class="sidebar-link {{ request()->is('inscription') ? 'active' : '' }}">
                        <img src="../../../page_admin_image/user-id-svgrepo-com (1).svg" alt="">
                        <span>formulaire d'inscription</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link {{ request()->is('classement-choix') ? 'active' : '' }}">
                        <img src="../../../page_admin_image/user-profile-svgrepo-com.svg" alt="">
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
                @if (Session::has('error'))
                <div class="alert alert-warning"role="alert">
                    <strong>{{Session::get('error')}}</strong>
                </div>
                @endif
                @if (Session::has('success'))
                <div class="alert alert-success"role="alert">
                    <strong>{{Session::get('success')}}</strong>
                </div>
                @endif
                <a href="{{route('ajouter_utilisateurs')}}" class="btn btn-success px-3 mb-3"><img src="{{asset('page_admin_image/add-person.svg')}}" alt="">Add utilisateur</a>
                <table id="emp-table" class="table table-striped table-hover table-responsive w-100">

                    <thead>
                        <tr>
                            <th col-index="1" class="text-center">name</th>
                            <th col-index="2" class="text-center">email</th>
                            <th col-index="5" class="text-center">
                                role:
                                <select class="table-filter form-select" onchange="filter_rows()">
                                    <option value="all"></option>
                                </select>
                            </th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->role}}</td>
                            <td class="text-center">
                                <form class="deleteForm d-inline-block" method="post" action="{{ route('deleteUser', ['id' => $user->id]) }}">
                                    @method('DELETE')
                                    @csrf 
                                    <button class="btn btn-outline-danger rounded-0 delete-btn" title="delete"  type="button"><img title="delete" src="{{ asset('images/trash.svg') }}" alt=""></button>
                                </form>
                                <form method="post" class="d-inline-block" action="{{ route('updateForm', $user->id) }}">
                                    @csrf
                                
                                    <button class="btn btn-outline-warning rounded-0 update-btn" title="update"  type="submit"><img title="update" src="{{ asset('images/edit.svg') }}" alt=""></button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                        <script>
                            document.querySelectorAll('.delete-btn').forEach(button => {
                                button.addEventListener('click', confirmDelete);
                            });
                        
                            function confirmDelete(event) {
                                event.preventDefault();
                                if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
                                    event.target.closest('.deleteForm').submit(); 
                                }
                            }
                        </script>
                        
                       
                        
                    </tbody>
                </table>    
            
               
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../../../../../../page_admin_script/script.js"></script>
    <script src="../../../../../../page_admin_script/filter.js"></script>


</body>
</html>