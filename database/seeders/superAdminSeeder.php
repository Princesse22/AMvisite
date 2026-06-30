<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class superAdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'nom' => 'princesse',
            'mail' => 'princesse@gmail.com',
            'password' => Hash::make('s123'),
            'role' => 'super_admin',
        ]);
    }
}
