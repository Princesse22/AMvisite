<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\RendezVous;
use Illuminate\Http\Request;

class rendezVousController extends Controller
{
    public function ajouterRendezVous(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'service_id' => 'required|integer',
            'objet' => 'required|string',
            'date' => 'required|date',
            'heure' => 'required',

        ]);

        RendezVous::create([
            'nom' => $request->nom,
            'cree_par'  => auth()->id(),
            'service_id'  => $request->service_id,
            'objet' => $request->objet,
            'date' => $request->date,
            'heure' => $request->heure,
            'nouvelle_date' =>$request->nouvelle_date,
            'nouvelle_heure' => $request->nouvelle_heure,
            'status' => 'en attente',
        ]);

        return redirect()->route('planifier-rendezvous');
    }
}
