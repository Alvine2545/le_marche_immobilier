<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class AchatComponent extends Component
{
    public function render()
    {
        return view('livewire.users.achat-component')->layout('layouts.index_users');
    }
}
