<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de tener esta línea de importación

class AprendizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aprendizs')->insert([
            'apr_identificacion' => '1234567890',
            'apr_nombres' => 'Nombre',
            'apr_apellidos' => 'Apellido',
            'apr_email' => 'correo@example.com',
            'apr_telefono' => '123456789',
            'apr_direccion' => 'Dirección de ejemplo',
            'apr_fechaNacimiento' => '1990-01-01',
            'fic_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
