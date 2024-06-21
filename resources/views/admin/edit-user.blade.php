@extends("layouts.compte-layout")



@section("content")
    
<form method="POST" action="{{ route('updateUser', ['id' => $user->id]) }}">
    @csrf
    @method('PUT')

    <div class="mb-4"> 
        <label for="name" class="col-form-label text-md-end">Nom</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
    </div>

    <div class="mb-4"> 
        <label for="email" class="col-form-label text-md-end">Adresse Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
    </div>

    <div class="mb-4"> 
        <label for="role" class="col-form-label text-md-end">Rôle</label>
        <select id="role" name="role" class="form-control">
            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="candidat" {{ $user->role === 'candidat' ? 'selected' : '' }}>Candidat</option>
        </select>
    </div>

    <div class="mb-4"> 
        <label for="password" class="col-form-label text-md-end">Mot de passe</label>
        <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">
    </div>

    <div class="mb-4 d-grid gap-2 d-md-flex justify-content-md-center"> 
        <button type="submit" style="background-color:#FF8450;color:wheat;" class="px-5 py-2 fw-bold">Mettre à Jour</button>
    </div>

</form>
@endsection
