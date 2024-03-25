@extends("layouts.compte-layout")

@section("css/js links")
<title>formulaire d'inscription</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css">
  <link rel="stylesheet" href="form/form.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    

@endsection

@section("content")

<!-- Multi step form --> 
<section class="multi_step_form">  
    <form id="msform"  action={{ route("candidat-store") }} enctype="multipart/form-data" method="post">
        @csrf
        <div class="tittle">
            <h2>Pré-inscription</h2>
            <p>remplir formulaire pour passer le concour ecrit</p>
        </div>
        <ul id="progressbar">
            <li class="active">Information</li>  
            <li>Type Diplome</li> 
            <li>Scan</li>
            <li>Finish</li>
        </ul>

        <fieldset>
            <h3>Setup your account</h3>
            <h6>Please fill in the following information</h6> 
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="text" name="nom" id="nom"  class="form-control" placeholder="Nom" value={{ isset($candidatureExist)? $candidatureExist->nom : old("nom")  }}> 
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" name="prenom" id="prenom"   class="form-control" placeholder="Prénom" value={{ isset($candidatureExist)? $candidatureExist->prenom : old("prenom")  }}>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <select id="sexe" name="sexe" class="form-control" value={{ isset($candidatureExist)? $candidatureExist->cin : old("sexe")  }}>
                        <option value="homme">Homme</option>
                        <option value="femme">Femme</option>
                    </select>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" name="cin" id="cin"  class="form-control" placeholder="CIN" value={{ isset($candidatureExist)? $candidatureExist->cin : old("cin")  }}>
                    <input type="file" name="scan_cin" id="cin_pdf" class="form-control-file" >
                    <small class="form-text text-muted">Upload CIN PDF</small>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="text" name="cne_cme"  id="cne"  class="form-control" placeholder="CNE" value={{ isset($candidatureExist)? $candidatureExist->cne_cme : old("cne_cme")  }}> 
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" name="adresse"  id="adresse"   class="form-control" placeholder="Adresse" value={{ isset($candidatureExist)? $candidatureExist->adresse : old("adresse")  }}>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="date" name="date_naissance"  id="date_naissance"  class="form-control" placeholder="Date de naissance (YYYY-MM-DD)" value={{ isset($candidatureExist)? $candidatureExist->date_naissance : old("date_naissance")  }}> 
                    <small class="form-text text-muted">Date de naissance</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" name="nationalite"  id="nationalite"  class="form-control" placeholder="Nationalité" value={{ isset($candidatureExist)? $candidatureExist->nationalite : old("nationalite")  }}>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="text" name="ville_natale"  id="ville_natale" class="form-control"  placeholder="Ville Natale" value={{ isset($candidatureExist)? $candidatureExist->ville_natale : old("ville_natale")  }}> 
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="tel" name="num_tel"  id="numero_telephone"  class="form-control" placeholder="Numéro Téléphone" value={{ isset($candidatureExist)? $candidatureExist->num_tel : old("num_tel")  }}>
                </div> 
            </div>
            <div class="form-group"> 
                <input type="date" id="date_obtention_bac" name="date_obtention_bac"  class="form-control" placeholder="Date d’obtention de bac (YYYY-MM-DD)">
                <small class="form-text text-muted">Date d’obtention de bac</small>
            </div>  
            
            <button type="button" class="next action-button">Continue</button>  
        </fieldset>
        
        
        
        <fieldset>
            <h3>Diploma Information</h3>
            <h6>Please provide your diploma details</h6> 
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <select id="diplome" class="form-control" name="nom_diplome" value={{ isset($candidatureExist)? $candidatureExist->diplome->nom : old("nom_diplome")  }}>
                        <option value="example1">Example Diploma 1</option>
                        <option value="example2">Example Diploma 2</option>
                        <option value="example3">Example Diploma 3</option>
                    </select>
                    <small class="form-text text-muted">Diploma nom</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <select id="diplome_type" class="form-control" name="type_diplome" value={{ isset($candidatureExist)? $candidatureExist->diplome->type_diplome  : old("type_diplome") }}>
                        <option value="bac+2">Bac+2</option>
                        <option value="bac+3">Bac+3</option>
                        <option value="bac+5">Bac+5</option>
                    </select>
                    <small class="form-text text-muted">Diploma Type</small>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group">
                    <input type="file" id="diplome_file" name="scan_diplome" class="form-control-file" accept=".pdf">
                    <small class="form-text text-muted">Upload Your Diploma (PDF)</small>
                </div>
                <div class="form-group col-md-6">  
                    <input type="number" id="semestre_1_moyenne" class="form-control" placeholder="Semestre 1 Moyenne" name="moyenne_s1" value={{ isset($candidatureExist)? $candidatureExist->diplome->moyenne_s1 : old("moyenne_s1")  }}> 
                    <small class="form-text text-muted">Semestre 1 Moyenne</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="file" id="semestre_1_notes"  class="form-control-file" accept=".pdf" name="releve_s1">
                    <small class="form-text text-muted">Upload Semestre 1 Relevé des Notes (PDF)</small>
                </div> 
            </div>
            <!-- Repeat the above div for semestre 2 to 6 -->
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="number" id="semestre_2_moyenne" class="form-control" placeholder="Semestre 2 Moyenne" name="moyenne_s2" value={{ isset($candidatureExist)? $candidatureExist->diplome->moyenne_s2 : old("moyenne_s2")  }}> 
                    <small class="form-text text-muted">Semestre 2 Moyenne</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="file" id="semestre_2_notes" class="form-control-file" accept=".pdf" name="releve_s2">
                    <small class="form-text text-muted">Upload Semestre 2 Relevé des Notes (PDF)</small>
                </div> 
            </div>
            <!-- Repeat for semestres 3 to 6 -->
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="number" id="semestre_3_moyenne" class="form-control" placeholder="Semestre 3 Moyenne" name="moyenne_s3" value={{ isset($candidatureExist)? $candidatureExist->diplome->moyenne_s3 : old("moyenne_s3")  }}> 
                    <small class="form-text text-muted">Semestre 3 Moyenne</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="file" id="semestre_3_notes" class="form-control-file" accept=".pdf" name="releve_s3">
                    <small class="form-text text-muted">Upload Semestre 3 Relevé des Notes (PDF)</small>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="number" id="semestre_4_moyenne" class="form-control" placeholder="Semestre 4 Moyenne" name="moyenne_s4" value={{ isset($candidatureExist)? $candidatureExist->diplome->moyenne_s4 : old("moyenne_s4")  }}> 
                    <small class="form-text text-muted">Semestre 4 Moyenne</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="file" id="semestre_4_notes" class="form-control-file" accept=".pdf" name="releve_s4">
                    <small class="form-text text-muted">Upload Semestre 4 Relevé des Notes (PDF)</small>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="number" id="semestre_5_moyenne" class="form-control" placeholder="Semestre 5 Moyenne" name="moyenne_s5" value={{ isset($candidatureExist)? $candidatureExist->diplome->moyenne_s5 : old("moyenne_s5")  }}> 
                    <small class="form-text text-muted">Semestre 5 Moyenne</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="file" id="semestre_5_notes" class="form-control-file" accept=".pdf" name="releve_s5">
                    <small class="form-text text-muted">Upload Semestre 5 Relevé des Notes (PDF)</small>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="number" id="semestre_6_moyenne" class="form-control" placeholder="Semestre 6 Moyenne" name="moyenne_s6" value={{ isset($candidatureExist)? $candidatureExist->diplome->moyenne_s6 : old("moyenne_s6")  }}> 
                    <small class="form-text text-muted">Semestre 6 Moyenne</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="file" id="semestre_6_notes" class="form-control-file" accept=".pdf" name="releve_s6">
                    <small class="form-text text-muted">Upload Semestre 6 Relevé des Notes (PDF)</small>
                </div> 
            </div>
            <button type="button" class="action-button previous previous_button">Back</button>
            <button type="button" class="next action-button">Continue</button>  
        </fieldset>  
        <fieldset>
            <h3>Ajouter des Diplômes Supplémentaires</h3>
            <h6>Veuillez ajouter des informations sur les diplômes supplémentaires si nécessaire</h6> 
            <div class="form-group">
                <select id="nombre_diplomes" class="form-control">
                    <option value="1">1 Diplôme</option>
                    <option value="2">2 Diplômes</option>
                    <option value="3">3 Diplômes</option>
                    <option value="4">4 Diplômes</option>
                </select>
                <small class="form-text text-muted">Nombre de Diplômes Supplémentaires à Ajouter</small>
            </div>
            <div id="additional_diploma_fields">
                <!-- JavaScript will populate additional inputs based on the selected number of diplomas -->
            </div>
            
            <button type="button" class="action-button previous previous_button">Back</button>
            <button type="button" class="next action-button">Continue</button>  
        </fieldset>
        
          <fieldset>
            <h3>Create Security Questions</h3>
            <h6>Please update your account with security questions</h6> 
            
             
            <button type="button" class="action-button previous previous_button">Back</button> 
            <button type="submit" class="action-button">Finish</button> 
          </fieldset>  
    </form>  
</section>


  <!-- End Multi step form -->   
  <script src="form/form.js"></script>
  <script
  src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
  crossorigin="anonymous"
></script>
  <script>
    function hanleSubmit(e){
        e.prevenDefault()
    }
    $(document).ready(function() {
        $('#nombre_diplomes').change(function() {
            var numDiplomas = parseInt($(this).val());
            var additionalDiplomaFields = $('#additional_diploma_fields');
            additionalDiplomaFields.html(''); // Clear existing fields
            
            for (var i = 0; i < numDiplomas; i++) {
                var inputName = $('<input>').attr({
                    type: 'text',
                    class: 'form-control',
                    placeholder: 'Nom du Diplôme',
                    name:`nom_ds${i+1}`
                });
                additionalDiplomaFields.append(inputName);
                
                var inputFile = $('<input>').attr({
                    type: 'file',
                    class: 'form-control-file',
                    accept: '.pdf',
                    name:`diplome_supp${i+1}`

                });
                additionalDiplomaFields.append(inputFile);
            }
        });
    });
</script>


  
@endsection