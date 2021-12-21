<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles= [
            ['role' => 'admin'],
            ['role' => 'membre'],
            ['role' => 'affilier'],
        ];
        
        DB::table('roles')->insert($roles);
    }
}