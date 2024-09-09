<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');

Route::middleware(['auth', 'role:admin,institution,company'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('dashboard');
});
