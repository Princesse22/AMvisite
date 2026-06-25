<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperadminController extends Controller
{
    public function ajoutAdmin(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'mail' => 'required|email|unique:users,mail',
            'phone' => 'required|string',
            'num_cni' => 'required|string',
            'adresse' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'nom' => $request->nom,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'num_cni' => $request->num_cni,
            'adresse' => $request->adresse,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        return redirect()->route('gestionadmins')
            ->with('success', 'Administrateur ajouté avec succès.');
    }

    public function afficheAdmin(Request $request)
    {
        $admins = User::where('role', 'admin')->get();

        return view('superadmin.gestion-admins', compact('admins'));
    }

    public function modifierAdmin($id)
    {
        $admin = User::where('role', 'admin')->findOrFail($id);

        return view('superadmin.modifierAdmin', compact('admin'));
    }

    public function modifierAdmintraitement(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'mail' => 'required|email|unique:users,mail,' . $request->id,
            'phone' => 'required|string',
            'num_cni' => 'required|string',
            'adresse' => 'required|string',
        ]);

        $admin = User::where('role', 'admin')->findOrFail($request->id);

        $admin->nom = $request->nom;
        $admin->mail = $request->mail;
        $admin->phone = $request->phone;
        $admin->num_cni = $request->num_cni;
        $admin->adresse = $request->adresse;
        $admin->save();

        return redirect()->route('gestionadmins')
            ->with('success', 'Administrateur modifié avec succès.');
    }

    public function supprimeradmin($id)
    {
        $admin = User::where('role', 'admin')->findOrFail($id);
        $admin->delete();

        return redirect()->route('gestionadmins')
            ->with('success', 'Administrateur supprimé avec succès.');
    }
}
