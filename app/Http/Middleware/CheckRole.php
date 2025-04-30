<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if (($role == 'admin' && $user->role_id == 1024) || ($role == 'student' && $user->role_id != 1024)) {
                return $next($request);
            }
            return redirect(route('login'));
        }
        return redirect(route('login'));
    }
}
