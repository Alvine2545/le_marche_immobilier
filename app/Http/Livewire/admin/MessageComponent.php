<?php

namespace App\Http\Livewire\Admin;

use App\Models\Message;
use App\Models\TypeBien;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class MessageComponent extends Component
{
    public $messages;
    public function render()
    {
        $this->messages = Message::all();
        return view('livewire.admin.message-component')->layout('layouts.index_admin');
    }
    public function delete($id){
       Message::destroy($id);
       
    }
    public function archive($id)
    {
        # code...
    }
    
}
