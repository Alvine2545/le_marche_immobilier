<?php

namespace App\Http\Livewire;

use App\Models\BienImmobilier;
use App\Models\BienImmobilierUser;
use Illuminate\Support\Facades\Auth;
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
     public function interested()
     {
        dd("fghjk");
        $a = BienImmobilierUser::create([
            'user_id' =>Auth::user()->id,
            'bien_immobilier_id' => $this->bien->id,
        ]);
        dd($a);
        return back();
     }
}
