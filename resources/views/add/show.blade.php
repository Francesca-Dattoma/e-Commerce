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
                                    
                    {{substr($add_to_check->title, 0, 25)}} <br> {{substr($add_to_check->title,26,25)}} <br> {{substr($add_to_check->title, 51, 25)}} <br> {{substr($add_to_check->title, 76, 25)}}
            
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



@if(count($relatedAdds)>0)
<div class="container my-5">
        <h2 class="anton-font display-4" >Annunci correlati:</h2>  
        <div class="row rounded shadow p-4 mb-3 justify-content-evenly">

            @foreach ($relatedAdds as $add)
                <div class="col-12 col-md-3 mt-2">
                    <div class="p-2 m-1 rounded articleIndexCard d-flex flex-column shadow">
                        <a href="{{route('add.show', compact('add'))}}" class="text-decoration-none ">
                            <img src="https://picsum.photos/1000" width="180" class="card-img-top rounded" alt="{{$add->title}}">
                            <div class="card-body d-flex flex-column justifu-content-evenly">
                                <h5 class="card-title text-center py-2 fw-bold anton-font text-dark">
            
                                    @if(strlen($add->title) > 50) 
                                    
                                        {{substr($add->title, 0, 25)}} <br> {{substr($add->title,26,23)}}...
                                
                                    @elseif(strlen($add->title) <= 50 && strlen($add->title)>25)
                                        
                                        {{substr($add->title, 0, 25)}} <br> {{substr($add->title, 26)}}
                                    @else
            
                                        {{ $add->title }}
            
                                    @endif
            
                                </h5>
                                
                                <p class="card-text text-center"> 
            
                                    <a href="{{route('adds.category', $add->category)}}" class="text-decoration-none anton-font">
                                    
                                        Categoria: {{$add->category->name}}
            
                                    </a>
                                
                                </p>
                            
                                <p class="card-text text-center anton-font h1">{{$add->price}} €</p>
                            
                            </div>
                            <p class="maven-font py-1"><i class="fa-solid fa-city"></i> {{$add->place}}</p>
                        </a>
                        
                    </div>
                </div>
        
            @endforeach
        </div>
        @if(count($relatedAdds)>4)
            <div class="row">

                <a class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow" href="{{route('adds.category', $add->category)}}">Vedi altri articoli della categoria "{{$add->category->name}}"</a>
            </div>
        @endif

    </div>
@endif



</x-layout>