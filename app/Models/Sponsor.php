<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'logo',
        'description',
        'administrateur_id',
    ];
 
    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }
}
