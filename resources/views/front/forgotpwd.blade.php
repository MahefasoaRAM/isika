@extends('app')

@section('title', 'Mot de passe oublié')

@section('content')

    <div class='container col-md-4 mt-5'>
        <form>
            <div class='form-group mb-3'>
            <label class='mb-3'>Veuillez entrer votre adresse e-mail. Nous vous enverrons des instructions pour vous aider à réinitialiser votre mot de passe.</label>
            <input type="text" name="email" class="form-control"/>
            </div>
            <div class='form-group text-center'>
            <button class="text-capitalize btn btn-isikar"><i class="fas fa-paper-plane"></i> envoyer</button>
            </div>
        </form>
    </div>

@endsection
