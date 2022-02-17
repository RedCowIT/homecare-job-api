<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([
    'middleware' => ['auth:sanctum']
], function () {
    Route::get('me', [UserController::class, 'authenticatedUser']);
});

Route::post('/login', [\Modules\Auth\Http\Controllers\SanctumController::class, 'login']);
