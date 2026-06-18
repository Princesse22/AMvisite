<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visiteurs extends Model
{
    protected $fillable = [
        'nom',
        'phone',
        'num_cni',
        'objet',
        'type_visiteur',
        'date',
        'heure'
    ];
    public function RendezVous()
    {
        return this->hasMany(RendezVous::class);
    }
        public function Comptes()
    {
        return this->belongTo(Comptes::class);
    }
}
