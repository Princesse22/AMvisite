@extends('layouts.dashboard')

@section('title', 'Notifications | Accent Media')

@section('styles')
  <style>
    .am-notif { display:flex; gap:.9rem; padding:1rem 1.25rem; border-bottom:1px solid var(--am-gray-100); }
    .am-notif:hover { background: var(--am-gray-50); }
    .am-notif-icon { width:42px; height:42px; border-radius:10px; display:flex; align-items:center; justify-content:center; font-size:1.15rem; flex-shrink:0; }
    .am-notif.unread { background: var(--am-orange-light); }
  </style>
@endsection

@section('content')

        <div class="am-section-card">
          <div class="am-section-head d-flex justify-content-between align-items-center">
            <span><i class="bi bi-bell-fill text-orange me-2"></i>Centre de notifications</span>
            <button class="btn btn-sm btn-outline-orange" data-demo-action="Toutes les notifications marquées comme lues.">Tout marquer comme lu</button>
          </div>
          <div>
            <div class="am-notif unread">
              <div class="am-notif-icon am-icon-orange"><i class="bi bi-calendar-plus"></i></div>
              <div class="flex-grow-1"><div class="fw-semibold text-dark">Nouvelle demande de rendez-vous</div><div class="text-secondary small">Mariama Koné · Partenariat commercial</div></div>
              <div class="am-timeline-time">Il y a 5 min</div>
            </div>
            <div class="am-notif unread">
              <div class="am-notif-icon am-icon-green"><i class="bi bi-check-circle"></i></div>
              <div class="flex-grow-1"><div class="fw-semibold text-dark">Rendez-vous validé</div><div class="text-secondary small">Paul Gomez · Présentation produit</div></div>
              <div class="am-timeline-time">Il y a 1 h</div>
            </div>
            <div class="am-notif">
              <div class="am-notif-icon am-icon-red"><i class="bi bi-x-circle"></i></div>
              <div class="flex-grow-1"><div class="fw-semibold text-dark">Rendez-vous rejeté</div><div class="text-secondary small">Fanta Baldé · Demande de stage</div></div>
              <div class="am-timeline-time">Hier</div>
            </div>
            <div class="am-notif">
              <div class="am-notif-icon am-icon-amber"><i class="bi bi-calendar-event"></i></div>
              <div class="flex-grow-1"><div class="fw-semibold text-dark">Rendez-vous reporté</div><div class="text-secondary small">Linda Diop · Entretien recrutement → 19 Juin 2026</div></div>
              <div class="am-timeline-time">Hier</div>
            </div>
            <div class="am-notif">
              <div class="am-notif-icon am-icon-blue"><i class="bi bi-hourglass-split"></i></div>
              <div class="flex-grow-1"><div class="fw-semibold text-dark">Rendez-vous mis en cours</div><div class="text-secondary small">Yves Camara · Renouvellement contrat</div></div>
              <div class="am-timeline-time">12 Juin 2026</div>
            </div>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'secretaire', active: '', title: 'Notifications', subtitle: 'Vos dernières alertes' });
  </script>
@endsection
