<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dev/gp-test', function () {

    if (strcmp(env('APP_ENV'), 'production') === 0) {
        return response("", 404);
    }

    return view('dev/gp-test');

});

Route::get('/dev/test-sentry', function(){

    throw new \Exception('Test sentry exception!');

});

Route::get('/dev/phpinfo', function(){

    phpinfo();

});
