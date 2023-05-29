<x-layout title="Registrati" >
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 p-5">
                <form action="{{route('register')}}" method="POST" class="p-5 shadow bg-light">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                        </div>
                    @endif
                        <div class="rounded bg-accent p-2 mb-3">
                          <h6 class="anton-font">Regole di registrazione:</h6>
                          <ul>
                            <li><p class="maven-font">I campi contrassegnati da <sup class="color-prim">*</sup> sono obbligatori.</p></li>
                            <li><p class="maven-font">Il campo Nome deve essere di almeno 6 caratteri.</p></li>
                            <li><p class="maven-font">Il campo Username deve essere di almeno 6 caratteri.</p></li>
                            <li>
                              <p class="maven-font">La password deve essere di almeno 8 caratteri e contenere almeno un:</p>
                              <ul>
                                <li class="maven-font">Un carattere maiuscolo</li>
                                <li class="maven-font">Un carattere minuscolo</li>
                                <li class="maven-font">Un numero</li>
                                <li class="maven-font">Un carattere speciale</li>
                              </ul>
                            
                            
                            </li>
                          </ul>

                        </div>
                        <div class="mb-3">
                          <label for="name" class="form-label anton-font">Nome <sup class="color-prim">*</sup> </label>
                          <input type="text"  name="name" class="form-control" id="name" >
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label anton-font">Username <sup class="color-prim">*</sup></label>
                            <input type="text"  name="username" class="form-control" id="username" >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label anton-font">Email <sup class="color-prim">*</sup></label>
                            <input type="text"  name="email" class="form-control" id="email" >
                          </div>
                        <div class="mb-3">
                          <label for="password" class="form-label anton-font">Password <sup class="color-prim">*</sup></label>
                          <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label anton-font">Conferma Password <sup class="color-prim">*</sup></label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                        </div>
                        
                        <button type="submit" class="btn btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Registrati</button>
                        <p class="fst-italic maven-font text-dark"><small>Sei già registrato? <a href="{{route('login')}}" class="color-prim text-decoration-none">Accedi</a>.</small></p>
                </form>
                    
            </div>
        </div>
    </div>
</x-layout>