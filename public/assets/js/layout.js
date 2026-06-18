/* ============================================================
   Accent Media - Construction dynamique du layout
   (sidebar + navbar injectés selon le rôle de l'utilisateur)
   ============================================================ */

const AM_MENUS = {
  superadmin: {
    role: 'Super Administrateur',
    initials: 'SA',
    name: 'Karim Diallo',
    groups: [
      {
        label: 'Principal',
        items: [
          { icon: 'bi-grid-1x2-fill', text: 'Tableau de bord', href: 'dashboard-superadmin.html' },
        ]
      },
      {
        label: 'Gestion',
        items: [
          { icon: 'bi-shield-lock-fill', text: 'Gestion Admins', href: 'gestion-admins.html' },
          { icon: 'bi-person-badge-fill', text: 'Gestion Responsables', href: 'gestion-responsables.html' },
          { icon: 'bi-person-vcard-fill', text: 'Gestion Secrétaires', href: 'gestion-secretaires.html' },
          { icon: 'bi-people-fill', text: 'Gestion Visiteurs', href: 'liste-visiteurs.html' },
          { icon: 'bi-calendar2-check-fill', text: 'Gestion Rendez-vous', href: 'historique-rendezvous.html' },
        ]
      },
      {
        label: 'Système',
        items: [
          { icon: 'bi-bar-chart-line-fill', text: 'Statistiques', href: 'dashboard-superadmin.html' },
          { icon: 'bi-gear-fill', text: 'Paramètres', href: 'parametres.html' },
        ]
      }
    ]
  },
  admin: {
    role: 'Administrateur',
    initials: 'AD',
    name: 'Sophie Mensah',
    groups: [
      {
        label: 'Principal',
        items: [
          { icon: 'bi-grid-1x2-fill', text: 'Tableau de bord', href: 'dashboard-admin.html' },
        ]
      },
      {
        label: 'Gestion',
        items: [
          { icon: 'bi-person-badge-fill', text: 'Gestion utilisateurs', href: 'gestion-responsables.html' },
          { icon: 'bi-people-fill', text: 'Gestion visiteurs', href: 'liste-visiteurs.html' },
          { icon: 'bi-calendar2-check-fill', text: 'Gestion rendez-vous', href: 'historique-rendezvous.html' },
          { icon: 'bi-bar-chart-line-fill', text: 'Statistiques', href: 'dashboard-admin.html' },
        ]
      }
    ]
  },
  secretaire: {
    role: 'Secrétaire',
    initials: 'FA',
    name: 'Fatou Aïdara',
    groups: [
      {
        label: 'Principal',
        items: [
          { icon: 'bi-grid-1x2-fill', text: 'Tableau de bord', href: 'dashboard-secretaire.html' },
        ]
      },
      {
        label: 'Activités',
        items: [
          { icon: 'bi-person-plus-fill', text: 'Enregistrer visiteur', href: 'enregistrer-visiteur.html' },
          { icon: 'bi-calendar-plus-fill', text: 'Planifier rendez-vous', href: 'planifier-rendezvous.html' },
          { icon: 'bi-people-fill', text: 'Liste des visiteurs', href: 'liste-visiteurs.html' },
          { icon: 'bi-clock-history', text: 'Historique', href: 'historique-rendezvous.html' },
        ]
      }
    ]
  },
  responsable: {
    role: 'Responsable',
    initials: 'IB',
    name: 'Ibrahima Bah',
    groups: [
      {
        label: 'Principal',
        items: [
          { icon: 'bi-grid-1x2-fill', text: 'Tableau de bord', href: 'dashboard-responsable.html' },
        ]
      },
      {
        label: 'Rendez-vous',
        items: [
          { icon: 'bi-inbox-fill', text: 'Rendez-vous reçus', href: 'rendezvous-recus.html' },
          { icon: 'bi-clock-history', text: 'Historique', href: 'historique-rendezvous.html' },
          { icon: 'bi-person-circle', text: 'Profil', href: 'profil.html' },
        ]
      }
    ]
  }
};

function buildLayout(opts) {
  const cfg = AM_MENUS[opts.role];
  if (!cfg) return;

  // ---- Sidebar ----
  let navHtml = '';
  cfg.groups.forEach(function (group) {
    navHtml += '<div class="am-nav-label">' + group.label + '</div><ul class="am-nav">';
    group.items.forEach(function (item) {
      const active = item.href === opts.active ? ' active' : '';
      navHtml += '<li><a href="' + item.href + '" class="' + active.trim() + '">' +
        '<i class="bi ' + item.icon + '"></i><span>' + item.text + '</span></a></li>';
    });
    navHtml += '</ul>';
  });

  const sidebarHtml =
    '<div class="am-brand">' +
      '<div class="am-brand-logo">AM</div>' +
      '<div><div class="am-brand-name">Accent Media</div><div class="am-brand-sub">Gestion des visites</div></div>' +
    '</div>' +
    navHtml +
    '<div class="am-sidebar-footer">' +
      '<a href="index.html" class="d-flex align-items-center gap-2 text-secondary"><i class="bi bi-box-arrow-left"></i><span>Déconnexion</span></a>' +
    '</div>';

  const sidebar = document.querySelector('.am-sidebar');
  if (sidebar) sidebar.innerHTML = sidebarHtml;

  // ---- Navbar ----
  const navbar = document.querySelector('.am-navbar');
  if (navbar) {
    navbar.innerHTML =
      '<div class="d-flex align-items-center gap-3">' +
        '<button class="am-icon-btn am-sidebar-toggle d-lg-none"><i class="bi bi-list"></i></button>' +
        '<div><h1 class="am-page-title">' + (opts.title || cfg.role) + '</h1>' +
        '<div class="text-secondary" style="font-size:.78rem">' + (opts.subtitle || 'Espace ' + cfg.role) + '</div></div>' +
      '</div>' +
      '<div class="am-navbar-actions">' +
        '<input type="text" class="am-search" placeholder="Rechercher...">' +
        '<a href="notifications.html" class="am-icon-btn"><i class="bi bi-bell"></i><span class="am-badge-dot">4</span></a>' +
        '<a href="profil.html" class="d-flex align-items-center gap-2 text-decoration-none">' +
          '<div class="am-avatar">' + cfg.initials + '</div>' +
          '<div class="d-none d-md-block"><div style="font-weight:600;color:var(--am-gray-900);line-height:1.1">' + cfg.name + '</div>' +
          '<div style="font-size:.74rem;color:var(--am-gray-500)">' + cfg.role + '</div></div>' +
        '</a>' +
      '</div>';
  }
}
