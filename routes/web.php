<?php

use App\Http\Controllers\FormGuestController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FormGuestController::class, 'index'])->name('form.index');
Route::post('/', [FormGuestController::class, 'store'])->name('form.store');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);


Route::group([
    'middleware' => ['auth'],
    'prefix' => 'admin', // admin/tamu
    'as' => 'admin.' //route(admin.)
], function() {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    //Routing CRUD: INstitution
    Route::resource('/institution', App\Http\Controllers\InstitutionController::class);

    Route::resource('/guests', App\Http\Controllers\GuestController::class)->only(['index', 'show', 'destroy']);
    Route::get('/reports', [App\Http\Controllers\ReportController::class, 'index'])->name('reports.index');
});