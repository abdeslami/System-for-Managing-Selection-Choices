@extends("layouts.compte-layout")



@section("content")
@if (Session::has('success'))
<div class="alert alert-success"role="alert">
    <strong>{{Session::get('success')}}</strong>
</div>
@endif
<h3>remplir <a href="/inscription">formulaire</a> pour suivi condidature ici</h3>
        <iframe src="{{ route('fiche') }}" style="width: 100%; height: 500px;"></iframe>


<a href="/pdf" target="_blank">installer fichier d'inscription</a>
<h3>Etat de candidature: </h3>

@endsection
