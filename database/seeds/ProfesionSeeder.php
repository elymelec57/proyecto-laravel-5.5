<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Profession;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        // otra manera de insertar datos en las tablas
        DB::insert('insert into profesion (profesion) values (:prof)',[
            'prof' => 'fron-end developers',
        ]);
        

        DB::table('professions')->insert([
            'profesion' => 'frond-end developers',
        ]);
        */

       /* Profession::create([
            'profesion' => 'desarrollador web',
        ]);

        Profession::create([
            'profesion' => 'ingeniero electronico',
        ]);

        Profession::create([
            'profesion' => 'desarrollador app',
        ]);*/

        factory(Profession::class, 20)->create();
      
    }
}
