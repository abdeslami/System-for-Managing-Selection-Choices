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
                                     

        <table id="emp-table" class="table table-striped table-hover table-responsive w-100 ">
            <thead>
                <th col-index = 1>CIN</th>
                <th col-index = 2>Role:
                    <select class="table-filter form-select" onchange="filter_rows()">
                        <option value="all"></option>
                    </select>
                </th>
    
                <th col-index = 3>NOM Prenom:
                    <select class="table-filter form-select" onchange="filter_rows()">
                        <option value="all"></option>
                    </select>
                </th>
                <th col-index = 4>date:
                    <select class="table-filter form-select" onchange="filter_rows()">
                        <option value="all"></option>
                    </select>
                </th>
                <th col-index = 5>Filiere:
                    <select class="table-filter form-select" onchange="filter_rows()">
                        <option value="all"></option>
                    </select>
                </th>
                <th>
                    Action
                </th>
                
                
            </thead>
           
            <tbody>
                <tr>
                    <td>H4656261</td>
                    <td>Administrateur</td>
                    <td>assia sila</td>
                    <td>2023-02-25</td>
                    <td>A</td>
                   
                    <td>
                        <button class="btn btn-danger">supprimer</button>
                        <button class="btn btn-danger">modifier</button>

                    </td>
                </tr>
                <tr>
                    <td>H4656261</td>
                    <td>user</td>
                    <td>achraf sila</td>
                    <td>2022-02-25</td>
                    <td>b</td>
                   
                    <td>
                        <button class="btn btn-danger">supprimer</button>
                        <button class="btn btn-danger">modifier</button>

                    </td>
                </tr>
                <tr>
                    <td>H4656261</td>
                    <td>prof</td>
                    <td>bouchrour z.</td>
                    <td>2021-02-25</td>
                    <td>0</td>
                   
                    <td>
                        <button class="btn btn-danger">supprimer</button>
                        <button class="btn btn-danger">modifier</button>

                    </td>
                </tr>
                <tr>
                    <td>H4656261</td>
                    <td>prof</td>
                    <td>zrouri sila</td>
                    <td>2022-01-25</td>
                    <td>c</td>
                   
                    <td>
                        <button class="btn btn-danger">supprimer</button>
                        <button class="btn btn-danger">modifier</button>

                    </td>
                </tr>
                <tr>
                    <td>H4656261</td>
                    <td>Administrateur</td>
                    <td>mouad sila</td>
                    <td>2029-02-25</td>
                    <td>A</td>
                   
                    <td>
                        <button class="btn btn-danger">supprimer</button>
                        <button class="btn btn-danger">modifier</button>

                    </td>
                </tr>
                <tr>
                    <td>H4656261</td>
                    <td>user</td>
                    <td>assia sila</td>
                    <td>2020-02-25</td>
                    <td>A</td>
                   
                    <td>
                        <button class="btn btn-danger">supprimer</button>
                        <button class="btn btn-danger">modifier</button>

                    </td>
                </tr>
                <tr>
                    <td>H4656261</td>
                    <td>user</td>
                    <td>siham sila</td>
                    <td>2023-02-25</td>
                    <td>A</td>
                   
                    <td>
                        <button class="btn btn-danger">supprimer</button>
                        <button class="btn btn-danger">modifier</button>

                    </td>
                </tr>
                <tr>
                    <td>H4656261</td>
                    <td>user</td>
                    <td>ayoub sila</td>
                    <td>2023-02-25</td>
                    <td>d</td>
                   
                    <td>
                        <button class="btn btn-danger">supprimer</button>
                        <button class="btn btn-danger">modifier</button>

                    </td>
                </tr>


               
    
              
            
            </tbody>
        </table>
        <!-- <script>getUniqueValuesFromColumn()
        </script> -->
        <script>
            window.onload = () => {
                console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
            };
    
            getUniqueValuesFromColumn()
            
        </script>
   
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </main>
            <footer class="footer sidebar-footer t-0 b-0">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href=" #">
                                <strong>ENSA</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">support@ensa.un 2024</a>
                                </li>
                                
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="page_admin_script/script.js"></script>
    
</body>

</html>