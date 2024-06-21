@extends("layouts.compte-layout")

@section("css/js links")
<link rel="stylesheet" href="{{ asset('form/form.css') }}">

@endsection
@section("content")
<section class="multi_step_form animate__animated animate__backInRight">  
    <form id="msform" action="{{ route("postStep4") }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="title">
            <h2>Pré-inscription</h2>
            <p>Remplissez le formulaire pour passer le concours écrit</p>
        </div>
        <ul id="progressbar">
            <li class="active">Information</li>  
            <li class="active">Type Diplome</li> 
            <li class="active">Scan</li>
            <li class="active">Finish</li>
        </ul>

        <fieldset>
            <h3>Create Security Questions</h3>
            <h6>Please update your account with security questions</h6> 
            
             
            <a href="{{ route('step3') }}" type="button" class="action-button  previous_button">Back</a>
            <button type="submit" class="action-button">Finish</button> 
          </fieldset> 
    </form>
</section>
<script src="{{ asset('form/form.js') }}"></script>

@endsection


@section("content")
 
    
@endsection