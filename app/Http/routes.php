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

        $generator = new Generator();
        $paragraphs = $generator->getParagraphs(4);
        echo implode('<p>', $paragraphs);


        // generate data by accessing properties
        $fakeUser = Faker\Factory::create();

        for ($i = 0; $i < 10 ; $i++) {
    		$fakeUserData['name'][] = $fakeUser->name;
    		$fakeUserData['dob'][]  = $fakeUser->dateTimeThisCentury->format('Y-m-d');
    		$fakeUserData['addressStreet'][] = $fakeUser->address;
    		$fakeUserData['addressCity'][] = $fakeUser->city;
    		$fakeUserData['addressState'][] = $fakeUser->state;
            $fakeUserData['email'][] = $fakeUser->email;
    	}
            $image = $fakeUser->image($dir = '/tmp', $width = 640, $height = 480, 'cats', true, 'Faker') ;
            $color = $fakeUser->hexcolor;
            return $fakeUserData;
            echo $color;
    });

});
