<nav class="navbar navbar-expand-lg navbar-light bg-isikag">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/icons/logo.png') }}" alt="Association Isika" title="Association Isika" width="57.5px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a href=" {{url('/')}} " class="nav-link">Accueil</a>
            </li>
            <li class="nav-item dropdown ml-5">
                <a class="nav-link dropdown-toggle btn" id="projets" data-toggle="dropdown" aria-expanded="false">Projets</a>
                <ul class="dropdown-menu" aria-labelledby="projets">
                    <li><a href=" {{url('/project')}} " class="dropdown-item">liste de tous les projets</a></li>
                </ul>
            </li>
            <li class="nav-item ml-5">
                <a href=" {{url('/suggest')}} " class="nav-link">Propositions</a>
            </li>
            <li class="nav-item ml-5">
                <a href=" {{url('/event')}} " class="nav-link">Événements</a>
            </li>
            <li class="nav-item ml-5">
                <a href=" {{url('/consulting')}} " class="nav-link">Consultation</a>
            </li>
            <li class="nav-item ml-5">
                <a href=" {{url('/about')}} " class="nav-link">À propos</a>
            </li>
        </ul>
    </div>
</nav>
