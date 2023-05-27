<x-layout title="Dettaglio Annuncio">
    <div class="container mt-5 p-4 shadow rounded">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-md-6">
                <img src="https://picsum.photos/600" class="img-fluid my-2 rounded" alt="{{$add->title}}">
                <div class="d-flex justify-content-evenly">
                    <img src="https://picsum.photos/120" class="img-fluid rounded" alt="{{$add->title}}">
                    <img src="https://picsum.photos/120" class="img-fluid rounded" alt="{{$add->title}}">
                    <img src="https://picsum.photos/120" class="img-fluid rounded" alt="{{$add->title}}">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="display-3 py-2 fw-bold anton-font text-dark" >
                    @if(strlen($add->title) > 50) 
                                    
                        {{substr($add->title, 0, 25)}} <br> {{substr($add->title,26,23)}}...
            
                    @elseif(strlen($add->title) <= 50 && strlen($add->title)>25)
                        
                        {{substr($add->title, 0, 25)}} <br> {{substr($add->title, 26)}}

                    @else

                        {{ $add->title }}

                    @endif
                </h2>
                <a href="{{route('adds.category', $add->category)}}" class="text-decoration-none anton-font">
                    
                    Categoria: {{$add->category->name}}
                    
                </a>
                <p class="maven-font py-5"><i class="fa-solid fa-city"></i> {{$add->place}}</p>
                <hr>
                <h4 class=" anton-font display-4">{{$add->price}} €</h4>
                <hr>
                <p class="my-3 maven-font">{{$add->description}}</p>
                <hr>
                <div class="d-flex bg-secondary bg-gradient h6 rounded justify-content-center flex-column align-items-center">
                    <p class="muted mb-0 pt-3">Pubblicato il: {{$add->created_at->format('d/m/Y')}}</p>
                    <br>
                    <p class="muted mb-0 pb-3">Pubblicato da: {{$add->user->name ?? 'Utente Cancellato'}}</p>
                </div>
            </div>

            

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-12 d-flex justify-content-center mt-5">
                <a href="{{route('add.index')}}" class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Torna agli annunci</a>
            </div>
        </div>
    </div>
   

</x-layout>