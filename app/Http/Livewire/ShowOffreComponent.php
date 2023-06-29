<?php

namespace App\Http\Livewire;

use App\Models\BienImmobilier;
use App\Models\BienImmobilierUser;
use App\Models\Caracteristique;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ShowOffreComponent extends Component
{
    public $bien;
    public function mount($type)
    { 
        # code...
        $this->bien = BienImmobilier::find($type);
        $aa = DB::table('caracteristique_type_biens')->join('caracteristiques', 'caracteristique_type_biens.caracteristique_id', 'caracteristiques.id')
        ->join('type_biens', 'caracteristique_type_biens.type_bien_id', 'type_biens.id')
        ->where('caracteristique_type_biens.type_bien_id', $this->bien->type_id)
        ->where('caracteristiques.showC', true)->select('caracteristiques.*')->get();
        //dd($aa[1]->nom);
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
