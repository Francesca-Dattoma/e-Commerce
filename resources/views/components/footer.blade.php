<footer class="bg-dark text-white py-3">
  <div class="container">
    <div class="row">
      <div class="col-6 col-md-4 mb-3 text-center">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-4 mb-3 text-center">
        <h5>Contact Us</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">E-mail</a></li>
          {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Phone Number</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Road</a></li> --}}
          {{-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> --}}
        
          {{-- @guest
          <li class="nav-item list-unstyled">
            <a href="{{route('become.revisor')}}" class=" text-white">Diventa Revisore</a>
          </li>
          @else   --}}
          @auth
            {{-- @if(!Auth::user()->is_revisor) --}}
            <li class="nav-item">
              <a href="{{route('become.revisor')}}" class="nav-link p-0 text-muted">Diventa Revisore</a>
            </li>
            {{-- @endif --}}
          @endauth

        </ul>
      </div>

      <div class="col-6 col-md-4 mb-3 text-center">
        <h5>About Us</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Chi siamo</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Dicono di noi</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQ</a></li>
        </ul>
      </div>
    </div>
  </div>
  </footer>