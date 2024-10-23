<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\{
    Controller
};

Route::post('/', function (Request $request) {
    return response()->json(['running'], 200);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['middleware' => 'role:admin'], function () {
        Route::group(['prefix' => 'admin'], function () {
            // may be necessary implement an AdminController to segregate functions in future
            Route::post('/dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');
        });
    });

    Route::group(['prefix' => 'advertisement'], function () {

    });
});
