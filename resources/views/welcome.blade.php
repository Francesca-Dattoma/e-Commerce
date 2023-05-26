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
    @if($adds)
    
        <h2 class="anton-font display-4 ms-5">Gli ultimi annunci inseriti:</h2>
        <div class="my-5 ">
            <div class="swiper mySwiper rounded shadow container welcomeMain">
                <div class="swiper-wrapper">
                    @foreach($adds as $add)
                        <div class="swiper-slide">
                            <div class="container rounded  ">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-6 d-flex justify-content-center p-0">
                                        <img src="https://picsum.photos/1000" height="300" class="rounded m-1" alt="{{$add->name}}">
                                    </div>
                                    <div class="col-12 col-lg-5 d-flex justify-content-around align-items-start flex-column">
                                        <h3 class=" display-6 fw-bold anton-font">{{$add->title}}</h3>
                                        <a href="{{route('adds.category', $add->category)}}" class="nav-link text-dark anton-font">{{$add->category->name}}</a>
                                        <p class="maven-font "><i class="fa-solid fa-city"></i> {{$add->place}}</p>
                                        <p class="anton-font h1 ">{{$add->price}} €</p>
                                        <div class="d-flex justify-content-center pb-2">
                                            <a href="{{route('add.show', compact('add'))}}" class="btn btn-dark">Dettaglio articolo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row bg-secondary bg-gradient h6">
                                    <p class="muted">Pubblicato il: {{$add->created_at->format('d/m/Y')}}</p>
                                    <p class="muted">Pubblicato da: {{$add->user->name ?? 'Utente Cancellato'}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach    
                </div>
                    {{-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}
                <div class="container">
                    <div class="row justify-content-center w-100">
                            
                        <div class="col-12 swiper-pagination rounded w-25 w-100"></div>
                    </div>
        
                </div>
            </div>
        </div>
    @else
        <div class="container">
    
            <p class="h1">Non sono presenti annunci, clicca qui per pubblicare un annuncio:</p>
            <a class="btn bg-second" href="{{route('add.create')}}">Nuovo Annuncio</a>
    
        </div>
        @endif


</x-layoutWelcome>