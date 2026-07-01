<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    protected $table = 'rendez_vous';

    protected $fillable = [
        'nom',
        'cree_par',
        'service_id',
        'objet',
        'date',
        'heure',
        'nouvelle_date',
        'nouvelle_heure',
        'status',
    ];

    public function Visiteurs()
    {
        return $this->hasMany(Visiteurs::class);
    }

    public function Secretaires()
    {
        return $this->belongsTo(Secretaires::class);
    }

    public function Responsables()
    {
        return $this->hasMany(Responsables::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
