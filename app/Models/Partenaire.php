<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partenaire extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name',
        'adresse',
        'ifu',
        'tel',
        'site',
        'email',
        'logo',
        'description',
        'status',
        'administrateur_id',
    ];
    public function administrateur()
    {
        return $this->belongsTo(Administrateur::class);
    }
}
