<x-layout title="{{ htmlspecialchars_decode($sortedCategory->name)}}">
    <div class="container shadow px-5 py-3 my-5 rounded">
        <div class="row w-100">
            @forelse ($adds as $add)
                <div class="col-12 col-md-3 mt-2">
                    <a href="{{route('add.show', compact('add'))}}" class="text-decoration-none ">
                        <div class="p-2 m-1 rounded articleIndexCard d-flex flex-column shadow">
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
                                {{-- <p class="card-text">{{$add->place}}</p> --}}
                                <div class="card-footer">
                                    <p class="card-text text-center anton-font h1">{{$add->price}} €</p>
                                    {{-- <p class="small muted">Pubblicato il: {{$add->created_at->format('d/m/Y')}}</p>
                                    <p class="small muted">Pubblicato da: {{$add->user->name ?? 'Utente Cancellato'}}</p> --}}
                                </div> 
                                <p class="maven-font py-3"><i class="fa-solid fa-city"></i> {{$add->place}}</p>                     
                            </div>
                            {{-- <a href="{{route('add.show', compact('add'))}}" class="btn btn-danger">Dettaglio articolo</a> --}}
                        </div>
                    </a>
                </div>

       

                @empty 

                <div class="col-12">

                    <p class="h1 text-center">Non sono presenti annunci di questa categoria</p>
                    <p class="h1 text-center">Pubblicane uno o torna agli annunci:</p>
                    <div class="col-12 d-flex justify-content-center mt-5">
                        <a href="{{route('add.create')}}" class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Nuovo Annuncio</a>
                    </div>
                    
                </div>                

            @endforelse
            @if($adds->lastPage()>1)
                <nav class="d-flex justify-content-end mt-4 ">
                    <ul class="pagination gap-2 ">
                        @if($adds->currentPage() > 2)
                            <li class="page-item">
                                <a class="page-link border-0 maven-font" href="{{ $adds->url(1) }}">Prima pagina</a>
                            </li>
                        @endif
            
                        @if($adds->previousPageUrl())
                            <li class="page-item {{ $adds->previousPageUrl() ? '' : 'disabled' }} ">
                                <a class="page-link border-0 maven-font" href="{{ $adds->previousPageUrl() ?? '#' }} "><<</a>
                            </li>
                        @endif
            
                        @foreach ($adds->getUrlRange(max($adds->currentPage() - 1, 1), min($adds->currentPage() + 1, $adds->lastPage())) as $page => $url)
                            <li class="page-item {{ $adds->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link border-0 maven-font" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
            
                        @if($adds->nextPageUrl())
                            <li class="page-item {{ $adds->nextPageUrl() ? '' : 'disabled' }}">
                                <a class="page-link border-0 maven-font" href="{{ $adds->nextPageUrl() ?? '#' }}">>></a>
                            </li>
                        @endif
            
                        @if($adds->currentPage() < ($adds->lastPage()-1))
                            <li class="page-item">
                                <a class="page-link border-0 maven-font" href="{{ $adds->url($adds->lastPage()) }}">Ultima pagina</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            @endif

        </div>
        <div class="row w-100 justify-content-center">
            <div class="col-12 d-flex justify-content-center mt-5">
                <a href="{{route('add.index')}}" class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Torna agli annunci</a>
            </div>
        </div>
    </div>
    
    
</x-layout>