@extends('layouts.dashboard')

@section('title', 'Tableau de bord - Responsable | Accent Media')

@section('content')

        <div class="row g-3 mb-4">
          <div class="col-6 col-md-3"><div class="am-stat"><div><div class="am-stat-label">Rendez-vous reçus</div><div class="am-stat-value">38</div><div class="am-stat-trend text-secondary">Ce mois</div></div><div class="am-stat-icon am-icon-orange"><i class="bi bi-inbox-fill"></i></div></div></div>
          <div class="col-6 col-md-3"><div class="am-stat"><div><div class="am-stat-label">Validés</div><div class="am-stat-value">21</div><div class="am-stat-trend text-success"><i class="bi bi-check2"></i> 55%</div></div><div class="am-stat-icon am-icon-green"><i class="bi bi-check-circle-fill"></i></div></div></div>
          <div class="col-6 col-md-3"><div class="am-stat"><div><div class="am-stat-label">Rejetés</div><div class="am-stat-value">7</div><div class="am-stat-trend text-danger"><i class="bi bi-x"></i> 18%</div></div><div class="am-stat-icon am-icon-red"><i class="bi bi-x-circle-fill"></i></div></div></div>
          <div class="col-6 col-md-3"><div class="am-stat"><div><div class="am-stat-label">Reportés</div><div class="am-stat-value">10</div><div class="am-stat-trend text-warning"><i class="bi bi-clock"></i> 27%</div></div><div class="am-stat-icon am-icon-amber"><i class="bi bi-calendar-event-fill"></i></div></div></div>
        </div>

        <div class="row g-3 mb-4">
          <div class="col-12 col-lg-7">
            <div class="am-card am-card-body h-100">
              <h5 class="fw-bold mb-3">Rendez-vous reçus par mois</h5>
              <canvas id="chartReceived" height="130"></canvas>
            </div>
          </div>
          <div class="col-12 col-lg-5">
            <div class="am-card am-card-body h-100">
              <h5 class="fw-bold mb-3">Répartition des statuts</h5>
              <canvas id="chartStatus" height="200"></canvas>
            </div>
          </div>
        </div>

        <div class="am-table-card">
          <div class="am-table-header"><h5>Derniers rendez-vous reçus</h5><a href="/responsable/rendezvous-recus.html" class="btn btn-sm btn-outline-orange">Tout voir</a></div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Visiteur</th><th>Objet</th><th>Date</th><th>Heure</th><th>Statut</th></tr></thead>
              <tbody>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">MK</div><div class="am-cell-name">Mariama Koné</div></div></td><td>Partenariat commercial</td><td>18 Juin 2026</td><td>10:00</td><td><span class="am-badge am-badge-info">En cours</span></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">PG</div><div class="am-cell-name">Paul Gomez</div></div></td><td>Présentation produit</td><td>18 Juin 2026</td><td>14:30</td><td><span class="am-badge am-badge-success">Validé</span></td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">LD</div><div class="am-cell-name">Linda Diop</div></div></td><td>Entretien recrutement</td><td>19 Juin 2026</td><td>09:15</td><td><span class="am-badge am-badge-warning">Reporté</span></td></tr>
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
    buildLayout({ role: 'responsable', active: '/responsable/dashboard-responsable.html', title: 'Tableau de bord', subtitle: 'Mes rendez-vous' });
    new Chart(document.getElementById('chartReceived'), {
      type: 'bar',
      data: { labels:['Jan','Fév','Mar','Avr','Mai','Juin'], datasets:[{ label:'Reçus', data:[22,28,31,26,34,38], backgroundColor: AM_COLORS.orange, borderRadius:6, maxBarThickness:40 }] },
      options: { plugins:{legend:{display:false}}, scales:{ y:{beginAtZero:true, grid:{color:'#eef2f6'}}, x:{grid:{display:false}} } }
    });
    new Chart(document.getElementById('chartStatus'), {
      type: 'doughnut',
      data: { labels:['Validés','Rejetés','Reportés','En cours'], datasets:[{ data:[21,7,10,6], backgroundColor:[AM_COLORS.green,AM_COLORS.red,AM_COLORS.amber,AM_COLORS.blue], borderWidth:0 }] },
      options: { cutout:'62%', plugins:{legend:{position:'bottom'}} }
    });
  </script>
@endsection
