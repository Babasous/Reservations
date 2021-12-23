<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleUsers = [
            [
                'user_firstname'=>'Bob',
                'user_lastname'=>'Durant',
                'role'=>'admin',
            ],
            [
                'user_firstname'=>'Antonny',
                'user_lastname'=>'Weil',
                'role'=>'membre',
            ],
            [
                'user_firstname'=>'Julie',
                'user_lastname'=>'Hoelaert',
                'role'=>'affilier',
            ],
            [
                'user_firstname'=>'Lydie',
                'user_lastname'=>'Ndong',
                'role'=>'membre',
            ],
        ];

        //Prepare the data
        foreach ($roleUsers as &$data) {
            //Search the user for a given user's firstname and lastname
            $user = User::where([
                ['firstname','=',$data['user_firstname'] ],
                ['lastname','=',$data['user_lastname'] ]
            ])->first();

            //Search the role for a given role
            $role = Role::firstWhere('role',$data['role']);
            
            unset($data['user_firstname']);
            unset($data['user_lastname']);
            unset($data['role']);

            $data['user_id'] = $user->id;
            $data['role_id'] = $role->id;
        }
        unset($data);

        //Insert data in the table
        DB::table('role_user')->insert($roleUsers);
    }
}
