<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programas')->insert([
            'pro_codigo' => fake()->randomNumber(7, true),
            'pro_nombre' => 'Mantenimiento e Instalación de Sistemas Fotovoltaicos',
            'pro_nivelFormacion' => 'Técnico',
        ]);
        DB::table('programas')->insert([
            'pro_codigo' => fake()->randomNumber(7, true),
            'pro_nombre' => 'Sistemas',
            'pro_nivelFormacion' => 'Técnico',
        ]);
        DB::table('programas')->insert([
            'pro_codigo' => fake()->randomNumber(7, true),
            'pro_nombre' => 'Programación de Software',
            'pro_nivelFormacion' => 'Técnico',
        ]);
        DB::table('programas')->insert([
            'pro_codigo' => fake()->randomNumber(7, true),
            'pro_nombre' => 'Programación de Aplicaciones y Servicios para la Nube',
            'pro_nivelFormacion' => 'Técnico',
        ]);
        DB::table('programas')->insert([
            'pro_codigo' => fake()->randomNumber(7, true),
            'pro_nombre' => 'Diseño e Integración Multimedia',
            'pro_nivelFormacion' => 'Técnico',
        ]);
        DB::table('programas')->insert([
            'pro_codigo' => fake()->randomNumber(7, true),
            'pro_nombre' => 'Mantenimiento Electrónico e Instrumental Industrial',
            'pro_nivelFormacion' => 'Tecnólogo',
        ]);
        DB::table('programas')->insert([
            'pro_codigo' => fake()->randomNumber(7, true),
            'pro_nombre' => 'Análisis y Desarrollo de Software',
            'pro_nivelFormacion' => 'Tecnólogo',
        ]);
    }
}