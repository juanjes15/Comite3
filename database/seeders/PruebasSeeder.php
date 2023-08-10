<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PruebasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pruebas')->insert([
            'pru_tipo' => 'Examen',
            'pru_descripcion' => 'Examen final de matemáticas',
            'pru_fecha' => now(),
            'pru_url' => 'https://example.com/examen.pdf',
            'sol_id' => 1, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
