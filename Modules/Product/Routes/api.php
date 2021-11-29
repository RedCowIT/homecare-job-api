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

    Route::resource('applianceModels',
        'ApplianceModelController',
        config('app.route_resource.readonly'));

    Route::resource('appliancePriceRanges',
        'AppliancePriceRangeController',
        config('app.route_resource.readonly'));

    Route::resource('applianceTypes',
        'ApplianceTypeController',
        config('app.route_resource.readonly'));

    Route::resource('applianceBrands',
        'BrandController',
        config('app.route_resource.readonly'));

    Route::resource('commercialProducts',
        'CommercialProductController',
        config('app.route_resource.readonly'));

    Route::resource('manufacturers',
        'ManufacturerController',
        config('app.route_resource.readonly'));

    Route::resource('products',
        'ProductController',
        config('app.route_resource.readonly'));

    Route::resource('productCategories',
        'ProductCategoryController',
        config('app.route_resource.readonly'));
});
