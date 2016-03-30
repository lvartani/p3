@extends('layouts.create')

@section('userResults')

    

@if (isset($output) && isset($userCount))

	@for ($i = 0 ; $i < $userCount ; $i++)
    <div class ="circle">
		<h4 class ="htext" > {{ $output['name'][$i]           }} </h4>
		<p class ="utext"  >  {{ $output['dob'][$i]            }} </p>
		<p class ="utext" >  {{ $output['addressStreet'][$i]  }} </p>
        <p class ="utext">  {{ $output['email'][$i]   }} </p>

    </div>

    <div class="circle2">
        <label class="labeltext">{{ $output['name'][$i]}} Pic </label>
        <img  class= "image" src = "{{$output['image'][$i] }}"</img>
    </div>

    <div class="circle3" style ="background-color:{{ $output['color'][$i]}}"></div>


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
