<?php

namespace App\Http\Controllers;

use App\Offre;
use App\Etablissement;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $etablissement = Etablissement::all();
        $etablissement = Etablissement::find($request->id);
        $offres = Offre::all();
        return view('Etablissement/Page-etablissement/Offres/liste-offre', ['offre'=>$offres], ['etablissement'=>$etablissement]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etablissement = Etablissement::all();
        $offre = Offre::all();
        return view('Page-Etablissement/Offres/forme-offre', ['offre'=>$offre], ['etablissement'=>$etablissement]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offre = $request->validate([
            'etablissement_id',
            'titre' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $offre = Offre::create($offre);

        return view('Etablissement/Page-etablissement/Offres/liste-offre')->with('success', 'Offre Ajouter avec success');
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
        $etablissement = Etablissement::all();
        $offres = Offre::findOrFail($id);
        return view('Etablissement/Page-etablissement/Offres/editer-offre', ['offre'=>$offres], ['etablissement'=>$etablissement]);
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
        $offres = $request->validate([
            'etablissement_id',
            'titre' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        Offre::whereId($id)->update($offres);

        // Offre::whereId($id)->update($offre);
        return view('Etablissement/Page-etablissement/Offres/editer-offre', compact('offre'))->with('success', 'Offre modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $etablissement = Etablissement::all();
        $offres = Offre::find($request->id);
        $offres->delete();
        return view('Etablissement/Page-etablissement/Offres/liste-offre', ['offre'=>$offres], ['etablissement'=>$etablissement]);
    }
}
