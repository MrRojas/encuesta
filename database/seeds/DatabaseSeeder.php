<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      $this->resultado();
       
      	DB::table('users')->insert([
            [  'id' => '1', 'name' => 'ArmandoRojas' , 'email' => 'rojasarmando@gmail.com' , 'password' => bcrypt('12345678') ],
    
        
           
        ]);
        
        DB::table('categories')->insert([
            [  'id' => '1', 'name' => 'Cancer Labio y Cavidad Oral'],
            [  'id' => '2', 'name' => 'Orofaringe P16 Negativa'],
            [  'id' => '3', 'name' => 'Cáncer de laringe'],
            [  'id' => '4', 'name' => 'Cáncer de seno paranasal y de cavidad nasal'],
            [  'id' => '5', 'name' => 'Cáncer de glándulas salivales'],
            [  'id' => '6', 'name' => 'Cáncer de tiroides'],
        
          
        ]);

        DB::table('questions')->insert([
             
             [ 'id' => '1', 
                'subcategories_id'  => '1' , 
                'value' => 'T1',
                'type' => 'T',
                'des' => 'tumor igual o menor de 2 cms en su dimensión mayor y 5 mm o menos de profundidad de invasión',
              ], 

               [ 'id' => '2', 
                'subcategories_id'  => '1' , 
                'value' => 'T2',
                'type' => 'T',
                'des' => ' tumor igual o menor de 2 cms en su dimensión mayor y mayor de 5 mm pero no más de 10 mm de profundidad de invasión o tumor mayor de 2 cms pero no más de 4 cms en la dimensión mayor y la profundidad de invasión no mayor de 10 mm.',
              ], 


               [ 'id' => '3', 
                'subcategories_id'  => '1' , 
                'value' => 'T3',
                'type' => 'T',
                'des' => 'Tumor mayor de 4 cms en la dimensión mayor o más de 10 mm en la invasión en profundidad.',
              ], 

              [ 'id' => '4', 
                'subcategories_id'  => '1' , 
                'value' => 'T4a',
                'type' => 'T',
                'des' => '(cavidad oral) Tumor invade la cortical ósea, nervio alveolar inferior, suelo de boca o piel',
              ],

              [ 'id' => '5', 
                'subcategories_id'  => '1' , 
                'value' => 'T4a',
                'type' => 'T',
                'des' => ' (labio)  Tumor invade el espacio masticador, láminas pterigoideas, o la base del cráneo o engloba la arteria carótida interna',
              ] ,

              [ 'id' => '6', 
                'subcategories_id'  => '1' , 
                'value' => 'NX',
                'type' => 'N',
                'des' => 'Ganglios regionales no puede ser evaluados',
              ],

              [ 'id' => '7', 
                'subcategories_id'  => '1' , 
                'value' => 'N0',
                'type' => 'N',
                'des' => 'No afectación ganglionar regional',
              ],

              [ 'id' => '8', 
                'subcategories_id'  => '1' , 
                'value' => 'N1',
                'type' => 'N',
                'des' => 'Metástasis unilateral, en uno o más ganglios linfáticos, todos de 6 cms o menos en su dimensión mayor',
              ],

              [ 'id' => '9', 
                'subcategories_id'  => '1' , 
                'value' => 'N2',
                'type' => 'N',
                'des' => 'Metástasis en ganglios linfáticos bilaterales o contralaterales, todos de 6 cms o menos en su dimensión mayor',
              ],

              [ 'id' => '10', 
                'subcategories_id'  => '1' , 
                'value' => 'N3',
                'type' => 'N',
                'des' => 'metástasis en ganglio(s) linfático(s) con dimensión mayor de 6cms',
              ]
              ,

              [ 'id' => '11', 
                'subcategories_id'  => '1' , 
                'value' => 'Mx',
                'type' => 'M',
                'des' => 'no evaluada la presencia de metástasis a distancia',
              ],

              [ 'id' => '12', 
                'subcategories_id'  => '1' , 
                'value' => 'M0',
                'type' => 'M',
                'des' => 'No metástasis a distancia',
              ],

              [ 'id' => '13', 
                'subcategories_id'  => '1' , 
                'value' => 'M1',
                'type' => 'M',
                'des' => 'Metástasis a distancia',
              ]
              ,

              [ 'id' => '14', 
                'subcategories_id'  => '1' , 
                'value' => 'T4b',
                'type' => 'T',
                'des' => 'Tumor invade el espacio masticador, láminas pterigoideas, o la base del cráneo o engloba la arteria carótida interna',
              ]


            ]);



      /* DB::table('questions')->insert([
             
             [ 'id' => '1', 
                'subcategories_id'  => '1' , 
                'value' => 'T1',
                'type' => 'T',
                'des' => 'tumor igual o menor de 2 cms en su dimensión mayor y 5 mm o menos de profundidad de invasión',
              ], 

               [ 'id' => '2', 
                'subcategories_id'  => '1' , 
                'value' => 'T2',
                'type' => 'T',
                'des' => ' tumor igual o menor de 2 cms en su dimensión mayor y mayor de 5 mm pero no más de 10 mm de profundidad de invasión o tumor mayor de 2 cms pero no más de 4 cms en la dimensión mayor y la profundidad de invasión no mayor de 10 mm.',
              ], 


               [ 'id' => '3', 
                'subcategories_id'  => '1' , 
                'value' => 'T3',
                'type' => 'T',
                'des' => 'Tumor mayor de 4 cms en la dimensión mayor o más de 10 mm en la invasión en profundidad.',
              ], 

              [ 'id' => '4', 
                'subcategories_id'  => '1' , 
                'value' => 'T4a',
                'type' => 'T',
                'des' => '(cavidad oral) Tumor invade la cortical ósea, nervio alveolar inferior, suelo de boca o piel',
              ],

              [ 'id' => '5', 
                'subcategories_id'  => '1' , 
                'value' => 'T4b',
                'type' => 'T',
                'des' => ' (labio)  Tumor invade el espacio masticador, láminas pterigoideas, o la base del cráneo o engloba la arteria carótida interna',
              ] ,

              [ 'id' => '6', 
                'subcategories_id'  => '1' , 
                'value' => 'NX',
                'type' => 'N',
                'des' => 'Ganglios regionales no puede ser evaluados',
              ],

              [ 'id' => '7', 
                'subcategories_id'  => '1' , 
                'value' => 'N0',
                'type' => 'N',
                'des' => 'No afectación ganglionar regional',
              ],

              [ 'id' => '8', 
                'subcategories_id'  => '1' , 
                'value' => 'N1',
                'type' => 'N',
                'des' => 'Metástasis unilateral, en uno o más ganglios linfáticos, todos de 6 cms o menos en su dimensión mayor',
              ],

              [ 'id' => '9', 
                'subcategories_id'  => '1' , 
                'value' => 'N2',
                'type' => 'N',
                'des' => 'Metástasis en ganglios linfáticos bilaterales o contralaterales, todos de 6 cms o menos en su dimensión mayor',
              ],

              [ 'id' => '10', 
                'subcategories_id'  => '1' , 
                'value' => 'N3',
                'type' => 'N',
                'des' => 'metástasis en ganglio(s) linfático(s) con dimensión mayor de 6cms',
              ]
              ,

              [ 'id' => '11', 
                'subcategories_id'  => '1' , 
                'value' => 'Mx',
                'type' => 'M',
                'des' => 'no evaluada la presencia de metástasis a distancia',
              ],

              [ 'id' => '12', 
                'subcategories_id'  => '1' , 
                'value' => 'M0',
                'type' => 'M',
                'des' => 'No metástasis a distancia',
              ],

              [ 'id' => '13', 
                'subcategories_id'  => '1' , 
                'value' => 'M1',
                'type' => 'M',
                'des' => 'Metástasis a distancia',
              ]


            ]);

*/
    }

  function resultado(){

         DB::table('result')->insert([
              [ 'id' => '1', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'IVC' , 
                'tratamiento' => 'Tratamiento  sistémico / Tto de soporte', 
                 'm1'   => '1'  , 
                 't1'   => '1'  , 
                 't2'   => '1'  , 
                 't3'   => '1'  , 
                 't4a'   => '1'  , 
                 't4b'   => '1'  , 
                 't4'   => '1'  , 
                 'nx'   => '1'  , 
                 'n0'   => '1'  , 
                 'n1'   => '1'  , 
                 'n2'   => '1'  , 
                 'n3'   => '1'  , 
              ]] );

          DB::table('result')->insert([

              [ 'id' => '2', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'IVB' , 
                'tratamiento' => 'RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico', 
                 'n3'   => '1'  , 
                 'm0'   => '1'  , 
                  't1'   => '1'  , 
                 't2'   => '1'  , 
                 't3'   => '1'  , 
                 't4a'   => '1'  , 
                 't4b'   => '1'  
              ]  ] );

            DB::table('result')->insert([
            [ 'id' => '3', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'IVB' , 
                'tratamiento' => 'RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico', 
                  'nx'   => '1'  , 
                 'n0'   => '1'  , 
                 'n1'   => '1'  , 
                 'n2'   => '1'  , 
                 'n3'   => '1'  ,  
              
                 't4b'   => '1'  , 
                 'n0'   => '1'  ,  
              ]]);
DB::table('result')->insert([




                [ 'id' => '4', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'IVA' , 
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico', 
                  't1'   => '1'  , 
                 'n2'   => '1'  , 
                 'm0'   => '1'  , 
                 
              ]]);
DB::table('result')->insert([
               
                [ 'id' => '5', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'IVA' , 
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico', 
                  't2'   => '1'  , 
                 'n2'   => '1'  , 
                 'm0'   => '1'  , 
                 
              ]]);
DB::table('result')->insert([
               
                [ 'id' => '6', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'IVA' , 
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico', 
                  't3'   => '1'  , 
                 'n2'   => '1'  , 
                 'm0'   => '1'  , 
                 
              ]]);
DB::table('result')->insert([
               
                [ 'id' => '7', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'IVA' , 
                'tratamiento' => 'Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico', 
                  't4a'   => '1'  , 
                 'n1'   => '1'  , 
                 'n2'   => '1'  , 
                 'n3'   => '1'  , 
                 'm0'   => '1'  , 
                 
              ]]);
DB::table('result')->insert([

              
                [ 'id' => '8', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'III' , 
                'tratamiento' => 'Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico
', 
                  't1'   => '1'  , 
                 't2'   => '1'  , 
                 'n1'   => '1'  ,  
                 'm0'   => '1'  , 
                 
              ]
        ]);    


DB::table('result')->insert([
              [ 'id' => '9', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'III' , 
                'tratamiento' => 'Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si no resecable: RT+ tto sistémico / Quimioterapia de inducción seguido de RT+ tto sistémico
', 
                 't3'   => '1'  , 
                 'n0'   => '1'  , 
                 'n1'   => '1'  ,  
                 'm0'   => '1'  , 
                 
              ]]);
DB::table('result')->insert([

                   [ 'id' => '10', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'II' , 
                'tratamiento' => 'Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal pronóstico
Valorar RT+Tto sistémico o QT inducción seguido de RT+Tto sistémico en función de las características individuales del paciente
Si resecable: Cirugía seguido de:
    1) RT, si no hay factores de mal pronóstico
    2) RT+Tratamiento sistémico, si hay factores de mal ', 
                 't3'   => '1'  , 
                 'n0'   => '1'  , 
                 'n1'   => '1'  ,  
                 'm0'   => '1'  , 
                 
              ]]);
DB::table('result')->insert([

                [ 'id' => '11', 
                'subcategories_id'  => '1' , 
                'estadio' =>  'I' , 
                'tratamiento' => '', 
                 't3'   => '1'  , 
                 'n0'   => '1'  , 
                 'n1'   => '1'  ,  
                 'm0'   => '1'  , 
                 
              ], 





        ]);

  }
}
