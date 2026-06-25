@extends('layouts.app')

@section('title', 'Gestion des Administrateurs | Accent Media')

@section('content')

        <div class="row g-3 mb-4">
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Total</div><div class="am-stat-value">8</div></div><div class="am-stat-icon am-icon-orange"><i class="bi bi-shield-lock-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Actifs</div><div class="am-stat-value">6</div></div><div class="am-stat-icon am-icon-green"><i class="bi bi-check-circle-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Inactifs</div><div class="am-stat-value">2</div></div><div class="am-stat-icon am-icon-slate"><i class="bi bi-pause-circle-fill"></i></div></div></div>
          <div class="col-6 col-lg-3"><div class="am-stat"><div><div class="am-stat-label">Nouveaux</div><div class="am-stat-value">2</div></div><div class="am-stat-icon am-icon-blue"><i class="bi bi-person-plus-fill"></i></div></div></div>
        </div>

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Liste des administrateurs</h5>
            <button class="btn btn-orange btn-sm" data-bs-toggle="modal" data-bs-target="#modalAdmin"><i class="bi bi-plus-lg me-1"></i>Ajouter un administrateur</button>
          </div>
          <div class="table-responsive">
            <table class="table am-table align-middle">
              <thead><tr><th>Nom</th><th>Email</th><th>Téléphone</th><th>Adresse</th><th>CNI</th><th class="text-end">Actions</th></tr></thead>
                <tbody>
                @foreach ($admins as $admin)
                <tr>
                    <td><div class="am-cell-name">{{ $admin->nom }}</div></td>
                    <td>{{ $admin->mail }}</td>
                    <td>{{ $admin->phone }}</td>
                    <td>{{ $admin->adresse }}</td>
                    <td>{{ $admin->num_cni }}</td>
                    <td class="text-end">
                        <a class="am-action-btn edit" href="{{ route('modifierAdmin', $admin->id) }}">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a class="am-action-btn delete" href="#" data-bs-toggle="modal" data-bs-target="#modalDelete" data-id="{{ $admin->id }}">
                            <i class="bi bi-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
@endsection

@section('modals')

<!-- Modal Ajout -->
  <div class="modal fade" id="modalAdmin" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"><h5 class="modal-title fw-bold">Administrateur</h5><button class="btn-close" data-bs-dismiss="modal"></button></div>
        <form novalidate method="post" action="{{ route('superadmin.ajout-admin') }}">
          @csrf
            <div class="modal-body">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <div class="mb-3"><label class="form-label">Nom complet</label>
                <input type="text" class="form-control" placeholder="Ex : Karim Diallo" required name="nom"></div>
            <div class="mb-3"><label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="email@accentmedia.com" required name="mail"></div>
            <div class="mb-3"><label class="form-label">Téléphone</label>
                <input type="tel" class="form-control" placeholder="+221 77 000 00 00" required name="phone"></div>
            <div class="mb-3"><label class="form-label">Numéro CNI</label>
                <input type="text" class="form-control" placeholder="Ex : 1234567890123" required name="num_cni"></div>
            <div class="mb-3"><label class="form-label">Adresse</label>
                <input type="text" class="form-control" placeholder="Ex : Dakar, Sénégal" required name="adresse"></div>
            <div class="mb-3"><label class="form-label">Mot de passe</label>
                <input type="password" class="form-control" placeholder="••••••••" required name="password"></div>
          </div>
          <div class="modal-footer"><button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button><button type="submit" class="btn btn-orange">Enregistrer</button></div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal Suppression -->
  <div class="modal fade" id="modalDelete" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center p-4">
          <div class="am-stat-icon am-icon-red mx-auto mb-3" style="width:56px;height:56px;font-size:1.6rem"><i class="bi bi-exclamation-triangle-fill"></i></div>
          <h5 class="fw-bold">Confirmer la suppression</h5>
          <p class="text-secondary">Cette action est irréversible. Voulez-vous vraiment supprimer cet administrateur ?</p>
          <form id="formDelete" method="post" action="">
            @csrf
            @method('DELETE')
            <div class="d-flex gap-2 justify-content-center mt-3">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annuler</button>
              <button type="submit" class="btn btn-danger">Supprimer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'superadmin', active: 'gestion-admins.html', title: 'Gestion des Administrateurs', subtitle: 'Créer et gérer les comptes administrateurs' });

    @if ($errors->any())
      document.addEventListener('DOMContentLoaded', function () {
        new bootstrap.Modal(document.getElementById('modalAdmin')).show();
      });
    @endif

    // Injecte dynamiquement l'URL de suppression selon la ligne cliquée
    document.getElementById('modalDelete').addEventListener('show.bs.modal', function (event) {
      const id = event.relatedTarget.getAttribute('data-id');
      const baseUrl = "{{ url('superadmin/admin') }}"; // adaptez si le préfixe de route est différent
      document.getElementById('formDelete').action = baseUrl + '/' + id;
    });
  </script>
@endsection
