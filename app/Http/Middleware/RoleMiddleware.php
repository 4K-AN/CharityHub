<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

class RoleMiddleware
{
    /**
     * Middleware untuk membatasi akses berdasarkan role user.
     * Digunakan sebagai: role:Campaigner atau role:Donatur
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // 1. Ambil payload dari Token secara langsung (Tanpa Query Database)
        $payload = JWTAuth::parseToken()->getPayload();
        $userRole = $payload->get('role');

        if ($userRole !== $role) {
            return response()->json([
                'error' => [
                    'message' => "Akses ditolak. Hanya role {$role} yang diizinkan.",
                    'code' => 403
                ]
            ], 403);
        }

        return $next($request);
    }
}
