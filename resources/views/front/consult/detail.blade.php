@extends('app')

@section('title', 'Consultation')

@section('content')

<div class="w-75 m-auto">
    <div class="row mt-5 mb-3">
        <div class="col-md-6">
            <h3>Card title</h3>
            <h3>Région</h3>
            <h3>Commune</h3>
            <h3>Quartier</h3>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="col-md-6">
            <img class="card-img-top" src=" {{asset('img/icons/img.jpeg')}} " alt="Card image cap">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <h4 class="text-center">Pour</h4>
            <form action="" method="post" class="mb-3">
                <input type="text" class="form-control mb-2" name="pour" placeholder="Votre avis">
                <button type="submit" class="btn btn-isikar">Envoyer</button>
            </form>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="col-md-6">
            <h4 class="text-center">Contre</h4>
            <form action="" method="post" class="mb-3">
                <input type="text" class="form-control mb-2" name="pour" placeholder="Votre avis">
                <button type="submit" class="btn btn-isikar">Envoyer</button>
            </form>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
    </div>
</div>

@endsection
