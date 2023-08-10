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
            'com_acta' => 'Acta del comite ',
            'com_estado' => 'En proceso',
            'com_fecha' => now(),
            'com_recomendacion' => 'Sacarlo del sena es la mejor opcion',
            'sol_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
