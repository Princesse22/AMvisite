<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{   protected $fillable =[
    'id',
    'nom_visiteur',
    'service',
    'objet',
    'date',
    'heure',
    'status',
];

    public function Visiteurs()
    {
        this->hasZeroOrMany(Visiteurs::class);
    }

    public function Secretaires()
    {
        return this->belongTo(Secretaires::class);
    }

    public function Responsables()
    {
        return this->hasMany(Responsables::class);
    }

}
