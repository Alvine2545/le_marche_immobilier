<?php

namespace App\Http\Livewire\Admin\Immobilier;

use App\Models\BienImmobilier;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BienImmobilierComponent extends Component
{
    public $biens, $users = [];
    public function render()
    {
        $this->biens = BienImmobilier::all(); 
        foreach ($this->biens as $value) {
            $a = BienImmobilier::find($value->id);
            if($a->user->titre == 'Agence Immobiliere'){
                $this->users[] = $a->user->nameAgence;
            }else{
                $this->users[] = $a->user->name.' '.$a->user->prenoms;
            }
            
        }
        return view('livewire.admin.immobilier.bien-immobilier-component')->layout('layouts.index_admin');
    }
    
    //Validation
    public function validateOffre($id)
    {
        $a = BienImmobilier::where('id', $id)->update([
            'administrateur_id' => Auth::user()->id,
            'status' =>true
        ]);
    }
    //Modification
    public function update($id)
    {
        
    }
    //Suppression
    public function delete($id)
    {
        BienImmobilier::destroy($id);
    }

    //Send mail

}
