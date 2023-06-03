<x-layoutWelcome >
    @if(session('access.denied'))
    <div class="alert alert-danger text-center">
        {{session('access.denied')}}
    </div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success my-3 anton-font mb-5">
            {{session('message')}}
        </div>
    @endif
    @if (session()->has('warning'))
        <div class="alert alert-warning my-3">
            {{session('warning')}}
        </div>
    @endif
    
    @if($adds)
    
        <h2 class="maven-font display-4 text-center my-3 mt-5">{{__('ui.lastAnnouncements')}}</h2>
        <h2 class="anton-font display-4 text-center my-3 mt-5">{{__('ui.lastAnnouncements')}}</h2>
        <div class="my-5">
            <div class="swiper mySwiper rounded shadow container welcomeMain">
                <div class="swiper-wrapper">
                    @foreach($adds as $add)
                        <div class="swiper-slide">
                            <div class="container rounded  ">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-6 d-flex justify-content-center ">
                                        {{-- <div class="size"> --}}
                                            <img src="{{!$add->images()->get()->isEmpty() ? Storage::url($add->images()->first()->path) : '/media/logo_img.png'}}" height="300" class="rounded m-1 p-1" alt="{{$add->title}}">

                                        {{-- </div> --}}
                                    </div>
                                    <div class="col-12 col-lg-5 d-flex justify-content-around align-items-start flex-column">
                                        <h3 class=" display-6 fw-bold anton-font">
                                            @if(strlen($add->title) > 50) 
                                    
                                            {{substr($add->title, 0, 25)}} <br> {{substr($add->title,26,23)}}...
                                    
                                        @elseif(strlen($add->title) <= 50 && strlen($add->title)>25)
                                            
                                            {{substr($add->title, 0, 25)}} <br> {{substr($add->title, 26)}}
                                        @else
    
                                            {{ $add->title }}
    
                                        @endif
                                        </h3>
                                        <a href="{{route('adds.category', $add->category)}}" class="text-decoration-none anton-font">{{$add->category->name}}</a>
                                        <p class="maven-font "><i class="fa-solid fa-city"></i> {{$add->place}}</p>
                                        <p class="anton-font h1 ">{{$add->price}} €</p>
                                        <div class="d-flex justify-content-center pb-2">
                                            <a href="{{route('add.show', compact('add'))}}" class="btn btn-dark">Dettaglio articolo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row bg-accent bg-gradient h6 rounded justify-content-center h-100 mt-5">
                                    <p class="muted mb-2 pt-3">{{__('ui.releasedon')}}: {{$add->created_at->format('d/m/Y')}}</p>
                                    <p class="muted mb-2 pb-3">{{__('ui.releasedby')}}: {{$add->user->name ?? 'Utente Cancellato'}}</p>
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

        <div class="container ">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <i class="fa-solid fa-lightbulb text-center fa-2x text-primary mb-2"></i>
                                <h4 class="text-center anton-font">{{__('ui.choosethecategory')}}</h4>
                                <p>{{__('ui.youcanchoosefrommorethantwentycategories')}}</p>
                               
                            </div>
                            <div class="col-6">
                                <i class="fa-solid fa-money-bill-1-wave text-center fa-2x text-primary mb-2"></i>
                                <h4 class="text-center anton-font">{{__('ui.Addpriceanddescription')}}</h4>
                                <p>{{__('ui.Describeyouritemandchoosethefinalprice')}}</p>
                                
                            </div>
                            <div class="col-6 pt-3">
                                <i class="fa-solid fa-images text-center fa-2x text-primary mb-2"></i>
                                <h4 class="text-center anton-font">{{__('ui.Uploadphotos')}}</h4> 
                                <p>{{__('ui.Uploaduptosixphotostoshowyouritem')}}</p>                              
                            </div>
                            <div class="col-6 pt-3">
                                <i class="fa-solid fa-square-check text-center fa-2x text-primary mb-2"></i>
                                <h4 class="text-center anton-font">{{__('ui.Saveyourad')}}</h4>
                                <p>{{__('ui.Whenyouhavefinishedfillingouttheformpresssubmit')}}</p>
                            </div>
                        </div>
                    </div>                    
                </div>

                <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                    <div class="myCard">
                        <div class="innerCard">
                            <div class="frontSide">
                                <p class="title maven-font">{{__('ui.Anyitemtoadd')}}</p>
                            </div>
                            <a href="{{route('add.create')}}" class="backSide title text-decoration-none text-white maven-font">
                                <p>{{__('ui.Additem')}}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</x-layoutWelcome>