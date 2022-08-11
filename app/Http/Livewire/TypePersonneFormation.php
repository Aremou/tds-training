<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TypePersonneFormation extends Component
{

    public $statut = "";

    public function ChangeStatutParticulier() {
        return $this->statut = 'particulier';
    }

    public function ChangeStatutEntreprise() {
        return $this->statut = 'entreprise';
    }

    public function render()
    {
        return view('livewire.type-personne-formation');
    }
}
