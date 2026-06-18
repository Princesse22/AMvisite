<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaires extends Model
{
    protected $fillable=[
        'id',
        'nom',
        'mail',
        'phone',
        'adresse',
        'num_cni',
        'mot_de_passe'
    ];
    public function RendezVous()
    {
        return this->hasMany(RendezVous::class);
    }
        public function User()
    {
        return this->belongTo(User::class);
    }
            public function Notifications()
    {
        return this->belongTo(Notifications::class);
    }
}
