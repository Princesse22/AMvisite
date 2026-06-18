@extends('layouts.app')

@section('title', 'Profil utilisateur | Accent Media')

@section('content')

        <div class="row g-3">
          <div class="col-12 col-lg-4">
            <div class="am-section-card">
              <div class="am-card-body text-center">
                <div class="am-avatar mx-auto mb-3" style="width:88px;height:88px;font-size:2rem">IB</div>
                <h5 class="fw-bold mb-0 text-dark">Ibrahima Bah</h5>
                <div class="text-secondary">Responsable - Commercial</div>
                <span class="am-badge am-badge-success mt-2">Actif</span>
                <hr>
                <div class="text-start small">
                  <div class="mb-2"><i class="bi bi-envelope text-orange me-2"></i>ibrahima.bah@accentmedia.com</div>
                  <div class="mb-2"><i class="bi bi-telephone text-orange me-2"></i>+221 77 123 45 67</div>
                  <div><i class="bi bi-geo-alt text-orange me-2"></i>Dakar, Sénégal</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-8">
            <div class="am-section-card mb-3">
              <div class="am-section-head"><i class="bi bi-person-gear text-orange me-2"></i>Modifier le profil</div>
              <div class="am-card-body">
                <form data-validate data-success="Profil mis à jour." class="row g-3">
                  <div class="col-md-6"><label class="form-label">Nom complet</label><input type="text" class="form-control" value="Ibrahima Bah"></div>
                  <div class="col-md-6"><label class="form-label">Email</label><input type="email" class="form-control" value="ibrahima.bah@accentmedia.com"></div>
                  <div class="col-md-6"><label class="form-label">Téléphone</label><input type="tel" class="form-control" value="+221 77 123 45 67"></div>
                  <div class="col-md-6"><label class="form-label">Service</label><input type="text" class="form-control" value="Commercial"></div>
                  <div class="col-12 pt-2"><button type="submit" class="btn btn-orange"><i class="bi bi-check-lg me-1"></i>Enregistrer</button></div>
                </form>
              </div>
            </div>

            <div class="am-section-card">
              <div class="am-section-head"><i class="bi bi-shield-lock text-orange me-2"></i>Modifier le mot de passe</div>
              <div class="am-card-body">
                <form data-validate data-reset-after data-success="Mot de passe modifié." class="row g-3">
                  <div class="col-12"><label class="form-label">Mot de passe actuel</label><input type="password" class="form-control" required></div>
                  <div class="col-md-6"><label class="form-label">Nouveau mot de passe</label><input type="password" class="form-control" required></div>
                  <div class="col-md-6"><label class="form-label">Confirmer le mot de passe</label><input type="password" class="form-control" required></div>
                  <div class="col-12 pt-2"><button type="submit" class="btn btn-orange"><i class="bi bi-key me-1"></i>Mettre à jour</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    var role = new URLSearchParams(location.search).get('role') || 'responsable';
    buildLayout({ role: role, active: 'profil.html', title: 'Profil utilisateur', subtitle: 'Gérer vos informations' });
  </script>
@endsection
