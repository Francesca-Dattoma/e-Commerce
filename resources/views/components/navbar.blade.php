{{-- <nav class="navbar navbar-expand-lg  navCustom ">
    <div class="container-fluid">
      <a src="./public/media/Logo_per_favicon-removebg-preview.ico"></a>
      <a class="navbar-brand" href="{{route('homepage')}}">
        <img src="/media/logo_img.png" alt="logo yoes" class="" height="90">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-dark fw-bold" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark fw-bold" href="{{route('add.index')}}">Annunci</a>
          </li>
          @guest
          <li class="nav-item">
            <a href="{{route('become.revisor')}}" class="btn btn-dark text-white">Diventa Revisore</a>
          </li>
          @else 
            @if(!Auth::user()->is_revisor)
            <li class="nav-item">
              <a href="{{route('become.revisor')}}" class="btn btn-dark text-white">Diventa Revisore</a>
            </li>
            @endif
          @endguest
          
          <li class="nav-item dropdown">
            @auth
              <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->username}}
              </a>
            <ul class="dropdown-menu">
              <li class="text-center my-2"><a href="{{route('add.create')}}" class="btn btn-dark w-75">Inserisci Annuncio</a></li>
              
              
              @if(Auth::user()->is_revisor)
              
                <li class="text-center my-2">
                  <a href="{{route('revisor.index')}}" aria-current="page" class="btn btn-dark w-75 position-relative">Revisione Annunci
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Add::toBeRevisionedCount()}}
                      <span class="visually-hidden">Messaggi non letti</span>
                    </span>
                  </a>
                </li>
              @endif
              
              <li class="text-center mb-2">
                <a class="btn btn-danger w-75" onclick="event.preventDefault();document.querySelector('#logout').submit();">Esci</a>
                <form class="d-none" action="{{route('logout')}}" method="POST" id="logout">@csrf</form>
              </li>
              
              @else
              <a class="nav-link dropdown-toggle fw-bold text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Registrati/Login
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item fw-bold text-dark" href="{{route('register')}}">Registrati</a></li>
                <li><a class="dropdown-item fw-bold text-dark" href="{{route('login')}}">Accedi</a></li>
              </ul>
            </ul>
            @endauth
          </li>
        </ul>
      </div>
        
        
      </div>
    </nav> --}}

    <div class="navbar">
      <div class="d-flex justify-content-center mt-3">
        <a class="navbar-brand" href="{{route('homepage')}}">
          <img src="/media/logo_img.png" alt="logo yoes" class="" height="70">
        </a>
        <form action="{{route('adds.search')}}" method="GET" class="d-flex">
          <input name="searched" class="form-control me-2" type="search" placeholder="Ricerca" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
        <nav class="navbar navbar-expand-md  navCustom ">
          <div class="container">
    
    <div class="d-flex justify-content-end">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto">
        <li class="nav-item">
          <a class="nav-link text-dark fw-bold" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fw-bold" href="{{route('add.index')}}">Annunci</a>
        </li>
        @guest
        <li class="nav-item">
          <a href="{{route('become.revisor')}}" class="btn btn-dark text-white">Diventa Revisore</a>
        </li>
        @else 
          @if(!Auth::user()->is_revisor)
          <li class="nav-item">
            <a href="{{route('become.revisor')}}" class="btn btn-dark text-white">Diventa Revisore</a>
          </li>
          @endif
        @endguest
        
        <li class="nav-item dropdown">
          @auth
            <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->username}}
            </a>
          <ul class="dropdown-menu">
            <li class="text-center my-2"><a href="{{route('add.create')}}" class="btn btn-dark w-75">Inserisci Annuncio</a></li>
            
            
            @if(Auth::user()->is_revisor)
            
              <li class="text-center my-2">
                <a href="{{route('revisor.index')}}" aria-current="page" class="btn btn-dark w-75 position-relative">Revisione Annunci
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Add::toBeRevisionedCount()}}
                    <span class="visually-hidden">Messaggi non letti</span>
                  </span>
                </a>
              </li>
            @endif
            
            <li class="text-center mb-2">
              <a class="btn btn-danger w-75" onclick="event.preventDefault();document.querySelector('#logout').submit();">Esci</a>
              <form class="d-none" action="{{route('logout')}}" method="POST" id="logout">@csrf</form>
            </li>
            
            @else
            <a class="nav-link dropdown-toggle fw-bold text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Registrati/Login
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fw-bold text-dark" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item fw-bold text-dark" href="{{route('login')}}">Accedi</a></li>
            </ul>
          </ul>
          @endauth
        </li>
      </ul>
      
    </div>
      
      
    </div>
  </nav>
    </div>
      

