<?php

namespace Database\Seeders;

use App\Models\Type;
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
        //Empty the table first
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Type::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        $types = [
            ['type' => 'auteur'],
            ['type' => 'scénographe'],
            ['type' => 'comédien'],
        ];
        
        DB::table('types')->insert($types);
    }
}
