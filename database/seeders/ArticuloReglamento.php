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

            'arti_prohibicion'=> ' 
            1- Plagiar materiales, trabajos y demás documentos generados en los grupos de trabajo o producto
            del trabajo en equipo institucional, así como las fuentes bibliográficas consultadas en los diferentes
            soportes.',
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 25.',
            'arti_descripcion' => 'Se consideran faltas las acciones u omisiones que alteran el normal desarrollo de la
            formación, la convivencia en la comunidad educativa, el desempeño académico de sus compañeros, y
            que al presentarse originan la necesidad de una medida formativa y/o sancionatoria.',
            'arti_prohibicion'=> '2-Realizar fraude en evaluaciones, en el proceso de aprendizaje o en concursos, juegos o
            competencias de cualquier carácter.',
            'tpf_id'=> '1',

        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 25.',
            'arti_descripcion' => 'Se consideran faltas las acciones u omisiones que alteran el normal desarrollo de la
            formación, la convivencia en la comunidad educativa, el desempeño académico de sus compañeros, y
            que al presentarse originan la necesidad de una medida formativa y/o sancionatoria.',

            'arti_prohibicion'=> '4-Suplantar identidad durante el proceso de formación.',
            'tpf_id'=> '1',
        ]);

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 25.',
            'arti_descripcion' => 'Se consideran faltas las acciones u omisiones que alteran el normal desarrollo de la
            formación, la convivencia en la comunidad educativa, el desempeño académico de sus compañeros, y
            que al presentarse originan la necesidad de una medida formativa y/o sancionatoria.',

            'arti_prohibicion'=> '6-Utilizar de manera irresponsable el internet y las nuevas tecnologías dispuestas por el SENA para su proceso formativo. ',
            'tpf_id'=> '1',
        ]);

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 25.',
            'arti_descripcion' => 'Se consideran faltas las acciones u omisiones que alteran el normal desarrollo de la
            formación, la convivencia en la comunidad educativa, el desempeño académico de sus compañeros, y
            que al presentarse originan la necesidad de una medida formativa y/o sancionatoria.',

            'arti_prohibicion'=> '11-Destruir, sustraer, dañar total o parcialmente instalaciones físicas, equipos, materiales, software,
            elementos y dotación en general del SENA o de instituciones, empresas u otras entidades donde el
            aprendiz represente la entidad y/o se desarrollen actividades de aprendizaje, culturales,
            recreativas, deportivas y sociales o intercambios estudiantiles nacionales o internacionales. ',
            'tpf_id'=> '1',
        ]);

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 25.',
            'arti_descripcion' => 'Se consideran faltas las acciones u omisiones que alteran el normal desarrollo de la
            formación, la convivencia en la comunidad educativa, el desempeño académico de sus compañeros, y
            que al presentarse originan la necesidad de una medida formativa y/o sancionatoria.',

            'arti_prohibicion'=> '12-Obstaculizar el ingreso a las instalaciones de los Centros de Formación y/o perturbar el desarrollo
            normal de las actividades de aprendizaje, liderando o apoyando este tipo de actos en oficinas,
            ambientes de aprendizaje, zonas de descanso, bibliotecas y en general donde estas se desarrollen. ',
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 25.',
            'arti_descripcion' => 'Se consideran faltas las acciones u omisiones que alteran el normal desarrollo de la
            formación, la convivencia en la comunidad educativa, el desempeño académico de sus compañeros, y
            que al presentarse originan la necesidad de una medida formativa y/o sancionatoria.',

            'arti_prohibicion'=> '16-Todo acto que sabotee, perturbe o impida las actividades de formación, administrativas y de
            bienestar que se realicen en la entidad o en los sitios donde se le represente.  ',
            'tpf_id'=> '1',
        ]);


        

        //--------------------------
       
        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 26.',
            'arti_descripcion' => 'Están relacionadas directamente con las actuaciones u omisiones del
            aprendiz con relación al cumplimiento de los deberes de índole académico. Al presentarse la falta, se
            aplican medidas formativas o sancionatorias.',
            'arti_prohibicion' => '
            3-Aportar documentación o información que difiera con la real, para el ingreso a la entidad o para
            obtener cualquier beneficio de la misma.
            ' ,
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 26.',
            'arti_descripcion' => 'Están relacionadas directamente con las actuaciones u omisiones del
            aprendiz con relación al cumplimiento de los deberes de índole académico. Al presentarse la falta, se
            aplican medidas formativas o sancionatorias.',
            'arti_prohibicion' => '5-Alterar, adulterar, falsificar o sustraer documentos oficiales, calificaciones, evaluaciones o firmas
            correspondientes al SENA o emitidos por ella.
            ' ,
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 26.',
            'arti_descripcion' => 'Están relacionadas directamente con las actuaciones u omisiones del
            aprendiz con relación al cumplimiento de los deberes de índole académico. Al presentarse la falta, se
            aplican medidas formativas o sancionatorias.',
            'arti_prohibicion' => '
            7-Fumar en áreas no permitidas en el centro de formación, así como ingresar, comercializar,
            promocionar, ingerir o suministrar bebidas alcohólicas o sustancias psicoactivas, dentro de las
            instalaciones del SENA, o ingresar a la entidad en estado que indique alteraciones ocasionadas por
            el consumo de estos.
            ' ,
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 26.',
            'arti_descripcion' => 'Están relacionadas directamente con las actuaciones u omisiones del
            aprendiz con relación al cumplimiento de los deberes de índole académico. Al presentarse la falta, se
            aplican medidas formativas o sancionatorias.',
            'arti_prohibicion' => '
            8-Ingresar o portar armas, objetos cortopunzantes, explosivos u otros artefactos que representen
            riesgo o puedan ser empleados para atentar contra la vida o la integridad física de las personas,
            para destruir o deteriorar la planta física o los bienes del SENA o de las instituciones con las cuales
            se adelanten actividades de aprendizaje, culturales, recreativas, deportivas y sociales. Los
            miembros de la fuerza pública y organismos de seguridad del Estado, que se encuentren en un
            proceso de aprendizaje, no podrán portar armas en el Centro de Formación.
            ' ,
            'tpf_id'=> '1',
        ]);

        //---------------------

        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '9-Utilizar el nombre del SENA, las instalaciones, el internet y nuevas tecnologías, para actividades
            particulares o con ánimo de lucro, exceptuando aquellas que sean parte de proyectos productivos
            aprobados por el Subdirector de Centro o la instancia competente.',
            'tpf_id'=> '1',
        ]);



        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '10- Hurtar, estafar o abusar de la confianza de cualquier integrante de la comunidad educativa, o
            amenazarlo, sobornarlo, coaccionarlo o agredirlo verbal o físicamente, o ser cómplice o copartícipe
            de delitos contra ellos o contra la Institución.',
            'tpf_id'=> '1',
        ]);



        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '13-Realizar acciones proselitistas de carácter político o religioso dentro de las instalaciones del SENA
            y demás ambientes donde se desarrollen actividades formativas, así como propiciar actos
            indecorosos, de acoso, maltrato físico y/o mental, o conductas que puedan afectar a cualquier
            miembro de la comunidad educativa.',
            'tpf_id'=> '1',
        ]);



        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '14-Permanecer con el uniforme acordado para el programa de formación de la especialidad, en
            situaciones o lugares ajenos al proceso de aprendizaje, que deterioren la imagen institucional.',
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '15-Generar, transmitir, publicar o enviar información confidencial, de circulación restringida,
            inadecuada, malintencionada, violenta, pornográfica, insultos o agresiones por los medios de
            comunicación físicos o electrónicos, disponibles para su proceso formativo.',
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '17-Realizar comportamientos contrarios a la normativa SENA en lugares donde se adelanten eventos
            de formación nacional o internacional, que atenten contra la imagen del SENA o del país.',
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '18-Incumplir las normas de convivencia establecidas en cada Centro de Formación o Centro de
            convivencia.',
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '19-Ingresar o salir de cualquier instalación del Centro de Formación o de la entidad donde se desarrolle
            la formación, por sitios diferentes a la portería, saltando muros, cercas o violentando puertas,
            ventanas y cerraduras.',
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '20-Elaborar escritos o mensajes satíricos, dibujar y/o escribir sobre cualquier superficie, objeto o
            mueble de las instalaciones donde se desarrollan programas de formación; o pegar avisos, carteles,
            pancartas o análogos en sitios no autorizados.',
            'tpf_id'=> '1',
        ]);


        DB::table('articuloreglamentos')->insert([
            'arti_numero' => 'Artículo 27.',
            'arti_descripcion' => 'Están relacionadas directamente con factores comportamentales del
            Aprendiz. Se configura la falta disciplinaria cuando el Aprendiz incurre con su actuación u omisión en
            una de las prohibiciones, incumple un deber o se extralimita en el ejercicio de sus derechos de carácter
            comportamental.',
            'arti_prohibicion' => '21-Propiciar conductas, propuestas o actos inmorales hacia cualquier miembro de la comunidad
            educativa, que atenten contra la integridad física, moral y/o psicológica.',
            'tpf_id'=> '1',
        ]);


        
        
        


    }
}