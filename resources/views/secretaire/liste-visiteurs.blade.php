@extends('layouts.app')

@section('title', 'Liste des visiteurs | Accent Media')

@section('content')

        <div class="am-table-card">
          {{-- <div class="am-table-header">
            <h5>Visiteurs enregistrés</h5>
            <a href="enregistrer-visiteur.html" class="btn btn-sm btn-orange"><i class="bi bi-plus-lg me-1"></i>Nouveau visiteur</a>
          </div> --}}
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead>
                <tr><th>Nom</th><th>CNI</th><th>Téléphone</th><th>Type de visite</th><th>Date de visite</th><th class="text-end">Actions</th></tr>
              </thead>
              <tbody>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">MK</div><div class="am-cell-name">Mariama Koné</div></div></td>
                  <td>1 234 5678 90123</td><td>+221 77 845 12 03</td><td><span class="am-badge am-badge-info">Partenaire</span></td><td>17 Juin 2026</td>
                  <td class="text-end"><a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a> <button class="am-action-btn edit" data-demo-action="Modification du visiteur (démo)."><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-demo-action="Visiteur supprimé (démo)."><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">ST</div><div class="am-cell-name">Samuel Traoré</div></div></td>
                  <td>2 987 6543 21098</td><td>+221 76 112 88 44</td><td><span class="am-badge am-badge-warning">Fournisseur</span></td><td>17 Juin 2026</td>
                  <td class="text-end"><a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a> <button class="am-action-btn edit" data-demo-action="Modification du visiteur (démo)."><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-demo-action="Visiteur supprimé (démo)."><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">LD</div><div class="am-cell-name">Linda Diop</div></div></td>
                  <td>3 456 1234 56789</td><td>+221 70 334 90 21</td><td><span class="am-badge am-badge-muted">Candidat</span></td><td>16 Juin 2026</td>
                  <td class="text-end"><a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a> <button class="am-action-btn edit" data-demo-action="Modification du visiteur (démo)."><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-demo-action="Visiteur supprimé (démo)."><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">PG</div><div class="am-cell-name">Paul Gomez</div></div></td>
                  <td>4 567 2345 67890</td><td>+221 78 221 45 67</td><td><span class="am-badge am-badge-success">Client</span></td><td>16 Juin 2026</td>
                  <td class="text-end"><a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a> <button class="am-action-btn edit" data-demo-action="Modification du visiteur (démo)."><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-demo-action="Visiteur supprimé (démo)."><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">AN</div><div class="am-cell-name">Aïcha Ndiaye</div></div></td>
                  <td>5 678 3456 78901</td><td>+221 77 909 11 22</td><td><span class="am-badge am-badge-success">Client</span></td><td>15 Juin 2026</td>
                  <td class="text-end"><a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a> <button class="am-action-btn edit" data-demo-action="Modification du visiteur (démo)."><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-demo-action="Visiteur supprimé (démo)."><i class="bi bi-trash"></i></button></td>
                </tr>
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">YC</div><div class="am-cell-name">Yves Camara</div></div></td>
                  <td>6 789 4567 89012</td><td>+221 76 778 33 90</td><td><span class="am-badge am-badge-info">Partenaire</span></td><td>15 Juin 2026</td>
                  <td class="text-end"><a href="rendezvous-detail.html" class="am-action-btn view"><i class="bi bi-eye"></i></a> <button class="am-action-btn edit" data-demo-action="Modification du visiteur (démo)."><i class="bi bi-pencil"></i></button> <button class="am-action-btn delete" data-demo-action="Visiteur supprimé (démo)."><i class="bi bi-trash"></i></button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'secretaire', active: 'liste-visiteurs.html', title: 'Liste des visiteurs', subtitle: 'Tous les visiteurs enregistrés' });
  </script>
@endsection
