@extends('layouts.dashboard')

@section('title', 'Liste des visiteurs | Accent Media')

@section('content')

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Visiteurs enregistrés</h5>
            <a href="{{ route('enregistrer-visiteur') }}" class="btn btn-sm btn-orange"><i class="bi bi-plus-lg me-1"></i>Nouveau visiteur</a>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead>
                <tr><th>Nom</th><th>CNI</th><th>Téléphone</th><th>Type de visite</th><th>Date de visite</th><th>Heure</th><th class="text-end">Actions</th></tr>
              </thead>
              <tbody>
                @forelse ($visiteurs as $visiteur)
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">{{ strtoupper(substr($visiteur->nom, 0, 2)) }}</div><div class="am-cell-name">{{ $visiteur->nom }}</div></div></td>
                  <td>{{ $visiteur->num_cni }}</td>
                  <td>{{ $visiteur->phone }}</td>
                  <td>
                    @php
                      $badgeClass = [
                        'Client' => 'am-badge-success',
                        'Fournisseur' => 'am-badge-warning',
                        'Partenaire' => 'am-badge-info',
                        'Autre' => 'am-badge-muted',
                      ][$visiteur->type_visiteur] ?? 'am-badge-muted';
                    @endphp
                    <span class="am-badge {{ $badgeClass }}">{{ $visiteur->type_visiteur }}</span>
                  </td>
                  <td>{{ \Carbon\Carbon::parse($visiteur->date)->format('d M Y') }}</td>
                  <td>{{ $visiteur->heure }}</td>
                  <td class="text-end">
                    <a href="{{ route('modifierVisiteur', $visiteur->id) }}" class="am-action-btn edit"><i class="bi bi-pencil"></i></a>
                    <a href="{{ route('supprimerVisiteur', $visiteur->id) }}" class="am-action-btn delete" onclick="return confirm('Confirmer la suppression de ce visiteur ?');"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="7" class="text-center text-secondary py-4">Aucun visiteur enregistré pour le moment.</td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'secretaire', active: '/secretaire/liste-visiteurs.html', title: 'Liste des visiteurs', subtitle: 'Tous les visiteurs enregistrés' });
  </script>
@endsection
