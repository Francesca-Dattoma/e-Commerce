<div>
    <h2 class="anton-font display-4">Crea il tuo annuncio!</h2>
    <div class="container p-5 shadow rounded mt-5">
    
        
        <form wire:submit.prevent="store">
            
        
            @csrf
    
            <div class="mb-3">
                <label for="title" class="form-label anton-font h5">Titolo Annuncio</label>
                <input id="title" wire:model.lazy="title" type="text" class="maven-font form-control @error('title') is-invalid @enderror">
                @error('title')
                    <p class="text-danger fst-italic anton-font">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="place" class="form-label anton-font h5">Città</label>
                <input id="place" wire:model.lazy="place" type="text" class="maven-font form-control @error('place') is-invalid @enderror">
                @error('place')
                    <p class="text-danger fst-italic anton-font">{{$message}}</p>
                @enderror
            </div>
    
            <div class="mb-3">
                <label for="price" class="form-label anton-font h5">Prezzo (€)</label>
                <input id="price" wire:model.lazy="price" type="number" step="any"  class="maven-font form-control @error('price') is-invalid @enderror w-25">
                @error('price')
                    <p class="text-danger fst-italic anton-font">{{$message}}</p>
                @enderror
            </div>
    
            <hr>
                <div class="mb-3">
                    <label for="category" class="form-label anton-font h5">Categoria</label><br>
                    
                    <select wire:model.defer='category' id="category" class="form-select @error('category') is-invalid @enderror">
                        <option selected value="Placeholder" hidden class="anton-font">Categoria dell'annuncio</option>
                        @foreach($sortedCategories as $sortedCategory)
                            <option value="{{$sortedCategory->id}}" class="anton-font">{{$sortedCategory->name}}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-danger fst-italic anton-font">{{$message}}</p>
                    @enderror
                </div>
            <hr>
    
            <div class="mb-3">
                <label for="description"  class="form-label anton-font h5">Descrizione</label>
                <textarea class="form-control maven-font" wire:model.lazy="description" id="description" cols="30" rows="7"></textarea>
                @error('description')
                    <p class="text-danger fst-italic anton-font">{{$message}}</p>
                @enderror
            </div>
    
            <button type="submit" class="btn btn-lg btn-dark mb-3 anton-font h5">Inserisci annuncio</button><br>
    
        </form>
    
    </div>

</div>
