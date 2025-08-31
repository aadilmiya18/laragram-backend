<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

Route::controller(UserController::class)->prefix('users')->group(function () {
    Route::get('/', 'index');
    Route::get('{user}', 'show');
});

//Route::group(['middleware' => 'auth:sanctum'], function () {

Route::controller(AuthController::class)->prefix('auth')->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});

//});
