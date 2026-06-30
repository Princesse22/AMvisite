<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{   protected $fillable =[
    'id',
    'visiteur_id',
    'cree_par',
    'destinataire',
    'objet',
    'date',
    'heure',
    'nouvelle_date',
    'nouvelle_heure',
    'created_at',
    'status',
];

    public function Visiteurs()
    {
        return $this->hasZeroOrMany(Visiteurs::class);
    }

    public function Secretaires()
    {
        return $this->belongTo(Secretaires::class);
    }

    public function Responsables()
    {
        return $this->hasMany(Responsables::class);
    }
    public function service()
    {
        return this->belongto(service::class);
    }

}
