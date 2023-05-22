<x-layout title="Accedi" >
    <div class="container-fluid mt-2">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 p-5">
                <form action="{{route('login')}}" method="POST" class="p-5 shadow bg-light">
                    @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username o Email</label>
                            <input type="text"  name="username" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary text-center">Accedi</button>
                </form>
                    
            </div>
        </div>
    </div>
</x-layout>