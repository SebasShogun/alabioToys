@extends('alabio')
@section('meta')
    <title>Cupones</title>
    {!! NoCaptcha :: renderJs () !!}
@endsection
@section('style-product')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection

@section('content')
	<div class="present">
        <div class="text-present">
          <h2>Gracias</h2>
            <a href="{{ url('/') }}">inicio</a><b> / Cupones</b>
         </div>
    </div>
    <div>
        <center>
          Recibirás un código de descuento vía correo electrónico.
        </center>
    </div>
@endsection