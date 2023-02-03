@extends('app')

@section('title', 'Consultation')

@section('content')

<div class="w-75 m-auto">
    <div class="row mt-5">
        <div class="col-lg-2 col-md-2 col-sm-12">
            @include('layouts.front.filtersuggest')
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src=" {{asset('img/icons/img.jpeg')}} " alt="Card image cap">
                        <div class="card-body">
                            <h5><a href=" {{url('/detail')}} " class="nav-link">Card title</a></h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src=" {{asset('img/icons/home_slide.jpg')}} " alt="Card image cap">
                        <div class="card-body">
                            <h5 ><a href=" {{url('/detail')}} " class="nav-link">Card title</a></h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src=" {{asset('img/icons/img.jpeg')}} " alt="Card image cap">
                        <div class="card-body">
                            <h5 ><a href=" {{url('/detail')}} " class="nav-link">Card title</a></h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src=" {{asset('img/icons/home_slide.jpg')}} " alt="Card image cap">
                        <div class="card-body">
                            <h5 ><a href=" {{url('/detail')}} " class="nav-link">Card title</a></h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src=" {{asset('img/icons/img.jpeg')}} " alt="Card image cap">
                        <div class="card-body">
                            <h5 ><a href=" {{url('/detail')}} " class="nav-link">Card title</a></h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src=" {{asset('img/icons/home_slide.jpg')}} " alt="Card image cap">
                        <div class="card-body">
                            <h5 ><a href=" {{url('/detail')}} " class="nav-link">Card title</a></h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
