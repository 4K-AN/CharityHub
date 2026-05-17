<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\LedgerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — MESIN UTAMA CharityHub
|--------------------------------------------------------------------------
| Seluruh interaksi database HANYA melalui rute ini.
| Semua response dalam format JSON (response()->json()).
|--------------------------------------------------------------------------
*/

// =========================================================================
// AUTH SERVICE (Public)
// =========================================================================
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// =========================================================================
// AUTH SERVICE (Protected - JWT)
// =========================================================================
Route::middleware('jwt.auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
});

// =========================================================================
// CAMPAIGN SERVICE (Public)
// =========================================================================
Route::get('/campaigns', [CampaignController::class, 'index']);
Route::get('/campaigns/search', [CampaignController::class, 'search']);
Route::get('/campaigns/{id}', [CampaignController::class, 'show']);

// =========================================================================
// CAMPAIGN SERVICE (Protected - JWT + Role: Campaigner)
// =========================================================================
Route::middleware(['jwt.auth', 'role:Campaigner'])->group(function () {
    Route::post('/campaigns', [CampaignController::class, 'store']);
    Route::put('/campaigns/{id}', [CampaignController::class, 'update']);
});

// =========================================================================
// LEDGER SERVICE
// =========================================================================
// Public: Siapa saja bisa melihat log transparansi
Route::get('/campaigns/{id}/logs', [LedgerController::class, 'logs']);

// Protected: Donatur mencatat donasi
Route::middleware(['jwt.auth', 'role:Donatur'])->group(function () {
    Route::post('/campaigns/{id}/donations', [LedgerController::class, 'storeDonation']);
});

// Protected: Campaigner mencatat pencairan
Route::middleware(['jwt.auth', 'role:Campaigner'])->group(function () {
    Route::post('/campaigns/{id}/disbursements', [LedgerController::class, 'storeDisbursement']);
});
