<?php

use Illuminate\Http\Request;

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
    'middleware' => ['auth:api']
], function () {

    Route::resource('planPaymentPeriods',
        'PlanPaymentPeriodController',
        config('app.route_resource.readonly'));

    Route::resource('planTypes',
        'PlanTypeController',
        config('app.route_resource.readonly'));

    Route::resource('plans',
        'PlanController',
        config('app.route_resource.standard'));

    Route::post('calculateAppliancePlanPrice', [
        \Modules\Plan\Http\Controllers\AppliancePlanController::class, 'calculate'
    ])->name('calculateAppliancePlanPrice');

});
