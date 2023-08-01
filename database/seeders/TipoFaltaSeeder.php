<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoFaltaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Academico',
            'tpf_calificacion' => 'Leve',

        ]);


    }}
