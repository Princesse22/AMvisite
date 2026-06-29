@extends('layouts.app')

@section('title', 'Gestion des Secrétaires | Accent Media')

@section('content')

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>{{ isset($service) ? 'Modifier la secrétaire' : 'Ajouter une secrétaire' }}</h5>
            <a href="{{ route('gestion-utilisateurs') }}" class="btn btn-light btn-sm">
              <i class="bi bi-arrow-left me-1"></i>Retour
            </a>
          </div>

          <div class="p-4">
            <form method="post" action="{{ isset($service) ? route('modifierServicetraitement') : route('ajoutService') }}">
              @csrf

              @if (isset($service))
                <input type="hidden" name="id" value="{{ $service->id }}">
              @endif

              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">Nom</label>
                  <input type="text" class="form-control @error('nom') is-invalid @enderror" required name="nom" value="{{ old('nom', $service->nom ?? '') }}">
                  @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="col-md-6">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control @error('mail') is-invalid @enderror" required name="mail" value="{{ old('mail', $service->mail ?? '') }}">
                  @error('mail')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                <a href="{{ route('gestion-utilisateurs') }}" class="btn btn-light">Annuler</a>
                <button type="submit" class="btn btn-orange">
                  {{ isset($service) ? 'Mettre à jour' : 'Enregistrer' }}
                </button>
              </div>
            </form>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'admin', active: '/admin/gestion-utilisateurs.html', title: '{{ isset($service) ? "Modifier la secrétaire" : "Ajouter une secrétaire" }}', subtitle: 'Secrétaires de l\'établissement' });
  </script>
@endsection
