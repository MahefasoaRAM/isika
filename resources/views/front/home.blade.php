@extends('app')

@section('title', 'Isika Miara - manorina')

@section('content')

    <div class='home_slide d-flex justify-content-center align-items-center' style="background-image: url('{{asset('img/icons/home_slide.jpg')}}'); background-size:cover; background-repeat:no-repeat; background-position:50% 25%;">
        <div style="opacity:0.9">
            <h1>
                <a class="text-center btn bg-info rounded-pill font-weight-bold display-1">Bienvenue sur la <br> plateforme de participation <br> citoyenne</a>
            </h1>
        </div>
    </div>

    <div class="row w-75 m-auto">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src=" {{asset('img/icons/home_slide.jpg')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src=" {{asset('img/icons/home_slide.jpg')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src=" {{asset('img/icons/home_slide.jpg')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img class="card-img-top" src=" {{asset('img/icons/home_slide.jpg')}} " alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>

@endsection
