<footer class="bg-footer text-white ">
  
  <div  class="d-flex justify-content-center tornaSu ">
      <a href="#"  class="w-100 text-center bg-transparent pt-3">
        <i class="fa-solid fa-chevron-up fa-beat fa-2x text-white"></i>
      </a>
  </div>

  <div class="container py-4">
    <div class="row">
      <div class="col-6 col-md-4 mb-3 text-center">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="{{route('homepage')}}" class="nav-link p-0 text-dark  anton-font">Home</a></li>
          <li class="nav-item mb-2"><a href="{{route('add.index')}}" class="nav-link p-0 text-dark  anton-font">Annunci</a></li>
         
        </ul>
      </div>

      <div class="col-6 col-md-4 mb-3 text-center">
        <h5>Contact Us</h5>
        <ul class="nav flex-column">
    
          <li class="nav-item mb-2"><a href="{{route('login')}}" class="nav-link p-0 text-dark anton-font">Login</a></li>
          <li class="nav-item mb-2"><a href="{{route('register')}}" class="nav-link p-0 text-dark anton-font">Registrati</a></li>
        
          {{-- @guest
          <li class="nav-item list-unstyled">
            <a href="{{route('become.revisor')}}" class=" text-white">Diventa Revisore</a>
          </li>
          @else   --}}
          {{-- @auth --}}
            {{-- @if(!Auth::user()->is_revisor) --}}
            {{-- <li class="nav-item">
              <a href="{{route('become.revisor')}}" class="nav-link p-0  text-decoration-none text-dark anton-font">{{__('ui.revisor')}}</a>
            </li> --}}
            {{-- @endif --}}
          {{-- @endauth --}}

        </ul>
      </div>

      <div class="col-6 col-md-4 mb-3 text-center">
        <h5 >About Us</h5>
        <ul class="nav flex-column ">
          <li class="nav-item mb-2"><a href="{{route('staff')}}" class="nav-link p-0 text-dark anton-font">Chi siamo</a></li>
          @auth
          {{-- @if(!Auth::user()->is_revisor) --}}
          <li class="nav-item">
            <a href="{{route('lavoraConNoi')}}" class="nav-link p-0 text-dark anton-font">{{__('ui.work')}}</a>
          </li>
          {{-- @endif --}}
        @endauth
          
        </ul>
      </div>
    </div>
  </div>
  </footer>