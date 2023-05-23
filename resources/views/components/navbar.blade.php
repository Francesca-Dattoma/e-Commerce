<nav class="navbar navbar-expand-lg bg-transparent ">
    <div class="container-fluid">
      <a src="./public/media/Logo_per_favicon-removebg-preview.ico"></a>
      <a class="navbar-brand" href="{{route('homepage')}}">YOeS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('add.index')}}">Categoria esempio</a>
          </li>
          <li class="nav-item dropdown">
            @auth
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->username}}
            </a>
            <ul class="dropdown-menu">
              <li class="text-center my-2"><a href="{{route('add.create')}}" class="btn btn-dark w-50">Inserisci Annuncio</a></li>
              {{-- <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li> --}}
              {{-- <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li> --}}
              <li class="text-center mb-2"><a class="btn btn-danger w-50" onclick="event.preventDefault();document.querySelector('#logout').submit();">Esci</a>
                <form class="d-none" action="{{route('logout')}}" method="POST" id="logout">@csrf</form>
              </li>
            @else
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ciao
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
            </ul>
            @endauth
          </li>
        </ul>
      </div>
    </div>
  </nav>