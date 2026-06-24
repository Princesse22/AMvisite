<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    protected $fillable =[
        'id',
        'nom',
        'mail',
        'phone',
        'adresse',
        'num_cni',
        'password'
    ];
public function user()
{
    return $this->belongsTo(User::class);
}
public function notifications()
{
    return $this->belongsTo(Notifications::class);
}
public function superAdmin()
{
    return $this->belongsTo(SuperAdmin::class);
}
}
