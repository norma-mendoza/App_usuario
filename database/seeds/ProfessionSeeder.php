<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('profession')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        
        DB::table('profession')->insert([
            'title'=> 'Desarrollador Back-end',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Desarrollador Front-end',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Java software developer',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Administrador de redes',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Analista de Sistemas',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Senior react Developer',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Diseñador de videojuegos',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Tecnico de Introduccion de datos',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Ingeniero de Hardware',
        ]);

        DB::table('profession')->insert([
            'title'=> 'Tecnico Multimedia',
        ]);


        

    }
}
