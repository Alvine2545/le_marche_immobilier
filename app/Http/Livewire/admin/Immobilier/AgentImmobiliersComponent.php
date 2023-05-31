<?php

namespace App\Http\Livewire\Admin\Immobilier;

use App\Mail\InvitationMail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\Component;

class AgentImmobiliersComponent extends Component
{
    use WithFileUploads;
    public $users, $form, $status, $nom, $prenom, $name, $email, $phone, $adresse, $photo;
    public function render()
    {
        $this->users = User::all();
        return view('livewire.admin.immobilier.agent-immobiliers-component')->layout('layouts.index_admin');
    }
    public function new()
    {
        $this->form = true;
    }
    public function resetForm()
    {
        $this->form = false;
    }
    public function addUser()
    { $pwd = "password" /*str::random(9)*/;
        $type = "user";
        //dd($this->photo);
        $path = $this->photo->store('partenaires', 'public');
        $user = User::Create(
            ['nameAgence' => $this->name, 
            'name' => $this->nom,
            'prenoms' => $this->prenom,
            'administrateur_id' => Auth::user()->id, 
            'photo' => $path, 
            'telephone' => $this->phone,
            'residence' => $this->adresse, 
            'titre' => $this->status,
            'etatCompte' => true, 
            'email' => $this->email,
            'password' => Hash::make($pwd),
            ]
        );
        $name = $user->nameAgence.' '.$user->name.' '.$user->prenoms;
        $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Enregistrement éffectué avec succès. Un mail de connexion sera envoyé.']);
        Mail::to("projetdevs@gmail.com")->send(new InvitationMail($name, $user->email, $pwd, $type));
        $this->resetForm();
        return redirect()->to('/admin/immobiliers');
    }

    public function edit($id){
        $user = User::find($id);
        $this->name = $user->nameAgence;
        $this->nom = $user->name;
        $this->adresse = $user->residence;
        $this->phone = $user->telephone;
        $this->email = $user->email;
    }

    public function update($id){
        $user = User::find($id);
        $user->update([
            'nameAgence' => $this->name, 
            'name' => $this->nom,
            'prenoms' => $this->prenom,
            'administrateur_id' => Auth::user()->id, 
            'telephone' => $this->phone,
            'residence' => $this->adresse, 
            'titre' => $this->status,
            'statut' => true, 
            'email' => $this->email,
        ]);
    }
    public function delete($id)
    {
        User::find($id)->delete();
        
    }
}
