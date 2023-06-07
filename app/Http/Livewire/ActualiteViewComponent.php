<?php

namespace App\Http\Livewire;

use App\Models\Actualité;
use Livewire\Component;

class ActualiteViewComponent extends Component
{
    public $actu, $actualites;
    public function mount()
    {
        $this->actu = Actualité::find(1);
        $this->actualites = Actualité::all();
    }
    public function render()
    {
        return view('livewire.actualite-view-component')->layout('layouts.index');
    }

    public function details($id)
    {
        $this->actu = Actualité::find($id);
        $this->redirect(route('details', $id));
    }

    public function scrollToArticle($articleId)
{
    $this->scrollToElement("article-{$articleId}");
}

public function scrollToElement($elementId)
{
    $this->dispatchBrowserEvent('scroll-to-element', ['elementId' => $elementId]);
}

}
