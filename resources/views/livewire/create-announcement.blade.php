<div>
    <h1>Crea il tuo annuncio!</h1>

    <form wire:submit.prevent="store">

    @csrf

    <div class="mb-3">
        <label for="title">Titolo Annuncio</label>
        <input wire:model="title" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="place">Città</label>
        <input wire:model="place" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="price">Prezzo</label>
        <input wire:model="price" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="description">Descrizione</label>
        <textarea class="form-control" wire:model="description" id="description" cols="30" rows="7"></textarea>
    </div>

    <button type="submit" class="btn btn-lg btn-dark">Inserisci annuncio</button><br>

    </form>

</div>
