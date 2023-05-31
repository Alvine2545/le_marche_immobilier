<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualité extends Model
{
    use HasFactory;

    protected $fillable = [
        'statut',
        'photo',
        'description',
        'reference',
    ];
    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }
}
