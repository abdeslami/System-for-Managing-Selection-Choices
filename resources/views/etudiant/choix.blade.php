@extends("layouts.compte-layout")


@section("content")
<div class=" container-fluid px-5 py-5">
@if (Session::has('success'))
<div class="alert alert-success"role="alert">
    <strong>{{Session::get('success')}}</strong>
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-warning"role="alert">
    <strong>{{Session::get('error')}}</strong>
</div>
@endif
<form action="{{route('choix-store')}}" method="POST">
    @csrf
<div class="form-outline mb-4 ">
    <label class="form-label" for="form3Example4cdg">Premier choix:</label>
    <select name="choix_1" class="form-control form-control-lg"  id="choix_1" onchange="updateSecondChoice()" >

        
        <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
        <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
        <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
        <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
        <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
        <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
        <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
        <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
        <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>



    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cdg">Deuxième choix:</label>
    <select name="choix_2"  id="choix_2" onchange="updateSecondChoice()" class="form-control form-control-lg" >

        
      <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
      <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
      <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
      <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
      <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
      <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
      <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
      <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
      <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>


    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cdg">Troisième choix:</label>
    <select name="choix_3"  id="choix_3" onchange="updateSecondChoice()" class="form-control form-control-lg" >

        
      <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
      <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
      <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
      <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
      <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
      <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
      <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
      <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
      <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>


    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cdg">Quatrieme choix:</label>
    <select name="choix_4"  id="choix_4" onchange="updateSecondChoice()" class="form-control form-control-lg" >

        
      <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
      <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
      <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
      <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
      <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
      <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
      <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
      <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
      <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>


    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cdg">Cinquième choix:</label>
    <select name="choix_5"  id="choix_5" onchange="updateSecondChoice()" class="form-control form-control-lg" >

        
      <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
      <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
      <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
      <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
      <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
      <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
      <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
      <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
      <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>


    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cdg">Sixième choix:</label>
    <select name="choix_6"  id="choix_6" onchange="updateSecondChoice()" class="form-control form-control-lg" >

        
      <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
      <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
      <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
      <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
      <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
      <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
      <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
      <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
      <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>


    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cdg">Septième choix:</label>
    <select name="choix_7"  id="choix_7" onchange="updateSecondChoice()" class="form-control form-control-lg" >

        
      <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
      <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
      <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
      <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
      <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
      <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
      <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
      <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
      <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>


    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cdg">Huitième choix:</label>
    <select name="choix_8"  id="choix_8" onchange="updateSecondChoice()" class="form-control form-control-lg" >

        
      <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
      <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
      <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
      <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
      <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
      <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
      <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
      <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
      <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>


    </select>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4cdg">Neuvième choix:</label>
    <select name="choix_9"  id="choix_9" onchange="updateSecondChoice()" class="form-control form-control-lg" >

        
      <option value="IDSCC">Cycle Ingénieur - Ingénierie Data Sciences et Cloud Computing</option>
      <option value="ITIRC">Cycle Ingénieur - Ingénierie des Technologies de l'information et Réseaux de Communication</option>
      <option value="SIC">Cycle Ingénieur - Sécurité Informatique et Cyber Sécurité</option>
      <option value="GCIV">Cycle Ingénieur - Génie Civil</option>
      <option value="GELC">Cycle Ingénieur - Génie Electrique</option>
      <option value="GIND">Cycle Ingénieur - Génie Industriel</option>
      <option value="GINF">Cycle Ingénieur - Génie Informatique</option>
      <option value="SEIR">Cycle Ingénieur - Génie des Systèmes Electronique, Informatique et Réseaux</option>
      <option value="MGSI">Cycle Ingénieur - Management et Gouvernance des Systèmes d'informations</option>


    </select>
  </div>
  <div class="form-outline mb-4">
    <input type="submit" style="background-color:#FF8450;color:wheat;" class="form-control " value="Envoyoer">
  </div>
</form>
</div>
 @endsection
{{--<script>
  var selectedValues = [];
  var previousValue = "";

  function updateSecondChoice() {
    var selects = ['choix_2', 'choix_3', 'choix_4', 'choix_5', 'choix_6', 'choix_7', 'choix_8', 'choix_9'];
    var hasDuplicate = false;

    for (var i = 0; i < selects.length; i++) {
      var currentSelect = document.getElementById(selects[i]);
      var currentValue = currentSelect.value;
      if (selectedValues.includes(currentValue)) {
        currentSelect.value = '';
        hasDuplicate = true;
      } else {
        // Clear previously selected values from the list
        selectedValues = [];

        // Add current value to the list if it's not empty
        if (currentValue !== "") {
          selectedValues.push(currentValue);
        }

        // Enable all options initially
        for (var j = 0; j < currentSelect.options.length; j++) {
          currentSelect.options[j].disabled = false;
        }

        // Disable options that match selected values
        for (var k = 0; k < selectedValues.length; k++) {
          var selectedValue = selectedValues[k];
          for (var j = 0; j < currentSelect.options.length; j++) {
            if (currentSelect.options[j].value === selectedValue) {
              currentSelect.options[j].disabled = true;
            }
          }
        }
      }

      // Update the previous value for the next iteration
      previousValue = currentValue;
    }

    // If there was a duplicate selection, empty all select boxes
    if (hasDuplicate) {
      for (var i = 0; i < selects.length; i++) {
        document.getElementById(selects[i]).value = '';
      }
    }
  }
</script>  --}}
