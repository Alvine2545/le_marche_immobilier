<?php

namespace App\Http\Livewire\Admin;

use App\Models\Actualité;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Livewire;
use Livewire\WithFileUploads;
class ActualitesComponent extends Component
{
    use WithFileUploads;
    public $actualites, $content, $file, $findActualite, $ref;
    public $createMode = false, $updateMode = false, $listMode = true;
    public $actualiteState = [], $admin = [];

    protected $rules = [
        'file' => 'image|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi|max:2048', // si type=image
        'content' => 'required',
        'ref' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function mount()
    {
        $this->actualites = Actualité::all();
        foreach ($this->actualites as $value) {
            $id = Actualité::find($value['id']);
            $this->admin[] = $id->administrateur->name;
        }
        // $this->content = 'Contenu par défaut';
        // $this->dispatchBrowserEvent('editorInitialized');
    }
    protected function resetInputFields()
    {
        $this->reset('actualiteState');
        $this->file = '';
        $this->content = '';
        $this->ref = '';
    }
    public function closeForm(){
        $this->resetInputFields();
        $this->createMode = false;
        $this->updateMode = false;
        $this->listMode = true;
    }
    public function create()
    {
        $this->emit('itemAdded');
        $this->resetInputFields();
        $this->createMode = true;
        $this->listMode = false;
    }

    public function updatedPhoto()
    {
        $this->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi|max:2048', // si type=image
        ]);
    }
    
    public function store(){
         $this->validate([
             'file' => 'image|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi|max:2048', // si type=image
             'content' => 'required',
             'ref' => 'required'
         ]);
        // $validatedData = $this->validate(
        //     [['file' => 'image|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi|max:2048'],
        //     [
        //         'file.mimes' => 'Veillez choisir un type de fichier covenable ',
        //         'file.max' => 'Le fichier doit peser moins de 1Mo.',
        //     ],
        //     ['content' => 'required'],
        //     [
        //         'content.required' => 'Le champ ne doit pas être vide.',
        //     ]
        //     ]
        // );
        $actualite = new Actualité;
        if (isset($this->file)) {
            $image = $this->file->store('ActualitePhotos', 'public');
            $actualite->photo = $image;
        }     
        $actualite->description = $this->content;
        $actualite->reference = $this->ref;
        $actualite->administrateur_id = Auth::user()->id;
        $actualite->save();
        return redirect('admin/actualites')->with('status', 'Enregistrer avec success');
    }
    public function store_and_pub()
    {
        $this->validate([
        'file' => 'image|mimes:jpeg,png,jpg,gif,svg,mp4,mov,avi|max:2048', // si type=image
        'content' => 'required',
        'ref' => 'required'
    ]);
        $actualite = new Actualité;
        if (isset($this->file)) {
            $image = $this->file->store('ActualitePhotos', 'public');
            $actualite->photo = $image;
        }     
        $actualite->description = $this->content;
        $actualite->statut = true;
        $actualite->reference = $this->ref;
        $actualite->administrateur_id = Auth::user()->id;
        $actualite->save();
        return redirect('admin/actualites')->with('status', 'Enregistrer et publier avec success');
    }
    public function pub($id){
        Actualité::where('id', $id)->update(['statut' => true]);
        return redirect('admin/actualites')->with('publication', 'Actualité publier avec succes');
    }
    public function show($id)
    {
        $this->findActualite = Actualité::find($id);
        $this->content = htmlspecialchars_decode($this->findActualite->description);
        $this->ref = $this->findActualite->reference;
        //dd($this->findActualite->id);
    }
    public function delete($id)
    {
        Actualité::destroy($id);
        session()->flash('delete', 'Suppression effectuée avec success');
        return redirect()->to('admin/actualites');
    }
    public function update($id)
    {
        $this->emit('itemAdded');
        $this->updateMode = true;
        $this->listMode = false;
        $actualite = Actualité::find($id);
        $this->ref = $actualite->reference;
        $this->content = htmlspecialchars_decode($actualite->description);
        //$this->file = $actualite->photo;
    }
    public function edit($id)
    {
        Actualité::where('id', $id)
        ->update(['description' => $this->content,
                    'reference' => $this->ref
                ]);
        session()->flash('update', 'Modification effectuée avec success');
        return redirect()->to('admin/actualites');
    }
    public function render()
    {
        return view('livewire.admin.actualites-component')->layout('layouts.index_admin');
    }
}
