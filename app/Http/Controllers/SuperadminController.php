<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admins;
use Illuminate\Support\Facades\Hash;

class SuperadminController extends Controller
{
    public function ajoutAdmin(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'mail' => 'required|email|unique:admins,mail',
            'phone' => 'required|string',
            'num_cni' => 'required|string',
            'adresse' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $admin = new Admins();
        $admin->nom = $request->nom;
        $admin->mail = $request->mail;
        $admin->phone = $request->phone;
        $admin->num_cni = $request->num_cni;
        $admin->adresse = $request->adresse;
        $admin->password = $request->password;
        $admin->save();

        return redirect()->route('gestionadmins')
            ->with('success', 'Administrateur ajouté avec succès.');
    }


    public function afficheAdmin(Request $request)
{
    $admins = Admins::all();

    return view('superadmin.gestion-admins', compact('admins'));
}

public function modifierAdmin($id)
{
    $admin = Admins::find($id);
    return view('superadmin.modifierAdmin', compact('admin'));
}

public function modifierAdmintraitement(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'mail' => 'required|email|unique:admins,mail,' . $request->id,
        'phone' => 'required|string',
        'num_cni' => 'required|string',
        'adresse' => 'required|string',
    ]);

    $admins = Admins::find($request->id);
    $admins->nom = $request->nom;
    $admins->mail = $request->mail;
    $admins->phone = $request->phone;
    $admins->num_cni = $request->num_cni;
    $admins->adresse = $request->adresse;
    $admins->save();

    return redirect()->route('gestionadmins')
        ->with('success', 'Administrateur modifié avec succès.');
}
}
