@extends("layouts.compte-layout")

@section("css/js links")
    <link rel="stylesheet" href="{{ asset('page_admin_css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dayjs/1.10.7/dayjs.min.js"></script>
@endsection

@section("content")
@if (Session::has('success'))
    <div
        class="alert alert-success"
        role="alert"
    >
        <strong>{{Session::get('success')}}</strong> 
    </div>
    
@endif
<div class="d-flex justify-content-evenly  ">
    <form id="e" method="POST" action="{{ route('ouvrireinscription') }}" onsubmit="return confirm('Voulez-vous vraiment ouvrir l\'inscription?')">
        @csrf
        <button type="submit" class="btn font-weight-bold" style="background-color:#94eb30;color:wheat;width:auto;height:auto;" >ouvrir l'inscription</button>
    </form>
    
    <form method="POST" action="{{route('fermeinscription')}}" onsubmit="return confirm('Voulez-vous vraiment ferme l\'inscription?')">
        @csrf
   
        <button type="submit" class="btn font-weight-bold" style="background-color:#d33129;color:wheat;width:auto;height:auto;" >ferme l'inscription</button>
    </form>
    <form method="POST" action="{{route('ouvrirechoix')}}" onsubmit="return confirm('Voulez-vous vraiment ouvrir la selection choix?')">
        @csrf
   
        <button type="submit" class="btn font-weight-bold" style="background-color:#94eb30;color:wheat;width:auto;height:auto;"  >ouvrir choix</button>
    </form>
    <form method="POST" action="{{route('fermechoix')}}" onsubmit="return confirm('Voulez-vous vraiment ferme la selection choix?')">
        @csrf
   
        <button type="submit" class="btn font-weight-bold" style="background-color:#d33129;color:wheat;width:auto;height:auto;"   >ferme choix</button>
    </form>
    <form method="POST" action="{{route('not_admin')}}" onsubmit="return confirm('Voulez-vous vraiment Supprimmer candidat no admin?')">
        @csrf
   
        <button type="submit" class="btn font-weight-bold" style="background-color:#f40909;color:wheat;width:auto;height:auto;"  >Suprimmer candidat no admin</button>
    </form>
    <form method="POST" action="{{route('delete_all_candidature')}}" onsubmit="return confirm('Voulez-vous vraiment Vide la base de donneé Candidature?')">
        @csrf
    
        <button type="submit" class="btn font-weight-bold" style="background-color:#f35410;color:wheat;width:auto;height:auto;" >Vide la base de donneé</button>
    </form>
    
</div>

<section class="container row">
   
    <div class="col-6">
        <h3 class="pt-4 pb-2">Date d'inscription de candidature</h3>
        <form method="POST" action="{{route('storeDate')}}">
            @csrf
            <div class="row form-group">
                <label for="date_debut_inscript" class="col-sm-4 col-form-label">Date de début d'inscription</label>
                <div class="col-sm-8">
                    <div class="input-group date" id="date_debut_inscript">
                        <input type="text" class="form-control" name="date_debut_inscript">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <label for="date_fin_inscript" class="col-sm-4 col-form-label">Date de fin d'inscription</label>
                <div class="col-sm-8">
                    <div class="input-group date" id="datepicker_fin_inscript">
                        <input type="text" class="form-control" name="date_fin_inscript">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <button type="submit" style="background-color:#FF8450;color:wheat;" class="px-5 py-2 fw-bold">Ajouter Date</button>
        </form>
    </div>
    <div class="col-6">
        <h3 class="pt-4 pb-2">Date de Choix de candidature</h3>
        <form method="POST" action="{{route('storeDate')}}">
            @csrf
            <div class="row form-group">
                <label for="date_debut_choix" class="col-sm-4 col-form-label">Date de début de <br>choix</label>
                <div class="col-sm-8">
                    <div class="input-group date" id="datepicker_debut_choix">
                        <input type="text" class="form-control" name="date_debut_choix">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <label for="date_fin_choix" class="col-sm-4 col-form-label">Date de fin de <br> choix</label>
                <div class="col-sm-8">
                    <div class="input-group date" id="datepicker_fin_choix">
                        <input type="text" class="form-control" name="date_fin_choix">
                        <span class="input-group-append">
                            <span class="input-group-text bg-white">
                                <i class="fa fa-calendar"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
            <button type="submit" style="background-color:#FF8450;color:wheat;" class="px-5 py-2 fw-bold">Ajouter Date</button>
        </form>
    </div>
   
        <div  class="col-5 mb-5 mt-5">
            <h3 class="text-center mb-4">Calendrier des dates Inscription</h3>
       
                    <table class="table table-bordered table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Lundi</th>
                                <th>Mardi</th>
                                <th>Mercredi</th>
                                <th>Jeudi</th>
                                <th>Vendredi</th>
                                <th>Samedi</th>
                                <th>Dimanche</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body-inscript">
                        </tbody>
                    </table>
        </div>
        <div class="col-2 mb-5 mt-5">

        </div>
        <div class="col-5 mb-5 mt-5">
                <h3 class="text-center mb-4">Calendrier des dates Choix</h3>
              
                        <table class="table table-bordered table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>Lundi</th>
                                    <th>Mardi</th>
                                    <th>Mercredi</th>
                                    <th>Jeudi</th>
                                    <th>Vendredi</th>
                                    <th>Samedi</th>
                                    <th>Dimanche</th>
                                </tr>
                            </thead>
                            <tbody id="calendar-body-choix">
                                <!-- Calendar dates will be populated here -->
                            </tbody>
                        </table>
        </div>
    
