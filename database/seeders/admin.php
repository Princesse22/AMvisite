<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name' => 'princessea',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('s1234'),
            'role' => 'admin',
        ]);
    }
}
