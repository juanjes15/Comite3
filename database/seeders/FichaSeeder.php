<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FichaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fichas')->insert([
            'fic_codigo' => fake()->randomNumber(7, true),
            'fic_inicioLectiva' => fake()->date(),
            'fic_finLectiva' => fake()->date(),
            'fic_inicioProductiva' => fake()->date(),
            'fic_finProductiva' => fake()->date(),
            'fic_modalidad' => 'Presencial',
            'fic_jornada' => 'Diurna',
            'pro_id' => fake()->numberBetween(1, 7),
        ]);
    }
}