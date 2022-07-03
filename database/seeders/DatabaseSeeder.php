<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'username' => 'giuna',
            'email' => 'giuna@redberry.ge',
            'password' => Hash::make('asdasd'),
            'image' => null,
        ]);
        User::factory()->create([
            'username' => 'Lukabrazi',
            'email' => 'lukabrazi@redberry.ge',
            'password' => Hash::make('asdasd'),
            'image' => '1656802702-stickman.png',
        ]);
    }
}
