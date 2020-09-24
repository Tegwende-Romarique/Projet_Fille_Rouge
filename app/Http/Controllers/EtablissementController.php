<?php

namespace App\Http\Controllers;

use App\User;
use App\Etablissement;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{

    public function create(){
        $admin = User::all();
        return view('Etablissement/forme-etablissement', compact('admin'));
    }

    public function index(){
        $etablissements= Etablissement::all();
        return view('Etablissement/liste-etablissement',  compact('etablissements'));
    }

    public function store(Request $request)
    {
        $etablissements = $request->validate([
            'user_id' => 'required|max:255',
            'nom' => 'required|max:255',
            'ville' => 'required|max:255',
            'type' => 'required|max:255', 
        ]);
        $etablissements = Etablissement::create($etablissements);

        return view('Etablissement/forme-etablissement')->with('success', 'Etablissement enregistré avec success!');
    }

    public function edit($id)
    {
        $etablissements = Etablissement::findOrFail($id);
        return view('Etablissement/editer-etablissement', compact('etablissements'));
    }

    public function update(Request $request, $id)
    {
        $etablissements = $request->validate([
            // 'user_id' => 'required|max:255',
            'nom' => 'required|max:255',
            'ville' => 'required|max:255',
            'type' => 'required|max:255',          
        ]);
        Etablissement::whereId($id)->update($etablissements);
        return back()->with('success', 'Etablissement modifier avec success');
    }

    public function destroy(Request $request)
    { 
        $etablissements = Etablissement::findOrFail($request->id);
        $etablissements->delete();

        return back()->with('success', 'Etablissement supprimer avec success');
    }

}
