<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check of de gebruiker is ingelogd en of hij admin-rechten heeft
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request); // Toegang verleend, ga door naar de pagina
        }

        // Geen admin? Stuur ze terug naar de home met een melding
        return redirect('/')->with('error', 'U heeft geen toegang tot het beheergedeelte.');
    }
}
