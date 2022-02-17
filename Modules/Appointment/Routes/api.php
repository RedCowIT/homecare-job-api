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

    Route::resource('appointments',
        'AppointmentController',
        config('app.route_resource.readonly'));

    Route::resource('appointmentNoAnswers',
        'AppointmentNoAnswerController',
        config('app.route_resource.standard'));

    Route::resource('appointmentNoAnswerReasons',
        'AppointmentNoAnswerReasonController',
        config('app.route_resource.readonly'));

    Route::resource('appointmentCallTypes',
        'AppointmentCallTypeController',
        config('app.route_resource.readonly'));

    Route::resource('appointmentStatuses',
        'AppointmentStatusController',
        config('app.route_resource.readonly'));

    Route::resource('appointmentTypes',
        'AppointmentTypeController',
        config('app.route_resource.readonly'));

    Route::resource('appointmentVisits',
        'AppointmentVisitController',
        config('app.route_resource.standard'));

    Route::resource('callTypes',
        'CallTypeController',
        config('app.route_resource.readonly'));

    Route::resource('callTypeClasses',
        'CallTypeClassController',
        config('app.route_resource.readonly'));
});
