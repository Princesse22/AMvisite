<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visiteurs;

class VisiteurController extends Controller
{
    // Afficher le formulaire d'enregistrement d'un visiteur
    public function formAjoutVisiteur()
    {
        return view('secretaire.enregistrer-visiteur');
    }

    // Enregistrer un visiteur
    public function ajouterVisiteur(Request $request)
    {
        $request->validate([
            'nom'           => 'required|string|max:255',
            'phone'         => 'required|string',
            'num_cni'       => 'required|string',
            'objet'         => 'required|string',
            'type_visiteur' => 'required|string',
            'date'          => 'required|date',
            'heure'         => 'required',
        ]);

        Visiteurs::create([
            'nom'           => $request->nom,
            'phone'         => $request->phone,
            'num_cni'       => $request->num_cni,
            'objet'         => $request->objet,
            'type_visiteur' => $request->type_visiteur,
            'date'          => $request->date,
            'heure'         => $request->heure,
        ]);

        return redirect()->route('enregistrer-visiteur')
            ->with('success', 'Visiteur enregistré avec succès.');
    }

    // Afficher la liste des visiteurs
    public function afficherVisiteur()
    {
        $visiteurs = Visiteurs::latest()->get();
        return view('secretaire.liste-visiteurs', compact('visiteurs'));
    }

    // Récupérer le visiteur à modifier
    public function modifierVisiteur($id)
    {
        $visiteur = Visiteurs::findOrFail($id);
        return view('secretaire.enregistrer-visiteur', compact('visiteur'));
    }

    // Modifier un visiteur
    public function modifierVisiteurTraitement(Request $request)
    {
        $request->validate([
            'nom'           => 'required|string|max:255',
            'phone'         => 'required|string',
            'num_cni'       => 'required|string',
            'objet'         => 'required|string',
            'type_visiteur' => 'required|string',
            'date'          => 'required|date',
            'heure'         => 'required',
        ]);

        $visiteur = Visiteurs::findOrFail($request->id);

        $visiteur->nom           = $request->nom;
        $visiteur->phone         = $request->phone;
        $visiteur->num_cni       = $request->num_cni;
        $visiteur->objet         = $request->objet;
        $visiteur->type_visiteur = $request->type_visiteur;
        $visiteur->date          = $request->date;
        $visiteur->heure         = $request->heure;
        $visiteur->save();

        return redirect()->route('liste-visiteurs')
            ->with('success', 'Visiteur modifié avec succès.');
    }

    // Supprimer un visiteur
    public function supprimerVisiteur($id)
    {
        $visiteur = Visiteurs::findOrFail($id);
        $visiteur->delete();

        return redirect()->route('liste-visiteurs')
            ->with('success', 'Visiteur supprimé avec succès.');
    }
}
