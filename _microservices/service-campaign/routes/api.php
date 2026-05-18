<?php

use App\Http\Controllers\CampaignController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CAMPAIGN SERVICE API Routes (Port 8002)
|--------------------------------------------------------------------------
*/

// Public
Route::get('/campaigns', [CampaignController::class, 'index']);
Route::get('/campaigns/search', [CampaignController::class, 'search']);
Route::get('/campaigns/{id}', [CampaignController::class, 'show']);

// Protected (JWT + Role: Campaigner)
Route::middleware(['jwt.auth', 'role:Campaigner'])->group(function () {
    Route::post('/campaigns', [CampaignController::class, 'store']);
    Route::put('/campaigns/{id}', [CampaignController::class, 'update']);
    Route::delete('/campaigns/{id}', [CampaignController::class, 'destroy']);
});
