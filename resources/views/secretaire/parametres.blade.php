@extends('layouts.dashboard')

@section('title', 'Paramètres | Accent Media')

@section('styles')
  <style>
    .am-color-swatch { width:40px; height:40px; border-radius:9px; border:2px solid #fff; box-shadow:0 0 0 1px var(--am-gray-200); cursor:pointer; }
  </style>
@endsection

@section('content')

        <div class="row g-3">
          <div class="col-12 col-lg-6">
            <div class="am-section-card h-100">
              <div class="am-section-head"><i class="bi bi-building text-orange me-2"></i>Informations de l'entreprise</div>
              <div class="am-card-body">
                <form data-validate data-success="Informations enregistrées." class="row g-3">
                  <div class="col-12"><label class="form-label">Nom de l'entreprise</label><input type="text" class="form-control" value="Accent Media"></div>
                  <div class="col-12"><label class="form-label">Email</label><input type="email" class="form-control" value="contact@accentmedia.com"></div>
                  <div class="col-md-6"><label class="form-label">Téléphone</label><input type="tel" class="form-control" value="+221 33 800 00 00"></div>
                  <div class="col-md-6"><label class="form-label">Ville</label><input type="text" class="form-control" value="Dakar"></div>
                  <div class="col-12"><label class="form-label">Adresse</label><textarea class="form-control" rows="2">Avenue Léopold Sédar Senghor, Dakar, Sénégal</textarea></div>
                  <div class="col-12 pt-2"><button type="submit" class="btn btn-orange"><i class="bi bi-check-lg me-1"></i>Enregistrer</button></div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-6">
            <div class="am-section-card mb-3">
              <div class="am-section-head"><i class="bi bi-image text-orange me-2"></i>Logo</div>
              <div class="am-card-body">
                <div class="d-flex align-items-center gap-3">
                  <div class="am-brand-logo" style="width:64px;height:64px;font-size:1.6rem">AM</div>
                  <div>
                    <input type="file" class="form-control form-control-sm mb-2" accept="image/*">
                    <small class="text-secondary">PNG ou SVG, max 2 Mo.</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="am-section-card">
              <div class="am-section-head"><i class="bi bi-palette text-orange me-2"></i>Couleurs du système</div>
              <div class="am-card-body">
                <label class="form-label">Couleur principale</label>
                <div class="d-flex gap-2 mb-3">
                  <div class="am-color-swatch" style="background:#f97316;outline:2px solid #f97316;outline-offset:2px"></div>
                  <div class="am-color-swatch" style="background:#2563eb"></div>
                  <div class="am-color-swatch" style="background:#16a34a"></div>
                  <div class="am-color-swatch" style="background:#dc2626"></div>
                  <div class="am-color-swatch" style="background:#0f172a"></div>
                </div>
                <label class="form-label">Code couleur personnalisé</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-hash"></i></span>
                  <input type="text" class="form-control" value="f97316">
                </div>
                <button class="btn btn-orange mt-3" data-demo-action="Thème mis à jour."><i class="bi bi-check-lg me-1"></i>Appliquer</button>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'secretaire', active: '/secretaire/parametres.html', title: 'Paramètres', subtitle: 'Configuration du système' });
  </script>
@endsection
