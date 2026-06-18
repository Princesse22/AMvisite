/* ============================================================
   Accent Media - Script principal
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {
  // --- Sidebar mobile toggle ---
  const sidebar = document.querySelector('.am-sidebar');
  const backdrop = document.querySelector('.am-sidebar-backdrop');
  const toggleBtn = document.querySelector('.am-sidebar-toggle');

  function openSidebar() {
    if (!sidebar) return;
    sidebar.classList.add('open');
    if (backdrop) backdrop.classList.add('show');
  }
  function closeSidebar() {
    if (!sidebar) return;
    sidebar.classList.remove('open');
    if (backdrop) backdrop.classList.remove('show');
  }
  if (toggleBtn) toggleBtn.addEventListener('click', openSidebar);
  if (backdrop) backdrop.addEventListener('click', closeSidebar);

  // --- Réinitialisation de formulaire ---
  document.querySelectorAll('[data-reset-form]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      const form = btn.closest('form');
      if (form) form.reset();
    });
  });

  // --- Validation simple ---
  document.querySelectorAll('form[data-validate]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
      }
      const msg = form.getAttribute('data-success') || 'Opération enregistrée avec succès (démonstration).';
      showToast(msg);
      if (form.hasAttribute('data-reset-after')) form.reset();
      form.classList.remove('was-validated');
    });
  });

  // --- Démo : boutons d'action affichant un toast ---
  document.querySelectorAll('[data-demo-action]').forEach(function (el) {
    el.addEventListener('click', function () {
      showToast(el.getAttribute('data-demo-action'));
    });
  });
});

/* Toast de notification simple */
function showToast(message) {
  let container = document.querySelector('.am-toast-container');
  if (!container) {
    container = document.createElement('div');
    container.className = 'am-toast-container position-fixed top-0 end-0 p-3';
    container.style.zIndex = '1080';
    document.body.appendChild(container);
  }
  const id = 'toast-' + Date.now();
  const html =
    '<div id="' + id + '" class="toast align-items-center text-bg-dark border-0" role="alert" aria-live="assertive" aria-atomic="true">' +
    '<div class="d-flex"><div class="toast-body"><i class="bi bi-check-circle-fill text-warning me-2"></i>' + message + '</div>' +
    '<button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Fermer"></button></div></div>';
  container.insertAdjacentHTML('beforeend', html);
  const el = document.getElementById(id);
  const toast = new bootstrap.Toast(el, { delay: 3000 });
  toast.show();
  el.addEventListener('hidden.bs.toast', function () { el.remove(); });
}

/* Palette de couleurs réutilisable pour les graphiques */
const AM_COLORS = {
  orange: '#f97316',
  orangeSoft: 'rgba(249, 115, 22, .15)',
  green: '#16a34a',
  red: '#dc2626',
  amber: '#d97706',
  blue: '#2563eb',
  gray: '#cbd5e1'
};
