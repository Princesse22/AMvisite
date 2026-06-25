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
}
