<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comites')->insert([
            'com_fechaSolicitud' => fake()->date(),
            'com_descripcionSolicitud' => fake()->date(),
            'fic_inicioProductiva' => fake()->date(),
            'fic_finProductiva' => fake()->date(),
            'fic_modalidad' => 'Presencial',
            'fic_jornada' => 'Diurna',
            'pro_id' => fake()->numberBetween(1, 7),
        ]);
    }
}
