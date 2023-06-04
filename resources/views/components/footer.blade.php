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
    <div class="row justify-content-center">
      
      <h5 class="text-center" >Seguici sui nostri social:</h5>
      
      <div class="col-10 d-flex justify-content-evenly bg-white rounded badged shadow">
          <tr>
            <td align="center" valign="top" class="td"><a target="_blank" href="https://facebook.com" class="anchorSocial"><img src="https://xbkomh.stripocdn.email/content/assets/img/social-icons/logo-colored/facebook-logo-colored.png" alt="Fb" title="Facebook" height="45" width="45" class="imgSocial"></a></td>
            <td align="center" valign="top" class="td"><a target="_blank" href="https://twitter.com/?lang=it" class="anchorSocial"><img src="https://xbkomh.stripocdn.email/content/assets/img/social-icons/logo-colored/twitter-logo-colored.png" alt="Tw" title="Twitter" height="45" width="45" class="imgSocial"></a></td>
            <td align="center" valign="top" class="td"><a target="_blank" href="https://www.instagram.com/" class="anchorSocial"><img src="https://xbkomh.stripocdn.email/content/assets/img/social-icons/logo-colored/instagram-logo-colored.png" alt="Ig" title="Instagram" height="45" width="45" class="imgSocial"></a></td>
            <td align="center" valign="top" class="td-linkedin"><a target="_blank" href="https://www.linkedin.com/" class="anchorSocial"><img src="https://xbkomh.stripocdn.email/content/assets/img/social-icons/logo-colored/linkedin-logo-colored.png" alt="In" title="Linkedin" height="45" width="45" class="imgSocial"></a></td>
          </tr>
      </div>
    </div>
  </div>
  </footer>