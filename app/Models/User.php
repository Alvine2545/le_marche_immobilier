<?php

namespace App\Models;

use App\Notifications\RegisteredUser;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable /*implements MustVerifyEmail*/
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'nameAgence',
        'password',
        'statut',
        'prenoms',
        'etatCompte',
        'photo',
        'residence',
        'titre',
        'administrateur_id',
        'telephone'
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

    public function sendEmailVerificationNotification()
    {
        $this->notify(new RegisteredUser);
    }
    //Agent créateur
    public function bienimmobiliers()
    {
        return $this->hasMany(BienImmobilier::class);
    }
    //User interesses
   /* public function bienimmobiliers()
    {
        return $this->belongsToMany(User::class, 'bien_immobilier_users', 'bien_immobilier_id', 'agent_id')->using(BienImmobilierUser::class);
    }*/
}
