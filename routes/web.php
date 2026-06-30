<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\SecretaireController;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;

// Page d'accueil = formulaire de connexion
Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth', 'role:super_admin'])->group(function () {
   Route::get('/dashboard-superadmin.html', function () {
    return view('superadmin.dashboard-superadmin');
})->name('superadmin');

// ajout admin
Route::post('/superadmin/ajout-admin', [SuperadminController::class, 'ajoutAdmin'])
    ->name('superadmin.ajout-admin');

    // Route::get('/gestion-admins.html', [SuperadminController::class, 'afficheAdmin'])->name('gestion_admins');
    Route::get('/modifierAdmin/{id}', [SuperadminController::class, 'modifierAdmin'])->name('modifierAdmin');
    Route::post('/modifierAdmintraitement', [SuperadminController::class, 'modifierAdmintraitement'])->name('modifierAdmintraitement');
    Route::get('/gestion-admins.html', [SuperadminController::class, 'afficheAdmin'])->name('gestionadmins');
    Route::get('/supprimeradmin/{id}', [SuperadminController::class, 'supprimeradmin'])->name('supprimeradmin');

        Route::get('/parametres.html', function () {
        return view('superadmin.parametres');
    })->name('parametres');

    Route::get('/profil.html', function () {
        return view('superadmin.profil');
    })->name('profil');

    Route::get('/notifications.html', function () {
        return view('superadmin.notifications');
    })->name('notifications');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard-admin.html', function () {
        return view('admin.dashboard-admin');
    })->name('admin');

    Route::get('/liste-visiteurs.html', function () {
        return view('admin.liste-visiteurs');
    })->name('liste-visiteurs');

    route::get('/historique-rendezvous.html',function(){
        return view('admin.historique-rendezvous');
    })->name('historique-rendezvous');

    Route::get('/parametres.html', function () {
        return view('admin.parametres');
    })->name('parametres');

    Route::get('/profil.html', function () {
        return view('admin.profil');
    })->name('profil');

    Route::get('/notifications.html', function () {
        return view('admin.notifications');
    })->name('notifications');

    //ajouter un Responsable
    Route::post('/admin/gestion-utilisateurs',[ResponsableController::class,'ajoutResponsable'])->name('ajoutResponsable');
    //afficher les Responsables (+ secretaires)
    Route::get('/gestion-utilisateurs.html', [ResponsableController::class, 'afficherResponsable'])->name('gestion-utilisateurs');
    //recupere le responsable a modifier un Responsable
    Route::get('/modifier-responsable/{id}', [ResponsableController::class, 'modifierResponsable'])->name('modifierResponsable');
    //modifier un Responsable
    Route::post('/modifierResponsabletraitement', [ResponsableController::class, 'modifierResponsabletraitement'])->name('modifierResponsabletraitement');
    //supprimer un Responsable
    Route::get('suprimer-responsable/{id}', [ResponsableController::class, 'supprimerResponsable'])->name('supprimerResponsable');


    //afficher le formulaire d'ajout d'une secretaire
    Route::get('/admin/ajout-secretaire', [SecretaireController::class, 'formAjoutSecretaire'])->name('formAjoutSecretaire');
    //ajouter une secretaire
    Route::post('/admin/gestion-secretaire', [SecretaireController::class, 'ajoutSecretaire'])->name('ajoutSecretaire');
    //recuperer la secretaire a modifier
    Route::get('/modifier-secretaire/{id}', [SecretaireController::class, 'modifierSecretaire'])->name('modifierSecretaire');
    //modifier une secretaire
    Route::post('/modifierSecretairetraitement', [SecretaireController::class, 'modifierSecretairetraitement'])->name('modifierSecretairetraitement');
    //supprimer une secretaire
    Route::get('/supprimer-secretaire/{id}', [SecretaireController::class, 'supprimerSecretaire'])->name('supprimerSecretaire');

    //service
     //afficher le formulaire d'ajout de la secretaire
    Route::get('/admin/ajout-service', [ServiceController::class, 'formAjoutservice'])->name('formAjoutservice');
    //ajouter une service
    Route::post('/admin/gestion-service', [ServiceController::class, 'ajoutService'])->name('ajoutService');
    //recuperer la servicee a modifier
    Route::get('/modifier-service/{id}', [ServiceController::class, 'modifierService'])->name('modifierService');
    //modifier une servicee
    Route::post('/modifierservicetraitement', [ServiceController::class, 'modifierServicetraitement'])->name('modifierServicetraitement');
    //supprimer une servicee
    Route::get('/supprimer-service/{id}', [ServiceController::class, 'supprimerservice'])->name('supprimerservice');


});

    // route::get('responsable/gestion-secretaire',[ResponsableController::class,'afficherSecretaire'])->name('afficherSecretaire');
Route::middleware(['auth', 'role:secretaire'])->group(function () {
    Route::get('/dashboard-secretaire.html', function () {
        return view('secretaire.dashboard-secretaire');
    })->name('secretaires');

    //afficher le formulaire d'enregistrement d'un visiteur
    Route::get('/enregistrer-visiteur.html', [VisiteurController::class, 'formAjoutVisiteur'])->name('enregistrer-visiteur');
    //enregistrer un visiteur
    Route::post('/enregistrer-visiteur', [VisiteurController::class, 'ajouterVisiteur'])->name('ajouterVisiteur');
    //afficher la liste des visiteurs
    Route::get('/liste-visiteur',function(){
        return view('secretaire.liste-visiteurs');
    })->name('liste-visiteur');
    Route::get('/liste-visiteurs.html', [VisiteurController::class, 'afficherVisiteur'])->name('liste-visiteurs');
    //recuperer le visiteur a modifier
    Route::get('/modifier-visiteur/{id}', [VisiteurController::class, 'modifierVisiteur'])->name('modifierVisiteur');
    //modifier un visiteur
    Route::post('/modifierVisiteurTraitement', [VisiteurController::class, 'modifierVisiteurTraitement'])->name('modifierVisiteurTraitement');
    //supprimer un visiteur
    Route::get('/supprimer-visiteur/{id}', [VisiteurController::class, 'supprimerVisiteur'])->name('supprimerVisiteur');

    Route::get('/rendezvous-detail.html', function () {
        return view('secretaire.rendezvous-detail');
    })->name('rendezvous-detail');

Route::get('/planifier-rendezvous.html', function () {
    $services = Service::all();
    return view('secretaire.planifier-rendezvous', compact('services'));
})->name('planifier-rendezvous');

    Route::get('/historique-rendezvous.html', function () {
        return view('secretaire.historique-rendezvous');
    })->name('historique-rendezvous');

    Route::get('/parametres.html', function () {
        return view('secretaire.parametres');
    })->name('parametres');

    Route::get('/profil.html', function () {
        return view('secretaire.profil');
    })->name('profil');

    Route::get('/notifications.html', function () {
        return view('secretaire.notifications');
    })->name('notifications');

});

Route::middleware(['auth', 'role:responsable'])->group(function () {
    Route::get('/dashboard-responsable.html', function () {
        return view('responsable.dashboard-responsable');
    })->name('responsable');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
