@extends('app')

@section('title', 'Connexion')

@section('content')

    <div class="container col-md-4 mt-5">
        <form>
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email</label>
                <input type="email" id="form2Example1" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Mot de passe</label>
                <input type="password" id="form2Example2" class="form-control" />
            </div>
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" />
                    <label class="form-check-label" for="form2Example31"> Se souvenir de moi</label>
                    </div>
                </div>
                <div class="col">
                    <a href=" {{url('/forgotpassword')}} " class="log">Mot de passe oublié ?</a>
                </div>
            </div>
            <div class='form-group text-center'>
                <button type="submit" class="btn btn-primary mb-4">Se connecter</button>
            </div>
            <div class="text-center">
                <p>Pas encore membre ? <a href=" {{url('/register')}} " class="log">S'inscrire</a></p>
            </div>
        </form>
    </div>

@endsection
