<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperadminController;

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

    Route::get('/gestion-utilisateurs.html', function () {
        return view('admin.gestion-utilisateurs');
    })->name('gestion-utilisateurs');

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

});

Route::middleware(['auth', 'role:secretaire'])->group(function () {
    Route::get('/dashboard-secretaire.html', function () {
        return view('secretaire.dashboard-secretaire');
    })->name('secretaires');

    Route::get('/enregistrer-visiteur.html', function () {
        return view('secretaire.enregistrer-visiteur');
    })->name('enregistrer-visiteur');

    Route::get('/liste-visiteurs.html', function () {
        return view('secretaire.liste-visiteurs');
    })->name('liste-visiteurs');

    Route::get('/rendezvous-detail.html', function () {
        return view('secretaire.rendezvous-detail');
    })->name('rendezvous-detail');

    Route::get('/planifier-rendezvous.html', function () {
        return view('secretaire.planifier-rendezvous');
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
