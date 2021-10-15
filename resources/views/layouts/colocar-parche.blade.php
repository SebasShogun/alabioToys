@extends('alabio')
@section('meta')
    <title>¿Cómo colocar tu parche?</title>
@endsection
@section('style-product')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection

@section('content')
	<div class="present">
        <div class="text-present">
        	<h2>¿Cómo Colocar Parche?</h2>
            <a href="{{ url('/') }}">Página de Inicio</a><b> / ¿Cómo Colocar Parche?</b>
         </div>
    </div>
    <br>
    <br>
    <br>
    <center>
    	<div class="container">
    		<div class="video-responsive">
    			<iframe src="https://www.youtube.com/embed/xujS6f80_F4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    		</div>
    	</div>
    </center>
@endsection