<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TournamentController;

Route::group([], function () {
    Route::group(['prefix' => 'tournaments'], function () {
        Route::post('/simulate', [TournamentController::class, 'simulate']);
    });
});