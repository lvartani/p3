<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// Used for text generation
use Badcow\LoremIpsum\Generator as Generator;
// User for profile generation
use Faker\Factory as Faker;
// Parse form input

class TextController extends Controller {


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


        $generator = new Generator();
        $paragraphCount = $request->input('title');
        $paragraphs = $generator->getParagraphs($paragraphCount);
        // echo implode('<p>', $paragraphs);
        echo implode('<p>', $paragraphs);


        return view('layouts.textresults') ->with('output', $paragraphs)->with('paragraphCount', $paragraphCount);


    }
}
