<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');


        DB::table('users')->insert([
            'name'=> 'Norma',
            'email'=> 'normitth@gmail.com',
            'password'=>  bcrypt('12345'), 
            'profession_id'=> '10'
           ]);

           DB::table('users')->insert([
            'name'=> 'Sandra',
            'email'=> 'sandra25@gmail.com',
            'password'=> bcrypt('sandra345'),
            'profession_id'=> '9'
           ]);

            DB::table('users')->insert([
            'name'=> 'Esau',
            'email'=> 'esau20@gmail.com',
            'password'=> bcrypt('2390'),
            'profession_id'=> '8'
           ]);

             DB::table('users')->insert([
            'name'=> 'Sofia',
            'email'=> 'sofi@gmail.com',
            'password'=> bcrypt('sofi3670'),
            'profession_id'=> '7'
           ]);

           DB::table('users')->insert([
            'name'=> 'Cristina',
            'email'=> 'crysty@gmail.com',
            'password'=> bcrypt('345690'),
            'profession_id'=> '6'
           ]);
           DB::table('users')->insert([
            'name'=> 'Pamela',
            'email'=> 'pamela16@gmail.com',
            'password'=> bcrypt('234532'),
            'profession_id'=> '5'
           ]);

           DB::table('users')->insert([
            'name'=> 'Fernanda',
            'email'=> 'fernand@gmail.com',
            'password'=> bcrypt('fer678923'),
            'profession_id'=> '4'
           ]);

           DB::table('users')->insert([
            'name'=> 'Maritza',
            'email'=> 'mari@gmail.com',
            'password'=> bcrypt('mar893'),
            'profession_id'=> '3'
           ]);

           DB::table('users')->insert([
            'name'=> 'Sonia',
            'email'=> 'sonia@gmail.com',
            'password'=> bcrypt('97840'),
            'profession_id'=> '2'
           ]);
           DB::table('users')->insert([
            'name'=> 'Sarai',
            'email'=> 'sarai@gmail.com',
            'password'=> bcrypt('125789'),
            'profession_id'=> '1'
           ]);

    }
}

