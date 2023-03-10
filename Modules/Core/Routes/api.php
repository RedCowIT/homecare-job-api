<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('appDataId', 'AppDataIdController@index');

    Route::get('appDataIds', 'AppDataIdController@index');

    Route::resource('policies',
        'PolicyController',
        config('app.route_resource.readonly'));

});
