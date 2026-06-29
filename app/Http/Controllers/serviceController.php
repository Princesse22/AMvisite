<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Afficher le formulaire d'ajout
    public function formAjoutservice()
    {
        return view('admin.gestion-service');
    }

    // Ajouter un service
    public function ajoutService(Request $request)
    {
        $request->validate([
            'nom'  => 'required|string|max:255',
            'mail' => 'required|email|unique:service,mail',
        ]);

        Service::create([
            'nom'  => $request->nom,
            'mail' => $request->mail,
        ]);

        return redirect()->route('gestion-utilisateurs')
            ->with('success', 'Service ajoute avec succes.');
    }

    // Recuperer le service a modifier
    public function modifierService($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.gestion-service', compact('service'));
    }

    // Modifier un service
    public function modifierServicetraitement(Request $request)
    {
        $request->validate([
            'id'   => 'required|exists:service,id',
            'nom'  => 'required|string|max:255',
            'mail' => 'required|email|unique:service,mail,' . $request->id,
        ]);

        $service = Service::findOrFail($request->id);
        $service->nom  = $request->nom;
        $service->mail = $request->mail;
        $service->save();

        return redirect()->route('gestion-utilisateurs')
            ->with('success', 'Service modifie avec succes.');
    }

    // Supprimer un service
    public function supprimerservice($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('gestion-utilisateurs')
            ->with('success', 'Service supprime avec succes.');
    }
}
