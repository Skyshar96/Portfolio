<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/veille-quantique', [PortfolioController::class, 'veilleQuantique'])->name('veille-quantique');
Route::get('/veille-cyber', [PortfolioController::class, 'veilleCyber'])->name('veille-cyber');
Route::get('/stages', [PortfolioController::class, 'stages'])->name('stages');
Route::get('/code-conduite', [PortfolioController::class, 'codeConduite'])->name('code-conduite');