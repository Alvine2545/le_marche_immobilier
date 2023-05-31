<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Administrateur extends Authenticatable
{
    use HasFactory, HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'adresse',
        'bio',
        'photo',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function actualites()
    {
        return $this->hasMany(Actualité::class);
    }
    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }
    public function bienimmobiliers()
    {
        return $this->hasMany(BienImmobilier::class);
    }

    public function partenaires()
    {
    }
}
