<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Le rôle de l'utilisateur doit faire partie des rôles autorisés.
        if (!in_array(Auth::user()->role, $roles)) {

            abort(403, 'Accès refusé : vous n\'avez pas les droits nécessaires pour cette page.');
        }

        return $next($request);
    }
}
