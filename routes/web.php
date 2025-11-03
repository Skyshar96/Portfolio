<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/veille', [PortfolioController::class, 'veille'])->name('veille');
Route::get('/stages', [PortfolioController::class, 'stages'])->name('stages');
Route::get('/code-conduite', [PortfolioController::class, 'codeConduite'])->name('code-conduite');
