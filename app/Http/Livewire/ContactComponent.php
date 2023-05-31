<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class ContactComponent extends Component
{
    public $email;
    public $phone;
    public $first_name, $surname;
    public $comments;

    protected $rules = [
        'email' => 'required|email',
        'comments' => 'required|min:3',
        'first_name' => 'required|min:3',
        'surname' => 'required|min:3',
        'phone' => 'required|numeric',
    ];
 
    protected $messages = [
        'email.required' => 'Ce champ est obligatoire.',
        'email.email' => 'Entrez une adresse email valide.',

        'comments.required' => 'Ce champ est obligatoire.',
        'comments.min' => 'Ce champ doit contenir du text.',

        'first_name.required' => 'Ce champ est obligatoire.',
        'first_name.min' => 'Ce champ doit contenir 3 lettres au minimmum.',

        'surname.required' => 'Ce champ est obligatoire.',
        'surname.min' => 'Ce champ doit contenir 3 lettres au minimmum.',

        'phone.required' => 'Ce champ est obligatoire.',
        'phone.numeric' => 'Ce champ doit contenir des chiffes.',
        'phone.max' => 'Ce champ ne peut contenu 8 chiffres au maximun',
    ];
 
    protected $validationAttributes = [
        'email' => 'email address',
        'comments' => 'Commentaire',
        'phone' => 'Téléphone',
        'first_name' => 'Nom',
        'surname' => 'Prénom'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.index');
    }

    public function sendMessage()
    {
        # code...
        $validateMessage = $this->validate();
        Message::create([
            'nom_prenom' => $this->first_name.' '.$this->surname,
            'telephone' => $this->phone,
            'email' => $this->email,
            'contenu' => $this->comments,
        ]);
        $this->dispatchBrowserEvent('alert', 
                ['type' => 'success',  'message' => 'Message envoyer avec succès!']);
        return redirect()->to('/');
       // session()->flash('message', 'Message envoyer avec succès!');
    }
}
