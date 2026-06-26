<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visiteurs extends Model
{
    /**
     * La table en base s'appelle "Visiteur" (et non "visiteurs"
     * comme Laravel le déduirait par convention), donc on le précise.
     */
    protected $table = 'Visiteur';

    protected $fillable = [
        'nom',
        'phone',
        'num_cni',
        'objet',
        'type_visiteur',
        'date',
        'heure',
    ];

    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }

    public function comptes()
    {
        return $this->belongsTo(Comptes::class);
    }
}
