<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class visiteurController extends Controller
{
    public function ajouterVisiteur(Request $request){
    $request->validate([
        'nom'=>'required|string|max:255',
        'phone'=>'required|string',
        'num_cni'=>'required|string',
        'objet'=>'required|string',
        'type_visiteur'=>'required|string',
        'date'=>'required|string',
        'heure'=>'required|string',
    ]);

    $visiteur::create([
    'nom' -> $request->nom,
    'phone' -> $request->phone,
    'num_cni' -> $request->num_cni,
    'objet' -> $request->objet,
    'type_visiteur' -> $request->type_visiteur,
    'date' -> $request->date,
    'heure' -> $request->heure,
    ]);

    return redirect()->route('gestion-utilisateurs');
    }

    //afficher visiteur
    public function afficherVisiteur(){
        $visiteur = visiteur::all();
        // return view('dashboardsecretaire', compact('visiteur'));
    }
}
