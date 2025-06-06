<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureUserIsDoctor
{
    public function handle(Request $request, Closure $next): Response
    {
        // Check if user is authenticated and has role 'doctor'
        if (auth()->check() && auth()->user()->role === 'user') {
            return $next($request);
        }

        // If not a doctor, redirect or abort
        abort(403, 'Only doctors can access this resource.');
    }
}

