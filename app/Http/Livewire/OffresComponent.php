<?php

namespace App\Http\Livewire;

use App\Models\Offre;
use App\Models\Partenaire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class OffresComponent extends Component
{
    use WithFileUploads;
    public $offres;
    public $name, $logo, $description, $site, $adresse, $tel, $ifu, $email;
    public $showOffre = true, $showForm = false;
    public function render()
    {
        $this->offres = Partenaire::all();
            //dd($this->offres );
        return view('livewire.offres-component')->layout('layouts.index');
    }
    public function showOffres()
    {
        
        
    }
    public function becomePartenaire()
    {
        # code...
        $this->showOffre = false;
        $this->showForm = true;
    }
    public function store(){
        $path = $this->logo->store('partenaires', 'public');
        Partenaire::updateOrCreate(
            ['name' => $this->name],
            ['description' => $this->description, 'administrateur_id' => 0, 'logo' => $path, 'tel' => $this->tel, 'adresse' => $this->adresse, 'ifu' => $this->ifu, 'site' => $this->site, 'email' => $this->email]
        );
        // Offre::updateOrCreate(
        //     ['titre' => $this->name],
        //     ['description' => $this->description, 'logo' => $path, 'site' => $this->site]
        // );
        $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Demande envoyer avec succes. Vous recevrez un mail de confirmation dans quelques jours.']);
        //session()->flash('add', 'Demande envoyer avec succes. Vous recevrez un mail de confirmation dans quelques jours.');
        return redirect()->to('/offres');
    }
}
