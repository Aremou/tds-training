<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Formation;

class Search extends Component
{
    public string $query = '';

    public $formations = [];

    public Int $selectedIndex = 0;

    public function incrementIndex() {
        if($this->selectedIndex == count($this->formations) - 1){
            $this->selectedIndex = 0;
            return;
        }
        $this->selectedIndex++;
    }

    public function decrementIndex() {
        if ($this->selectedIndex == 0){
            $this->selectedIndex = (count($this->formations) - 1);
        }
        $this->selectedIndex--;
    }


    public function showformation() {
        // dd($this->formations[$this->selectedIndex]->categorie->nom);
        if(count($this->formations) > 0){
            return redirect()->route('root_detail_formations', [$this->formations[$this->selectedIndex]->categorie->slug, $this->formations[$this->selectedIndex]->slug]);
        }
    }



    public function updatedQuery() {
        // stocker dans une variable et accepter le terme qui sont au tour du mot clé
        $words= '%' . $this->query . '%';
        // fin

        if (strlen($this->query) > 2) {
            $this->formations = Formation::where('nom', 'like', $words)
            ->orwhere('description', 'like', $words)
            ->get();
            // dd($this->formations);
        }
    }

    public function resetIndex() {
        $this->reset('selectedIndex');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
