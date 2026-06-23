@extends('layouts.app')

@section('title', 'Enregistrer un visiteur | Accent Media')

@section('content')

        <div class="am-section-card">
          <div class="am-section-head"><i class="bi bi-person-plus-fill text-orange me-2"></i>Informations du visiteur</div>
          <div class="am-card-body">
            <form data-validate data-reset-after data-success="Visiteur enregistré avec succès." class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nom complet</label>
                <input type="text" class="form-control" placeholder="Ex : Jean Dupont" required>
                <div class="invalid-feedback">Veuillez saisir le nom complet.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Numéro CNI</label>
                <input type="text" class="form-control" placeholder="Ex : 1 234 5678 90123" required>
                <div class="invalid-feedback">Veuillez saisir le numéro CNI.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Téléphone</label>
                <input type="tel" class="form-control" placeholder="Ex : +221 77 000 00 00" required>
                <div class="invalid-feedback">Veuillez saisir le téléphone.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Adresse</label>
                <input type="text" class="form-control" placeholder="Ex : Dakar, Plateau">
              </div>
              <div class="col-md-6">
                <label class="form-label">Type de visite</label>
                <select class="form-select">
                  <option>Client</option>
                  <option>Fournisseur</option>
                  <option>Partenaire</option>
                  <option>Candidat</option>
                  <option>Autre</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Objet de la visite</label>
                <input type="text" class="form-control" placeholder="Ex : Réunion commerciale">
              </div>
              <div class="col-md-6">
                <label class="form-label">Date</label>
                <input type="date" class="form-control" required>
                <div class="invalid-feedback">Veuillez choisir une date.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Heure</label>
                <input type="time" class="form-control" required>
                <div class="invalid-feedback">Veuillez choisir une heure.</div>
              </div>
              <div class="col-12 d-flex gap-2 pt-2">
                <button type="submit" class="btn btn-orange"><i class="bi bi-check-lg me-1"></i>Enregistrer</button>
                <button type="reset" class="btn btn-outline-secondary"><i class="bi bi-arrow-counterclockwise me-1"></i>Réinitialiser</button>
              </div>
            </form>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'admin', active: '/admin/liste-visiteurs.html', title: 'Enregistrer un visiteur', subtitle: 'Nouveau visiteur' });
  </script>
@endsection
