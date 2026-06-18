@extends('layouts.app')

@section('title', 'Gestion des Administrateurs | Accent Media')

@section('content')

        <div class="row g-3 mb-4">
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Total</div><div class="am-stat-value">8</div></div><div class="am-stat-icon am-icon-orange"><i class="bi bi-shield-lock-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Actifs</div><div class="am-stat-value">6</div></div><div class="am-stat-icon am-icon-green"><i class="bi bi-check-circle-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Inactifs</div><div class="am-stat-value">2</div></div><div class="am-stat-icon am-icon-slate"><i class="bi bi-pause-circle-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Nouveaux</div><div class="am-stat-value">2</div></div><div class="am-stat-icon am-icon-blue"><i class="bi bi-person-plus-fill"></i></div></div></div>
        </div>

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Liste des administrateurs</h5>
            <button class="btn btn-orange btn-sm" data-bs-toggle="modal" data-bs-target="#modalAdmin"><i class="bi bi-plus-lg me-1"></i>Ajouter un administrateur</button>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Nom</th><th>Email</th><th>Téléphone</th><th>Statut</th><th class="text-end">Actions</th></tr></thead>
              <tbody>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">KD</div><div class="am-cell-name">Karim Diallo</div></div></td><td>karim.diallo@accentmedia.com</td><td>+221 77 123 45 67</td><td><span class="am-badge am-badge-success">Actif</span></td><td class="text-end"><button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalAdmin"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">SM</div><div class="am-cell-name">Sophie Mensah</div></div></td><td>sophie.mensah@accentmedia.com</td><td>+221 76 998 22 10</td><td><span class="am-badge am-badge-success">Actif</span></td><td class="text-end"><button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalAdmin"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">JN</div><div class="am-cell-name">Jean Ndiaye</div></div></td><td>jean.ndiaye@accentmedia.com</td><td>+221 78 445 09 88</td><td><span class="am-badge am-badge-muted">Inactif</span></td><td class="text-end"><button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalAdmin"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">RB</div><div class="am-cell-name">Rose Bamba</div></div></td><td>rose.bamba@accentmedia.com</td><td>+221 77 220 14 50</td><td><span class="am-badge am-badge-success">Actif</span></td><td class="text-end"><button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalAdmin"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">OD</div><div class="am-cell-name">Omar Dia</div></div></td><td>omar.dia@accentmedia.com</td><td>+221 70 332 78 21</td><td><span class="am-badge am-badge-muted">Inactif</span></td><td class="text-end"><button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalAdmin"><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button></td></tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('modals')
<!-- Modal Ajout/Modification -->
  <div class="modal fade" id="modalAdmin" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"><h5 class="modal-title fw-bold">Administrateur</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
        <form data-validate data-success="Administrateur enregistré avec succès." novalidate>
          <div class="modal-body">
            <div class="mb-3"><label class="form-label">Nom complet</label><input type="text" class="form-control" placeholder="Ex : Karim Diallo" required></div>
            <div class="mb-3"><label class="form-label">Email</label><input type="email" class="form-control" placeholder="email@accentmedia.com" required></div>
            <div class="mb-3"><label class="form-label">Téléphone</label><input type="tel" class="form-control" placeholder="+221 77 000 00 00" required></div>
            <div class="mb-3"><label class="form-label">Mot de passe</label><input type="password" class="form-control" placeholder="••••••••" required></div>
            <div class="mb-1"><label class="form-label">Statut</label><select class="form-select"><option>Actif</option><option>Inactif</option></select></div>
          </div>
          <div class="modal-footer"><button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button><button type="submit" class="btn btn-orange">Enregistrer</button></div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Suppression -->
  <div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center p-4">
          <div class="am-stat-icon am-icon-red mx-auto mb-3" style="width:56px;height:56px;font-size:1.6rem"><i class="bi bi-exclamation-triangle-fill"></i></div>
          <h5 class="fw-bold">Confirmer la suppression</h5>
          <p class="text-secondary">Cette action est irréversible. Voulez-vous vraiment supprimer cet administrateur ?</p>
          <div class="d-flex gap-2 justify-content-center mt-3">
            <button class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
            <button class="btn btn-danger" data-bs-dismiss="modal" data-demo-action="Administrateur supprimé (démonstration).">Supprimer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'superadmin', active: 'gestion-admins.html', title: 'Gestion des Administrateurs', subtitle: 'Créer et gérer les comptes administrateurs' });
  </script>
@endsection
