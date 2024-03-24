@extends('layouts.layout')


@section('content')
<div class="container py-2">
    <div class="row justify-content-center">
        <div class="col-md-6 ">
            <div class="card  shadow-sm p-5 login  border-dark"> 
                <div class="card-body">
                    <h2 class="text-center mb-4 font-weight-bold">Vérifier l'adresse e-mail</h2>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                            </div>
                        @endif
                    
                        {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }}
                        {{ __('Si vous n\'avez pas reçu l\'e-mail') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('cliquez ici pour en demander un autre') }}</button>.
                        </form>
                    </div>
                    
            </div>
        </div>
    </div>
</div>
</div>

@endsection
