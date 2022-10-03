<div class="inline-block relative " x-data="{ open: true}" >
    {{-- <form action="">
        <div class="input-group">
            <input @click.away="open = false; @this.resetIndex();" @click="open = true" type="text" class="form-control focus:outline-none" placeholder="Recherche" wire:model="query"
            wire:keydown.arrow-down.prevent="incrementIndex"
            wire:keydown.arrow-up.prevent="decrementIndex"
            wire:keydown.backspace="resetIndex"
            wire:keydown.enter.prevent="showproduit"
            >
            <div class="input-group-append">
                <span class="input-group-text bg-transparent text-primary">
                    <i class="fa fa-search"></i>
                </span>
            </div>
        </div>
    </form> --}}
    <form action="">
        <div class="input-group mb-3 input-group-lg">
            <input @click.away="open = false; @this.resetIndex();" @click="open = true" type="text" class="form-control" placeholder="Recherche de formation"
                aria-label="Recherche de formation" aria-describedby="basic-addon2"
                style="border-bottom-left-radius: 50rem ; border-top-left-radius: 50rem ;" wire:model="query" wire:keydown.arrow-down.prevent="incrementIndex"
                wire:keydown.arrow-up.prevent="decrementIndex"
                wire:keydown.backspace="resetIndex"
                wire:keydown.enter.prevent="showformation">
            <div class="input-group-append">
                <span class="input-group-text btn-catalogue" id="basic-addon2"
                    style="border-bottom-right-radius: 50rem ; border-top-right-radius: 50rem ;"><i
                        class="fa fa-search"></i></span>
            </div>
        </div>
    </form>

    @if (strlen($query) > 2)
    <div class="col-12 border rounded bg-light text-md w-56 mt-1" style="z-index: 999999; position: absolute;"
     x-show="open">
        @if(count($formations) > 0)
        @foreach($formations as $index => $formation)
            <h4  class="{{ $index === $selectedIndex  ? 'text-success' : '' }} "> {{ $formation->nom }}</h4>
            <p class="{{ $index === $selectedIndex ? 'text-success' : '' }}">{{ Str::substr($formation->description, 0, 150) }} {{ Str::length($formation->description) > 70 ? '...' : '' }}<span ></span></p>
        @endforeach
        @else
        <span class=" p-1 ">0 résultat pour "{{ $query }}"</span>
        @endif
    </div>
    @endif
</div>
