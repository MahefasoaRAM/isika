@extends('app')

@section('title', 'Inscription')

@section('content')

    <div class="container mt-5 col-md-4">
        <form>
            @csrf
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Nom</label>
                <input type="nom" id="form2Example1" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Prenom</label>
                <input type="prenom" id="form2Example2" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example3">Email</label>
                <input type="email" id="form2Example3" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example4">Mot de passe</label>
                <input type="password" id="form2Example4" class="form-control" />
            </div>
            <div class='form-group text-center'>
                <button type="submit" class="btn btn-isikar mb-4">S'inscrire</button>
            </div>
            <div class="text-center">
                <p>Déjà membre ? <a href=" {{url('/login')}} " class="log">Se connecter</a></p>
            </div>
        </form>
    </div>

@endsection
