@extends('layouts.app')

@section('title', 'Gestion des Secrétaires | Accent Media')

@section('content')

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>{{ isset($secretaire) ? 'Modifier la secrétaire' : 'Ajouter une secrétaire' }}</h5>
            <a href="{{ route('gestion-utilisateurs') }}" class="btn btn-light btn-sm">
              <i class="bi bi-arrow-left me-1"></i>Retour
            </a>
          </div>

          <div class="p-4">
            <form method="post" action="{{ isset($secretaire) ? route('modifierSecretairetraitement') : route('ajoutSecretaire') }}">
              @csrf

              @if (isset($secretaire))
                <input type="hidden" name="id" value="{{ $secretaire->id }}">
              @endif

              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Nom complet</label>
                  <input type="text" class="form-control @error('nom') is-invalid @enderror" required name="nom" value="{{ old('nom', $secretaire->nom ?? '') }}">
                  @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control @error('mail') is-invalid @enderror" required name="mail" value="{{ old('mail', $secretaire->mail ?? '') }}">
                  @error('mail')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label">Téléphone</label>
                  <input type="tel" class="form-control @error('phone') is-invalid @enderror" required name="phone" value="{{ old('phone', $secretaire->phone ?? '') }}">
                  @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label">Numéro CNI</label>
                  <input type="text" class="form-control @error('num_cni') is-invalid @enderror" required name="num_cni" value="{{ old('num_cni', $secretaire->num_cni ?? '') }}">
                  @error('num_cni')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label">Adresse</label>
                  <input type="text" class="form-control @error('adresse') is-invalid @enderror" required name="adresse" value="{{ old('adresse', $secretaire->adresse ?? '') }}">
                  @error('adresse')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                @if (!isset($secretaire))
                <div class="col-md-6">
                  <label class="form-label">Mot de passe</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" required name="password">
                  @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                @endif

                <div class="col-md-6">
                  <label class="form-label">Statut</label>
                  <select class="form-select @error('statut') is-invalid @enderror" name="statut">
                    <option value="actif" {{ (old('statut', $secretaire->statut ?? '') === 'actif') ? 'selected' : '' }}>Actif</option>
                    <option value="inactif" {{ (old('statut', $secretaire->statut ?? '') === 'inactif') ? 'selected' : '' }}>Inactif</option>
                  </select>
                  @error('statut')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              </div>

              <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('gestion-utilisateurs') }}" class="btn btn-light">Annuler</a>
                <button type="submit" class="btn btn-orange">
                  {{ isset($secretaire) ? 'Mettre à jour' : 'Enregistrer' }}
                </button>
              </div>
            </form>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'admin', active: '/admin/gestion-utilisateurs.html', title: '{{ isset($secretaire) ? "Modifier la secrétaire" : "Ajouter une secrétaire" }}', subtitle: 'Secrétaires de l\'établissement' });
  </script>
@endsection
