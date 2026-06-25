@extends('layouts.app')

@section('title', 'Gestion des Utilisateurs | Accent Media')

@section('content')

        <div class="row g-3 mb-4">
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Total</div><div class="am-stat-value">24</div></div><div class="am-stat-icon am-icon-orange"><i class="bi bi-person-badge-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Actifs</div><div class="am-stat-value">21</div></div><div class="am-stat-icon am-icon-green"><i class="bi bi-check-circle-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Services</div><div class="am-stat-value">7</div></div><div class="am-stat-icon am-icon-blue"><i class="bi bi-diagram-3-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Inactifs</div><div class="am-stat-value">3</div></div><div class="am-stat-icon am-icon-slate"><i class="bi bi-pause-circle-fill"></i></div></div></div>
        </div>

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Liste des responsables</h5>
            <button class="btn btn-orange btn-sm" data-bs-toggle="modal" data-bs-target="#modalResp"><i class="bi bi-plus-lg me-1"></i>Ajouter un responsable</button>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead>
                <tr><th>Nom</th>
                <th>Service</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Statut</th>
                <th class="text-end">Actions</th></tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td><div class="am-cell-user"><div class="am-cell-avatar">{{ strtoupper(substr($user->nom, 0, 2)) }}</div><div class="am-cell-name">{{ $user->nom }}</div></div></td>
                  <td>{{ $user->service }}</td>
                  <td>{{ $user->mail }}</td>
                  <td>{{ $user->phone }}</td>
                  <td><span class="am-badge {{ $user->statut === 'actif' ? 'am-badge-success' : 'am-badge-secondary' }}">{{ ucfirst($user->statut) }}</span></td>
                  <td class="text-end">
                    <button class="am-action-btn view" data-demo-action="Activation/Désactivation (démo)."><i class="bi bi-toggle-on"></i></button>
                    <button class="am-action-btn edit" data-bs-toggle="modal" data-bs-target="#modalResp"><i class="bi bi-pencil"></i></button>
                    <button class="am-action-btn delete" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('modals')
<div class="modal fade" id="modalResp" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"><h5 class="modal-title fw-bold">Responsable</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
        <form method="post" action="{{route('ajoutResponsable')}}">
            @csrf
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nom complet</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" required name="nom" value="{{ old('nom') }}">
                @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Service</label>
                <select class="form-select @error('service') is-invalid @enderror" name="service">
                <option>Commercial</option>
                <option>Production</option>
                <option>Ressources Humaines</option>
                <option>Marketing</option>
                <option>Finance</option>
                </select>
                @error('service')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control @error('mail') is-invalid @enderror" required name="mail" value="{{ old('mail') }}">
                @error('mail')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Téléphone</label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" required name="phone" value="{{ old('phone') }}">
                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">numero cni</label>
                <input type="text" class="form-control @error('num_cni') is-invalid @enderror" required name="num_cni" value="{{ old('num_cni') }}">
                @error('num_cni')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Adresse</label>
                <input type="text" class="form-control @error('adresse') is-invalid @enderror" required name="adresse" value="{{ old('adresse') }}">
                @error('adresse')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Mot de passe</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" required name="password">
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Statut</label>
                <select class="form-select @error('statut') is-invalid @enderror" name="statut">
                <option value="actif">Actif</option>
                <option value="inactif">Inactif</option>
                </select>
                @error('statut')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
            </div>
          </div>
          <div class="modal-footer"><button type="button" class="btn btn-light">Annuler</button><button type="submit" class="btn btn-orange">Enregistrer</button></div>
        </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content"><div class="modal-body text-center p-4">
        <div class="am-stat-icon am-icon-red mx-auto mb-3" style="width:56px;height:56px;font-size:1.6rem"><i class="bi bi-exclamation-triangle-fill"></i></div>
        <h5 class="fw-bold">Confirmer la suppression</h5>
        <p class="text-secondary">Cette action est irréversible.</p>
        <div class="d-flex gap-2 justify-content-center mt-3"><button class="btn btn-light" data-bs-dismiss="modal">Annuler</button><button class="btn btn-danger" data-bs-dismiss="modal" data-demo-action="Responsable supprimé (démonstration).">Supprimer</button></div>
      </div></div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'admin', active: '/admin/gestion-utilisateurs.html', title: 'Gestion des Utilisateurs', subtitle: 'Responsables de service destinataires des rendez-vous' });

    @if ($errors->any())
      document.addEventListener('DOMContentLoaded', function () {
        var modalEl = document.getElementById('modalResp');
        var modal = new bootstrap.Modal(modalEl);
        modal.show();
      });
    @endif
  </script>
@endsection
