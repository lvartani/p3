<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// Used for text generation
use Badcow\LoremIpsum\Generator as Generator;
// User for profile generation
use Faker\Factory as Faker;
// Parse form input

class UserController extends Controller {


    public function getCreate() {

        return view('layouts.create');
    }

    /**
    * Responds to requests to POST /books/create
    */
    // public function postCreate() {
    //     return 'Number of Paragraphs: '.$_POST['title'];
    // }

    public function postCreate(Request $request) {
        // dd($request);


        $this->validate($request, [
            'title'=> 'required|max:9|min:1|numeric'
        ]);

        $generator = new Generator();
        $paragraphCount = $request->input('title');
        $paragraphs = $generator->getParagraphs($paragraphCount);

        // echo implode('<p>', $paragraphs);
        $Lorem = implode('<p>', $paragraphs);



        $this->validate($request, [
            'users'=> 'required|numeric|max:99|min:1'
        ]);

        // generate data by accessing properties
        $fakeUser = Faker::create();

        $userCount = $request->input('users');


        for ($i = 0; $i < $userCount ; $i++) {

            $fakeUserData['name'][] = $fakeUser->name;
            $fakeUserData['dob'][]  = $fakeUser->dateTimeThisCentury->format('Y-m-d');
            $fakeUserData['addressStreet'][] = $fakeUser->address;
            $fakeUserData['phoneNumber'][] = $fakeUser->phoneNumber;
            $fakeUserData['image'][] = $fakeUser->imageUrl($width = 110, $height = 70);
            $fakeUserData['color'][] = $fakeUser->hexcolor;

        }


        // $image = $fakeUser->image($dir = '/tmp', $width = 640, $height = 480, 'cats', true, 'Faker') ;
        // echo $Lorem;
        return view('layouts.results')  ->with('output', $fakeUserData)
        ->with('userCount',$userCount)
        ->with('Lorem',$Lorem)
        ->with('paragraphCount',$paragraphCount);



    }
}
