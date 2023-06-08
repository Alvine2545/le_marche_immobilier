<?php

namespace App\Http\Livewire\Admin;

use App\Mail\InvitationMail;
use App\Mail\OffrePartenaireMail;
use App\Models\Administrateur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class AdministrateurComponent extends Component
{
    public $name, $email, $admins;
    public function render()
    {
        $this->admins = Administrateur::all();
        return view('livewire.admin.administrateur-component')->layout('layouts.index_admin');
    }
    public function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
    }
    public function edit($id){
        $admin = Administrateur::find($id);
        $this->name = $admin->name;
        $this->email = $admin->email;
    }

    public function update($id){
        $admin = Administrateur::find($id);
        $admin->update([
            'name' => $this->name,
            'email' => $this->email,
            'email_verified_at' => null,
        ]);
    }
    public function delete($id)
    {
        Administrateur::find($id)->delete();
        
    }
    public function store()
    {
        $pwd = str::random(9);
        $type = "admin";
        $admin = Administrateur::create(
            [
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($pwd),
            ]);
            Mail::to("projetdevs@gmail.com")->send(new InvitationMail($admin->name, $admin->email, $pwd, $type));
    }
}
