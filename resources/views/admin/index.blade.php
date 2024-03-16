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
       
    <link rel="stylesheet" href="page_admin_css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <h3 class="fw-bold fs-4 mb-3">Dashboard :</h3>
                        <div class="row d-flex justify-content-evenly">
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 blau border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            7500
                                            
                                            <img src="page_admin_image/FileEarmarkPerson.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            candidatures
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p class="text-center bg-primary border border-dark ">
                                    voir plus 
                                    <img src="page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 grun border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            7500
                                            
                                            <img src="page_admin_image/PersonCircle.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            comptes
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p style="background-color: #804228;" class="text-center  border border-dark ">
                                    voir plus 
                                    <img src="page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                            <div class="col-12 col-md-3 ">
                                <div class="card border-2 gelb border border-dark">
                                    <div class="card-body py-4">
                                        <h5 class="mb-2 fw-bold">
                                            
                                            14.5
                                            
                                            <img src="page_admin_image/BarChartFill.png" class=" float-end" alt="">
                                        </h5>
                                        <p class="mb-2 fw-bold">
                                            candidatures
                                        </p>
                                       
                                    </div>
                                    
                                </div>
                                <p style="background-color: #523326;" class="text-center  border border-dark ">
                                    voir plus 
                                    <img src="page_admin_image/Vector (2).png" alt="">
                                </p>
                            </div>
                         
                       
                        </div>
                        <div class="container-fluid ">
                            <div class="mb-3 w-100 px-2">
                                <div class="row d-flex justify-content-evenly">
                                    <div class="col-lg-6 col-md-6 ">
                                       
                                        <canvas id="my-chart"></canvas>
                                     
                                  </div>
                                        <div class="col-lg-6 col-md-6 ">
                                       
                                            <canvas id="my-cirle"></canvas>
                                         
                                      </div>
                                      
                                    </div>
                                
                                 
                               
                                </div>
            </main>
            <footer class="footer">
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
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="page_admin_script/script.js"></script>
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