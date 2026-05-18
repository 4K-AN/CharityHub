<?php

use App\Http\Controllers\LedgerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| LEDGER SERVICE API Routes (Port 8003)
|--------------------------------------------------------------------------
*/

// Public: Log transparansi
Route::get('/campaigns/{id}/logs', [LedgerController::class, 'logs']);

// Protected: Donatur mencatat donasi
Route::middleware(['jwt.auth', 'role:Donatur'])->group(function () {
    Route::post('/campaigns/{id}/donations', [LedgerController::class, 'storeDonation']);
});

// Protected: Campaigner mencatat pencairan
Route::middleware(['jwt.auth', 'role:Campaigner'])->group(function () {
    Route::post('/campaigns/{id}/disbursements', [LedgerController::class, 'storeDisbursement']);
});
