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
    'middleware' => ['auth:api']
], function () {

    Route::resource('customers',
        'CustomerController',
        config('app.route_resource.standard'));

    Route::resource('customerAddresses',
        'CustomerAddressController',
        config('app.route_resource.standard'));

    Route::resource('customerAppliances',
        'CustomerApplianceController',
        config('app.route_resource.standard'));

    Route::resource('customerPlans',
        'CustomerPlanController',
        config('app.route_resource.standard'));

    Route::resource('customerPlanAppliances',
        'CustomerPlanApplianceController',
        config('app.route_resource.standard'));
});
