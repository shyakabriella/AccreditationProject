<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('dashboard');