</div>


</section>

<script type="text/javascript">
    $(function() {
        $('#date_debut_inscript').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
        $('#datepicker_fin_inscript').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
        $('#datepicker_debut_choix').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
        $('#datepicker_fin_choix').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });

    // Using dayjs to get current date
    const currentDate = dayjs();

    console.log("Current Date:", currentDate.format('YYYY-MM-DD HH:mm:ss')); // Example format

</script>


    <script type="text/javascript">
        let startDateInscript = '{{$event->date_debut_inscript ?? ''}}';
        let endDateInscript = '{{$event->date_fin_inscript ?? ''}}';
        let startDateChoix = '{{$event->date_debut_choix ?? ''}}';
        let endDateChoix = '{{$event->date_fin_choix ?? ''}}';
    
        function displayDates() {
            let calendarBodyInscript = $('#calendar-body-inscript');
            let calendarBodyChoix = $('#calendar-body-choix');
            
            calendarBodyInscript.empty();
            calendarBodyChoix.empty();
    
            let currentDateInscript = new Date(startDateInscript);
            let currentDateChoix = new Date(startDateChoix);
            
            currentDateInscript.setDate(currentDateInscript.getDate() - currentDateInscript.getDay() + 1);
            currentDateChoix.setDate(currentDateChoix.getDate() - currentDateChoix.getDay() + 1);
    
            let endInscript = new Date(endDateInscript);
            let endChoix = new Date(endDateChoix);
    
            while (currentDateInscript <= endInscript || currentDateChoix <= endChoix) {
                if (currentDateInscript.getDay() === 1) {
                    calendarBodyInscript.append('<tr>');
                }
                if (currentDateChoix.getDay() === 1) {
                    calendarBodyChoix.append('<tr>');
                }
    
                let cellClassInscript = '';
                let cellClassChoix = '';
    
                if (currentDateInscript >= new Date(startDateInscript) && currentDateInscript <= endInscript) {
                    cellClassInscript = 'bg-success text-white';
                }
                if (currentDateChoix >= new Date(startDateChoix) && currentDateChoix <= endChoix) {
                    cellClassChoix = 'bg-primary text-white';
                }
    
                calendarBodyInscript.append(`<td class="${cellClassInscript}">${currentDateInscript.getDate()}</td>`);
                calendarBodyChoix.append(`<td class="${cellClassChoix}">${currentDateChoix.getDate()}</td>`);
    
                if (currentDateInscript.getDay() === 0) {
                    calendarBodyInscript.append('</tr>');
                }
                if (currentDateChoix.getDay() === 0) {
                    calendarBodyChoix.append('</tr>');
                }
    
                currentDateInscript.setDate(currentDateInscript.getDate() + 1);
                currentDateChoix.setDate(currentDateChoix.getDate() + 1);
            }
    
            if (currentDateInscript.getDay() !== 1) {
                calendarBodyInscript.append('</tr>');
            }
            if (currentDateChoix.getDay() !== 1) {
                calendarBodyChoix.append('</tr>');
            }
        }
    
        displayDates();
    </script>
    @endsection