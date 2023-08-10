<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SolicitudXAprendizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('solicitud_x_aprendiz')->insert([
            [
                'sol_id' => 1, 
                'apr_id' => 1, 
            ],
        ]);
    }
}
