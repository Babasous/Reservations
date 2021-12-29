<?php

namespace App\Http\Controllers;

use App\Models\Locality;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localities = Locality::all();
        
        return view('locality.index',[
            'localities' => $localities,
            'resource'=> 'localities'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locality = new Locality();

        return view('locality.edit',[
            'locality' => $locality,
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
            'postal_code' => 'required|min:4|max:6',
            'locality' => 'required|min:3|max:60',
        ]);
        //dd($validated);

        $postal_code = $request->input('postal_code');
        $locality = $request->input('locality');

	   
        $locality = new Locality();

	   //Sauvegarde des données dans la base de données
        $locality->postal_code = $postal_code;
        $locality->locality = $locality;

        $locality->save();

        return view('locality.show',[
            'locality' => $locality,
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
        $locality = Locality::find($id);

        return view('locality.show',[
            'locality' => $locality,
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
        $locality = Locality::find($id);
        
        return view('locality.edit',[
            'locality' => $locality,
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
            'postal_code' => 'required|max:6',
            'locality' => 'required|max:60',
        ]);

	   //Le formulaire a été validé, nous récupérons l’artiste à modifier
        $locality = Locality::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $locality->update($validated);

        return view('locality.show',[
            'locality' => $locality,
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
        $locality = Locality::find($id);

        $locality->delete();

       /* $localities = Locality::all();

         return view('locality.index',[
            'localities' => $localities,
            'resource' => 'localities',
        ]); */

        return redirect()->route('locality.index');
    }
}
