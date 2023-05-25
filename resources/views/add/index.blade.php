<x-layout title="Annunci">

    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-end">
                <a class="text-decoration-none" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    Filtri
                </a>
                  
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filtri</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            <button onclick="document.querySelector('#categoriesList').classList.toggle('prova');">Categorie</button>
                        </div>
                        <div id='categoriesList' class="prova">
                            <hr>
                            @foreach($sortedCategories as $sortedCategory)
                                <a class="btn d-flex justify-content-start text-start" href="{{route('adds.category', compact('sortedCategory'))}}">{{$sortedCategory->name}}</a>
                            @endforeach
                        </div>
                        <hr>
                        {{-- <a href="" class="btn btn-danger" onclick="document.querySelector(selected='true');">Applica filtri</a> --}}
                    </div>
                </div>
            </div>
            @forelse ($adds as $add)
            <div class="col-12 col-md-4 mt-2">
                <div class="card shadow">
                    <img src="/media/logo_img.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$add->title}}</h5>
                      <p class="card-text"> 

                        <a href="{{route('adds.category', $add->category)}}">
                        
                            Categoria: {{$add->category->name}}

                        </a>
                    
                      </p>
                      <p class="card-text">{{$add->place}}</p>
                      <p class="card-text">{{$add->price}} €</p>
                      <div class="card-footer">
                        <p class="small muted">Pubblicato il: {{$add->created_at->format('d/m/Y')}}</p>
                        <p class="small muted">Pubblicato da: {{$add->user->name ?? 'Utente Cancellato'}}</p>
                      </div>                      

                    </div>
                    <a href="{{route('add.show', compact('add'))}}" class="btn btn-danger">Dettaglio articolo</a>
                </div>
            </div>

           

            @empty 

            <div class="col-12">

                <p class="h1">Non sono presenti annunci</p>
                <p class="h1">Pubblicane uno: <a class="btn btn-success" href="{{route('add.create')}}">Nuovo Annuncio</a></p>

            </div>

            @endforelse

            {{ $adds->links() }}

        </div>
    </div>
    
</x-layout>