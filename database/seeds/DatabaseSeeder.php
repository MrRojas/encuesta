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
      	DB::table('users')->insert([
            [  'id' => '1', 'name' => 'ArmandoRojas' , 'email' => 'rojasarmando260@gmail.com' , 'password' => bcrypt('12345678') ],
    
        
           
        ]);
        /*
        DB::table('categories')->insert([
            [  'id' => '1', 'name' => 'Cancer Labio y Cavidad Oral'],
            [  'id' => '2', 'name' => 'Cancer de Faringe (nasofaringe, orofaringe e hipofaringe)'],
            [  'id' => '3', 'name' => 'Cáncer de laringe'],
            [  'id' => '4', 'name' => 'Cáncer de seno paranasal y de cavidad nasal'],
            [  'id' => '5', 'name' => 'Cáncer de glándulas salivales'],
            [  'id' => '6', 'name' => 'Cáncer de tiroides'],
        
           
        ]);*/

          /*DB::table('subcategories')->insert([
            [  'id' => '1', 'name' => 'Cancer Labio y Cavidad Oral'],
            [  'id' => '2', 'name' => 'Cancer de Faringe (nasofaringe, orofaringe e hipofaringe)'],
            [  'id' => '3', 'name' => 'Cáncer de laringe'],
            [  'id' => '4', 'name' => 'Cáncer de seno paranasal y de cavidad nasal'],
            [  'id' => '5', 'name' => 'Cáncer de glándulas salivales'],
            [  'id' => '6', 'name' => 'Cáncer de tiroides'],
        
           
        ]);*/

    }
}
