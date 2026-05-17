<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Middleware untuk membatasi akses berdasarkan role user.
     * Digunakan sebagai: role:Campaigner atau role:Donatur
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = auth()->user();

        if (!$user || $user->role !== $role) {
            return response()->json([
                'success' => false,
                'message' => "Akses ditolak. Hanya role {$role} yang diizinkan.",
            ], 403);
        }

        return $next($request);
    }
}
