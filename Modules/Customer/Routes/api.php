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

    Route::resource('customers',
        'CustomerController',
        config('app.route_resource.standard'));

    Route::resource('customerAddresses',
        'CustomerAddressController',
        config('app.route_resource.standard'));

    Route::resource('customerAppliances',
        'CustomerApplianceController',
        config('app.route_resource.standard'));

    Route::resource('customerApplianceTypes',
        'CustomerApplianceTypeController',
        config('app.route_resource.readonly'));

    Route::resource('customerPlans',
        'CustomerPlanController',
        config('app.route_resource.standard'));

    Route::resource('customerPlanAppliances',
        'CustomerPlanApplianceController',
        config('app.route_resource.standard'));

    Route::resource('customerPlanFinances',
        'CustomerPlanFinanceController',
        config('app.route_resource.standard'));

    Route::resource('customerPlanFinanceDocuments',
        'CustomerPlanFinanceDocumentController',
        config('app.route_resource.standard'));

    Route::resource('employmentStatuses',
        'EmploymentStatusController',
        config('app.route_resource.readonly'));

    Route::resource('employmentStatusTimes',
        'EmploymentStatusTimeController',
        config('app.route_resource.readonly'));

    Route::resource('residentialStatuses',
        'ResidentialStatusController',
        config('app.route_resource.readonly'));
});
