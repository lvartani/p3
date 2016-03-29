@extends('layouts.create')

@section('results')

    <p class=""></p>

@if (isset($output) && isset($userCount))

	@for ($i = 0 ; $i < $userCount ; $i++)

		<h2> {{ $output['name'][$i]           }} </h2>
		<p>  {{ $output['dob'][$i]            }} </p>
		<p>  {{ $output['addressStreet'][$i]  }} </p>
		<p>  {{ $output['addressCity'][$i]    }} </p>
		<p>  {{ $output['addressState'][$i]   }} </p>
        <p>  {{ $output['email'][$i]   }} </p>
        <label>Profile Picture: </label>
        <br>
        <img src = "{{$output['image'][$i] }}"></img>

	@endfor
@endif

@if (isset($Lorem) && isset($paragraphCount))

	@for ($i = 0 ; $i < $paragraphCount ; $i++)
        <p>  {{ $Lorem  }} </p>
        <br>


	@endfor
@endif





@stop
