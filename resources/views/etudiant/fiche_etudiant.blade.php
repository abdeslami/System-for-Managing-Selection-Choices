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
                <h1 class="text-center">Condidature</h1>
                <style>
                    table {
                        width: 100%;
                        height: 60vh;
                        border:  1px solid black;
                       margin: 5px ;
                    }
                     td{
                        margin-left: 5rem ;
                        font-size: 20px ;
                    }
                    .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .center-container hr{
            height: 5px;
        }
        .center-container button{
            position: absolute;
            top:49rem;
            right: 60rem;
        }
                  
                    
                </style>
              <div class="table-responsive">
                <table class="table-responsive">
                    <tr>
                        <td><img class="img-fluid w-30 h-50" src="images/logo.png" alt=""></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <img src="page_admin_image/PersonCircle.png" alt="">
                        </td>
                        
                    </tr>
                    <tr>
                        <td>
                            Nom : Achraf
                        </td>
                        <td>
    
                        </td>
                        <td>
    
                        </td>
                        <td>
    
                        </td>
                        <td>
    
                        </td>
                        <td>
                            Sexe : homme
                        </td>
                    
                    
                    </tr>
                        <tr>
                            <td>
                                Prenom :  Abdeslami
                            </td>
                            <td>
    
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
                                Telephone : +212 6706892262
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Adresse : La Rue 4 Lazaret 
                            </td>
                            <td>
    
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
                                Email : achrafabdeslami@gmail.com
                            </td>
    
                        </tr>
                        <tr>
                            <td>
                                Cin : F551548
                            </td>
                            <td>
    
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
                                Type de Diplome  : Developpement digital
                            </td>
                        </tr>
                        <tr>
                            <td>
                                CNE & CME : H181582555959
                            </td>
                            <td>
    
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
                                Date d'obetion de bac   : 2022
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Date de Naissance : 2003-05-26
                            </td>
                            <td>
    
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
        
                            </td>
                            <td>
                                Moyenne de Diplome   : 18.9
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lieu de Naissance :Oujda
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Document  : 
                            </td>
                        </tr>
                        <tr>
                            <td>
    
                            </td>
                            <td>
                                Choix :Cyber Security
                            </td>
                        </tr>
                        <tr >
                            <td>
    
                            </td>
                            <td>
                             
                            </td>
                            <td>
    
                            </td>
                            <td>
                             
                            </td>
                            <td>
    
                            </td>
                            <td>
                             
                            </td>
                            <td>
    
                            </td>
                            <td>
                             
                            </td>
                            <td>
                                2024-03-15
                            </td>
                        </tr>
    
                        <tr style="border: 1px solid black">
                            <td>
    
                            </td>
                            <td>
                                Etat  :Accepter 
                            </td>
                        </tr>
                       
                    
                  </table>
              </div>
              <div class="center-container">
                <hr class="w-50 bg-dark mb-4">
                <button class="btn btn-warning me-5 mt-5">Modifier</button>
            </div>
            </main>
          
            
        </div>
    </div>
    <script src="page_admin_script/script.js"></script>
    
</body>

</html>
