<x-layout title="Dettaglio Annuncio">
    <div class="container">
        <div class="row justify-content-center w-100">
            <div class="col-12 col-md-6">
                <img src="https://picsum.photos/600" class="img-fluid" alt="{{$add->title}}">
                <div class="d-flex w-100">
                    <img src="https://picsum.photos/180" class="img-fluid" alt="{{$add->title}}">
                    <img src="https://picsum.photos/180" class="img-fluid" alt="{{$add->title}}">
                    <img src="https://picsum.photos/180" class="img-fluid" alt="{{$add->title}}">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h2 display-3>{{$add->title}}</h2>
                <hr>
                <h4>{{$add->price}} €</h4>
                <hr>
                <p class="my-3">{{$add->description}}</p>
            </div>


        </div>
    </div>

</x-layout>