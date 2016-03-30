<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Badcow\LoremIpsum\Generator;

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        // return view('welcome');
        return 'WELCOME';
    });

    // Route::get('/text/show/{id}', 'TextController@getShow');

    Route::get('/text/create', 'UserController@getCreate');

    Route::post('/text/create', 'UserController@postCreate');

    Route::get('/practice', function() {

    });

});
