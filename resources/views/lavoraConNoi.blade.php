<x-layout title='Lavora Con Noi'>




    <div class="container rounded shadow margine">
        <div class="row ">
            <div class="col-6 d-flex align-items-center flex-column justify-content-center p-3">
                <h3>Vuoi entrare a far parte dello Staff YOeS?</h3>
                <h5 class="mt-3">Diventa il nostro Revisore di annunci</h5>
                <p>Candidati</p>
                @guest
                    <li class="nav-item list-unstyled">
                        <a href="{{route('become.revisor')}}" class="btn btn-primary">{{__('ui.work')}}</a>
                    </li>
                    @else 
                        @if(!Auth::user()->is_revisor)
                        <li class="nav-item list-unstyled">
                        <a href="{{route('become.revisor')}}" class="btn btn-primary">{{__('ui.work')}}</a>
                        </li>
                        @endif
                @endguest 

            </div>
            <div class="col-6 d-flex justify-content-center p-3">
                <img src="/media/lavoraConNoi.png" class="scale-c" height="250" alt="lavora con noi">
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Posizioni Aperte</h3>

            </div>
        </div>
    </div> --}}


</x-layout>