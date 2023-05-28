<x-layout title="Verifica Email">
<div class="container rounded shadow my-5 p-5">

    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h2 class="anton-font display-4">Grazie per esserti iscritto!</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 text-center maven-font">
            <p>Prima di cominciare, verifica il tuo indirizzo email, cliccando sul link che ti abbiamo appena inviato!</p>
            @if(session('status')=='verification-link-sent')
            <div class="alert alert-success my-3 anton-font mb-5">
                Ti abbiamo inviato una nuova mail di registrazione.
            </div>
            @endif
            <form method="POST" action="{{route('verification.send')}}">
                @csrf
                <button type="submit" class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Invia una nuova mail di verifica</button>
            </form>
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <p>Stai riscontrando dei problemi?</p>
                <button type="submit" class="btn btn-lg btnCustomPage bg-prim bg-gradient h6 rounded text-center anton-font mb-3 shadow">Logout</button>
            </form>
        </div>
    </div>
</div>








</x-layout>