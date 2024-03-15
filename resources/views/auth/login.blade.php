@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-5"> <!-- Increased padding -->
                <div class="card-body">
                    <h2 class="text-center mb-4 font-weight-bold">Se connecter</h2> <!-- Centered and styled login text -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4"> 
                            <label for="email" class="col-form-label text-md-end">{{ __('Adresse Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="col-form-label text-md-end">{{ __('Mot de passe') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-4 form-check"> <!-- Increased margin bottom -->
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Se souvenir de moi') }}</label>
                        </div>

                        <div class="mb-4 d-grid gap-2 d-md-flex justify-content-md-center"> <!-- Increased margin bottom -->
                            <button type="submit" class="btn btn-primary px-5 py-2 fw-bold">{{ __('Se connecter') }}</button> <!-- Changed button text to French -->
                        </div>
                        <div class="text-center"> <!-- Added a container for the "Mot de passe oublié?" link -->
                            @if (Route::has('password.request'))
                                <a class="btn btn-link mb-4" href="{{ route('password.request') }}">{{ __('Mot de passe oublié?') }}</a> <!-- Changed link text to French -->
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
