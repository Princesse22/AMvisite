<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SecretaireController extends Controller
{
    // Afficher le formulaire d'ajout d'une secrétaire
    public function formAjoutSecretaire()
    {
        return view('responsable.gestion-secretaire');
    }

    // Ajouter une secrétaire
    public function ajoutSecretaire(Request $request)
    {
        // valider les donnees
        $request->validate([
            'nom'      => 'required|string|max:255',
            'mail'     => 'required|email|unique:users,mail',
            'phone'    => 'required|string',
            'num_cni'  => 'required|string',
            'adresse'  => 'required|string',
            'password' => 'required|string|min:6',
            'statut'   => 'required|string'
        ]);

        // creer une secretaire
        User::create([
            'nom'      => $request->nom,
            'mail'     => $request->mail,
            'phone'    => $request->phone,
            'num_cni'  => $request->num_cni,
            'adresse'  => $request->adresse,
            'password' => Hash::make($request->password),
            'role'     => 'secretaire',
            'statut'   => $request->statut
        ]);

        return redirect()->route('gestion-utilisateurs')
            ->with('success', 'Secrétaire ajoutée avec succès.');
    }

    // Afficher la liste des secretaires
    public function afficherSecretaire()
    {
        $secretaires = User::where('role', 'secretaire')->get();
        return view('admin.gestion-utilisateurs', compact('secretaires'));
    }

    // Recuperer la secretaire a modifier
    public function modifierSecretaire($id)
    {
        $secretaire = User::where('role', 'secretaire')->findOrFail($id);
        return view('responsable.gestion-secretaire', compact('secretaire'));
    }

    // Modifier une secretaire
    public function modifierSecretairetraitement(Request $request)
    {
        $request->validate([
            'nom'     => 'required|string|max:255',
            'mail'    => 'required|email|unique:users,mail,' . $request->id,
            'phone'   => 'required|string',
            'num_cni' => 'required|string',
            'adresse' => 'required|string',
            'statut'  => 'required|string'
        ]);

        $secretaire = User::where('role', 'secretaire')->findOrFail($request->id);

        $secretaire->nom     = $request->nom;
        $secretaire->mail    = $request->mail;
        $secretaire->phone   = $request->phone;
        $secretaire->num_cni = $request->num_cni;
        $secretaire->adresse = $request->adresse;
        $secretaire->statut  = $request->statut;
        $secretaire->save();

        return redirect()->route('gestion-utilisateurs')
            ->with('success', 'Secrétaire modifiée avec succès.');
    }

    // Supprimer une secretaire
    public function supprimerSecretaire($id)
    {
        $secretaire = User::where('role', 'secretaire')->findOrFail($id);
        $secretaire->delete();

        return redirect()->route('gestion-utilisateurs')
            ->with('success', 'Secrétaire supprimée avec succès.');
    }
}
