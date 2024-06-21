@extends("layouts.compte-layout")

@section("css/js links")
<link rel="stylesheet" href="{{ asset('form/form.css') }}">

@endsection
@section("content")
<section class="multi_step_form">  
    <form id="msform" action="{{ route("postStep3") }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="title">
            <h2>Pré-inscription</h2>
            <p>Remplissez le formulaire pour passer le concours écrit</p>
        </div>
        <ul id="progressbar">
            <li class="active">Information</li>  
            <li class="active">Type Diplome</li> 
            <li class="active">Scan</li>
            <li>Finish</li>
        </ul>

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
            
            <a href="{{ route('step2') }}" type="button" class="action-button  previous_button">Back</a>
            <button type="submit" class=" action-button">Continue</button>  
        </fieldset>
    </form>
</section>
<script src="{{ asset('form/form.js') }}"></script>
<script>
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
