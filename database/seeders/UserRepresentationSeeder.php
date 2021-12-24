<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Representation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRepresentationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersRepresentations = [
            [
                'user_firstname'=>'Antonny',
                'user_lastname'=>'Weil',
                'places'=>3,
                'show_id'=>1,
            ],
            [
                'user_firstname'=>'Lydie',
                'user_lastname'=>'Ndong',
                'places'=>1,
                'show_id'=>3,
            ],
        ];

         //Prepare the data
         foreach ($usersRepresentations as &$data) {
            
            $user = User::where([
                ['firstname','=',$data['user_firstname'] ],
                ['lastname','=',$data['user_lastname'] ]
            ])->first();

            $representation = Representation::firstWhere('show_id',$data['show_id']);
            
            unset($data['user_firstname']);
            unset($data['user_lastname']);
            unset($data['show_id']);

            $data['user_id'] = $user->id;
            $data['representation_id'] = $representation->id;
        }
        unset($data);

        //Insert data in the table
        DB::table('user_representation')->insert($usersRepresentations);
    }
}
