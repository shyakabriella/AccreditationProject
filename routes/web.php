<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
