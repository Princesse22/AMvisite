<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['mail' => 'admin@gmail.com'],
            [
                'nom' => 'admin',
                'password' => Hash::make('s1234'),
                'role' => 'admin',
            ]
        );
    }
}
