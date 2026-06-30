<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';

    protected $fillable = [
        'nom',
        'mail',
    ];

    public function rendezVous()
    {
        return $this->hasMany(RendezVous::class);
    }
    public function User()
    {
        return $this->hasMany(User::class);
    }
}

