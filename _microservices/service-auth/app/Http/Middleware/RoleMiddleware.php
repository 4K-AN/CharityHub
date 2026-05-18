<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = auth()->user();

        if (!$user || $user->role !== $role) {
            return response()->json([
                'error' => [
                    'message' => "Akses ditolak. Hanya role {$role} yang diizinkan.",
                    'code'    => 403,
                ]
            ], 403);
        }

        return $next($request);
    }
}
