<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/trades', [App\Http\Controllers\PagesController::class, 'getTrades'])->name('getTrades');
Route::get('/trade/show', [App\Http\Controllers\PagesController::class, 'getTradeDetails'])->name('getTradeDetails');

Route::middleware(['auth', 'role:admin,institution,company'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/{id}', [App\Http\Controllers\Admin\PagesController::class, 'getProfile'])->name('getProfile');
    Route::post('/update/{id}', [App\Http\Controllers\Admin\PagesController::class, 'updateInstitutionProfile'])->name('updateInstitutionProfile');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    //
});

Route::middleware(['auth', 'role:institution'])->group(function () {
    //
});

Route::middleware(['auth', 'role:company'])->group(function () {
    //
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/profile/{id}', [App\Http\Controllers\PagesController::class, 'getTraineeProfile'])->name('getTraineeProfile');
    Route::get('/profile/{id}/edit', [App\Http\Controllers\PagesController::class, 'editTraineeProfile'])->name('editTraineeProfile');
    Route::post('/profile/{id}/update', [App\Http\Controllers\PagesController::class, 'updateTraineeProfile'])->name('updateTraineeProfile');
});

