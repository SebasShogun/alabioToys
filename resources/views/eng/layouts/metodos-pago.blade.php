@extends('eng.alabio')
@section('meta')
    <title>Metodos de Pago</title>
@endsection
@section('style-product')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection


@section('content')
	<div class="present">
        <div class="text-present">
          <h2>Métodos de Pago</h2>
            <a href="{{ url('/eng') }}">inicio</a><b> / métodos de pago</b>
         </div>
    </div>
    <br>
    <p style="margin-left:5%; margin-right:5%">Escoge el juego o infable que más te guste. Agrégalo al carrito y dale clic en comprar ahora. En la sección de pago elige la opción de Pagos con Tarjeta y rellena los datos para hacer tu compra. Posteriormente prepara tus documentos de identificación para concluir tu pedido.
		<br>¡Listo tu compra esta hecha! recibirás un correo de confirmación de uno de nuestros asesores.</p>
    <br>
    <div class="container">
    	<h4>¡Finaliza tu compra!</h4>
    	<hr>
    	<div class="row">
    		<div class="col">
    			<b>Transferencias Bancarias</b>
    			<br>
    			<img src="{{ asset('img/spei.png') }}" width="50%">
    		</div>
    		<div class="col">
    			<div class="spacio-text">
	    			<b  class="text-method-pay">Banco: Banamex</b>
	    			<br>
	    			<b class="text-method-pay">Titular: Enrique Barreda Aguirre</b>
	    			<br>
					<b class="text-method-pay">CLABE: 002650700439134664 Suc: 7004</b><br>
					<b class="text-method-pay">SWIFT code: BNMXMXMM</b>
	    		</div>
    		</div>
    	</div>
    	<hr>
    	<div class="row">
    		<div class="col">
    			<b>Pago con Tarjetas</b>
    			<br>
    			<img src="{{ asset('img/card-credit.jpg') }}" width="50%" style="padding-top: 10%;" />
    		</div>
    		<div class="col">
    			<b class="text-method-pay">Escoge el juego o infable que más te guste. Agregalo al carrito y dale clic en comprar ahora. En la sección de pago elige la opción de <strong>Pagos con Tarjeta</strong> y rellena los datos para hacer tu compra.</b>
    			<br>
    			<br>
    			<b class="text-method-pay">¡Listo tu compra esta hecha! recibirás un correo de confirmación de uno de nuestros asesores.</b>
    		</div>
    	</div>
    	<hr>
    	<div class="row">
    		<div class="col">
    			<b>PayPal</b>
    			<br>
    			<img src="{{ asset('img/PayPal.png') }}" width="50%">
    		</div>
    		<div class="col">
    			<b class="text-method-pay">Escoge el juego o inflable que más te guste. Agregalo al carrito y dale clic en comprar ahora. En la sección de pago elige la opción de <strong>Pago con Paypal</strong> y rellena los datos para hacer tu compra.</b>
    			<br>
    			<br>
    			<b class="text-method-pay">¡Listo tu compra esta hecha! recibirás un correo de confirmación de uno de nuestros asesores.</b>
    		</div>
    	</div>
    	<hr>
    	<div class="row">
    		<div class="col">
    			<b>Mercado Pago</b>
    			<br>
    			<img src="{{ asset('img/mercadopago.png') }}" width="50%" style="padding-top: 7%;">
    		</div>
    		<div class="col">
    			<b class="text-method-pay">Escoge el juego o inflable que más te guste. Agregalo al carrito y dale clic en comprar ahora. En la sección de pago elige la opción de <strong>Pago con Mercado Pago</strong> y rellena los datos para hacer tu compra.</b>
    			<br>
    			<br>
    			<b class="text-method-pay">¡Listo tu compra esta hecha! recibirás un correo de confirmación de uno de nuestros asesores.</b>
    		</div>
    	</div>
    	<hr>
    	<div class="row">
    		<div class="col">
    			<b>Depósito en Oxxo</b>
    			<br>
    			<img src="{{ asset('img/oxxo.png') }}" width="50%" style="padding-top: 3%;">
    		</div>
    		<div class="col">
    			<div style="padding-top: 15%;"><b class="text-method-pay">Banamex: 5204 1672 4720 1999</b></div>
    		</div>
    	</div>
    	<hr>
    	<div class="row">
    		<div class="col">
    			<b>Depósitos Bancarios</b>
    			<br>
    			<img src="{{ asset('img/Banamex.png') }}" style="padding: 7% 0 5% 0;">
    		</div>
    		<div class="col">
    			<div class="spacio-text">
	    			<b class="text-method-pay">Banco: Banamex</b>
	    			<br>
	    			<b class="text-method-pay">Titular: Enrique Barreda Aguirre</b>
	    			<br>
	    			<b class="text-method-pay">No. de Cuenta: 3913466 Suc: 7004</b>
	    		</div>
    		</div>
    	</div>
    	<hr>
    	<div class="row">
    		<div class="col">
    			<b>Oficinas Alabío</b>
    			<br>
    			<img src="{{ asset('img/logotys.png') }}" width="45%" style="padding: 7% 0 5% 0;">
    		</div>
    		<div class="col">
    			<div class="spacio-text">
	    			<b class="text-method-pay">Nuestra matriz se encuentra en la ciudad de Puebla.</b>
	    			<br>
	    			<br>
	    			<b class="text-method-pay">39 Norte, #613 Col. Valle del Rey Puebla, Pue. Visitanos en Queretaro alguna de nuestras <a href="{{ asset('/sucursales') }}">Sucursales</a></b>
	    		</div>
    		</div>
    	</div>    	
	</div>
@endsection