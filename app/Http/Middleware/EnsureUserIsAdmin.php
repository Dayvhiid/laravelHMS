<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated and has role 'doctor'
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }

        // If not a doctor, redirect or abort
        abort(403, 'Only admins can access this resource.');
    }
}
