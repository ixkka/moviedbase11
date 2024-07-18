<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ActorController;
use App\Http\Controllers\api\MovieController;
use App\Http\Controllers\api\DirectorController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/actors/{id}', [ActorController::class, 'show']);
    Route::get('/director/{id}', [DirectorController::class, 'show']);
    Route::get('/movies', [MovieController::class, 'index']);
    Route::get('/movies/{id}', [MovieController::class, 'show']);
});
