   <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top bgNavbar w-100 w-md-75 container mt-md-4 badge">
  <!-- Container wrapper -->
  <div class="container-fluid">

    <!-- Navbar brand -->
    <a class="navbar-brand  monoton-font" href="{{route('homepage')}}">YOeS</a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Link -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('add.index')}}">Annunci</a>
        </li>

        <!-- Dropdown -->
      
          <!-- Dropdown menu -->    
      </ul> 
  

      <!-- Search -->
      <div class="input-group d-flex justify-content-center">
        <form action="{{route('adds.search')}}" method="GET" class="w-auto" id="search">
          <input name="searched" type="search" class="bg-white form-control border-0 searchCustom" placeholder="Ricerca" aria-label="Search">
        </form>
        <button class="btn bg-white btnCustom" type="submit" onclick="event.preventDefault();document.querySelector('#search').submit();" >
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>

      </div>

      
       @guest
      <li class="nav-item list-unstyled">
        <a href="{{route('become.revisor')}}" class="text-decoration-none text-dark">Diventa Revisore</a>
      </li>
      @else 
        @if(!Auth::user()->is_revisor)
        <li class="nav-item">
          <a href="{{route('become.revisor')}}" class="text-decoration-none text-dark nav-link">Diventa Revisore</a>
        </li>
        @endif
      @endguest 
    
    </div>
   
   
   
    <li class="nav-item dropdown list-unstyled ms-4">
      <a class="nav-link dropdown-toggle color-prim" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-toggle="tooltip" data-placement="bottom" title="Area personale">
        @auth  <i class="fa-solid fa-user-check text-primary fa-2x"> </i> {{Auth::user()->username}} @else <i class="fa-solid fa-user text-dark fa-2x "></i> @endauth
      </a>
      <!-- Dropdown menu -->
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
       
            @auth
            @if(Auth::user()->is_revisor)
            
            <li class="text-center my-2 nav-item text-decoration-none list-unstyled">
              <a href="{{route('revisor.index')}}" aria-current="page" class="position-relative text-decoration-none text-dark">Revisione Annunci
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Add::toBeRevisionedCount()}}
                  <span class="visually-hidden">Messaggi non letti</span>
                </span>
              </a>
            </li>
            @endif
            @endauth
        @auth
        <li>
          <a class="dropdown-item text-decoration-none text-dark fw-bold " href="{{route('add.create')}}">Inserisci Annuncio</a>
        </li>
        <li>
          <hr class="dropdown-divider" />
        </li>
        <li class="text-center mb-2">
          <a class="text-decoration-none text-danger  w-75" onclick="event.preventDefault();document.querySelector('#logout').submit();">Esci</a>
          <form class="d-none" action="{{route('logout')}}" method="POST" id="logout">@csrf</form>
        </li>
        @endauth
        @guest
        <li><a class="dropdown-item fw-bold text-dark" href="{{route('register')}}">Registrati</a></li>
        <li><a class="dropdown-item fw-bold text-dark" href="{{route('login')}}">Accedi</a></li>
        @endguest
        
      </ul>
    </li>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
      

