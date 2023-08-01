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
            'tpf_observacion' => 'Aprendiz agredio verbalmente a un instructor ',
            'tpf_numero' => 'Capitulo IV',
            'tpf_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones.',
            'tpf_tipo' => 'Grave',
        ]);
    }
}
