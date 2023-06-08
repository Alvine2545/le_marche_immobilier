<?php

namespace App\Http\Livewire\Admin;

use App\Models\Administrateur;
use App\Models\BienImmobilier;
use App\Models\Partenaire;
use App\Models\Sponsor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;

class AdminHomeComponent extends Component
{
    use WithFileUploads;
    public $users, $admins;
    public $partners;
    public $bienenvente;
    public $bienenlocation;
    public $identifiant, $logoSociete, $nom, $description;
    public function messages()
{
    return [
        'nom.required' => 'Le champ Email est obligatoire.',
        'logoSociete.required' => 'Le champ Email est obligatoire.',
    ];
}
public function mount()
{
    $sponsor = Sponsor::latest()->first();
        if ($sponsor == null) {
            $this->description = '';
            $this->nom = '';
            $this->logoSociete ='';
        } else {
            $this->description = $sponsor->description;
            $this->nom = $sponsor->name;
            $this->logoSociete = $sponsor->logo;
            $this->identifiant = $sponsor->id;
        }
}
    public function render()
    {
        $this->users = User::all();
        $this->partners = Partenaire::all();
        $this->admins = Administrateur::all();
        // $sponsor = Sponsor::latest()->first();
        // if ($sponsor == null) {
        //     $this->description = '';
        //     $this->nom = '';
        //     $this->logoSociete ='';
        // } else {
        //     $this->description = $sponsor->description;
        //     $this->nom = $sponsor->name;
        //     $this->logoSociete = $sponsor->logo;
        // }
        
        
        $this->bienenlocation = BienImmobilier::where('categorie_id', 2)->get();
        $this->bienenvente = BienImmobilier::where('categorie_id', 1)->get();
        return view('livewire.admin.admin-home-component')->layout('layouts.index_admin');
    }
    public function store(){
        $this->validate(
            ['nom' => 'required',
            'logoSociete' => 'required',]
        );
        
        // if(file_exists($this->logoSociete)){
        //     unlink($this->logoSociete);
        // }
        $path = $this->logoSociete->store('sponsors', 'public');
        Sponsor::destroy($this->identifiant);
        Sponsor::updateOrCreate(
            ['name' => $this->nom],
            ['description' => $this->description, 'administrateur_id' => Auth::user()->id, 'logo' => $path]
        );
        $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Enregistré avec succès!']);
        //session()->flash('add', 'Modifier avec success');

    }
}
