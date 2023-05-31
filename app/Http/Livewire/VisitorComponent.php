<?php

namespace App\Http\Livewire;

use App\Models\Actualité;
use App\Models\BienImmobilier;
use App\Models\Partenaire;
use App\Models\Sponsor;
use Livewire\Component;

class VisitorComponent extends Component
{
    public $sponsor, $parteners, $anonces, $actualites, $allactualites, $liste = false;
    public function render()
    {
        $this->sponsor = Sponsor::latest()->first();
        $this->parteners = Partenaire::all()->sortByDesc('created_at');
        $this->anonces = BienImmobilier::all()->sortByDesc('created_at')->take(4);
        $this->actualites = Actualité::all()->sortByDesc('created_at')->take(2);
        return view('livewire.visitor-component')->layout('layouts.index');
    }
    public function allActualite()
    {
        $this->liste = true;
        
        $this->allactualites = Actualité::all()->sortByDesc('updated_at');
    }

}
