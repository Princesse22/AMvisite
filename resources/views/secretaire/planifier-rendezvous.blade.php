@extends('layouts.dashboard')

@section('title', 'Planifier un rendez-vous | Accent Media')

@section('content')

        <div class="am-section-card">
          <div class="am-section-head"><i class="bi bi-calendar-plus-fill text-orange me-2"></i>Nouveau rendez-vous</div>
          <div class="am-card-body">
            <form data-validate data-reset-after data-success="Rendez-vous envoyé au responsable." class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nom du visiteur</label>
                <input type="text" class="form-control" placeholder="Ex : Mariama Koné" required>
                <div class="invalid-feedback">Veuillez saisir le visiteur.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Objet du rendez-vous</label>
                <input type="text" class="form-control" placeholder="Ex : Partenariat commercial" required>
                <div class="invalid-feedback">Veuillez saisir l'objet.</div>
              </div>
              <div class="col-md-6">
                <label class="form-label">Service concerné</label>
                <select class="form-select">
                  <option>Direction Générale</option>
                  <option>Commercial</option>
                  <option>Ressources Humaines</option>
                  <option>Comptabilité</option>
                  <option>Informatique</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Responsable destinataire</label>
                <select class="form-select">
                  <option>Ibrahima Bah - Commercial</option>
                  <option>Awa Sarr - RH</option>
                  <option>Moussa Fall - Comptabilité</option>
                  <option>Nadia Cissé - Informatique</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="form-label">Date</label>
                <input type="date" class="form-control" required>
                <div class="invalid-feedback">Veuillez choisir une date.</div>
              </div>
              <div class="col-md-4">
                <label class="form-label">Heure</label>
                <input type="time" class="form-control" required>
                <div class="invalid-feedback">Veuillez choisir une heure.</div>
              </div>
              <div class="col-md-4">
                <label class="form-label">Priorité</label>
                <select class="form-select">
                  <option>Normale</option>
                  <option>Haute</option>
                  <option>Urgente</option>
                </select>
              </div>
              <div class="col-12 pt-2">
                <button type="submit" class="btn btn-orange"><i class="bi bi-send me-1"></i>Envoyer le rendez-vous</button>
              </div>
            </form>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'secretaire', active: '/secretaire/planifier-rendezvous.html', title: 'Planifier un rendez-vous', subtitle: 'Envoyer une demande au responsable' });
  </script>
@endsection
