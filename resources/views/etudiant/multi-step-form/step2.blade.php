@extends("layouts.compte-layout")

@section("css/js links")
<link rel="stylesheet" href="{{ asset('form/form.css') }}">

@endsection
@section("content")
<section class="multi_step_form">  
    <form id="msform" action="{{ route("postStep2") }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="title">
            <h2>Pré-inscription</h2>
            <p>Remplissez le formulaire pour passer le concours écrit</p>
        </div>
        <ul id="progressbar">
            <li class="active">Information</li>  
            <li class="active">Type Diplome</li> 
            <li>Scan</li>
            <li>Finish</li>
        </ul>

        <fieldset>
            <h3>Diploma Information</h3>
            <h6>Please provide your diploma details</h6> 
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <select id="diplome" class="form-control" name="nom" value={{ isset($candidatureExist)? $candidatureExist->diplome->nom : old("nom")  }}>
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
            <a href="{{ route('step1') }}" type="button" class="action-button  previous_button">Back</a>
            <button type="submit" class=" action-button">Continue</button>  
        </fieldset>
    </form>
</section>
<script src="{{ asset('form/form.js') }}"></script>

@endsection

