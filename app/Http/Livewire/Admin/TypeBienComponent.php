<?php

namespace App\Http\Livewire\Admin;

use App\Models\TypeBien;
use Livewire\Component;

class TypeBienComponent extends Component
{
    public $types, $libelle, $updateForm, $idType;
    public function render()
    {
        $this->types = TypeBien::all();
        return view('livewire.admin.type-bien-component')->layout('layouts.index_admin');
    }

    public function addType()
    {
        $type = TypeBien::create([
            'libelle' => $this->libelle,
        ]);
        $this->libelle = '';
       // return redirect()->route('admin.type');
    }
    public function edit($id)
    {
        $this->updateForm = true;
        $a = TypeBien::find($id);
        $this->idType = $a->id;
        $this->libelle = $a->libelle;
    }
    public function delete($id){
        TypeBien::destroy($id);
        
       // $type->delete();
       // $this->render();
    }
    public function update(){
        TypeBien::where('id', $this->idType)->update(['libelle' => $this->libelle]);
        $this->libelle = '';
        $this->idType = '';
        $this->updateForm = false;
    }

}
