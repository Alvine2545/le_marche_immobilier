<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'status',
        'logo',
        'lien',
    ];
    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function type_bien()
    {
        return $this->belongsTo(TypeBien::class);
    }

}
