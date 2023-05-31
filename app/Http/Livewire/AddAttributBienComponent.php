<?php

namespace App\Http\Livewire;

use App\Models\Caracteristique;
use App\Models\CaracteristiqueTypeBien;
use App\Models\TypeBien;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use Illuminate\Database\Query\Builder;
use Doctrine\DBAL\Driver\AbstractMySQLDriver;
use Illuminate\Database\Schema\Blueprint;

class AddAttributBienComponent extends Component
{
    public $colonnes, $nom, $description, $types, $a, $biens, $bien;
    public function render()
    {
       // $this->colonnes =DB::select(DB::raw('DESCRIBE bien_immobiliers'));
       $this->colonnes = Caracteristique::all();
       $this->biens = TypeBien::all();
        return view('livewire.add-attribut-bien-component')->layout('layouts.index_admin');
    }
    public function store()
    {
        $nomAttribut = $this->nom;
        $typeAttribut = $this->types;

        // Vérifier si l'attribut n'existe pas déjà
        $table = 'bien_immobiliers';
        $colonnes = Schema::getColumnListing('bien_immobiliers');
        if (in_array($this->nom, $colonnes)) {
            return back();
        }

        // Ajouter la colonne à la table
        Schema::table('bien_immobiliers', function (Blueprint $table) use ($nomAttribut, $typeAttribut) {
            $table->$typeAttribut($nomAttribut)->nullable();
        });
        $carac = Caracteristique::create([
            'nom' => $this->nom,
            'description' => $this->description,
            'type' => $this->types,
        ]);
        $bien = TypeBien::find($this->bien);
        $bien->caracteristique()->attach($carac->id);

        $this->render();
    }

    public function update($id)
    {
        
    }
    public function delete($id)
    {
        $tabl = Caracteristique::find($id);
        $this->a = $tabl->nom;
        Schema::table('bien_immobiliers', function ($table) {
                $table->dropColumn($this->a);
            });
        $tabl->delete();
        $tabl->type_bien()->detach($this->bien);
        $this->render();
    }
}
