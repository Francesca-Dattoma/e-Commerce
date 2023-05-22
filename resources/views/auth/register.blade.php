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
                        <div class="mb-3">
                          <label for="name" class="form-label">Nome</label>
                          <input type="text"  name="name" class="form-control" id="name" >
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text"  name="username" class="form-control" id="username" >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text"  name="email" class="form-control" id="email" >
                          </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Conferma Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                          </div>
                        <button type="submit" class="btn btn-primary text-center">Registrati</button>
                </form>
                    
            </div>
        </div>
    </div>
</x-layout>