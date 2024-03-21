@extends("layouts.compte-layout")



@section("content")
<h3>remplir <a href="/inscription">formulaire</a> pour suivi condidature ici</h3>
<a href="#">installer fichier d'inscription</a>
<h3>Etat de candidature: {{ $etat[0]->etat }}</h3>

@endsection
