<x-layoutLoginRegister >  

    <div class="section mt-5 pt-5">
      <div class="container">
        <div class="row full-height justify-content-center align-items-center">
          <div class="col-12 text-center align-self-center pt-5">

            {{-- Section with form --}}

            
            <div class="section pb-5 pt-5 pt-sm-2 text-center">
              
              <span ><h6 class="h6Login h4">Registrati</h6></span>
              <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
              <label for="reg-log"></i></label>
              <span class="h4"><h6 class="h6Login h4">Login</h6></span>
              
              {{-- Wrapper --}}
              @if ($errors->any())
                <div class="d-flex justify-content-center">
                  <div class="alert alert-danger mt-4 w-100">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li class="list-unstyled text-start"><p class="pLogin text-start">{{ $error }}</p></li>
                        @endforeach
                    </ul>
                  </div>

                </div>
              @endif
              <div class="card-3d-wrap mx-auto">
                <div class="card-3d-wrapper">

                  {{-- Register --}}
                  <form class="card-front" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="center-wrap">
                      <div class="section text-center">
                        <h4 class="mb-4 pb-3 anton-font text-light h1">Registrati</h4>
                        <div class="form-group">	
                          <input type="text" name="name" class="form-style" placeholder="Name">
                          <i class="input-icon uil uil-user"></i>
                          <p class="pLogin">Il campo Nome deve essere di almeno 6 caratteri</p>
                        </div>
                        <div class="form-group mt-2">
                          <input type="text" name="username" class="form-style" placeholder="Username">
                          <i class="input-icon uil uil-user"></i>
                          <p class="pLogin">Il campo Username deve essere di almeno 6 caratteri</p>
                        </div>
                        <div class="form-group mt-2">
                          <input type="email" name="email" class="form-style" placeholder="Email">
                          <i class="input-icon uil uil-at"></i>
                        </div>	
                        <div class="form-group mt-2">
                          <input type="password" name="password" class="form-style" placeholder="Password">
                          <i class="input-icon uil uil-lock-alt"></i>
                          <p class="pLogin">Almeno 8 caratteri e contenere almeno un carattere maiuscolo,uno speciale e un numero</p>
                            
                        </div>
                        <div class="form-group mt-2">
                          <input type="password" name="password_confirmation" class="form-style" placeholder="Conferma Password" >
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btnLogin mt-4 text-decoration-none">Registrati</button>
                        {{-- <a href="#" class="btnLogin mt-4 text-decoration-none">submit</a> --}}
                      </div>
                    </div>
                  </form>

                  {{-- Login --}}

                  <form action="{{route('login')}}" method="POST" class="card-back">
                    @csrf
                    <div class="center-wrap">
                      <div class="section text-center">
                        <h4 class="mb-4 pb-3 anton-font text-light h1">Log In</h4>
                        <div class="form-group">
                          <input type="text" name="username" class="form-style" placeholder="Email/Username">
                          <i class="input-icon uil uil-at"></i>
                          <p class="pLogin">puoi inserire anche username</p>
                        </div>	
                        <div class="form-group mt-2">
                          <input type="password" name="password" class="form-style" placeholder="Password">
                          <i class="input-icon uil uil-lock-alt"></i>
                        </div>
                        <button type="submit" class="btnLogin mt-4 text-decoration-none">Login</button>
                        {{-- <p class="mb-0 mt-4 text-center pLogin"><a href="#0" class="link">Forgot your password?</a></p> --}}
                      </div>
                    </div>
                  </form>                   

                </div>
              </div>
          


            </div>


          </div>
        </div>
      </div>
    </div>

</x-layoutLoginRegister>