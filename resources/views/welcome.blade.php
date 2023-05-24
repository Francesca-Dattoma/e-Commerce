<x-layout title="YOeS">
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
    
    
    <div class="container">
        <div class="row">

            @forelse ($adds as $add)
            <div class="col-12 col-md-4 mt-2">
                <div class="card">
                    <img src="/media/logo_img.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$add->title}}</h5>
                      <p class="card-text">{{$add->place}}</p>
                      <p class="card-text">{{$add->price}} €</p>
                      <p class="card-text">{{$add->description}}</p>
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

        </div>
    </div>



</x-layout>