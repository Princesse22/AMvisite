<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SuperAdmin extends Model
{
    protected $fillable = [
    'id',
    'nom',
    'mail',
    'phone',
    'adresse',
    'num_cni',
    'password'
    ];
        public function Admins()
    {
        return this->hasMany(Admins::class);
    }
         public function Notifications()
    {
        return this->hasMany(Notifications::class);
    }
}
