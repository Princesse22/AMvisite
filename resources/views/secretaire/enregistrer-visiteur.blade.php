@extends('layouts.dashboard')

@section('title', 'Enregistrer un visiteur | Accent Media')

@section('content')

        <div class="am-section-card">
          <div class="am-section-head"><i class="bi bi-person-plus-fill text-orange me-2"></i>Informations du visiteur</div>
          <div class="am-card-body">
            <form method="post" action="{{ isset($visiteur) ? route('modifierVisiteurTraitement') : route('ajouterVisiteur') }}" class="row g-3">
              @csrf

              @if (isset($visiteur))
                <input type="hidden" name="id" value="{{ $visiteur->id }}">
              @endif

              <div class="col-md-6">
                <label class="form-label">Nom complet</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" placeholder="Ex : Jean Dupont" required name="nom" value="{{ old('nom', $visiteur->nom ?? '') }}">
                @error('nom')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label class="form-label">Numero de telephone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Ex : 77 880 12 34" required name="phone" value="{{ old('phone', $visiteur->phone ?? '') }}">
                @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label class="form-label">Numéro CNI</label>
                <input type="text" class="form-control @error('num_cni') is-invalid @enderror" placeholder="Ex : 1 234 5678 90123" required name="num_cni" value="{{ old('num_cni', $visiteur->num_cni ?? '') }}">
                @error('num_cni')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label class="form-label">Objet</label>
                <input type="text" class="form-control @error('objet') is-invalid @enderror" placeholder="Ex : Rendez-vous commercial" required name="objet" value="{{ old('objet', $visiteur->objet ?? '') }}">
                @error('objet')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label class="form-label">Type visiteur</label>
                <select class="form-select @error('type_visiteur') is-invalid @enderror" name="type_visiteur">
                  <option value="">-- Choisir --</option>
                  @foreach (['Client', 'Fournisseur', 'Partenaire', 'Autre'] as $type)
                    <option value="{{ $type }}" {{ old('type_visiteur', $visiteur->type_visiteur ?? '') === $type ? 'selected' : '' }}>{{ $type }}</option>
                  @endforeach
                </select>
                @error('type_visiteur')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label class="form-label">Date</label>
                <input type="date" class="form-control @error('date') is-invalid @enderror" required name="date" value="{{ old('date', $visiteur->date ?? '') }}">
                @error('date')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>

              <div class="col-md-6">
                <label class="form-label">Heure</label>
                <input type="time" class="form-control @error('heure') is-invalid @enderror" required name="heure" value="{{ old('heure', $visiteur->heure ?? '') }}">
                @error('heure')<div class="invalid-feedback">{{ $message }}</div>@enderror
              </div>

              <div class="col-12 d-flex gap-2 pt-2">
                <button type="submit" class="btn btn-orange"><i class="bi bi-check-lg me-1"></i>  Enregistrer</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="bi bi-arrow-counterclockwise me-1"></i>Réinitialiser</button>
              </div>
            </form>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'secretaire', active: '/secretaire/enregistrer-visiteur.html', title: '{{ isset($visiteur) ? "Modifier le visiteur" : "Enregistrer un visiteur" }}', subtitle: 'Nouveau visiteur' });

    @if ($errors->any())
      console.log('Erreurs de validation : voir les champs en rouge.');
    @endif
  </script>
@endsection
