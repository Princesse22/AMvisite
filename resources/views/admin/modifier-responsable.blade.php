
@extends('layouts.app')

@section('title', 'Modifier un Responsable | Accent Media')

{{-- @section('content')
@endsection --}}

@section('modals')
<div class="modal fade show" id="modalResp" tabindex="-1" style="display:block;position:relative;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header"><h5 class="modal-title fw-bold">Modifier le responsable</h5></div>
        <form method="post" action="{{ route('modifierResponsabletraitement') }}">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
          <div class="modal-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nom complet</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" required name="nom" value="{{ old('nom', $user->nom) }}">
                @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Service</label>
                <select class="form-select @error('service') is-invalid @enderror" name="service">
                @foreach (['Commercial', 'Production', 'Ressources Humaines', 'Marketing', 'Finance'] as $service)
                  <option value="{{ $service }}" @selected(old('service', $user->service) === $service)>{{ $service }}</option>
                @endforeach
                </select>
                @error('service')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
              <div class="col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control @error('mail') is-invalid @enderror" required name="mail" value="{{ old('mail', $user->mail) }}">
                @error('mail')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Téléphone</label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" required name="phone" value="{{ old('phone', $user->phone) }}">
                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">numero cni</label>
                <input type="text" class="form-control @error('num_cni') is-invalid @enderror" required name="num_cni" value="{{ old('num_cni', $user->num_cni) }}">
                @error('num_cni')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Adresse</label>
                <input type="text" class="form-control @error('adresse') is-invalid @enderror" required name="adresse" value="{{ old('adresse', $user->adresse) }}">
                @error('adresse')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
              <div class="col-md-6">
                <label class="form-label">Statut</label>
                <select class="form-select @error('statut') is-invalid @enderror" name="statut">
                <option value="actif" @selected(old('statut', $user->statut) === 'actif')>Actif</option>
                <option value="inactif" @selected(old('statut', $user->statut) === 'inactif')>Inactif</option>
                </select>
                @error('statut')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <a href="{{ route('gestion-utilisateurs') }}" class="btn btn-light">Annuler</a>
            <button type="submit" class="btn btn-orange">Enregistrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'admin', active: '/admin/gestion-utilisateurs.html', title: 'Modifier un Responsable', subtitle: 'Mettre à jour les informations du responsable' });
  </script>
@endsection
