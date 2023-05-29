<x-layout title="Accedi" >
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 p-5">
                <form action="{{route('login')}}" method="POST" class="p-5 shadow bg-light">
                    @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label anton-font">Username o Email</label>
                            <input type="text"  name="username" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label anton-font">Password</label>
                          <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Accedi</button>
                        <p class="fst-italic maven-font text-dark"><small>Non sei ancora registrato? <a href="{{route('register')}}" class="color-prim text-decoration-none">Registrati</a>.</small></p>
                </form>
                    
            </div>
        </div>
    </div>
</x-layout>