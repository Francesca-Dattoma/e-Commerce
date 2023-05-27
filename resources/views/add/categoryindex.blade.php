<x-layout title="{{$sortedCategory->name}}">
    <div class="container">
        <div class="row w-100">
            @forelse ($adds as $add)
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
                            {{-- <p class="card-text">{{$add->place}}</p> --}}
                            <p class="card-text text-center anton-font h1">{{$add->price}} €</p>
                            {{-- <div class="card-footer">
                                <p class="small muted">Pubblicato il: {{$add->created_at->format('d/m/Y')}}</p>
                                <p class="small muted">Pubblicato da: {{$add->user->name ?? 'Utente Cancellato'}}</p>
                            </div>                       --}}
                        </div>
                    </a>
                    {{-- <a href="{{route('add.show', compact('add'))}}" class="btn btn-danger">Dettaglio articolo</a> --}}
                </div>
            </div>

       

            @empty 

            <div class="col-12">

                <p class="h1">Non sono presenti annunci di questa categoria</p>
                <p class="h1">Pubblicane uno: <a class="btn btn-success" href="{{route('add.create')}}">Nuovo Annuncio</a></p>

            </div>

        @endforelse
        
            <nav class="d-flex justify-content-end mt-4 ">
                <ul class="pagination gap-2 ">
                    <li class="page-item {{ $adds->previousPageUrl() ? '' : 'disabled' }} ">
                        <a class="page-link border-0" href="{{ $adds->previousPageUrl() ?? '#' }} ">Previous</a>
                    </li>
                    @for ($i = 1; $i <= $adds->lastPage(); $i++)
                        <li class="page-item {{ $adds->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link border-0" href="{{ $adds->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li class="page-item {{ $adds->nextPageUrl() ? '' : 'disabled' }}">
                        <a class="page-link border-0" href="{{ $adds->nextPageUrl() ?? '#' }}">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>
    
</x-layout>