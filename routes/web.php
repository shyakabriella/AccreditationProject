<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/trades', [App\Http\Controllers\PagesController::class, 'getTrades'])->name('getTrades');
Route::get('/trade/show', [App\Http\Controllers\PagesController::class, 'getTradeDetails'])->name('getTradeDetails');

Route::middleware(['auth', 'role:admin,institution,company'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\PagesController::class, 'dashboard'])->name('dashboard');
});
