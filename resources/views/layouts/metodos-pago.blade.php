@extends('alabio')
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
            <a href="{{ url('/') }}">Inicio</a><b> / Métodos de pago</b>
         </div>
    </div>
    
    <div class="container" style="background-color:white; box-shadow: 0 5px 10px 1px rgba(0, 0, 0, 0.1), 0 5px 5px 0 rgba(0, 0, 0, 0.1);">
	<br>
    <p class="text-method-pay" style="margin-left:1%; margin-right:1%">Escoge el juego o infable que más te guste. Agrégalo al carrito y dale clic en comprar ahora. En la sección de pago elige la opción de Pagos con Tarjeta y rellena los datos para hacer tu compra. Posteriormente prepara tus documentos de identificación para concluir tu pedido.
		<br>¡Listo tu compra esta hecha! recibirás un correo de confirmación de uno de nuestros asesores.</p>
    <br>
	
	<h4>¡Finaliza tu compra!</h4>
	<hr>
		<div class="metod-grid">
			<div class="sec-left sec-izq">
    			<b>Transferencias Bancarias</b>
    			<br>
    			<img src="{{ asset('img/spei.png') }}">
    		</div>
			<div class="sec-right">
    			<div class="spacio-text">
	    			<b  class="text-method-pay">Banco: <strong>Banamex</strong> Banamex</b> 
	    			<br>
	    			<b class="text-method-pay">Titular: <strong>Enrique Barreda Aguirre</strong></b>
	    			<br>
					<b class="text-method-pay">CLABE: <strong>002650700439134664</strong> Suc: <strong>7004</strong></b><br>
					<b class="text-method-pay">SWIFT code: BNMXMXMM</b>
	    		</div><hr>
    		</div>
			<div class="sec-left1 sec-izq">
				<br>
    			<b>Pago con Tarjetas</b>
    			<br>
    			<img src="{{ asset('img/card-credit.jpg') }}" />
    		</div>
			<div class="sec-right1">
				<div class="spacio-text">
					<b class="text-method-pay">Escoge el juego o infable que más te guste. Agregalo al carrito y dale clic en comprar ahora. En la sección de pago elige la opción de <strong>Pagos con Tarjeta</strong> y rellena los datos para hacer tu compra.</b>
					<br>
					<br>
					<b class="text-method-pay">¡Listo tu compra esta hecha! recibirás un correo de confirmación de uno de nuestros asesores.</b>
				</div>	<hr>
    		</div>
	
			<div class="sec-left2 sec-izq">
			<br>
    			<b>PayPal</b>
				<br>
    			<img src="{{ asset('img/PayPal.png') }}">
    		</div>
			<div class="sec-right2">
				<div class="spacio-text">
					<b class="text-method-pay">Escoge el juego o inflable que más te guste. Agregalo al carrito y dale clic en comprar ahora. En la sección de pago elige la opción de <strong>Pago con Paypal</strong> y rellena los datos para hacer tu compra.</b>
					<br>
					<br>
					<b class="text-method-pay">¡Listo tu compra esta hecha! recibirás un correo de confirmación de uno de nuestros asesores.</b>
				</div><hr>
			</div>

			<div class="sec-left3 sec-izq">
			<br>
    			<b>Mercado Pago</b>
    			<br>
    			<img src="{{ asset('img/mercadopago.png') }}">
    		</div>
    		<div class="sec-right3">
				<div class="spacio-text">
					<b class="text-method-pay">Escoge el juego o inflable que más te guste. Agregalo al carrito y dale clic en comprar ahora. En la sección de pago elige la opción de <strong>Pago con Mercado Pago</strong> y rellena los datos para hacer tu compra.</b>
					<br>
					<br>
					<b class="text-method-pay">¡Listo tu compra esta hecha! recibirás un correo de confirmación de uno de nuestros asesores.</b>
				</div> <hr>
			</div>

			<div class="sec-left4 sec-izq">
			<br>
    			<b>Depósito en Oxxo</b>
    			<br>
    			<img src="{{ asset('img/oxxo.png') }}">
    		</div>
    		<div class="sec-right4">
    			<br><div class="spacio-text"><b class="text-method-pay">Banamex: <strong>5204 1672 4720 1999</strong> </b></div><br><br><hr>
    		</div> 

			<div class="sec-left5 sec-izq">
			<br>
    			<b>Depósitos Bancarios</b>
    			<br>
    			<img src="{{ asset('img/Banamex.png') }}">
    		</div>
    		<div class="sec-right5">
    			<div class="spacio-text">
	    			<b class="text-method-pay">Banco: <strong>Banamex</strong> </b>
	    			<br>
	    			<b class="text-method-pay">Titular: <strong>Enrique Barreda Aguirre</strong></b>
	    			<br>
	    			<b class="text-method-pay">No. de Cuenta: <strong>3913466</strong>  Suc: <strong>7004</strong> </b>
	    		</div><br><br><hr>
    		</div>

			<div class="sec-left6 sec-izq">
			<br>
    			<b>Oficinas Alabío</b>
    			<br>
    			<img src="{{ asset('img/logotys.png') }}">
    		</div>
    		<div class="sec-right6">
    			<div class="spacio-text">
	    			<b class="text-method-pay">Nuestra matriz se encuentra en la ciudad de Puebla.</b>
	    			<br>
	    			<br>
	    			<b class="text-method-pay">39 Norte, #613 Col. Valle del Rey Puebla, Pue. Visitanos en Queretaro alguna de nuestras <a href="{{ asset('/sucursales') }}">Sucursales</a></b>
	    		</div><br><br>
    		</div>

		</div>

    	
	</div>
@endsection