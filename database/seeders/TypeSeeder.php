<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['type' => 'auteur'],
            ['type' => 'scénographe'],
            ['type' => 'comédien'],
        ];
        
        DB::table('types')->insert($types);
    }
}
