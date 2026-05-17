<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * POST /api/register
     * Mendaftarkan user baru (Donatur atau Campaigner).
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role'     => 'required|in:Donatur,Campaigner',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'message' => $validator->errors()->first(),
                    'code'    => 422
                ]
            ], 422);
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password, // Auto-hashed via cast
            'role'     => $request->role,
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'message' => 'Registrasi berhasil',
            'data'    => [
                'user'  => $user,
                'token' => $token,
            ]
        ], 201);
    }

    /**
     * POST /api/login
     * Login dan mendapatkan JWT token.
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'message' => $validator->errors()->first(),
                    'code'    => 422
                ]
            ], 422);
        }

        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'error' => [
                    'message' => 'Email atau password salah',
                    'code'    => 401
                ]
            ], 401);
        }

        $user = auth()->user();

        return response()->json([
            'message' => 'Login berhasil',
            'data'    => [
                'user'  => $user,
                'token' => $token,
            ]
        ]);
    }

    /**
     * POST /api/logout [JWT]
     * Invalidasi token saat ini.
     */
    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());

        return response()->json([
            'message' => 'Logout berhasil',
            'data'    => []
        ]);
    }

    /**
     * GET /api/profile [JWT]
     * Mengambil data profil user yang sedang login.
     */
    public function profile()
    {
        return response()->json([
            'message' => 'Profil berhasil diambil',
            'data'    => [
                'user' => auth()->user(),
            ]
        ]);
    }
}
