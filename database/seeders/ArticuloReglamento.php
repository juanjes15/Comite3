<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticuloReglamento extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 25.',
            'arti_descripcion' => 'Se consideran faltas las acciones u omisiones que alteran el normal desarrollo de la
            formación, la convivencia en la comunidad educativa, el desempeño académico de sus compañeros, y
            que al presentarse originan la necesidad de una medida formativa y/o sancionatoria.',
            'arti_prohibiciones',
            'arti_deberes',
            'tpf_id'=> '1',
        ]);

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 26.',
            'arti_tipo' => 'Faltas Academicas',
            'arti_descripcion' => 'Están relacionadas directamente con las actuaciones u omisiones del
            aprendiz con relación al cumplimiento de los deberes de índole académico. Al presentarse la falta, se
            aplican medidas formativas o sancionatorias.',
            'tpf_id'=> '1',
        ]);

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_tipo' => 'Faltas  Disciplinarias',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'tpf_id'=> '1',
        ]);

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 28.',
            'arti_tipo' => 'Calificacion de las faltas',
            'arti_descripcion' => 'Las faltas académicas y disciplinarias deben calificarse como:
                - Leves.
                - Graves, o
                - Gravísimas.
                La calificación de las faltas corresponde a las circunstancias que hayan sido previstas para su realización
                de acuerdo a los derechos, deberes y prohibiciones, por consiguiente es importante considerar su
                naturaleza, modalidad, y efecto determinante, toda vez que genera mayor grado de clasificación
                provisional cuando:
                a) Reincide en la comisión de las faltas.
                b) Comete la falta para ocultar otra.
                c) La falta implica una conducta que recae sobre los bienes o recursos destinados a actividades de
                utilidad común o a la satisfacción de necesidades básicas de una colectividad.
                d) Ejecuta la falta por motivo de una recompensa o promesa remuneratoria.
                e) La conducta contraria a la vida institucional es aquella que está inspirada en móviles de intolerancia
                y discriminación.
                f) Emplea en la ejecución de la falta un medio de cuyo uso pueda resultar de peligro común.
                g) Comete la falta mediante ocultamiento, o aprovechando circunstancias de tiempo, modo, lugar que
                dificulten la defensa del ofendido o la identificación del autor o partícipe.
                i) Hace más nocivas las consecuencias de la conducta contraria a la vida institucional.
                j) Ejecuta la falta con quebrantamiento de los deberes sociales.
                Parágrafo. Aquellas conductas que constituyan delito tipificado en el Código Penal Colombiano, deben
                ser además denunciadas por el servidor público que tenga conocimiento de ellas, ante la(s)
                autoridad(es) competente(s), de conformidad con lo establecido en la Constitución Política de
                Colombia, Código Penal y la Ley 734 de 2002 - Código Disciplinario Único.',
                'tpf_id'=> '1',
        ]);

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 29.',
            'arti_tipo' => 'Criterios para calificar la falta',
            'arti_descripcion' => 'Para hacer la calificación definitiva de la falta en uno de los tres grados señalados anteriormente, se tendrán en cuenta los siguientes criterios:

            1. Daño(s) causado(s) y sus efectos.
            2. Grado de participación del Aprendiz.
            3. Antecedentes académicos y disciplinarios del Aprendiz.
            4. Rendimiento del Aprendiz en su proceso de formación.
            5. Confesión de la(s) falta(s).
            6. Haber procurado, por iniciativa propia, resarcir el daño causado o compensar el perjuicio causado.
            7. Haber devuelto, restituido o reparado, el bien afectado con la conducta.
            8. Los parámetros de calificación señalados en este reglamento.',
            'tpf_id'=> '1',
        ]);





    }
}

