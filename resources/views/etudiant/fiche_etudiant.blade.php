@extends("layouts.compte-layout")



@section("content")
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var successMessage = "{{ session('success') }}";
        if (successMessage.trim() !== "") {
            alert(successMessage);
        }
    });
</script>


<h3>remplir <a href="/inscription">formulaire</a> pour suivi condidature ici</h3>
        <iframe src="{{ route('fiche') }}" style="width: 100%; height: 500px;"></iframe>


<a href="/pdf" target="_blank">installer fichier d'inscription</a>
<h3>Etat de candidature: </h3>

@endsection
