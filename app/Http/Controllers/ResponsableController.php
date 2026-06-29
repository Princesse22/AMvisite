<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ResponsableController extends Controller
{
    public function ajoutResponsable(Request $request){
        //valider les donnees
        $request->validate([
            'nom'=>'required|string|max:255',
            'mail'=>'required|email|unique:users,mail',
            'phone'=>'required|string',
            'num_cni'=>'required|string',
            'adresse'=>'required|string',
            'password'=>'required|string|min:6',
            'service'=>'required|string',
            'statut'=>'required|string'
        ]);

        //creer l'utilisateur
        User::create([
            'nom'=>$request->nom,
            'mail'=>$request->mail,
            'phone'=>$request->phone,
            'num_cni'=>$request->num_cni,
            'adresse'=>$request->adresse,
            'password'=>Hash::make($request->password),
            'role'=>'responsable',
            'service'=>$request->service,
            'statut'=>$request->statut
        ]);

        return redirect()->route('gestion-utilisateurs')
        ->with('success', 'Responsable ajouté avec succès.');
    }

    // affiche la page gestion-utilisateurs avec les responsables ET les secretaires
public function afficherResponsable(){
    $users = User::where('role','responsable')->get();
    $secretaires = User::where('role', 'secretaire')->get();
    $services = \App\Models\Service::all();
    return view('admin.gestion-utilisateurs', compact('users', 'secretaires', 'services'));
}

    //recuperer le responsale a modifier responsable
    public function modifierResponsable($id){
        $user = User::where('role', 'responsable')->findOrFail($id);
        return view('admin.modifier-responsable', compact('user'));
    }

    //modifier responsable
    public function modifierResponsabletraitement(Request $request){
        $request->validate([
            'nom'=>'required|string|max:255',
            'mail'=>'required|email|unique:users,mail,' . $request->id,
            'phone'=>'required|string',
            'num_cni'=>'required|string',
            'adresse'=>'required|string',
            'service'=>'required|string',
            'statut'=>'required|string'
        ]);
        $user = User::where('role', 'responsable')->findOrFail($request->id);

        $user->nom = $request->nom;
        $user->mail = $request->mail;
        $user->phone = $request->phone;
        $user->num_cni = $request->num_cni;
        $user->adresse = $request->adresse;
        $user->service = $request->service;
        $user->statut = $request->statut;
        $user->save();

        return redirect()->route('gestion-utilisateurs')
        ->with('success', 'Responsable modifié avec succès.');
    }

    public function supprimerResponsable($id){
        $user = User::where('role', 'responsable')->findOrFail($id);
        $user->delete();

        return redirect()->route('gestion-utilisateurs')
        ->with('success', 'Responsable supprimé avec succès.');
    }

}
