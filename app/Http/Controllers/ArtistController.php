<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();

        return view('artist.index',[
            'artists' => $artists,
            'resource' => 'artistes',
        ]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artist = new Artist();
        
        return view('artist.create',[
            'artist' => $artist,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation des données du formulaire
         $validated = $request->validate([
            'firstname' => 'required|min:3|max:60',
            'lastname' => 'required|min:3|max:60',
        ]);
        //dd($validated);

        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
	   
        $artist = new Artist();

	   //Sauvegarde des données dans la base de données
        $artist->firstname = $firstname;
        $artist->lastname = $lastname;

        $artist->save();

        return view('artist.show',[
            'artist' => $artist,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artist = Artist::find($id);

        if($artist == null){
            return Redirect::route('artist.index');
        }

        return view('artist.show',[
            'artist' => $artist,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artist = Artist::find($id);
        
        return view('artist.edit',[
            'artist' => $artist,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validation des données du formulaire
        $validated = $request->validate([
            'firstname' => 'required|max:60',
            'lastname' => 'required|max:60',
        ]);

	   //Le formulaire a été validé, nous récupérons l’artiste à modifier
        $artist = Artist::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $artist->update($validated);

        return view('artist.show',[
            'artist' => $artist,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artist = Artist::find($id);

        $artist->delete();

       /* $artists = Artist::all();

         return view('artist.index',[
            'artists' => $artists,
            'resource' => 'artistes',
        ]); */

        return redirect()->route('artist.index');
    }
}
