<?php

namespace App\Http\Livewire\Admin\Profil;

use Livewire\Component;

class AdminProfilComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.profil.admin-profil-component')->layout('layouts.index_admin');
    }
}
