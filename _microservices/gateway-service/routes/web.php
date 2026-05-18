<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| GATEWAY Web Routes — Menyajikan Blade Views ke Browser
|--------------------------------------------------------------------------
| Semua data diambil oleh JS via /api/* yang akan di-forward
| oleh GatewayController ke service tujuan.
|--------------------------------------------------------------------------
*/

// Landing Page
Route::get('/', fn() => view('landing'));

// Campaign Detail
Route::get('/campaigns/{id}', fn() => view('campaign-detail'));

// Auth Pages
Route::get('/login', fn() => view('auth.login'));
Route::get('/register', fn() => view('auth.register'));

// User Profile
Route::get('/profile', fn() => view('profile'));

// Contact Page
Route::get('/contact', fn() => view('contact'));

// About Page
Route::get('/about', fn() => view('welcome'));

// Checkout / Donasi
Route::get('/campaigns/{id}/donate', fn() => view('checkout'));

// CMS (Content Management System) — untuk Campaigner
Route::get('/cms/dashboard', fn() => view('cms.dashboard'));
Route::get('/cms/campaigns/create', fn() => view('cms.create-campaign'));
Route::get('/cms/campaigns/{id}/ledger', fn() => view('cms.ledger'));
