<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'role:admin,institution,company'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('dashboard');
});
