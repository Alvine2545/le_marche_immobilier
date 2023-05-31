<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caracteristique extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'type',
        'description',
    ];
    public function type_bien()
    {
        return $this->belongsToMany(TypeBien::class, 'caracteristique_type_biens');
    }
}
