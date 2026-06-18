@extends('layouts.app')

@section('title', 'Historique des rendez-vous | Accent Media')

@section('content')

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Historique des rendez-vous</h5>
            <div class="d-flex flex-wrap gap-2">
              <select class="form-select form-select-sm" style="width:auto">
                <option>Tous les statuts</option>
                <option>Validés</option>
                <option>Rejetés</option>
                <option>Reportés</option>
                <option>En cours</option>
              </select>
              <input type="date" class="form-control form-control-sm" style="width:auto">
            </div>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Visiteur</th><th>Responsable</th><th>Statut</th><th>Date</th><th>Heure</th></tr></thead>
              <tbody>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">MK</div><div class="am-cell-name">Mariama Koné</div></div></td><td>Ibrahima Bah</td><td><span class="am-badge am-badge-success">Validé</span></td><td>15 Juin 2026</td><td>10:00</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">PG</div><div class="am-cell-name">Paul Gomez</div></div></td><td>Awa Sarr</td><td><span class="am-badge am-badge-danger">Rejeté</span></td><td>14 Juin 2026</td><td>14:30</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">LD</div><div class="am-cell-name">Linda Diop</div></div></td><td>Moussa Fall</td><td><span class="am-badge am-badge-warning">Reporté</span></td><td>13 Juin 2026</td><td>09:15</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">YC</div><div class="am-cell-name">Yves Camara</div></div></td><td>Ibrahima Bah</td><td><span class="am-badge am-badge-info">En cours</span></td><td>13 Juin 2026</td><td>11:45</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">AN</div><div class="am-cell-name">Aïcha Ndiaye</div></div></td><td>Nadia Cissé</td><td><span class="am-badge am-badge-success">Validé</span></td><td>12 Juin 2026</td><td>16:00</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">ST</div><div class="am-cell-name">Samuel Traoré</div></div></td><td>Awa Sarr</td><td><span class="am-badge am-badge-success">Validé</span></td><td>11 Juin 2026</td><td>08:30</td></tr>
                <tr><td><div class="am-cell-user"><div class="am-cell-avatar">FB</div><div class="am-cell-name">Fanta Baldé</div></div></td><td>Moussa Fall</td><td><span class="am-badge am-badge-danger">Rejeté</span></td><td>10 Juin 2026</td><td>13:20</td></tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    var role = new URLSearchParams(location.search).get('role') || 'responsable';
    buildLayout({ role: role, active: 'historique-rendezvous.html', title: 'Historique des rendez-vous', subtitle: 'Tous les rendez-vous traités' });
  </script>
@endsection
