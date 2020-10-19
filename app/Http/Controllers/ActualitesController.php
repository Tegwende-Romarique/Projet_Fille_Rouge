<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Etablissement;
use Illuminate\Http\Request;

class ActualitesController extends Controller
{
    public function create(){
        $etablissements = Etablissement::all();
        $actualites = Actualite::all();
        return view('Etablissement/Actualites/liste-actualite',['etablissement'=>$etablissements, 'actualite'=>$actualites]);
    }

    public function index(){
        $etablissements = Etablissement::all();
        $actualites = Actualite::all();
        return view('Etablissement/Actualites/liste-actualite',['etablissement'=>$etablissements, 'actualite'=>$actualites]);
    }

    public function store(Request $request)
    {
        $actualites = $request->validate([
            'etablissement_id',
            'titre' => 'required|max:255',
            'contenu' => 'required|max:255',
        ]);
        $actualites = Actualite::create($actualites);
        $actualites->photo=$request->photo->store('photo', 'public');
        $actualites->update();
        return view('Etablissement/Actualite/forme-actualite')->with('success', 'Etablissement enregistré avec success!');
    }

    public function publish(Post $post)
    {
        $post->is_published = !$post->is_published;
        $post->save();
        flash()->overlay('Mode de l\'article changé.');

        return redirect('Etablissement/Actualites/liste-actualite');
    }

    public function edit(Request $request)
    {
        $actualites = Actualite::findOrFail($request->id);
        return view('Etablissement/Actualite/liste-etablissement', compact('actualite'));
    }

    public function update(Request $request, $id)
    {
        $actualites = $request->validate([
            // 'user_id' => 'required|max:255',
            'titre' => 'required|max:255',
            'description' => 'required|max:255',

        ]);
        Actualite::whereId($id)->update($actualites);

        return view('Eatblissement/Actualite/liste-actualite')->with('success', 'Etablissement modifier avec success');
    }

    public function destroy(Request $request)
    {
        $actualite = Etablissement::findOrFail($request->id);
        $actualite->delete();

        return back()->with('success', 'Etablissement supprimer avec success');
    }
}
