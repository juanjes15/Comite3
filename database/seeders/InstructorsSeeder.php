<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('instructors')->insert([
            'ins_identificacion' => '123456789',
            'ins_nombres' => 'Pedro',
            'ins_apellidos' => 'Gomez',
            'ins_email' => 'Alejandro@codes.com',
            'ins_telefono' => '1234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
