@extends('layouts.app')

@section('title', 'Détail du rendez-vous | Accent Media')

@section('content')

        <a href="rendezvous-recus.html" class="btn btn-sm btn-outline-secondary mb-3"><i class="bi bi-arrow-left me-1"></i>Retour</a>
        <div class="row g-3">
          <div class="col-12 col-lg-8">
            <div class="am-section-card mb-3">
              <div class="am-section-head d-flex justify-content-between align-items-center">
                <span><i class="bi bi-person-vcard-fill text-orange me-2"></i>Informations du visiteur</span>
                <span class="am-badge am-badge-info">En cours</span>
              </div>
              <div class="am-card-body">
                <div class="d-flex align-items-center gap-3 mb-4">
                  <div class="am-cell-avatar" style="width:56px;height:56px;font-size:1.2rem">MK</div>
                  <div><div class="fw-bold fs-5 text-dark">Mariama Koné</div><div class="text-secondary">Partenaire commercial</div></div>
                </div>
                <div class="row g-3">
                  <div class="col-md-6"><div class="text-secondary small">CNI</div><div class="fw-semibold">1 234 5678 90123</div></div>
                  <div class="col-md-6"><div class="text-secondary small">Téléphone</div><div class="fw-semibold">+221 77 845 12 03</div></div>
                  <div class="col-md-6"><div class="text-secondary small">Adresse</div><div class="fw-semibold">Dakar, Plateau</div></div>
                  <div class="col-md-6"><div class="text-secondary small">Enregistré par</div><div class="fw-semibold">Fatou Aïdara</div></div>
                </div>
              </div>
            </div>

            <div class="am-section-card">
              <div class="am-section-head"><i class="bi bi-calendar2-check-fill text-orange me-2"></i>Détails du rendez-vous</div>
              <div class="am-card-body">
                <div class="row g-3">
                  <div class="col-md-6"><div class="text-secondary small">Objet</div><div class="fw-semibold">Partenariat commercial</div></div>
                  <div class="col-md-6"><div class="text-secondary small">Service concerné</div><div class="fw-semibold">Commercial</div></div>
                  <div class="col-md-3"><div class="text-secondary small">Date</div><div class="fw-semibold">18 Juin 2026</div></div>
                  <div class="col-md-3"><div class="text-secondary small">Heure</div><div class="fw-semibold">10:00</div></div>
                  <div class="col-md-6"><div class="text-secondary small">Priorité</div><div><span class="am-badge am-badge-warning">Haute</span></div></div>
                </div>
                <hr class="my-4">
                <div class="d-flex flex-wrap gap-2">
                  <button class="btn btn-orange" data-demo-action="Rendez-vous validé."><i class="bi bi-check-lg me-1"></i>Valider</button>
                  <button class="btn btn-outline-secondary" data-demo-action="Rendez-vous rejeté."><i class="bi bi-x-lg me-1"></i>Rejeter</button>
                  <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#reportModal"><i class="bi bi-calendar-event me-1"></i>Reporter</button>
                  <button class="btn btn-outline-secondary" data-demo-action="Rendez-vous mis en cours."><i class="bi bi-hourglass-split me-1"></i>En cours</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-4">
            <div class="am-section-card">
              <div class="am-section-head"><i class="bi bi-clock-history text-orange me-2"></i>Historique</div>
              <div class="am-card-body">
                <ul class="am-timeline">
                  <li><span class="am-timeline-dot"></span><div class="fw-semibold text-dark">Rendez-vous créé</div><div class="am-timeline-time">16 Juin 2026 - 09:12 · Fatou Aïdara</div></li>
                  <li><span class="am-timeline-dot"></span><div class="fw-semibold text-dark">Envoyé au responsable</div><div class="am-timeline-time">16 Juin 2026 - 09:13</div></li>
                  <li><span class="am-timeline-dot"></span><div class="fw-semibold text-dark">Mis en cours</div><div class="am-timeline-time">17 Juin 2026 - 15:40 · Ibrahima Bah</div></li>
                </ul>
              </div>
            </div>
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
    buildLayout({ role: 'responsable', active: 'rendezvous-recus.html', title: 'Détail du rendez-vous', subtitle: 'Mariama Koné' });
  </script>
@endsection
