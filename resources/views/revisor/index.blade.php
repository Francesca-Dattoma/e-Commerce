<x-layout title="Revisiona">

    @if($add_to_check)
        <h2 class="anton-font display-4 text-center">Ecco l'annuncio da revisionare:</h2>
         @else
            <h2 class="anton-font display-4 text-center my-5">Non ci sono annunci da revisionare</h2>
            <div class="d-flex justify-content-center">
                <form action="{{route('revisor.addBack')}}" method="POST">
                        
                    @csrf
                    @method('PATCH')

                    <button type="submit" class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Annulla ultima revisione</button>

                </form>
            </div>
    @endif
        

    @if($add_to_check)
     
        <div class="container mt-5 p-4 shadow rounded">
            <div class="row justify-content-center">
                <div class="col-12 col-md-4">
                       
                    @if(count($add_to_check->images))
                        
                                @foreach($add_to_check->images as $image)
                                 



                                        <img src="{{!$add_to_check->images()->get()->isEmpty() ? Storage::url($image->path): '/media/logo_img.png'}}" height="300" class="rounded m-1 p-1" alt="{{$add_to_check->title}}" class="d-block w-100" alt="{{$add_to_check->title}}">
                               
                                    @if($add_to_check->images)

                                        


                                        <h5 class="mt-3">Tags</h5>

                                        
                                        <div class="p-2">

                                            @if($image->labels)

                                                @foreach($image->labels as $label)

                                                    <p class="d-inline"> #{{$label}} </p>
                                            
                                                @endforeach
                                                
                                            @endif    

                                        </div>

                                            <div class="card-body">
                                                <h5>Revisione immagini</h5>
                                                <p>Adulti : <span class="{{$image->adult}}"></span></p>
                                                <p>Satira : <span class="{{$image->spoof}}"></span></p>
                                                <p>Medicina : <span class="{{$image->medical}}"></span></p>
                                                <p>Violenza: <span class="{{$image->violence}}"></span></p>
                                                <p>Nudità : <span class="{{$image->racy}}"></span></p>
                                            </div>
                              
                                        @else
                                            <h5>Non ci sono immagini da revisionare</h5>  
                                    @endif
                                @endforeach                             
                        @endif

                   
                </div>
                <div class="col-12 col-md-3">
                    <h2 class="display-3 py-2 fw-bold anton-font text-dark" >
                        {{-- @if(strlen($add_to_check->title) > 50) 
                                        
                            {{substr($add_to_check->title, 0, 25)}} <br> {{substr($add_to_check->title,25,25)}} <br> {{substr($add_to_check->title, 50, 25)}} <br> {{substr($add_to_check->title, 75, 25)}}
                
                        @elseif(strlen($add_to_check->title) <= 50 && strlen($add_to_check->title)>25)
                            
                            {{substr($add_to_check->title, 0, 25)}} <br> {{substr($add_to_check->title, 25)}}
    
                        @else --}}
    
                            {{ $add_to_check->title }}
    
                        {{-- @endif --}}
                    </h2>
                    <a href="{{route('adds.category', $add_to_check->category)}}" class="text-decoration-none anton-font">
                        
                        Categoria: {{$add_to_check->category->name}}
                        
                    </a>
                    <p class="maven-font py-5"><i class="fa-solid fa-city"></i> {{$add_to_check->place}}</p>
                    <hr>
                    <h4 class=" anton-font display-4">{{$add_to_check->price}} €</h4>
                    <hr>
                    <h6 class="anton-font">Descrizione:</h6>
                    <p class="my-3 maven-font">{{$add_to_check->description}}</p>
                    <hr>
                    <div class="d-flex bg-accent bg-gradient h6 rounded justify-content-center flex-column align-items-center">
                        <p class="muted mb-0 pt-3">Pubblicato il: {{$add_to_check->created_at->format('d/m/Y')}}</p>
                        <br>
                        <p class="muted mb-0 pb-3">Pubblicato da: {{$add_to_check->user->name ?? 'Utente Cancellato'}}</p>
                    </div>
                </div>
  
    
            </div>
            <hr class="mt-5">
            <div class="row mt-3 mb-3 justify-content-evenly w-100">
                <div class="col-12 col-md-1 d-flex justify-content-evenly">
                    <form action="{{route('revisor.addAccepted', ['add'=>$add_to_check])}}" method="POST">
                    
                        @csrf
                        @method('PATCH')
    
                        <button type="submit" class="btn btn-success shadow m-1">Accetta</button>
    
                    </form>
                </div>
                <div class="col-12 col-md-3 d-flex justify-content-evenly">
                    <form action="{{route('revisor.addBack')}}" method="POST">
                    
                        @csrf
                        @method('PATCH')
    
                        <button type="submit" class="btn btn-secondary shadow text-white m-1">Annulla ultima revisione</button>
    
                    </form>
                </div>
                <div class="col-12 col-md-1 d-flex justify-content-evenly">
                    <form action="{{route('revisor.addRefused', ['add'=>$add_to_check])}}" method="POST">
                    
                        @csrf
                        @method('PATCH')
    
                        <button type="submit" class="btn btn-danger shadow m-1">Rifiuta</button>
    
                    </form>
                </div>
            </div>
            
        </div>

    @endif
    <div class="row w-100 justify-content-center">
        <div class="col-12 d-flex justify-content-center mt-5">
            <a href="{{route('add.index')}}" class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Torna agli annunci</a>
        </div>
    </div>

</x-layout>