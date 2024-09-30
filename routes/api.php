<?php

use App\Guest\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::prefix('guest')->group(function () {
    Route::post('', [GuestController::class, 'store']);
    Route::prefix('{id}')->group(function () {
        Route::get('/', [GuestController::class, 'show']);
        Route::delete('/', [GuestController::class, 'destroy']);
        Route::put('/', [GuestController::class, 'update']);
    });
});
