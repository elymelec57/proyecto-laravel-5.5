<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesion = DB::table('professions')->select('id')->first();

      /*  DB::table('users')->insert([
            'name' => 'ely',
            'email' => 'ely@hotmail.com',
            'password' => bcrypt('laravel'),
            'profesion_id' => $profesion->id,
        ]);
        */

        User::create([
            'name' => 'daniel',
            'email' => 'daniel@hotmail.com',
            'password' => bcrypt('laravel4'),
            'profesion_id' => $profesion->id,
        ]);

        factory(User::class)->create([
            'profesion_id' => $profesion->id,
        ]);

        factory(User::class, 15)->create();
    }
}
