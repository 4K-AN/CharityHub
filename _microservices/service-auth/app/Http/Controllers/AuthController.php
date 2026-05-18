<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * POST /api/register
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
                    'message' => 'Validasi gagal',
                    'code'    => 422,
                    'details' => $validator->errors(),
                ]
            ], 422);
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
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
                    'message' => 'Validasi gagal',
                    'code'    => 422,
                    'details' => $validator->errors(),
                ]
            ], 422);
        }

        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'error' => [
                    'message' => 'Email atau password salah',
                    'code'    => 401,
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
     */
    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());

        return response()->json([
            'message' => 'Logout berhasil',
            'data'    => null,
        ]);
    }

    /**
     * GET /api/profile [JWT]
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

    /**
     * GET /api/users/{id} — Inter-Service endpoint
     * Used by other services to look up user data by ID.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'error' => ['message' => 'User tidak ditemukan', 'code' => 404]
            ], 404);
        }

        return response()->json([
            'message' => 'User ditemukan',
            'data'    => ['user' => $user]
        ]);
    }
}
