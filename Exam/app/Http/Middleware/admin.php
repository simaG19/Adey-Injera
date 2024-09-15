<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // If the user is not authenticated, redirect them to the login page.
        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user();

        // Check if the user is an admin (role 1).
        if ($user->role == 1) {
            return $next($request); // Proceed with the request
        }

        // If the user is not an admin but a driver (role 2), redirect to the admin page.
        if ($user->role == 2) {
            return redirect('/driver');
        }

        // Deny access for any other roles (abort the request).
         abort(403, 'Unauthorized'); // Use return to align with Response type
    }
}
