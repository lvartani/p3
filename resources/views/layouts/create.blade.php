@extends('layouts.master')


@section('title')
    User and Text Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/create.css" type='text/css' rel='stylesheet'>
@stop


@section('content')


    <div id ="form">
        <h2>Random Text Generator</h2>
        <form method = 'POST' action= '/text/create'>
            {{ csrf_field() }}
            <div class='form-group'>
                <label> Number of Paragraphs: </label>
                <br>{{ $errors->first('title')}}<br>
                <input type='text'
                    name='title'
                    value ='{{old('title')}}'>

        <h2>User Generator</h2>
            <div class='form-group'>
                <label> Number of Users: </label>
                <br>{{ $errors->first('users')}}<br>
                <input type='text'
                    name='users'
                    value ='{{old('users')}}'>
            </div>

            <button type="submit" class="btn btn-primary"> Submit</button>
            <br>

            <!-- <ul class ='errors'>
            @foreach($errors->all() as $error)
                <li> {{ $error}}<br></li>
            @endforeach
            </ul> -->

            @if (count($errors) > 0)
                Please correct the errors above and try again
            @endif
        </form>
    </div>
@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
