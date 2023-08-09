<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articulos')->insert([
            'art_descripcion' => 'Artículo 8
            8. Deberes del aprendiz SENA. Se entiende por deber, la obligación legal, social y moral que
            compromete a la persona a cumplir con determinada actuación, asumiendo con responsabilidad todos
            sus actos, para propiciar la armonía, el respeto, la integración, el bienestar común, la sana convivencia,
            el servicio a los demás, la seguridad de las personas y de los bienes de la institución.',
            'cap_id'=> 1 ,
        ]);

        DB::table('articulos')->insert([
            'art_descripcion' => 'Artículo 9 
            Prohibiciones. Se considerarán prohibiciones para los Aprendices del SENA
            ',
            'cap_id'=> 1 ,
        ]);

        
           
    }
}
