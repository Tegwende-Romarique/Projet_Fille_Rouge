<?php

namespace App\Http\Controllers;

use App\Poste;
use App\Etablissement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postes = Poste::all();
        return view('Etablissement/Page-etablissement/Postes/liste-poste', ['poste'=>$postes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etablissements = Etablissement::all();
        $etablissements->id = 
        $postes = Poste::all();
        return view('Etablissement/Page-etablissement/Postes/liste-poste', ['poste'=>$postes],['etablissement'=>$etablissements]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $postes = $request->validate([
            // 'etablissement_id'=>'required',
            'titre' => 'required|max:255',
            'description' => 'required',
            'photo' => 'required',
        ]);

        $postes = Poste::create($postes);
        $postes->photo=$request->photo->store('photo', 'public');
        $postes->update();

        return view('Etablissement/Page-etablissement/Postes/liste-poste');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etablissements = Etablissement::all();
        $postes = Poste::findOrFail($id);
        return view('Etablissement/Page-etablissement/Postes/editer-poste', ['poste'=>$postes],['etablissement'=>$etablissements]);
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
        $postes = $request->validate([
            'etablissement_id',
            'titre' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        Poste::whereId($id)->update($postes);
        $postes = Poste::find($id);
        $postes->photo=$request->photo->store('photo', 'public');
        $postes->update();

        return view('Etablissement/Page-etablissement/Postes/editer-poste')->with('success', 'Poste modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $etablissements = Etablissement::all();
        $postes = Poste:: findOrFail($request->id);
        $postes->delete();
        return view('Etablissement/Page-etablissement/Postes/liste-poste', ['poste'=>$postes],['etablissement'=>$etablissements])->with('success', 'Poste supprimer avec success');
    }


    public function publish(Poste $post)
    {
        $post->is_published = !$post->is_published;
        $post->save();
        flash()->overlay('Mode de l\'article changé.');

        return view('Etablissement/Page-etablissement/Postes/liste-poste');
    }
}
