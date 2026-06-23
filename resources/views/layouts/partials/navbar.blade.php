<div class="d-flex align-items-center gap-3">

```
<button class="am-icon-btn am-sidebar-toggle d-lg-none">
    <i class="bi bi-list"></i>
</button>

<div>

    <h1 class="am-page-title">
        @yield('page-title', 'Tableau de bord')
    </h1>

    <div class="text-secondary" style="font-size:.78rem">
        @yield('page-subtitle', 'Espace utilisateur')
    </div>

</div>
```

</div>

<div class="am-navbar-actions">

```
<input
    type="text"
    class="am-search"
    placeholder="Rechercher..."
>

<a href="{{ route('notifications') }}"
   class="am-icon-btn">

    <i class="bi bi-bell"></i>

    <span class="am-badge-dot">4</span>

</a>

<a href="{{ route('profil') }}"
   class="d-flex align-items-center gap-2 text-decoration-none">

    <div class="am-avatar">
        {{ strtoupper(substr(auth()->user()->name, 0, 2)) }}
    </div>

    <div class="d-none d-md-block">

        <div
            style="font-weight:600;color:var(--am-gray-900);line-height:1.1">

            {{ auth()->user()->name }}

        </div>

        <div
            style="font-size:.74rem;color:var(--am-gray-500)">

            {{ auth()->user()->role }}

        </div>

    </div>

</a>
```

</div>
