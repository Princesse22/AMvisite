<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visiteurs extends Model
{
    protected $table = 'Visiteurs';

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
}
