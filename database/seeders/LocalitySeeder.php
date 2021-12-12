<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localities = [
            [
                'postal_code' => '1000',
                'locality' => 'Bruxelles'
            ],
            [
                'postal_code' => '1170',
                'locality' => 'Auderghem'
            ],
            [
                'postal_code' => '1050',
                'locality' => 'Ixelles'
            ],
        ];

        DB::table('localities')->insert($localities);
    }
}
