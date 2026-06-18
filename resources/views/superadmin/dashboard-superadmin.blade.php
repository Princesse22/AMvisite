@extends('layouts.app')

@section('title', 'Tableau de bord - Super Administrateur | Accent Media')

@section('content')
        <!-- Cartes statistiques -->
        <div class="row g-3 mb-4">
          <div class="col-12 col-sm-6 col-xl">
            <div class="am-stat">
              <div>
                <div class="am-stat-label">Administrateurs</div>
                <div class="am-stat-value">8</div>
                <div class="am-stat-trend text-success"><i class="bi bi-arrow-up"></i> +2 ce mois</div>
              </div>
              <div class="am-stat-icon am-icon-orange"><i class="bi bi-shield-lock-fill"></i></div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl">
            <div class="am-stat">
              <div>
                <div class="am-stat-label">Responsables</div>
                <div class="am-stat-value">24</div>
                <div class="am-stat-trend text-success"><i class="bi bi-arrow-up"></i> +5 ce mois</div>
              </div>
              <div class="am-stat-icon am-icon-blue"><i class="bi bi-person-badge-fill"></i></div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl">
            <div class="am-stat">
              <div>
                <div class="am-stat-label">Secrétaires</div>
                <div class="am-stat-value">12</div>
                <div class="am-stat-trend text-success"><i class="bi bi-arrow-up"></i> +1 ce mois</div>
              </div>
              <div class="am-stat-icon am-icon-green"><i class="bi bi-person-vcard-fill"></i></div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl">
            <div class="am-stat">
              <div>
                <div class="am-stat-label">Visiteurs</div>
                <div class="am-stat-value">1 482</div>
                <div class="am-stat-trend text-success"><i class="bi bi-arrow-up"></i> +18% ce mois</div>
              </div>
              <div class="am-stat-icon am-icon-amber"><i class="bi bi-people-fill"></i></div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-xl">
            <div class="am-stat">
              <div>
                <div class="am-stat-label">Rendez-vous</div>
                <div class="am-stat-value">936</div>
                <div class="am-stat-trend text-success"><i class="bi bi-arrow-up"></i> +9% ce mois</div>
              </div>
              <div class="am-stat-icon am-icon-red"><i class="bi bi-calendar2-check-fill"></i></div>
            </div>
          </div>
        </div>

        <!-- Graphiques -->
        <div class="row g-3 mb-4">
          <div class="col-12 col-lg-8">
            <div class="am-card am-card-body h-100">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0">Rendez-vous par mois</h5>
                <span class="am-badge am-badge-info">Année 2026</span>
              </div>
              <canvas id="chartMonthly" height="120"></canvas>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="am-card am-card-body h-100">
              <h5 class="fw-bold mb-3">Répartition des statuts</h5>
              <canvas id="chartStatus" height="200"></canvas>
            </div>
          </div>
        </div>

        <!-- Tableau récent -->
        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Derniers rendez-vous</h5>
            <a href="historique-rendezvous.html" class="btn btn-sm btn-outline-orange">Voir tout</a>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead>
                <tr><th>Visiteur</th><th>Objet</th><th>Responsable</th><th>Date</th><th>Statut</th></tr>
              </thead>
              <tbody>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">MK</div><div><div class="am-cell-name">Mariama Koné</div><div class="am-cell-sub">CNI 1985-2210</div></div></div></td><td>Partenariat publicitaire</td><td>Ibrahima Bah</td><td>17 Juin 2026</td><td><span class="am-badge am-badge-success">Validé</span></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">ST</div><div><div class="am-cell-name">Samuel Traoré</div><div class="am-cell-sub">CNI 1990-7741</div></div></div></td><td>Devis impression</td><td>Aïcha Sylla</td><td>17 Juin 2026</td><td><span class="am-badge am-badge-warning">Reporté</span></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">LD</div><div><div class="am-cell-name">Linda Diop</div><div class="am-cell-sub">CNI 1992-3320</div></div></div></td><td>Recrutement</td><td>Moussa Camara</td><td>16 Juin 2026</td><td><span class="am-badge am-badge-info">En cours</span></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">PG</div><div><div class="am-cell-name">Paul Gomez</div><div class="am-cell-sub">CNI 1988-9912</div></div></div></td><td>Réclamation client</td><td>Ibrahima Bah</td><td>16 Juin 2026</td><td><span class="am-badge am-badge-danger">Rejeté</span></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">NF</div><div><div class="am-cell-name">Nadia Fall</div><div class="am-cell-sub">CNI 1995-1180</div></div></div></td><td>Signature contrat</td><td>Aïcha Sylla</td><td>15 Juin 2026</td><td><span class="am-badge am-badge-success">Validé</span></td></tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('vendor-scripts')
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'superadmin', active: 'dashboard-superadmin.html', title: 'Tableau de bord', subtitle: 'Vue globale du système' });

    new Chart(document.getElementById('chartMonthly'), {
      type: 'bar',
      data: {
        labels: ['Jan','Fév','Mar','Avr','Mai','Juin','Juil','Août','Sep','Oct','Nov','Déc'],
        datasets: [{ label: 'Rendez-vous', data: [62,75,68,90,84,96,110,102,88,94,120,131], backgroundColor: AM_COLORS.orange, borderRadius: 6, maxBarThickness: 26 }]
      },
      options: { plugins:{legend:{display:false}}, scales:{ y:{ beginAtZero:true, grid:{color:'#eef2f6'} }, x:{ grid:{display:false} } } }
    });

    new Chart(document.getElementById('chartStatus'), {
      type: 'doughnut',
      data: {
        labels: ['Validés','En cours','Reportés','Rejetés'],
        datasets: [{ data: [540, 180, 130, 86], backgroundColor: [AM_COLORS.green, AM_COLORS.blue, AM_COLORS.amber, AM_COLORS.red], borderWidth: 0 }]
      },
      options: { cutout:'62%', plugins:{ legend:{ position:'bottom', labels:{ usePointStyle:true, padding:14 } } } }
    });
  </script>
@endsection
