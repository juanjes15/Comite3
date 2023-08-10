<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitudComiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('solicitud_comite')->insert([
            'sol_fecha' => now(),
            'sol_lugar' => 'Ambiente',
            'sol_asunto' => 'Revisión de políticas de prevención de violencia verbal',
            'sol_motivo' => 'Agresion verbal',
            'sol_estado' => 'Pendiente', 
            'ins_id' => 1, 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}