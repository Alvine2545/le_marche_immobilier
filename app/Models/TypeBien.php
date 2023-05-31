<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBien extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
    ];
    public function bienimmobiliers()
    {
        return $this->hasMany(BienImmobilier::class);
    }
    public function caracteristique()
    {
        return $this->belongsToMany(Caracteristique::class, 'caracteristique_type_biens');
    }
}
