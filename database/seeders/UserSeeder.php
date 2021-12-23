<?php

namespace Database\Seeders;

use App\Models\User;
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
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        
        //Define data
       $users = [
            [
                'login'=>'epfc2021',
                'password'=>'epfc2021',
                'firstname'=>'Bob',
                'lastname'=>'Durant',
                'email'=>'bob@laravel2021.com',
                'langue'=>'fr',
            ],
            [
                'login'=>'epfc2022',
                'password'=>'epfc2022',
                'firstname'=>'Antonny',
                'lastname'=>'Weil',
                'email'=>'antweil@laravel2021.com',
                'langue'=>'en',
            ],
            [
                'login'=>'epfc2021',
                'password'=>'epfc2021',
                'firstname'=>'Julie',
                'lastname'=>'Hoelaert',
                'email'=>'juhoe@laravel2021.com',
                'langue'=>'nl',
            ],
            [
                'login'=>'epfc2022',
                'password'=>'epfc2022',
                'firstname'=>'Lydie',
                'lastname'=>'Ndong',
                'email'=>'ln@laravel2021.com',
                'langue'=>'cm',
            ],
        ];
        
        //Insert data in the table
        DB::table('users')->insert($users);
    }
}
