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

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                <div class="container-fluid ">
                    <div class="mb-3 w-100 px-2">
                        <h3 class="fw-bold fs-4 mb-3">Dashboard :</h3>
                        <div class="row d-flex justify-content-evenly">
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 blau border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            {{$diplomesCount}}
                                            
                                            <img src="../../../page_admin_image/FileEarmarkPerson.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            candidatures
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p class="text-center bg-primary border border-dark ">
                                    voir plus 
                                    <img src="../../../page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 grun border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            {{$usersCount}}
                                            
                                            <img src="../../../page_admin_image/PersonCircle.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            comptes
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p style="background-color: #804228;" class="text-center  border border-dark ">
                                    voir plus 
                                    <img src="../../../page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 gelb border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            {{$averageMoyenne}}
                                            
                                            <img src="../../../page_admin_image/BarChartFill.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            candidatures
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p style="background-color: #523326;" class="text-center  border border-dark ">
                                    voir plus 
                                    <img src="../../../page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                         
                       
                        </div>
                    
                       
                        <div class="container-fluid " style="margin-top: 10rem;">
                            <div class="mb-3 w-100 px-2">
                                <div class="row d-flex justify-content-evenly">
                                    <div class="col-lg-6 col-md-6 ">
                                       
                                        <canvas id="my-chart"></canvas>
                                     
                                  </div>
                                        <div class="col-lg-3 col-md-3 ">
                                       
                                            <canvas id="my-cirle"></canvas>
                                         
                                      </div>
                                      
                                    </div>
                                
                                 
                               
                                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="../../../../../../page_admin_script/script.js"></script>

</body>
</html>

<script>
    let ctx=document.getElementById('my-chart').getContext('2d')
    let data={
        labels:['2015','2016','2017','2018','2019','2020','2021','2022','2023','2024'],
        datasets:[
            {
                labels:'ventes',
                data:[
                    12,15,14,16,13,
                ],
                backgroundColor:'rgba(0,123,255,0.5)',
                borderColor:'rgba(0,123,255,1)',
                borderWidth:3
            }
        ]
    }
    let myChart=new Chart(ctx,{
        // type:"bar",
        // type:"bar",
    //     type:"line",

    //     data:data,
    // options:{
    //     responsive:true,
    //     scales:{
    //         y:{
    //             beginAtZero:true
    //         }

    //     }
    // }
    type: 'line',
  data: data,
  options: {
    
    responsive:true,
    plugins: {
      filler: {
        propagate: false,
      },
      title: {
        display: true,
        text: (ctx) => 'Moyenne de bac: ' + ctx.chart.data.datasets[0].fill
      }
    },
    interaction: {
      intersect: false,
    }
  },
    })
</script>
<script>
    let ctxe=document.getElementById('my-cirle').getContext('2d')

    let datas={
        labels:['autre','Maroccain'],

        datasets:[
            {
                labels:'ventes',
                data:[
                    4.6,95.4
                ],
                backgroundColor:'rgba(0,123,255,1)',
                borderColor:'rgba(0,56,255,1)',
                borderWidth:3
            }
        ]
    }
    let myCharte=new Chart(ctxe,{
   
    type: 'doughnut',
  data: datas,
  options: {
    plugins: {
      filler: {
        propagate: false,
      },
      title: {
        display: true,
        text: (ctxe) => 'Nationalité: ' + ctxe.chart.data.datasets[0].fill
      }
    },
    interaction: {
      intersect: false,
    }
  },
    })
</script>