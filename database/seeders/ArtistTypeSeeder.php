<?php

namespace Database\Seeders;

use App\Models\Type;
use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistTypeSeeder extends Seeder
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
        DB::table('artist_type')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        
        //Define data
        $artistTypes = [
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Marius',
                'artist_lastname'=>'Von Mayenburg',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Olivier',
                'artist_lastname'=>'Boudon',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Anne Marie',
                'artist_lastname'=>'Loop',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Pietro',
                'artist_lastname'=>'Varasso',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Laurent',
                'artist_lastname'=>'Caron',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Élena',
                'artist_lastname'=>'Perez',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Guillaume',
                'artist_lastname'=>'Alexandre',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Claude',
                'artist_lastname'=>'Semal',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Laurence',
                'artist_lastname'=>'Warin',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Claude',
                'artist_lastname'=>'Semal',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Pierre',
                'artist_lastname'=>'Wayburn',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Gwendoline',
                'artist_lastname'=>'Gauthier',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Pierre',
                'artist_lastname'=>'Wayburn',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Gwendoline',
                'artist_lastname'=>'Gauthier',
                'type'=>'comédien',
            ],
        ];
        
        //Préparer les données
        foreach ($artistTypes as &$data) {
            //Rechercher l'artiste pour le prénom et le nom d'un artiste donné
            $artist = Artist::where([
                ['firstname','=',$data['artist_firstname'] ],
                ['lastname','=',$data['artist_lastname'] ]
            ])->first();

            //Rechercher le type pour un type donné
            $type = Type::firstWhere('type',$data['type']);
            
            unset($data['artist_firstname']);
            unset($data['artist_lastname']);
            unset($data['type']);

            $data['artist_id'] = $artist->id;
            $data['type_id'] = $type->id;
        }
        unset($data);

        //Insérer des données dans le tableau
        DB::table('artist_type')->insert($artistTypes);
    }

}
