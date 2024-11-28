@extends('layouts.app')

@section('title','Login' )


@section('content')


@if ($errors->any())
        <div>
            <strong>Erreur :</strong> {{ $errors->first() }}
        </div>
    @endif
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="card" style="width: 20rem;">
            <div class="card-header text-center">
                <h4>Connexion</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="/login">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email :</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
