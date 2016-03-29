<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// Used for text generation
use Badcow\LoremIpsum\Generator as Generator;
// User for profile generation
use Faker\Factory as Faker;
// Parse form input
use Input;

class TextController extends Controller {

    /**
    * Responds to requests to GET /books
    */
    public function getIndex() {
        return 'List all the books';
    }

    /**
     * Responds to requests to GET /books/show/{id}
     */
    // public function getShow($id) {
    //     return 'Show book: '.$id;
// }

    public function getShow($title= null) {
         return view('layouts.show')->with('title', $title);
    }

    /**
     * Responds to requests to GET /books/create
     */
    // public function getCreate() {
    //     $view = '<form method= "POST" action="/text/create">';
    //     $view .= csrf_field();
    //     $view .= 'Number of Paragraphs: <input type ="text" name="title">';
    //     $view .= '<input type = "submit">';
    //     $view .= '</form>';
    //
    //     return $view;
    // }

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
            'title'=> 'required|max:1'
        ]);
        $this->validate($request, [
            'users'=> 'required|max:1'
        ]);
        // return 'Number of Paragraphs: '.$request->input('title');


        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($request->input('title'));
        // echo implode('<p>', $paragraphs);
        echo implode('<p>', $paragraphs);

        // generate data by accessing properties
        $fakeUser = Faker::create();
        for ($i = 0; $i < $request->input('users') ; $i++) {
    		$fakeUserData = $fakeUser->name;
    		$fakeUserData.= $fakeUser->dateTimeThisCentury->format('Y-m-d');
    		$fakeUserData.= $fakeUser->address;
    		$fakeUserData.= $fakeUser->city;
    		$fakeUserData.= $fakeUser->state;
            $fakeUserData.= $fakeUser->email;
    	}
            $image = $fakeUser->image($dir = '/tmp', $width = 640, $height = 480, 'cats', true, 'Faker') ;
            echo $fakeUserData;



    }
}
