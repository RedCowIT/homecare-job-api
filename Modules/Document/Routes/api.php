<?php

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

    Route::resource('documents',
        'DocumentController',
        config('app.route_resource.standard'));

    Route::resource('documentTypes',
        'DocumentTypeController',
        config('app.route_resource.readonly'));

    Route::resource('documentSubTypes',
        'DocumentSubTypeController',
        config('app.route_resource.readonly'));

    Route::resource('references',
        'ReferenceController',
        config('app.route_resource.readonly'));

    Route::resource('referenceSections',
        'ReferenceSectionController',
        config('app.route_resource.readonly'));
});
