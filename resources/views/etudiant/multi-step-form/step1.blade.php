@extends("layouts.compte-layout")

@section("css/js links")
<link rel="stylesheet" href="{{ asset('form/form.css') }}">

@endsection
@section("content")
<section class="multi_step_form animate__animated animate__backInRight">  
    <form id="msform" action="{{ route("postStep1") }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="title">
            <h2>Pré-inscription</h2>
            <p>Remplissez le formulaire pour passer le concours écrit</p>
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
                    <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" value="{{ isset($candidatureExist) ? $candidatureExist->nom : old('nom') }}"> 
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" value="{{ isset($candidatureExist) ? $candidatureExist->prenom : old('prenom') }}">
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <select id="sexe" name="sexe" class="form-control">
                        <option value="homme" {{ isset($candidatureExist) && $candidatureExist->sexe == 'homme' ? 'selected' : '' }}>Homme</option>
                        <option value="femme" {{ isset($candidatureExist) && $candidatureExist->sexe == 'femme' ? 'selected' : '' }}>Femme</option>
                    </select>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" name="cin" id="cin" class="form-control" placeholder="CIN" value="{{ isset($candidatureExist) ? $candidatureExist->cin : old('cin') }}">
                    <input type="file" name="scan_cin" id="cin_pdf" class="form-control-file">
                    <small class="form-text text-muted">Upload CIN PDF</small>
                </div> 
                <div class="form-group col-md-6"> 
                    <input type="file" name="photo_personnel" id="photo_personnel" class="form-control-file">
                    <small class="form-text text-muted">Upload Photo</small>
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="text" name="cne_cme" id="cne" class="form-control" placeholder="CNE" value="{{ isset($candidatureExist) ? $candidatureExist->cne_cme : old('cne_cme') }}"> 
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Adresse" value="{{ isset($candidatureExist) ? $candidatureExist->adresse : old('adresse') }}">
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="date" name="date_naissance" id="date_naissance" class="form-control" placeholder="Date de naissance (YYYY-MM-DD)" value="{{ isset($candidatureExist) ? $candidatureExist->date_naissance : old('date_naissance') }}"> 
                    <small class="form-text text-muted">Date de naissance</small>
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="text" name="nationalite" id="nationalite" class="form-control" placeholder="Nationalité" value="{{ isset($candidatureExist) ? $candidatureExist->nationalite : old('nationalite') }}">
                </div> 
            </div>
            <div class="form-row"> 
                <div class="form-group col-md-6">  
                    <input type="text" name="ville_natale" id="ville_natale" class="form-control" placeholder="Ville Natale" value="{{ isset($candidatureExist) ? $candidatureExist->ville_natale : old('ville_natale') }}"> 
                </div>  
                <div class="form-group col-md-6"> 
                    <input type="tel" name="num_tel" id="numero_telephone" class="form-control" placeholder="Numéro Téléphone" value="{{ isset($candidatureExist) ? $candidatureExist->num_tel : old('num_tel') }}">
                </div> 
            </div>
            <div class="form-group"> 
                <input type="date" id="date_obtention_bac" name="date_obtention_bac" class="form-control" placeholder="Date d’obtention de bac (YYYY-MM-DD)">
                <small class="form-text text-muted">Date d’obtention de bac</small>
            </div>  
            
            <button type="submit" class="action-button">Continue</button>  
        </fieldset>
    </form>
</section>
<script src="{{ asset('form/form.js') }}"></script>

@endsection
