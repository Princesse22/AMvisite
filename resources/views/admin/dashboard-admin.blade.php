@extends('layouts.app')

@section('title', 'Tableau de bord - Administrateur | Accent Media')

@section('content')

        <div class="row g-3 mb-4">
          <div class="col-12 col-md-4"><div class="am-stat"><div><div class="am-stat-label">Visiteurs</div><div class="am-stat-value">1 482</div><div class="am-stat-trend text-success"><i class="bi bi-arrow-up"></i> +18% ce mois</div></div><div class="am-stat-icon am-icon-orange"><i class="bi bi-people-fill"></i></div></div></div>
          <div class="col-12 col-md-4"><div class="am-stat"><div><div class="am-stat-label">Rendez-vous</div><div class="am-stat-value">936</div><div class="am-stat-trend text-success"><i class="bi bi-arrow-up"></i> +9% ce mois</div></div><div class="am-stat-icon am-icon-blue"><i class="bi bi-calendar2-check-fill"></i></div></div></div>
          <div class="col-12 col-md-4"><div class="am-stat"><div><div class="am-stat-label">Utilisateurs</div><div class="am-stat-value">44</div><div class="am-stat-trend text-secondary"><i class="bi bi-dash"></i> stable</div></div><div class="am-stat-icon am-icon-green"><i class="bi bi-person-gear"></i></div></div></div>
        </div>

        <div class="row g-3 mb-4">
          <div class="col-12 col-lg-7">
            <div class="am-card am-card-body h-100">
              <h5 class="fw-bold mb-3">Visites par mois</h5>
              <canvas id="chartVisits" height="130"></canvas>
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <div class="am-card am-card-body h-100">
              <h5 class="fw-bold mb-3">Rendez-vous par statut</h5>
              <canvas id="chartStatus" height="200"></canvas>
            </div>
          </div>
        </div>

        <div class="am-table-card">
          <div class="am-table-header"><h5>Activité récente</h5></div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Visiteur</th><th>Type de visite</th><th>Secrétaire</th><th>Date</th></tr></thead>
              <tbody>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">MK</div><div class="am-cell-name">Mariama Koné</div></div></td><td>Partenaire</td><td>Fatou Aïdara</td><td>17 Juin 2026 - 09:20</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">ST</div><div class="am-cell-name">Samuel Traoré</div></div></td><td>Fournisseur</td><td>Mariam Sow</td><td>17 Juin 2026 - 10:05</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">LD</div><div class="am-cell-name">Linda Diop</div></div></td><td>Candidat</td><td>Christelle Ndour</td><td>16 Juin 2026 - 14:40</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">PG</div><div class="am-cell-name">Paul Gomez</div></div></td><td>Client</td><td>Fatou Aïdara</td><td>16 Juin 2026 - 11:15</td></tr>
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
    buildLayout({ role: 'admin', active: '/admin/dashboard-admin.html', title: 'Tableau de bord', subtitle: 'Suivi de l\'activité' });
    new Chart(document.getElementById('chartVisits'), {
      type: 'line',
      data: { labels: ['Jan','Fév','Mar','Avr','Mai','Juin','Juil','Août','Sep','Oct','Nov','Déc'],
        datasets: [{ label:'Visites', data:[110,128,135,150,148,168,180,172,160,166,190,205], borderColor: AM_COLORS.orange, backgroundColor: AM_COLORS.orangeSoft, fill:true, tension:.4, pointRadius:3 }] },
      options: { plugins:{legend:{display:false}}, scales:{ y:{beginAtZero:true, grid:{color:'#eef2f6'}}, x:{grid:{display:false}} } }
    });
    new Chart(document.getElementById('chartStatus'), {
      type: 'bar',
      data: { labels:['Validés','En cours','Reportés','Rejetés'], datasets:[{ data:[540,180,130,86], backgroundColor:[AM_COLORS.green,AM_COLORS.blue,AM_COLORS.amber,AM_COLORS.red], borderRadius:6, maxBarThickness:48 }] },
      options: { plugins:{legend:{display:false}}, scales:{ y:{beginAtZero:true, grid:{color:'#eef2f6'}}, x:{grid:{display:false}} } }
    });
  </script>
@endsection
