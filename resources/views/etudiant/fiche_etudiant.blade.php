@extends("layouts.compte-layout")



@section("content")
<h3>remplir <a href="/inscription">formulaire</a> pour suivi condidature ici</h3>
@isset($candidat)
        <iframe src="{{ route('fiche') }}" style="width: 100%; height: 500px;"></iframe>

@endisset


<a href="/pdf" target="_blank">installer fichier d'inscription</a>
<h3>Etat de candidature: </h3>

@endsection
