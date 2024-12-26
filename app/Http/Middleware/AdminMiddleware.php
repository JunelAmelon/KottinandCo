<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || !Auth::user()->is_admin) {
            return redirect()->route('login')->with('error', 'Accès non autorisé. Veuillez vous connecter en tant qu\'administrateur.');
        }

        return $next($request);
    }
}
