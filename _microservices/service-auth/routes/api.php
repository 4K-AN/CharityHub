<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| AUTH SERVICE API Routes (Port 8001)
|--------------------------------------------------------------------------
*/

// Public
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Inter-Service: User lookup
Route::get('/users/{id}', [AuthController::class, 'show']);

// Protected (JWT)
Route::middleware('jwt.auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
});
