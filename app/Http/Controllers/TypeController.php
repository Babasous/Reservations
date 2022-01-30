<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
              
        return view('type.index',[
            'types' => $types,
            'resource' => 'types',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = new Type();
        
        return view('type.create',[
            'type' => $type,
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
            'type' => 'required|min:3|max:60',
        ]);

        //dd($validated);
	   //Le formulaire a été validé, nous récupérons l’artiste à modifier
       $type = $request->input('type');
      
        $type = new Type();        
        
	   //Sauvegarde des données dans la base de données
        $type->type = $type;

        $type->save();

        return view('type.show',[
            'type' => $type,
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
        $type = Type::find($id); 

        if($type == null){
            return Redirect::route('type.index');
        }
        
        return view('type.show',[
            'type' => $type,
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
        $type = Type::find($id);
        
        return view('type.edit',[
            'type' => $type,
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
            'type' => 'required|max:60',
        ]);

	   //Le formulaire a été validé, nous récupérons l’artiste à modifier
        $type = Type::find($id);

	   //Mise à jour des données modifiées et sauvegarde dans la base de données
        $type->update($validated);

        return view('type.show',[
            'type' => $type,
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
        $type = Type::find($id);

        $type->delete();

        /* $type = Type::all();

        return view('type.index', [
            'type' => $type,
        ]); */
        
        return redirect()->route('type.index');
    }
}
