<?php

namespace App\Http\Livewire;

use App\Models\BienImmobilier;
use Livewire\Component;

class ShowOffreComponent extends Component
{
    public $bien;
    public function mount($type)
    {
        # code...
        $this->bien = BienImmobilier::find($type);
    }
    public function render()
    {
        return view('livewire.show-offre-component')->layout('layouts.index');
    }
}
