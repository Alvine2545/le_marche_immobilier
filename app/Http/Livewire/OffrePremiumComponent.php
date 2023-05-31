<?php

namespace App\Http\Livewire;

use App\Models\Partenaire;
use Livewire\Component;

class OffrePremiumComponent extends Component
{
    public $offres;
    public function render()
    {
        $this->offres = Partenaire::all();
        return view('livewire.offre-premium-component')->layout('layouts.index');
    }
}
