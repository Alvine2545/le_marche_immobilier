<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BienImmobilier extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'nbre_piece',
        'photo',
        'imagemain',
        'chambre_coucher',
        'salle_bain',
        'wc',
        'status',
        'surface_totale',
        'surface_habitable',
        'departement',
        'ville',
        'prix_min',
        'prix_max',
        'adresse',
        'prix_nuit',
        'document_complementaire',
        'parking',
        'piscine',
        'jardin',
        'climatiseur',
        'gaz',
        'chauffage',
        'surveillance',
        'internet',
        'plage',
        'premium',
        'autres',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'bien_immobilier_users', 'bien_immobilier_id', 'user_id')->using(BienImmobilierUser::class)->withPivot('agent_id');
    }
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function typebien()
    {
        return $this->belongsTo(TypeBien::class);
    }
    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }
}
