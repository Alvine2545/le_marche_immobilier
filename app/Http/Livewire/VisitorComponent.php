<?php

namespace App\Http\Livewire;

use App\Models\Actualité;
use App\Models\BienImmobilier;
use App\Models\Partenaire;
use App\Models\Sponsor;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class VisitorComponent extends Component
{
    public $selectedArticleId = null, $selectedNewsId;
    public $sponsor, $parteners, $anonces, $actualites, $allactualites, $liste = false;
    public function render()
    {
        $this->sponsor = Sponsor::latest()->first();
        $this->parteners = Partenaire::all()->sortByDesc('created_at');
        $this->anonces = BienImmobilier::all()->sortByDesc('created_at')->take(4);
        $this->actualites = Actualité::all()->sortByDesc('created_at')->take(2);
        return view('livewire.visitor-component')->layout('layouts.index');
    }
    public function showA()
    {
        $this->liste = true;
        $this->selectedNewsId = true;
        $this->allactualites = Actualité::all()->sortByDesc('updated_at');
        $this->dispatchBrowserEvent('scrollToElement');
    }
    public function redirectToActualite()
    {
        //$this->liste = true;
        //$this->allactualites = Actualité::all()->sortByDesc('updated_at');
        return redirect()->route('show-actualite');
    }

    

    public function redirectToDetailsPage($id)
    {
        return redirect()->route('details', $id);

        //return Redirect::to('/details/1#article-' . $id);
    }

}
