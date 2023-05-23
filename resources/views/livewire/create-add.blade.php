<div>
    <h1>Crea il tuo annuncio!</h1>

    
    
    <form wire:submit.prevent="store">
        
        @if (session()->has('message'))
            <div class="alert alert-success my-3">
                {{session('message')}}
            </div>
        @endif
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo Annuncio</label>
            <input id="title" wire:model.lazy="title" type="text" class="form-control @error('title') is-invalid @enderror">
            @error('title')
                <p class="text-danger fst-italic">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="place" class="form-label">Città</label>
            <input id="place" wire:model.lazy="place" type="text" class="form-control @error('place') is-invalid @enderror">
            @error('place')
                <p class="text-danger fst-italic">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input id="price" wire:model.lazy="price" type="number" class=" @error('price') is-invalid @enderror">
            @error('price')
                <p class="text-danger fst-italic">{{$message}}</p>
            @enderror
        </div>

        <hr>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label><br>
                
                <select wire:model.defer='category' id="category" class="form-select">
                    <option selected value="">Categoria dell'annuncio</option>
                    @foreach($sortedCategories as $sortedCategory)
                        <option value="{{$sortedCategory->id}}">{{$sortedCategory->name}}</option>
                    @endforeach
                </select>
            </div>
        <hr>

        <div class="mb-3">
            <label for="description"  class="form-label">Descrizione</label>
            <textarea class="form-control" wire:model.lazy="description" id="description" cols="30" rows="7"></textarea>
            @error('description')
                <p class="text-danger fst-italic">{{$message}}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-lg btn-dark mb-3">Inserisci annuncio</button><br>

    </form>

</div>
