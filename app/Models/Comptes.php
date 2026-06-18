<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comptes extends Model
{
    protected $fillable=[
    'id',
    'phone',
    ];
    public function Visiteurs()
    {
        return this->belongTo(Visiteurs::class);
    }
}
