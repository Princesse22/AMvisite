@extends('layouts.app')

@section('title', 'Gestion des Utilisateurs | Accent Media')

@section('content')

        <div class="row g-3 mb-4">
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Total</div><div class="am-stat-value">24</div></div><div class="am-stat-icon am-icon-orange"><i class="bi bi-person-badge-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Actifs</div><div class="am-stat-value">21</div></div><div class="am-stat-icon am-icon-green"><i class="bi bi-check-circle-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Services</div><div class="am-stat-value">7</div></div><div class="am-stat-icon am-icon-blue"><i class="bi bi-diagram-3-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Inactifs</div><div class="am-stat-value">3</div></div><div class="am-stat-icon am-icon-slate"><i class="bi bi-pause-circle-fill"></i></div></div></div>
        </div>

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Liste des responsables</h5>
            <button class="btn btn-orange btn-sm" data-bs-toggle="modal" data-bs-target="#modalResp"><i class="bi bi-plus-lg me-1"></i>Ajouter un responsable</button>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Nom</th><th>Service</th><th>Email</th><th>Téléphone</th><th>Statut</th><th class="text-end">Actions</th></tr></thead>
              <tbody>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">YD</div><div class="am-cell-name">Yves Diatta</div></div></td><td>Finance</td><td>yves.diatta@accentmedia.com</td><td>+221 70 654 12 09</td><td><span class="am-badge am-badge-success">Actif</span></td><td class="text-end"><button class="am-action-btn view" data-demo-action="Activation/Désactivation (démo)."><i class="bi bi-toggle-on"></i></button> <button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalResp"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('modals')
<div class="modal fade" id="modalResp" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"><h5 class="modal-title fw-bold">Responsable</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
        <form novalidate method="post" action="{{route('ajoutResponsable')  }}">
            @csrf
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nom complet</label>
                <input type="text" class="form-control" required name="nom"></div>
              <div class="col-md-6">
                <label class="form-label">Service</label>
                <select class="form-select" name="service">
                <option>Commercial</option>
                <option>Production</option>
                <option>Ressources Humaines</option>
                <option>Marketing</option>
                <option>Finance</option>
                </select>
                </div>
              <div class="col-md-6"><label class="form-label">Email</label><input type="email" class="form-control" required name="mail"></div>
              <div class="col-md-6"><label class="form-label">Téléphone</label><input type="tel" class="form-control" required name="phone"></div>
              <div class="col-md-6"><label class="form-label">numero cni</label><input type="email" class="form-control" required name="num_cni"></div>
              <div class="col-md-6"><label class="form-label">Adresse</label><input type="email" class="form-control" required name="adresse"></div>
              <div class="col-md-6"><label class="form-label">Mot de passe</label><input type="password" class="form-control" required name="password"></div>
              <div class="col-md-6">
                <label class="form-label">Statut</label>
                <select class="form-select" name="statut">
                <option value="actif">Actif</option>
                <option value="inactif">Inactif</option>
            </select>
            </div>
            </div>
          </div>
          <div class="modal-footer"><button type="button" class="btn btn-light">Annuler</button><button type="submit" class="btn btn-orange">Enregistrer</button></div>
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
        <div class="d-flex gap-2 justify-content-center mt-3"><button class="btn btn-light" data-bs-dismiss="modal">Annuler</button><button class="btn btn-danger" data-bs-dismiss="modal" data-demo-action="Responsable supprimé (démonstration).">Supprimer</button></div>
      </div></div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'admin', active: '/admin/gestion-utilisateurs.html', title: 'Gestion des Utilisateurs', subtitle: 'Responsables de service destinataires des rendez-vous' });
  </script>
@endsection
