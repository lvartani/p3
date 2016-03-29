@extends('layouts.create')

@section('userResults')

    <p class=""></p>

@if (isset($output) && isset($userCount))

	@for ($i = 0 ; $i < $userCount ; $i++)
    <div class ="circle">
		<h2> {{ $output['name'][$i]           }} </h2>
		<p>  {{ $output['dob'][$i]            }} </p>
		<p>  {{ $output['addressStreet'][$i]  }} </p>
		<p>  {{ $output['addressCity'][$i]    }} </p>
		<p>  {{ $output['addressState'][$i]   }} </p>
        <p>  {{ $output['email'][$i]   }} </p>
        <label>Profile Picture: </label>
        <br>
    </div>

    <div class="circle">
        <img src = "{{$output['image'][$i] }}"></img>
    </div>


	@endfor
@endif


@stop

@section('textResults')

@if (isset($Lorem) && isset($paragraphCount))
        <!-- tried blade formatting but did not work for echo implode variable so went back to php echo-->
        <p>    <?php echo $Lorem; ?></p>
        <br>

@endif

@stop
