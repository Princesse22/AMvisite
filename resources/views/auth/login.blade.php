<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - Accent Media</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <div class="am-login-wrap">
    <!-- Côté présentation -->
    <div class="am-login-side">
      <div class="d-flex align-items-center gap-2">
        <div class="am-brand-logo" style="background:rgba(255,255,255,.2)">AM</div>
        <div>
          <div class="am-brand-name text-white">Accent Media</div>
          <div style="font-size:.78rem;opacity:.85">Gestion des visites d'entreprise</div>
        </div>
      </div>

      <div>
        <h2 class="fw-bold mb-3" style="font-size:2rem;line-height:1.2">Gérez vos visiteurs et rendez-vous en toute simplicité</h2>
        <p style="opacity:.9;max-width:440px">Une plateforme professionnelle pour enregistrer les visiteurs, planifier les rendez-vous et suivre l'activité de votre entreprise en temps réel.</p>

        <div class="mt-4">
          <div class="am-login-feature">
            <div class="am-login-feature-icon"><i class="bi bi-people-fill"></i></div>
            <div><div class="fw-semibold">Gestion centralisée</div><div style="opacity:.85;font-size:.85rem">Visiteurs, secrétaires et responsables au même endroit.</div></div>
          </div>
          <div class="am-login-feature">
            <div class="am-login-feature-icon"><i class="bi bi-calendar2-check-fill"></i></div>
            <div><div class="fw-semibold">Rendez-vous intelligents</div><div style="opacity:.85;font-size:.85rem">Planification, validation et report en quelques clics.</div></div>
          </div>
          <div class="am-login-feature">
            <div class="am-login-feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
            <div><div class="fw-semibold">Statistiques en temps réel</div><div style="opacity:.85;font-size:.85rem">Visualisez vos données avec des graphiques clairs.</div></div>
          </div>
        </div>
      </div>

      <div style="opacity:.75;font-size:.8rem">&copy; 2026 Accent Media. Tous droits réservés.</div>
    </div>

    <!-- Côté formulaire -->
    <div class="am-login-form-col">
      <div class="w-100" style="max-width:380px">
        <div class="d-lg-none d-flex align-items-center gap-2 mb-4 justify-content-center">
          <div class="am-brand-logo">AM</div>
          <div class="am-brand-name">Accent Media</div>
        </div>

        <h1 class="fw-bold mb-1" style="font-size:1.6rem;color:var(--am-gray-900)">Bienvenue</h1>
        <p class="text-secondary mb-4">Connectez-vous à votre espace de travail.</p>

        <form>
          <div class="mb-3">
            <label class="form-label">Adresse email</label>
            <div class="input-group">
              <span class="input-group-text bg-white"><i class="bi bi-envelope text-secondary"></i></span>
              <input type="email" class="form-control border-start-0" placeholder="exemple@accentmedia.com" value="admin@accentmedia.com">
            </div>
          </div>
          <div class="mb-2">
            <label class="form-label">Mot de passe</label>
            <div class="input-group">
              <span class="input-group-text bg-white"><i class="bi bi-lock text-secondary"></i></span>
              <input type="password" class="form-control border-start-0" placeholder="••••••••" value="motdepasse">
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between mb-4">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember" checked>
              <label class="form-check-label" for="remember" style="font-size:.85rem">Se souvenir de moi</label>
            </div>
            <a href="#" class="text-orange fw-semibold" style="font-size:.85rem">Mot de passe oublié ?</a>
          </div>

          <a href="dashboard-superadmin.html" class="btn btn-orange w-100 py-2 mb-3">
            <i class="bi bi-box-arrow-in-right me-2"></i>Se connecter
          </a>
        </form>

        <div class="am-card am-card-body mt-3" style="background:var(--am-gray-50)">
          <div class="fw-semibold mb-2" style="font-size:.82rem">Accès de démonstration par rôle :</div>
          <div class="d-grid gap-2">
            <a href="dashboard-superadmin.html" class="btn btn-sm btn-outline-orange text-start"><i class="bi bi-shield-lock me-2"></i>Super Administrateur</a>
            <a href="dashboard-admin.html" class="btn btn-sm btn-outline-secondary text-start"><i class="bi bi-person-gear me-2"></i>Administrateur</a>
            <a href="dashboard-secretaire.html" class="btn btn-sm btn-outline-secondary text-start"><i class="bi bi-person-vcard me-2"></i>Secrétaire</a>
            <a href="dashboard-responsable.html" class="btn btn-sm btn-outline-secondary text-start"><i class="bi bi-person-badge me-2"></i>Responsable</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
