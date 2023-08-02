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
            'tpf_tipofalta' => 'Faltas',
            'tpf_calificacion' => 'Leve',
        ]);

        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Faltas',
            'tpf_calificacion' => 'Grave',
        ]);

        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Faltas',
            'tpf_calificacion' => 'Gravisima',
        ]);

        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Faltas Academicas',
            'tpf_calificacion' => 'leve',
        ]);

        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Faltas Academicas',
            'tpf_calificacion' => 'Grave',
        ]);

        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Faltas Academicas',
            'tpf_calificacion' => 'Gravisima',
        ]);

        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Faltas Disciplinarias',
            'tpf_calificacion' => 'leve',
        ]);

        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Faltas Disciplinarias',
            'tpf_calificacion' => 'Grave',
        ]);

        DB::table('tipofaltas')->insert([

            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Faltas Academicas y Disciplinarias',
            'tpf_tipofalta' => 'Faltas Disciplinarias',
            'tpf_calificacion' => 'Gravisima',
        ]);


    }}
