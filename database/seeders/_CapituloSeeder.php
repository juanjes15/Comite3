<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class _CapituloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('capitulos')->insert([
            'cap_descripcion' => 'CAPÍTULO VI. FALTAS ACADÉMICAS Y DISCIPLINARIAS',
        ]);
           
    }
}
