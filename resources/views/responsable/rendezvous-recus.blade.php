@extends('layouts.app')

@section('title', 'Rendez-vous reçus | Accent Media')

@section('content')

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Rendez-vous reçus</h5>
            <div class="btn-group btn-group-sm" role="group">
              <button class="btn btn-outline-orange active">Tous</button>
              <button class="btn btn-outline-orange">En cours</button>
              <button class="btn btn-outline-orange">Validés</button>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Visiteur</th><th>Objet</th><th>Date</th><th>Heure</th><th>Statut</th><th class="text-end">Actions</th></tr></thead>
              <tbody>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">MK</div><div class="am-cell-name">Mariama Koné</div></div></td>
                  <td>Partenariat commercial</td><td>18 Juin 2026</td><td>10:00</td><td><span class="am-badge am-badge-muted">Nouveau</span></td>
                  <td class="text-end">
                    <div class="d-inline-flex gap-1">
                      <a href="rendezvous-detail.html" class="am-action-btn view" title="Voir détails"><i class="bi bi-eye"></i></a>
                      <button class="am-action-btn" title="Valider" data-demo-action="Rendez-vous validé." style="color:var(--am-success)"><i class="bi bi-check-lg"></i></button>
                      <button class="am-action-btn" title="Rejeter" data-demo-action="Rendez-vous rejeté." style="color:var(--am-danger)"><i class="bi bi-x-lg"></i></button>
                      <button class="am-action-btn" title="Reporter" data-bs-toggle="modal" data-bs-target="#reportModal" style="color:var(--am-warning)"><i class="bi bi-calendar-event"></i></button>
                      <button class="am-action-btn" title="Mettre en cours" data-demo-action="Rendez-vous mis en cours." style="color:var(--am-info)"><i class="bi bi-hourglass-split"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">PG</div><div class="am-cell-name">Paul Gomez</div></div></td>
                  <td>Présentation produit</td><td>18 Juin 2026</td><td>14:30</td><td><span class="am-badge am-badge-success">Validé</span></td>
                  <td class="text-end">
                    <div class="d-inline-flex gap-1">
                      <a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a>
                      <button class="am-action-btn" data-demo-action="Rendez-vous rejeté." style="color:var(--am-danger)"><i class="bi bi-x-lg"></i></button>
                      <button class="am-action-btn" data-bs-toggle="modal" data-bs-target="#reportModal" style="color:var(--am-warning)"><i class="bi bi-calendar-event"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">LD</div><div class="am-cell-name">Linda Diop</div></div></td>
                  <td>Entretien recrutement</td><td>19 Juin 2026</td><td>09:15</td><td><span class="am-badge am-badge-warning">Reporté</span></td>
                  <td class="text-end">
                    <div class="d-inline-flex gap-1">
                      <a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a>
                      <button class="am-action-btn" data-demo-action="Rendez-vous validé." style="color:var(--am-success)"><i class="bi bi-check-lg"></i></button>
                      <button class="am-action-btn" data-demo-action="Rendez-vous mis en cours." style="color:var(--am-info)"><i class="bi bi-hourglass-split"></i></button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">YC</div><div class="am-cell-name">Yves Camara</div></div></td>
                  <td>Renouvellement contrat</td><td>20 Juin 2026</td><td>11:45</td><td><span class="am-badge am-badge-info">En cours</span></td>
                  <td class="text-end">
                    <div class="d-inline-flex gap-1">
                      <a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a>
                      <button class="am-action-btn" data-demo-action="Rendez-vous validé." style="color:var(--am-success)"><i class="bi bi-check-lg"></i></button>
                      <button class="am-action-btn" data-demo-action="Rendez-vous rejeté." style="color:var(--am-danger)"><i class="bi bi-x-lg"></i></button>
                      <button class="am-action-btn" data-bs-toggle="modal" data-bs-target="#reportModal" style="color:var(--am-warning)"><i class="bi bi-calendar-event"></i></button>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('modals')
<!-- Modal report -->
  <div class="modal fade" id="reportModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Reporter le rendez-vous</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <form data-validate data-success="Rendez-vous reporté avec succès.">
          <div class="modal-body">
            <div class="mb-3"><label class="form-label">Nouvelle date</label><input type="date" class="form-control" required></div>
            <div class="mb-3"><label class="form-label">Nouvelle heure</label><input type="time" class="form-control" required></div>
            <div class="mb-1"><label class="form-label">Motif du report</label><textarea class="form-control" rows="3" placeholder="Indiquez la raison du report..." required></textarea></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-orange" data-bs-dismiss="modal">Confirmer le report</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'responsable', active: 'rendezvous-recus.html', title: 'Rendez-vous reçus', subtitle: 'Gérer les demandes de rendez-vous' });
  </script>
@endsection
