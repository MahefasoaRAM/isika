<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img src="{{ asset('img/icons/logo.png') }}" alt="Association Isika" title="Association Isika" width="57.5px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a href=" {{url('/')}} " class="nav-link">Acceuil</a>
            </li>
            <li class="nav-item dropdown ml-5">
                <a class="nav-link dropdown-toggle btn" id="projets" data-toggle="dropdown" aria-expanded="false">Projets</a>
                <ul class="dropdown-menu" aria-labelledby="projets">
                    <li><a href="#" class="dropdown-item">liste de tous les projets</a></li>
                </ul>
            </li>
            <li class="nav-item ml-5">
                <a href=" {{url('/event')}} " class="nav-link">Événements</a>
            </li>
            <li class="nav-item ml-5">
                <a href=" {{url('/about')}} " class="nav-link">À propos</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            @if(Auth::user())
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="menu1" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa-regular fa-user fa-sm"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="menu1" id="drop">
                        <li class="dropdown-item">{{Auth::user()->prenom}}</li>
                        <li>
                            <form action="#" method="post">
                                @csrf
                                <button class="dropdown-item btn" type="submit">Se déconnecter</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href=" {{url('/login')}} " class="nav-link">
                        Se connecter
                    </a>
                </li>
            @endif
        </ul>
    </div>

</nav>
