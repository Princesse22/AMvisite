<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    protected $fillable =[
        'id',
        'message',
        'service',
    ];
        public function Responsables()
    {
        return this->belongTo(Responsables::class);
    }
        public function Admins()
    {
        return this->belongTo(Admins::class);
    }
        public function Secretaires()
    {
        return this->belongTo(Secretaires::class);
    }
        public function SuperAdmin()
    {
        return this->belongTo(SuperAdmin::class);
    }
}
