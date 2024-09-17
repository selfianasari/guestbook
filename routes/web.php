<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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
});