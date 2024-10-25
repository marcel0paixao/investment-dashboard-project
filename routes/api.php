<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    Controller,
    AuthController
};
use App\Http\Middleware\JsonResponseMiddleware;

Route::group(['middleware' => JsonResponseMiddleware::class], function () {
    Route::get('/', function (Request $request) {
        return response()->json(['running'], 200);
    });

    Route::post('/login', [AuthController::class, 'login']);

    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::post('/logout', [AuthController::class, 'logout']);

        Route::group(['middleware' => 'role:admin', 'prefix' => 'admin'], function () {
            // may be necessary implement an AdminController to segregate functions in future
            Route::post('/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
        });

        Route::group(['prefix' => 'costumer'], function () {
            Route::post('/dashboard', [UserController::class, 'dashboard'])->name('costumer.dashboard');
        });
    });
});
