<?php

use App\Http\Controllers\GatewayController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| GATEWAY API Routes (Port 8000) — Forward ke services
|--------------------------------------------------------------------------
*/

Route::any('/{path}', [GatewayController::class, 'forward'])->where('path', '.*');
