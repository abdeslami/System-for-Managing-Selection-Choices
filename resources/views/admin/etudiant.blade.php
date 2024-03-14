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
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
        <link rel="stylesheet" href="page_admin_css/style_inscription.css">
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
                    <a href="" class="sidebar-link">
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
              <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h2 id="heading">Pre-Inscription</h2>
                            <p>  
                                <h4 class="text-center">en ligne des candidats au titre de l'année universitaire <center>2023-2024</center>
                            </h4>
                            <p>Pour compléter votre inscription, veuillez imprimer le formulaire d'inscription
                                 et le reçu que vous trouverez dans la dernière étape de la pré-inscription,
                                  puis présentez-vous aux guichets du service des inscriptions de votre établissement.</p>
                        </p>
                            <form id="msform" onsubmit="hanleSubmit(e)" action="{{route('ajouterE')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <!-- progressbar -->
                               <ul id="progressbar">
                                    <li class="active" id="account"><strong>Information</strong></li>
                                    <li id="personal"><strong>Type Diplome</strong></li>
                                    <li id="payment"><strong>Scan</strong></li>
                                    <li id="confirm"><strong>Finish</strong></li>
                                </ul>
                                <div class="progress">
                                    <div style="background-color: #a16d54;" class="progress-bar progress-bar-striped progress-bar-animated"  role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                </div> <br> <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h4 class="fs-title">Entrez Les Information correct  </h4>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Étape 1 - 4</h2>
                                            </div>
                                        </div> 
                                        <div class="form-outline mb-4">
                                            <label class="form-label " for="nom">Nom:</label>
              
                                            <input type="text" id="nom" class="form-control form-control-lg" name="nom" />
                                          </div>
                          
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">Prenom:</label>
              
                                            <input type="text" id="prenom" class="form-control form-control-lg" name="prenom" />
                                          </div>
                                          <div class="form-outline mb-4 d-flex justify-content-between">
                                            <label class="form-label" for="p">Sexe:</label>
                                          
                                              <input type="radio" name="sexe" value="homme" checked>homme
                                          
                                              <input type="radio" name="sexe" value="femme">femme
                                           
                                          </div>
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">CIN:</label>
              
                                            <input type="text" id="prenom" class="form-control form-control-lg" name="cin" />
                                          </div>
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">CNE/CME:</label>
              
                                            <input type="text" id="prenom" class="form-control form-control-lg" name="cne_cme" />
                                          </div>
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">Date de naissance:</label>
              
                                            <input type="date" id="prenom" class="form-control form-control-lg" name="date_naissance" />
                                          </div>
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">Nationalite :</label>
              
                                            <input type="text" id="prenom" class="form-control form-control-lg" name="nationalite" />
                                          </div>
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">Ville Natale :</label>
              
                                            <input type="text" id="prenom" class="form-control form-control-lg" name="ville_natale"  />
                                          </div>
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">Adresse :</label>
              
                                            <input type="text" id="prenom" class="form-control form-control-lg"  name="adresse"  />
                                          </div>
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">Numero Telephone :</label>
              
                                            <input type="tel" id="prenom" class="form-control form-control-lg"  name="num_tel"  />
                                          </div>
            
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="prenom">Photo Personnel:</label>
              
                                            <input type="file" id="prenom" class="form-control form-control-lg"  name="photo_personnel"  />
                                          </div>
                                      
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example4cdg">Date d’obtention de bac:</label>
                                                <select name="date_bac" id="" class="form-control">
                                                    <option value="">Selection date</option>
                                                    <option value="2017">2017</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
            
                                                </select>
                                          </div>
                                    
                                    </div> <input type="button" name="next" class="next action-button" value="Next" />
                                </fieldset>
                                
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Selection votre Diplôme :</h2>
                                                <p class="text-danger text-center">si votre Diplôme Annuaire vous pouvais faire la note annee de fois dans le chapms </p>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Étape 2 - 4</h2>
                                            </div>
                                        <div class="col-12">
                                            <div class="form-outline mb-4 ">
                                                <label class="form-label" for="type_diplome">Choix de votre Diplôme:</label>
                                                <select name="type_diplome" onchange="handleInput()" id="type_diplome" class="form-control">
                                            
                                                    <option disabled selected value="">Sélectionnez votre choix</option>
                                                    <option value="bac+2">bac+2</option>
                                                    <option value="bac+3">bac+3</option>
                                                    <option value="bac+5">bac+5</option>

                                            
                                                </select>
                                                   
                                                
                                               
                                            <div id="div_input"></div>
                                        </div>
                                        </div>
                                               
                                        </div>
                                        </div> 
                                     
                                          
            
                                        <input type="button" name="next" class="next action-button" value="suivante" /> 
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">scan diplome:</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Étape 3 - 4</h2>
                                            </div>
                                        </div>  
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example4cdg">Mention de Diplome :</label>
              
                                            <select name="mention_diplome" class="form-control">
                                                <option selected value="">Select votre Montion</option>
                                                <option value="Mention Très Bien">Mention Très Bien</option>
                                                <option value="Mention Bien">Mention Bien</option>
                                                <option value="Mention Assez Bien">Mention Assez Bien</option>
                                                <option value="Sans mention">Sans mention</option>

                                            </select>
                                          </div>
                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example4cdg">Scan Bac :</label>
              
                                            <input type="file" id="form3Example4cdg" name="scan_bac" class="form-control form-control-lg" />
                                          </div>

                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example4cdg">Scan Diplome :</label>
              
                                            <input type="file" id="form3Example4cdg" name="scan_diplome" class="form-control form-control-lg" />
                                          </div>

                                          <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example4cdg">Scan Carte Nationalite :</label>
              
                                            <input type="file" id="form3Example4cdg" name="scan_cin" class="form-control form-control-lg" />
                                          </div>
                                    </div> <input type="button" name="next" class="next action-button" value="Next" /> 
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="fs-title">Terminer :</h2>
                                            </div>
                                            <div class="col-5">
                                                <h2 class="steps">Étape 4 - 4</h2>
                                            </div>
                                        </div> <br><br>
                                        <h2 class="purple-text text-center"><strong>SUCCÈS !</strong></h2> <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3"> <img src="img.jpg" class="fit-image"> </div>
                                        </div> <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5 class="purple-text text-center">Vous vous êtes inscrit avec succès</h5>
            
                                            </div>
                                        </div>
                                    </div>
                                <input type="submit" class="btn  btn-outlinee button_submit"  value="envoyer " /> 
                                    
            
                                </div> 
                                </fieldset>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </main>
            
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="page_admin_script/script.js"></script>
    
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script  src="page_admin_script/script_inscription.js"></script>
  <script src="page_admin_script/type_diplome.js"></script>
</body>

</html>
