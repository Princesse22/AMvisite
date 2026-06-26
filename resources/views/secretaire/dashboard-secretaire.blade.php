@extends('layouts.dashboard')

@section('title', 'Tableau de bord - Secrétaire | Accent Media')

@section('content')

        <div class="row g-3 mb-4">
          <div class="col-12 col-md-6"><div class="am-stat"><div><div class="am-stat-label">Visiteurs enregistrés aujourd'hui</div><div class="am-stat-value">17</div><div class="am-stat-trend text-success"><i class="bi bi-arrow-up"></i> +4 vs hier</div></div><div class="am-stat-icon am-icon-orange"><i class="bi bi-person-plus-fill"></i></div></div></div>
          <div class="col-12 col-md-6"><div class="am-stat"><div><div class="am-stat-label">Rendez-vous du jour</div><div class="am-stat-value">9</div><div class="am-stat-trend text-secondary"><i class="bi bi-clock"></i> 3 à venir</div></div><div class="am-stat-icon am-icon-blue"><i class="bi bi-calendar-event-fill"></i></div></div></div>
        </div>

        <div class="row g-3 mb-4">
          <div class="col-12 col-lg-7">
            <div class="am-card am-card-body h-100">
              <h5 class="fw-bold mb-3">Actions rapides</h5>
              <div class="row g-3">
                <div class="col-6"><a href="{{ route('enregistrer-visiteur') }}" class="am-card am-card-body d-block text-center text-decoration-none h-100"><div class="am-stat-icon am-icon-orange mx-auto mb-2"><i class="bi bi-person-plus-fill"></i></div><div class="fw-semibold text-dark">Enregistrer un visiteur</div></a></div>
                <div class="col-6"><a href="{{ route('planifier-rendezvous') }}" class="am-card am-card-body d-block text-center text-decoration-none h-100"><div class="am-stat-icon am-icon-blue mx-auto mb-2"><i class="bi bi-calendar-plus-fill"></i></div><div class="fw-semibold text-dark">Planifier un rendez-vous</div></a></div>
                <div class="col-6"><a href="{{ route ('liste-visiteur')}}" class="am-card am-card-body d-block text-center text-decoration-none h-100"><div class="am-stat-icon am-icon-green mx-auto mb-2"><i class="bi bi-people-fill"></i></div><div class="fw-semibold text-dark">Liste des visiteurs</div></a></div>
                <div class="col-6"><a href="{{ route('historique-rendezvous') }}" class="am-card am-card-body d-block text-center text-decoration-none h-100"><div class="am-stat-icon am-icon-amber mx-auto mb-2"><i class="bi bi-clock-history"></i></div><div class="fw-semibold text-dark">Historique</div></a></div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <div class="am-section-card h-100">
              <div class="am-section-head">Rendez-vous du jour</div>
              <div class="am-card-body">
                <ul class="am-timeline">
                  <li><div class="am-timeline-dot"></div><div class="am-timeline-time">09:00</div><div class="fw-semibold">Mariama Koné</div><div class="am-cell-sub">Partenariat — Ibrahima Bah</div></li>
                  <li><div class="am-timeline-dot"></div><div class="am-timeline-time">10:30</div><div class="fw-semibold">Samuel Traoré</div><div class="am-cell-sub">Devis impression — Aïcha Sylla</div></li>
                  <li><div class="am-timeline-dot"></div><div class="am-timeline-time">14:00</div><div class="fw-semibold">Linda Diop</div><div class="am-cell-sub">Recrutement — Moussa Camara</div></li>
                  <li><div class="am-timeline-dot"></div><div class="am-timeline-time">16:15</div><div class="fw-semibold">Paul Gomez</div><div class="am-cell-sub">Réclamation — Ibrahima Bah</div></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="am-table-card">
          <div class="am-table-header"><h5>Visiteurs récents</h5><a href="{{ route('liste-visiteurs') }}" class="btn btn-sm btn-outline-orange">Tout voir</a></div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Nom</th><th>Téléphone</th><th>Type de visite</th><th>Heure</th></tr></thead>
              <tbody>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">MK</div><div class="am-cell-name">Mariama Koné</div></div></td><td>+221 77 880 12 34</td><td>Partenaire</td><td>09:20</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">ST</div><div class="am-cell-name">Samuel Traoré</div></div></td><td>+221 76 442 90 11</td><td>Fournisseur</td><td>10:05</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">NF</div><div class="am-cell-name">Nadia Fall</div></div></td><td>+221 78 220 47 65</td><td>Client</td><td>11:40</td></tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'secretaire', active: '/secretaire/dashboard-secretaire.html', title: 'Tableau de bord', subtitle: 'Espace secrétaire — accueil et planification' });
  </script>
@endsection
