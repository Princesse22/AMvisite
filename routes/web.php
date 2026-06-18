<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/index.html', function () {
    return view('auth.login');
});

// --- Super Administrateur ---
Route::get('/dashboard-superadmin.html', function () {
    return view('superadmin.dashboard-superadmin');
});
Route::get('/gestion-admins.html', function () {
    return view('superadmin.gestion-admins');
});
Route::get('/gestion-responsables.html', function () {
    return view('superadmin.gestion-responsables');
});
Route::get('/gestion-secretaires.html', function () {
    return view('superadmin.gestion-secretaires');
});

// --- Administrateur ---
Route::get('/dashboard-admin.html', function () {
    return view('admin.dashboard-admin');
});

// --- Secrétaire ---
Route::get('/dashboard-secretaire.html', function () {
    return view('secretaire.dashboard-secretaire');
});
Route::get('/enregistrer-visiteur.html', function () {
    return view('secretaire.enregistrer-visiteur');
});
Route::get('/liste-visiteurs.html', function () {
    return view('secretaire.liste-visiteurs');
});
Route::get('/planifier-rendezvous.html', function () {
    return view('secretaire.planifier-rendezvous');
});

// --- Responsable ---
Route::get('/dashboard-responsable.html', function () {
    return view('responsable.dashboard-responsable');
});
Route::get('/rendezvous-recus.html', function () {
    return view('responsable.rendezvous-recus');
});
Route::get('/rendezvous-detail.html', function () {
    return view('responsable.rendezvous-detail');
});


Route::get('/profil.html', function () {
    return view('partages.profil');
});
Route::get('/notifications.html', function () {
    return view('partages.notifications');
});
Route::get('/parametres.html', function () {
    return view('partages.parametres');
});
Route::get('/historique-rendezvous.html', function () {
    return view('partages.historique-rendezvous');
});
