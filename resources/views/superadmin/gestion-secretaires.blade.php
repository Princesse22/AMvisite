@extends('layouts.app')

@section('title', 'Gestion des Secrétaires | Accent Media')

@section('content')

        <div class="row g-3 mb-4">
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Total</div><div class="am-stat-value">12</div></div><div class="am-stat-icon am-icon-orange"><i class="bi bi-person-vcard-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Actives</div><div class="am-stat-value">11</div></div><div class="am-stat-icon am-icon-green"><i class="bi bi-check-circle-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Sites</div><div class="am-stat-value">3</div></div><div class="am-stat-icon am-icon-blue"><i class="bi bi-geo-alt-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Inactives</div><div class="am-stat-value">1</div></div><div class="am-stat-icon am-icon-slate"><i class="bi bi-pause-circle-fill"></i></div></div></div>
        </div>

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Liste des secrétaires</h5>
            <button class="btn btn-orange btn-sm" data-bs-toggle="modal" data-bs-target="#modalSec"><i class="bi bi-plus-lg me-1"></i>Ajouter une secrétaire</button>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Nom</th><th>Service</th><th>Email</th><th>Téléphone</th><th>Statut</th><th class="text-end">Actions</th></tr></thead>
              <tbody>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">FA</div><div class="am-cell-name">Fatou Aïdara</div></div></td><td>Accueil principal</td><td>fatou.aidara@accentmedia.com</td><td>+221 77 300 22 11</td><td><span class="am-badge am-badge-success">Actif</span></td><td class="text-end"><button class="am-action-btn view" data-demo-action="Activation/Désactivation (démo)."><i class="bi bi-toggle-on"></i></button> <button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalSec"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">CN</div><div class="am-cell-name">Christelle Ndour</div></div></td><td>Accueil annexe</td><td>christelle.ndour@accentmedia.com</td><td>+221 76 410 78 90</td><td><span class="am-badge am-badge-success">Actif</span></td><td class="text-end"><button class="am-action-btn view" data-demo-action="Activation/Désactivation (démo)."><i class="bi bi-toggle-on"></i></button> <button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalSec"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">AB</div><div class="am-cell-name">Awa Baldé</div></div></td><td>Direction</td><td>awa.balde@accentmedia.com</td><td>+221 78 660 14 33</td><td><span class="am-badge am-badge-muted">Inactif</span></td><td class="text-end"><button class="am-action-btn view" data-demo-action="Activation/Désactivation (démo)."><i class="bi bi-toggle-off"></i></button> <button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalSec"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">MS</div><div class="am-cell-name">Mariam Sow</div></div></td><td>Accueil principal</td><td>mariam.sow@accentmedia.com</td><td>+221 77 122 90 45</td><td><span class="am-badge am-badge-success">Actif</span></td><td class="text-end"><button class="am-action-btn view" data-demo-action="Activation/Désactivation (démo)."><i class="bi bi-toggle-on"></i></button> <button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalSec"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('modals')
<div class="modal fade" id="modalSec" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"><h5 class="modal-title fw-bold">Secrétaire</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
        <form data-validate data-success="Secrétaire enregistrée avec succès." novalidate>
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6"><label class="form-label">Nom complet</label><input type="text" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label">Service</label><select class="form-select"><option>Accueil principal</option><option>Accueil annexe</option><option>Direction</option></select></div>
              <div class="col-md-6"><label class="form-label">Email</label><input type="email" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label">Téléphone</label><input type="tel" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label">Mot de passe</label><input type="password" class="form-control" required></div>
              <div class="col-md-6"><label class="form-label">Statut</label><select class="form-select"><option>Actif</option><option>Inactif</option></select></div>
            </div>
          </div>
          <div class="modal-footer"><button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button><button type="submit" class="btn btn-orange">Enregistrer</button></div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content"><div class="modal-body text-center p-4">
        <div class="am-stat-icon am-icon-red mx-auto mb-3" style="width:56px;height:56px;font-size:1.6rem"><i class="bi bi-exclamation-triangle-fill"></i></div>
        <h5 class="fw-bold">Confirmer la suppression</h5>
        <p class="text-secondary">Cette action est irréversible.</p>
        <div class="d-flex gap-2 justify-content-center mt-3"><button class="btn btn-light" data-bs-dismiss="modal">Annuler</button><button class="btn btn-danger" data-bs-dismiss="modal" data-demo-action="Secrétaire supprimée (démonstration).">Supprimer</button></div>
      </div></div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'superadmin', active: 'gestion-secretaires.html', title: 'Gestion des Secrétaires', subtitle: 'Secrétaires en charge de l\'accueil des visiteurs' });
  </script>
@endsection
