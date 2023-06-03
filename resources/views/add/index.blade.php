<x-layout title="{{__('ui.allAnnouncements')}}">

    <div class="container shadow p-5 my-5 rounded">
        <div class="row">




            {{-- Offcanvas --}}
            <div class="d-flex justify-content-end">
                <a class="text-decoration-none anton-font h5 pt-4" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    {{__('ui.filters')}}
                </a>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title anton-font text-decoration-none" id="offcanvasExampleLabel">{{__('ui.filters')}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>
                            <button class="btn btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow" onclick="document.querySelector('#categoriesList').classList.toggle('filtroCategorie');">Categorie</button>
                        </div>
                        <div id='categoriesList' class="filtroCategorie">
                            <hr>
                            @foreach($sortedCategories as $sortedCategory)
                                <a class="btn btn-outline-dark anton-font d-flex justify-content-start text-start mb-2" href="{{route('adds.category', compact('sortedCategory'))}}">{{$sortedCategory->name}}</a>
                            @endforeach
                        </div>
                        <hr>
                        
                    </div>
                </div>
            </div>
            {{-- Fine Offcanvas --}}


            
            <hr>
            @forelse ($adds as $add)
                <div class="col-12 col-md-3 mt-2">
                    <div class="p-2 m-1 rounded articleIndexCard d-flex flex-column shadow">
                            <div class="card-custom">
                                <div class="pt-5">
                                    <a href="{{route('add.show', compact('add'))}}" class="text-decoration-none ">
                            
                                        <img src="{{!$add->images()->get()->isEmpty() ? Storage::url($add->images()->first()->path) : '/media/logo_img.png'}}" class="card-img-top size rounded" alt="{{$add->title}}">
    
                                </div>
    
                            </div>
                            <div class="card-body d-flex flex-column justify-content-evenly">
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

           

                @empty 

                <div class="col-12">

                    <p class="h1">Non sono presenti annunci</p>
                    <p class="h1">Pubblicane uno: <a class="btn btn-success" href="{{route('add.create')}}">Nuovo Annuncio</a></p>

                </div>

            @endforelse
            



            @if($adds->lastPage()>1)
            
                <nav class="d-flex justify-content-end mt-4 ">
                    <ul class="pagination gap-2 ">
                        @if($adds->currentPage() > 2)
                            <li class="page-item">
                                <a class="border-0 maven-font text-decoration-none" href="{{ $adds->url(1) }}">{{__('ui.firstPage')}}</a>
                            </li>
                        @endif
            
                        @if($adds->previousPageUrl())
                            <li class="page-item {{ $adds->previousPageUrl() ? '' : 'disabled' }} ">
                                <a class="border-0 maven-font text-decoration-none" href="{{ $adds->previousPageUrl() ?? '#' }} "><<</a>
                            </li>
                        @endif
            
                        @foreach ($adds->getUrlRange(max($adds->currentPage() - 1, 1), min($adds->currentPage() + 1, $adds->lastPage())) as $page => $url)
                            <li class="page-item {{ $adds->currentPage() == $page ? 'active' : '' }}">
                                <a class="border-0 maven-font text-decoration-none" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach
            
                        @if($adds->nextPageUrl())
                            <li class="page-item {{ $adds->nextPageUrl() ? '' : 'disabled' }}">
                                <a class="border-0 maven-font text-decoration-none" href="{{ $adds->nextPageUrl() ?? '#' }}">>></a>
                            </li>
                        @endif
            
                        @if($adds->currentPage() < ($adds->lastPage()-1))
                            <li class="page-item">
                                <a class="border-0 maven-font text-decoration-none" href="{{ $adds->url($adds->lastPage()) }}">{{__('ui.lastPage')}}</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            @endif
        </div>
    </div>
    
</x-layout>