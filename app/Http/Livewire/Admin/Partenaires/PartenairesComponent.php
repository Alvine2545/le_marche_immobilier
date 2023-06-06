<?php

namespace App\Http\Livewire\Admin\Partenaires;

use App\Mail\OffrePartenaireMail;
use App\Models\Offre;
use App\Models\Partenaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class PartenairesComponent extends Component
{
    use WithFileUploads;
    public $partenaires;
    public $nom, $logo, $description, $site, $adresse, $tel, $ifu, $email;
    public function render()
    {
        $this->partenaires = Partenaire::all();
        return view('livewire.admin.partenaires.partenaires-component')->layout('layouts.index_admin');
    }
    public function storeOffre($id){
        Partenaire::where('id', $id)->update(['status' => true]);
        //Offre::where('id', $id)->update(['status', true]);
        $a = Partenaire::find($id);
        $type = 'accept';
        Mail::to("projetdevs@gmail.com")->send(new OffrePartenaireMail($a->name, $a->email, $type));
        //
        session()->flash('approuver', 'Demande approuvée avec success.');
    }
    public function rejet($id)
    {
        $a = Partenaire::find($id);
        $type = 'rejet';
        Mail::to("projetdevs@gmail.com")->send(new OffrePartenaireMail($a->name, $a->email, $type));
        $a->delete();
        session()->flash('rejetter', 'Demande rejettée avec success.');
    }
    public function delete($id)
    {
        $a = Partenaire::find($id); 
        $type = 'delete';
        Mail::to("projetdevs@gmail.com")->send(new OffrePartenaireMail($a->name, $a->email, $type));
        $a->forceDlete();
        session()->flash('supprimer', 'Demande rejettée avec success.');
    }

    //New partner
    public function store(){
        $path = $this->logo->store('partenaires', 'public');
        Partenaire::updateOrCreate(
            ['name' => $this->nom],
            ['description' => $this->description, 'administrateur_id' => Auth::user()->id, 'logo' => $path, 'tel' => $this->tel, 'adresse' => $this->adresse, 'ifu' => $this->ifu, 'site' => $this->site, 'email' => $this->email]
        );
        $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Demande envoyer avec succes. Vous recevrez un mail de confirmation dans quelques jours.']);
        //session()->flash('add', 'Demande envoyer avec succes. Vous recevrez un mail de confirmation dans quelques jours.');
        return redirect()->to('/admin/partenaires');
    }
}
