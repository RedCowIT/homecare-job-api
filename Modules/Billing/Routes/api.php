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

    Route::resource('quoteProductDetails',
        'Quote\QuoteProductDetailController',
        config('app.route_resource.standard'));

    Route::resource('quotePlanDetails',
        'Quote\QuotePlanDetailController',
        config('app.route_resource.standard'));

    // Invoices

    Route::resource('invoices',
    'Invoice\InvoiceController',
    config('app.route_resource.standard'));

    Route::resource('invoiceItems',
        'Invoice\InvoiceItemController',
        config('app.route_resource.standard'));

    Route::resource('invoicePayments',
        'Invoice\InvoicePaymentController',
        config('app.route_resource.standard'));

    Route::resource('invoicePaymentTypes',
        'Invoice\InvoicePaymentTypeController',
        config('app.route_resource.standard'));

    Route::resource('invoiceItemTypes',
        'Invoice\InvoiceItemTypeController',
        config('app.route_resource.standard'));
});
