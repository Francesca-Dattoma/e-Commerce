<x-layoutWelcome >
    @if(session('access.denied'))
    <div class="alert alert-danger text-center">
        {{session('access.denied')}}
    </div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success my-3">
            {{session('message')}}
        </div>
    @endif
    
    
    <div class="container">
        <div class="row">

            @forelse ($adds as $add)
            <div class="col-12 col-md-4">
                <div class="card mb-4">
                    <img src="/media/logo_img.png" class="card-img-top p-5" alt="{{$add->name}}">
                    <div class="card-body">
                      <h5 class="card-title text-center">{{$add->title}}</h5>
                      <a href="{{route('adds.category', $add->category)}}">
                        
                        Categoria: {{$add->category->name}}

                      </a>
                      <p class="card-text">{{$add->place}}</p>
                      <p class="card-text">{{$add->price}} €</p>
                    </div>
                    <div class="d-flex justify-content-center pb-2">
                        <a href="{{route('add.show', compact('add'))}}" class="btn btn-dark w-50 m-0">Dettaglio articolo</a>
                    </div>
                    <div class="card-footer">
                        <p>Pubblicato il: {{$add->created_at->format('d/m/Y')}}</p>
                        <p>Pubblicato da: {{$add->user->name ?? 'Utente Cancellato'}}</p>
                      </div>   
                </div>
            </div>

            @empty 

            <div class="col-12">

                <p class="h1">Non sono presenti annunci per questa categoria</p>
                <p class="h1">Pubblicane uno: <a class="btn btn-success" href="{{route('add.create')}}">Nuovo Annuncio</a></p>

            </div>

            @endforelse

        </div>
    </div>



</x-layoutWelcome>