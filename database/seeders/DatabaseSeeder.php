<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'Nombre' => 'User',
             'Ciudad' => 'city',
             'Correo' => 'test@example.com',
             'Celular' => '6671234567'
         ]);
    }
}
