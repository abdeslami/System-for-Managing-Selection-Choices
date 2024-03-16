<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar With Bootstrap</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="page_admin_css/style.css">
    <script src="page_admin_script/filter.js"></script>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="sidebar-logo">
                <img src="page_admin_image/Frame 1113 (1).png" alt="">
            </div>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                    <img src="page_admin_image/Rectangle 32.png" alt="">
                    <span>Issam ghomari</span>
                </a>
            </li>
            <div class="d-flex">
                
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="test.html" class="sidebar-link">
                        <img src="page_admin_image/dashboard (1).svg" alt="">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <img src="page_admin_image/user-id-svgrepo-com (1).svg" alt="">

                        <span>Candidatures</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <img src="page_admin_image/user-profile-svgrepo-com.svg" alt="">

                        <span>Comptes d’utilisateurs</span>
                    </a>
                </li>
                
                
               
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <span>support@ensa.un</span>
                </a>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3">
                <form action="#" class="d-none d-sm-inline-block">

                </form>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="page_admin_image/Power.png" class="avatar img-fluid" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end rounded">
                                        <button type="button" class="btn btn-outline-danger">  <img src="page_admin_image/Power.png" alt="">Déconnexion</button>
                                      
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="content px-5 py-4">
                <div class="container-fluid ">
                    <div class="mb-3 w-100 px-2">
                        <h3 class="fw-bold fs-4 mb-3 text-center ">Compte utilisateur  :</h3>
                        
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
  
                                    <table id="emp-table" class="table table-striped table-hover table-responsive w-100">
                                        <thead>
                                            <tr>
                                                <th>CIN</th>
                                                <th>Nom et Prenom</th>
                                                <th col-index="3">Mention Diplome:
                                                    <select class="table-filter form-select" onchange="filter_rows()">
                                                        <option value="all"></option>
                                                    </select>
                                                </th>
                                                <th col-index="4">Type de Diplome:
                                                    <select class="table-filter form-select" onchange="filter_rows()">
                                                        <option value="all"></option>
                                                    </select>
                                                </th>
                                                <th col-index="5">Date de Bac:
                                                    <select class="table-filter form-select" onchange="filter_rows()">
                                                        <option value="all"></option>
                                                    </select>
                                                </th>
                                                <th col-index="6">Moyenne:
                                                    <select class="table-filter form-select" onchange="filter_rows()">
                                                        <option value="all"></option>
                                                    </select>
                                                </th>
                                                <th col-index="7">
                                                    Autre filtre:
                                                    <select class="table-sort form-select" onchange="sortTable()">
                                                        <option value="asc">Asc</option>
                                                        <option value="desc">Desc</option>
                                                    </select>
                                                </th>                                                
                                                <th>Image</th>
                                            </tr>
                                    
                                        </thead>
                                        <tbody>
                                            @isset($diplomes)
                                            @foreach ($diplomes as $diplome)
                                                    <tr>
                                                        <td>{{$diplome->candidature->cin}}</td>
                                                        <td>{{ $diplome->candidature->nom }} {{ $diplome->candidature->prenom }}</td>
                                                          <td>{{ $diplome->mention_diplome }}</td>
                                                        <td>{{ $diplome->type_diplome }}</td>
                                                        <td>{{ $diplome->date_bac }}</td>
                                                        <td>{{ $diplome->average_moyenne }}</td>
                                                        <td><img style="width: 2rem" class=" rounded-circle" src="{{ asset('storage/photo/' . $diplome->candidature->photo_personnel) }}" alt="Photo Personnel"></td>
                                                        
                                                    </tr>
                                               
                                            @endforeach
                                        @endisset
                                        </tbody>
                                    </table>
                                
                                   
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </main>
            
        </div>
    </div>
    <script src="page_admin_script/script.js"></script>
    
</body>

</html>
