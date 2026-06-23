<div class="am-brand">
    <div class="am-brand-logo">AM</div>

```
<div>
    <div class="am-brand-name">Accent Media</div>
    <div class="am-brand-sub">Gestion des visites</div>
</div>
```

</div>

@if(auth()->user()->role === 'super_admin')

<div class="am-nav-label">Principal</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('superadmin') }}">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Tableau de bord</span>
        </a>
    </li>
</ul>

<div class="am-nav-label">Gestion</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('gestionadmins') }}">
            <i class="bi bi-shield-lock-fill"></i>
            <span>Gestion Admins</span>
        </a>
    </li>
</ul>

<div class="am-nav-label">Système</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('parametres') }}">
            <i class="bi bi-gear-fill"></i>
            <span>Paramètres</span>
        </a>
    </li>
</ul>

@endif

@if(auth()->user()->role === 'admin')

<div class="am-nav-label">Principal</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('admin') }}">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Tableau de bord</span>
        </a>
    </li>
</ul>

<div class="am-nav-label">Gestion</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('gestion-utilisateurs') }}">
            <i class="bi bi-person-badge-fill"></i>
            <span>Gestion utilisateurs</span>
        </a>
    </li>

```
<li>
    <a href="{{ route('liste-visiteurs') }}">
        <i class="bi bi-people-fill"></i>
        <span>Gestion visiteurs</span>
    </a>
</li>

<li>
    <a href="{{ route('historique-rendezvous') }}">
        <i class="bi bi-calendar2-check-fill"></i>
        <span>Gestion rendez-vous</span>
    </a>
</li>
```

</ul>

@endif

@if(auth()->user()->role === 'secretaire')

<div class="am-nav-label">Principal</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('secretaires') }}">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Tableau de bord</span>
        </a>
    </li>
</ul>

<div class="am-nav-label">Activités</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('enregistrer-visiteur') }}">
            <i class="bi bi-person-plus-fill"></i>
            <span>Enregistrer visiteur</span>
        </a>
    </li>

```
<li>
    <a href="{{ route('planifier-rendezvous') }}">
        <i class="bi bi-calendar-plus-fill"></i>
        <span>Planifier rendez-vous</span>
    </a>
</li>

<li>
    <a href="{{ route('liste-visiteurs') }}">
        <i class="bi bi-people-fill"></i>
        <span>Liste des visiteurs</span>
    </a>
</li>

<li>
    <a href="{{ route('historique-rendezvous') }}">
        <i class="bi bi-clock-history"></i>
        <span>Historique</span>
    </a>
</li>
```

</ul>

@endif

@if(auth()->user()->role === 'responsable')

<div class="am-nav-label">Principal</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('responsable') }}">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Tableau de bord</span>
        </a>
    </li>
</ul>

<div class="am-nav-label">Rendez-vous</div>

<ul class="am-nav">
    <li>
        <a href="{{ route('profil') }}">
            <i class="bi bi-person-circle"></i>
            <span>Profil</span>
        </a>
    </li>
</ul>

@endif

<div class="am-sidebar-footer">

```
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit"
            class="btn btn-link text-decoration-none text-secondary p-0 d-flex align-items-center gap-2">

        <i class="bi bi-box-arrow-left"></i>

        <span>Déconnexion</span>

    </button>
</form>
```

</div>
