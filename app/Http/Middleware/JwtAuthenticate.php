<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class JwtAuthenticate
{
    /**
     * Middleware untuk memvalidasi JWT token di setiap request API yang dilindungi.
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();

            if (!$user) {
                return response()->json([
                    'error' => [
                        'message' => 'User tidak ditemukan',
                        'code'    => 404
                    ]
                ], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Token sudah kedaluwarsa',
                    'code'    => 401
                ]
            ], 401);
        } catch (TokenInvalidException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Token tidak valid',
                    'code'    => 401
                ]
            ], 401);
        } catch (JWTException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Token tidak ditemukan',
                    'code'    => 401
                ]
            ], 401);
        }

        return $next($request);
    }
}
