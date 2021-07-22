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

    Route::resource('quotes',
        'Quote\QuoteController',
        config('app.route_resource.standard'));

    Route::resource('quoteItems',
        'Quote\QuoteItemController',
        config('app.route_resource.standard'));

    Route::resource('quoteItemTypes',
        'Quote\QuoteItemTypeController',
        config('app.route_resource.readonly'));

    Route::resource('quoteApplianceDetails',
        'Quote\QuoteApplianceDetailController',
        config('app.route_resource.standard'));
});
