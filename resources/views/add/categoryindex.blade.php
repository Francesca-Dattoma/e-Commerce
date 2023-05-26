<x-layout title="{{$sortedCategory->name}}">
    <div class="container">
        <div class="row w-100">
                @forelse ($adds as $add)
            <div class="col-12 col-md-4 mt-2">
                <div class="card shadow">
                    <img src="/media/logo_img.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$add->title}}</h5>
                      <p class="card-text">{{$add->place}}</p>
                      <p class="card-text">{{$add->price}} €</p>
                    </div>
                    <div class="card-footer">
                        <p>Pubblicato il: {{$add->created_at->format('d/m/Y')}}</p>
                        <p>Pubblicato da: {{$add->user->name ?? 'Utente Cancellato'}}</p>
                    </div>   
                    <a href="{{route('add.show', compact('add'))}}" class="btn btn-danger">Dettaglio articolo</a>
                </div>
            </div>

            @empty 

            <div class="col-12">

                <p class="h1">Non sono presenti annunci per questa categoria</p>
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