<?php

namespace App\Http\Controllers;

use App\Evenement;
use App\Etablissement;
use Illuminate\Http\Request;

class EvenementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etablissements = Etablissement::all();
        $evenements = Evenement::all();
        return view('Etablissement/Page-etablissement/Evenements/liste-evenement', ['evenement'=>$evenements], ['etablissement'=>$etablissements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('Etablissement/Page-etablissement/Evenements/forme-evenement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evenements = $request->validate([
            // 'etablissement_id'=>'required',
            'titre' => 'required|max:255',
            'description' => 'required',
            'photo' => 'required',
        ]);

        $evenements = Evenement::create($evenements);
        $evenements->photo=$request->photo->store('photo', 'public');
        $evenements->update();

        return view('Etablissement/Page-etablissement/Evenements/forme-evenement');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $etablissements = Etablissement::all();
        $evenements = Evenement::findOrFail($request->id);
        return view('Etablissement/Page-etablissement/Evenements/liste-evenement', ['evenement'=>$evenements], ['etablissement'=>$etablissements]);
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
        $evenements = Evenement::findOrFail($id);
        return view('Etablissement/Page-etablissement/Evenements/editer-evenement', ['evenement'=>$evenements],['etablissement'=>$etablissements]);
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
        $evenements = $request->validate([
            // 'etablissement_id',
            'titre' => 'required|max:255',
            'description' => 'required|max:255',
            'photo' => 'required',
        ]);
        Evenement::whereId($id)->update($evenements);
        $evenements =  Evenement::find($id);
        $evenements->photo=$request->photo->store('photo', 'public');
        $evenements->update();

        return view('Etablissement/Page-etablissement/Evenements/editer-evenement')->with('success', 'Poste modifier avec success');
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
        $evenements = Evenement::findOrFail($request->id);
        $evenements->delete();
        return view('Etablissement/Page-etablissement/Evenements/liste-evenement', ['evenement'=>$evenements], ['etablissement'=>$etablissements]);
    }
}
