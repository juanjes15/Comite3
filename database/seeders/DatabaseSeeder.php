<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Numeral;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            _CapituloSeeder::class,
            ArticuloSeeder::class,
            AdminUserSeeder::class,
            ProgramaSeeder::class,
            FichaSeeder::class,
            AprendizSeeder::class,
            NumeralSeeder::class,
            InstructorsSeeder::class,
            SolicitudComiteSeeder::class,
            ComiteSeeder::class,
            PruebasSeeder::class,
            SolicitudXAprendizSeeder::class,
            
        ]);
    }
}
