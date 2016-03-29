@extends('layouts.create')

@section('textresults')

    <p class=""></p>
    {{$output}}

@if (isset($output) && isset($paragraphCount))

	@for ($i = 0 ; $i < $paragraphCount ; $i++)


		<p>  {{ $output }} </p>


	@endfor
@endif

@stop
