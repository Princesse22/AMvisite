@extends('layouts.app')

@section('title', 'Modifier un Administrateur | Accent Media')

@section('content')

        <div class="am-table-card">
          <div class="am-table-header">
            <h5>Modifier l'administrateur : {{ $admin->nom }}</h5>
          </div>
          <div class="card-body p-4">
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul class="mb-0">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form novalidate method="post" action="{{ route('modifierAdmintraitement') }}">
              @csrf
              <input type="hidden" name="id" value="{{ $admin->id }}">

              <div class="mb-3"><label class="form-label">Nom complet</label>
                  <input type="text" class="form-control" placeholder="Ex : Karim Diallo" required name="nom" value="{{ $admin->nom }}"> </div>
              <div class="mb-3"><label class="form-label">Email</label>
                  <input type="email" class="form-control" placeholder="email@accentmedia.com" required name="mail" value="{{ $admin->mail }}"> </div>
              <div class="mb-3"><label class="form-label">Téléphone</label>
                  <input type="tel" class="form-control" placeholder="+221 77 000 00 00" required name="phone" value="{{ $admin->phone }}">  </div>
              <div class="mb-3"><label class="form-label">Numero cni</label>
                  <input type="text" class="form-control" placeholder="Ex : Karim Diallo" required name="num_cni" value="{{ $admin->num_cni }}"> </div>
              <div class="mb-3"><label class="form-label">adresse</label>
                  <input type="text" class="form-control" placeholder="Ex : douala akwa" required name="adresse" value="{{ $admin->adresse }}"> </div>

              <div class="d-flex gap-2 justify-content-end mt-4">
                <a href="{{ route('gestionadmins') }}" class="btn btn-light">Annuler</a>
                <button type="submit" class="btn btn-orange">Enregistrer</button>
              </div>
            </form>
          </div>
        </div>
@endsection

@section('scripts')
  <script>
    buildLayout({ role: 'superadmin', active: 'gestion-admins.html', title: 'Modifier un Administrateur', subtitle: 'Mettre à jour les informations de l\'administrateur' });
  </script>
@endsection
