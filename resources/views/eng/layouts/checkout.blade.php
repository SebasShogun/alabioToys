@extends('eng.layouts.checkoutbar')
@section('meta')
    <title>Finalize purchase</title>
@endsection
@section('style-checkout')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
	<script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
	<!--<script type="text/javascript" src="https://cdn.conekta.io/js/latest/conekta.js"></script>-->
	<script src="https://js.stripe.com/v2/"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
	
@endsection

@section('content')
<style type="text/css">
	.panel-title {
	display: inline;
	font-weight: bold;
	}
	.display-table {
		display: table;
	}
	.display-tr {
		display: table-row;
	}
	.display-td {
		display: table-cell;
		vertical-align: middle;
		width: 61%;
	}
	input[type=checkbox] {
    transform: scale(1.5);
	}
	
	
</style>
	<div class="present">
        <div class="text-present">
        	<h2>Confirm your Purchase</h2>
            <a href="{{ url('/eng') }}">Home</a><b> / Checkout</b>
         </div>
    </div>
	<div class="container" style="background-color:tranparent; padding:0%;">
		
		<div class="container2">
		
		<div class="progress-bar2">
			<div class="progre1 box-print" id="progre1">
				<b id="sub-1">Direction</b>	<br>
				<div id="circle1" class="numberCircle">1</div>
			</div>
			<div class="progre2 box-print" id="progre2">
				<b id="sub-2">Pay</b> <br>
				<div id="circle2" class="numberCircle">2</div>
			</div>
			<div class="progre3 box-print" id="progre3">
				<b id="sub-3">Confirm payment</b> <br>
				<div id="sub-3" class="numberCircle">3</div>
			</div>
		</div>

		

	<div class="grid-resume" style="background-color:white; box-shadow: 0 2px 10px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
	<div class="izquierda">
	<br>
			<b class="title-box" style="text-align:center;">My shopping list:</b>
	
	<!-- Tabla de productos con Divs -->
	
	<div class="row lista-resumen" style="text-align:left; box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1), 0 2px 2px 0 rgba(0, 0, 0, 0.1);">
		<!-- Primera fila -->
			<div class="col-6 tabla-products title-resumen" style="border-radius: 0.5rem 0 0 0" >
				<b>Product</b>
			</div>
			<div class="col-3 tabla-products title-resumen" style="text-align:center;">
				<b>Quantity</b>
			</div>
			<div class="col-3 tabla-products title-resumen" style="text-align:right; border-radius: 0 0.5rem 0 0">
				<b>Subtotal</b>
			</div>

		<!-- Segunda fila -->
			@php
				$subtotal=0.00;   
			@endphp
			<input type="hidden" id="payconcept" value="{{ $products[0][2] }}">
			@foreach ($products as $service)
			@php
				$productprice=$service[4];						
			@endphp
			<div class="col-6 tabla-products">
				{{ $service[2] }}
			</div>
			<div class="col-3 tabla-products" style="text-align:center;">
				<label class=" srvice_amount amount_{{ $service[7] }}" id="{{ $service[7] }}" >{{ $service[3] }}</label>
			</div>
			<div class="col-3 tabla-products" style="text-align:right;">
				${{number_format(($service[3]*$productprice)/$dollar,2)}}
			</div>
			@php						
				$subtotal=$subtotal+($service[3]*$productprice)/$dollar;   
			@endphp
			@endforeach
			@php
				$subtotal=$subtotal+$shiptot;   
			@endphp	
			</div>
		</div>

		<!-- Información de envio, descuento, Total -->
		<br class="space">
		<div class="derecha">
			<div class="row total-cuadro" style="border-radius: 0.5rem; text-align:left; box-shadow: 0 2px 10px 1px rgba(0, 0, 0, 0.1), 0 2px 2px 0 rgba(0, 0, 0, 0.1);">
				<!-- Envio a domicilio-->
					<div class="col-12 title-box-back">
						<b class="resumen-titulo">Purchase Summary</b>
					</div>
					<div class="col-6 element-box" >
						<b>{{$shiptag}}</b>
					</div>
					<div class="col-6 element-box" style="text-align:right;">
						<b>${{number_format(($shiptot),2)}}</b>
					</div>

					@if($coupon != 0)
					<div class="col-6 element-box">
						<b>Descuento</b>
					</div>
					<div class="col-6 element-box" style="text-align:right;">
						<b>{{$coupon*100}}%</b>
						@php
							$subtotal=$subtotal-($subtotal*$coupon);
						@endphp
					</div>
					@endif
					<div class="col-6 element-box">
						<b>Total</b>
					</div>
					<div class="col-6 element-box" style="text-align:right;">
						<b id="intabletotal">${{number_format(($subtotal),2)}}</b>
					</div>
			</div>
		</div>

	</div>
	<!-- ESTA TABLA NO SE DEBE DE ELIMINAR YA QUE FUNCIONA CON EL CONTROLADOR -->
	  <div class="cart_table" hidden>
        <!-- <table class="table">
            <thead> 
            <tr class="table-active"> -->
            <!--<th></th>-->
            <!-- <th></th> -->
            <!-- <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
                @php
                $subtotal=0.00;   
                @endphp
				<input type="hidden" id="payconcept" value="{{ $products[0][2] }}">
                @foreach ($products as $service)
				@php
					$productprice=$service[4];						
				@endphp
                    <tr> -->
                        <!--<td>
                           <label class="btn btn-primary btnrad btn-remove delete1" id="{{ $service[7] }}" onclick="deletecart();"><i id="{{ $service[7] }}" class="fa fa-minus remove-cart"></i></label>
                        </td>-->
                        <!-- <td align="center"> -->
                            <!--<label class="btn btn-primary btnrad btn-remove delete2" id="{{ $service[7] }}" onclick="deletecart();"><i id="{{ $service[7] }}" class="fa fa-minus remove-cart"></i></label>-->
                            <!-- <a href="{{ $service[8] }}" target="_blank">
                            @if ($service[1] !=null)
                            <img class="service_image" src='{{ $service[1] }}'  alt='' />
                            @else
                            <img class="service_image" src='{{asset('/img/noImage.jpg')}}'  alt='' />
                            @endif                            
                        </a>
                        </td> -->
                        <!-- <td class="col-xs-3">
                            {{ $service[2] }}
                        </td>
                        <td>
                            ${{number_format($productprice,2)}}
                        </td>
                        <td class="col-xs-1"> -->
                            <!--<input type="number" min="{{$service[5]}}" max="{{$service[6]}}" class="form-control  srvice_amount amount_{{ $service[7] }}" id="{{ $service[7] }}" value="{{ $service[3] }}" onchange="updatecart();" >-->
							<!-- <label class=" srvice_amount amount_{{ $service[7] }}" id="{{ $service[7] }}" >{{ $service[3] }}</label>
						</td>
                        <td>
                           ${{number_format(($service[3]*$productprice),2)}}
                        </td>
                    </tr>
					@php						
                        $subtotal=$subtotal+($service[3]*$productprice);   
                    @endphp
                @endforeach
				@php
    				$subtotal=$subtotal+$shiptot;   
        		@endphp			
            </tbody>
			<tfoot>
				<tr>
					<th></th>
					<th></th>
					<th>{{$shiptag}}</th>
					<th>${{number_format(($shiptot),2)}}</th>
				</tr>
				@if($coupon != 0)
				<tr>
					<th></th>
					<th></th>
					<th>Descuento</th>
					<th>{{$coupon*100}}%</th>
					@php
						$subtotal=$subtotal-($subtotal*$coupon);
					@endphp
				</tr>
				@endif
				<tr>
					<th></th>
					<th></th>
					<th>Total</th>
					<th id="intabletotal">${{number_format(($subtotal),2)}}</th>
				</tr>
				<tr>
					<th>
				</tr>
			</tfoot>
        </table> -->
	</div>
		
	<!-- INICIO DE TODO LOS PAGOS -->
		<center>
		<div class="form-outer" style="background-color:white; border-radius: 0 0 0.5rem 0.5rem; box-shadow: 0 10px 10px 1px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			<form role="form" action="" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_live_51HiTZnGob5o9zKSdlESghOJNfqaSfhKsZeKqZSyJuaSr2qZ4Y5M2XARQPFkeSypEEmdrnpZJiHyV64SbaimQhexI00gHVmsydN" id="payment-form">
				<input hidden type="text" name="_token" value="{{ csrf_token() }}">
	            <div class="page slide-page" id="inputs">	
					<!-- Primera sección Dirección -->	            
		            <div class="title">
						<br>
						<h1 class="stilo" style="text-align:center;">Shipping Address:</h1>
						<p class="letras-direccion" style="text-align:center;">Please, enter the address information correctly</p>
					</div>
					<!-- <div class="field btns">
							<a class="btn prev" href="{{ url('/mycart') }}"><i class="fas fa-caret-left"></i> Anterior </a>
							<a class="firstNext next btn btno" id="next">Siguiente <i class="fas fa-caret-right"></i></a>
					</div>  -->
					<!-- Inicio de div de dirección -->
					<div class="row letras-direccion">
						<div class="col-6">
		            		<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1" title="Escribe tu nombre"> Name:</b><i class="fas fa-user delete2 iconos"></i></span>
								</div>
								<input class="input-class1 letras-direccion" type="text" placeholder="Nombre" id="cliname" title="Escribe tu nombre">
							</div>
		            	</div>
		            	<div class="col-6">
		            		<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1" title="Escribe tu apellido"> Last name:</b><i class="far fa-user delete2 iconos"></i></span>
								</div>
								<input class="input-class2 letras-direccion" type="text" placeholder="Apellido" id="clilastname">
							</div>
		            	</div>
						<div class="col-12">
							<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b class="delete1">Company:</b><i class="fas fa-building delete2 iconos"></i></span>
								</div>
								<input class="input-class-sm letras-direccion" type="text" placeholder="Empresa (Opcional)" id="empresa">
							</div>
						</div>
						<div class="col-12">
							<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> Street:</b><i class="fas fa-road delete2 iconos"></i></span>
								</div>
								<input class="input-class3 letras-direccion" type="text" placeholder="Calle" id="street">
							</div>
						</div>
						<div class="col-6">
							<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> # Ext:</b><i class="fas fa-hashtag delete2 iconos"></i></span>
								</div>
								<input class="input-class4 letras-direccion" type="text" placeholder="Núm. Exterior" id="noext">
							</div>
						</div>
						<div class="col-6">
							<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b class="delete1"># Int:</b><i class="fas fa-hashtag delete2 iconos"></i></span>
								</div>
								<input class="input-class letras-direccion" type="text" placeholder="Núm. Interior (Opcional)" id="noint">
							</div>
						</div>
						<div class="col-12 letras-direccion">
							<div class="field ">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b class="delete1">References:</b><i class="fas fa-road delete2 iconos"></i></span>
								</div>
								<input class="input-class letras-direccion" type="text" placeholder="Referencias de tu domicilio (Opcional)" id="refe">
							</div>	
						</div>	
						<div class="col-6">
							<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> Suburb:</b><i class="fas fa-compass delete2 iconos"></i></span>
								</div>					    
								<input class="input-class5 letras-direccion" type="text" placeholder="Colonia" id="colony">
							</div>
						</div>
						<div class="col-6">
							<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> City or Population:</b><i class="fas fa-compass delete2 iconos"></i></span>
								</div>	
							<input class="input-class6 letras-direccion" type="text" placeholder="Ciudad o Población" id="city">
							</div>
						</div>
						<div class="col-6">
							<div class="field">
									<div class="input-group-prepend">
										<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> State:</b><i class="fas fa-compass delete2 iconos"></i></span>
									</div>	
								<input class="input-class01 letras-direccion" type="text" placeholder="Estado" id="state">
							</div>
						</div>
						<div class="col-6">
							<div class="field">
								<div class="input-group-prepend">
										<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> Postal Code:</b><b class="delete2 iconos">CP</b></span>
								</div>	
								<input class="input-class7 letras-direccion" type="text" placeholder="Código Postal" pattern="[0-9]" maxlength="5" id="CP" required>
							</div>
						</div>
						<div class="col-6">
							<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> Country:</b><i class="fas fa-globe-americas delete2 iconos"></i></span>
								</div>
								<input class="input-class8 letras-direccion" type="text" placeholder="País" id="country">
							</div>
						</div>
						<div class="col-6">
							<div class="field">
								<div class="input-group-prepend">
										<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> Telephone:</b><i class="fas fa-mobile-alt delete2 iconos"></i></span>
								</div>
								<input class="email-client-input input-class9 letras-direccion" type="tel" placeholder="Teléfono" pattern="[0-9]" maxlength="15" id="tel">
							</div>
						</div>
						<div class="col-12">
							<div class="field">
								<div class="input-group-prepend">
										<span class="input-group-text letras-direccion"><b class="delete1"> Alt. Phone Number:</b><i class="fas fa-mobile-alt delete2 iconos"></i></span>
								</div>
								<input class="email-client-input input-class9 letras-direccion" type="tel" placeholder="Teléfono Alterno (Opcional)" pattern="[0-9]" maxlength="15" id="celphone">
							</div>
						</div>
						<div class="col-12 letras-direccion">
							<div class="field ">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b class="delete1"> E-mail:</b><i class="fas fa-at delete2 iconos"></i></span>
								</div>
								<input class="email-client-input input-class0 letras-direccion" type="email" placeholder="E-mail" id="email" name="email">
							</div>	
						</div>	
						<div class="col-12">
							<div class="field">
								<div class="input-group-prepend">
									<span class="input-group-text letras-direccion"><b style="color:red;">* </b><b>How to contact us:</b></span>
								</div>
								<select id="contact" name="means[0]" class="form-control means-parent js-means-select input-class20 letras-direccion" data-parent="0">
								<option value="0" selected="">Seleccionar...</option>
								<option value="1" data-specify="1">Google</option>
								<option value="2" data-specify="0">Facebook</option>
			
								<option value="5" data-specify="0">Recommendation</option>
								<option value="6" data-specify="0">Regular client</option>
							
								<option value="21" data-specify="0">Mercado Libre</option>
								
								<option value="23" data-specify="0">Amazon</option>
								<option value="24" data-specify="0">Walmart</option>
								<option value="25" data-specify="1">Point of sale</option>
								</select>
							</div>	
						</div> 
						
				</div>

					<br>
					<!-- Primeros botones -->
					<div class="field btns">
						<a class="btn prev" href="{{ url('/mycart') }}"><i class="fas fa-caret-left"></i> Previous </a>
					    <a class="firstNext next btn btno" id="next">Next<i class="fas fa-caret-right"></i></a>
					</div>
					<br>
				</div>

				<div class="page">
					<br><br>
		            <h1 class="stilo">Select your Payment Method</h1>
					<p class="letras-direccion" style="text-align:center;">Please, select an option and select "next"</p><br>
					<input type="hidden"  id="paytipe" value="">
					<input type="hidden" name="selltotal" id="selltotal" value="{{ $subtotal }}">
					<input type="hidden" name="selltotalm" id="selltotalm" value="${{  number_format($subtotal,2) }}">
					<!-- BOTONES ARRIBA SEGUNDA PAGINA -->
					<!-- <div class="field btns">
						<a class="prev-1 prev ante btn"><i class="fas fa-caret-left"></i> Anterior </a>
					    <a class="next-1 next boro btn" id="forstripe">Siguiente <i class="fas fa-caret-right"></i></a>
			        </div> -->
					<!-- INICIO DE SELECCIÓN DE METODO PAGO -->
					  <div class="shadow-sm p-3 space-down rounded">
  						<p class="auto-style3 method-pay">
							<label>
								<input id="tarjeta" name="radio" type="radio" id="radstripemsi" value="StripeMSI" />
								<img for="tarjeta" src="{{ asset('img/credit.png') }}" >
						    <span class="auto-style4"> 
								Credit / Debit Card
						    </span>
							</label>
						</p>
						<div id="div8" style="display:none;">
							<div class="card">
								<div class="card-header">
									<div class="row display-tr">
										<h3>Pay on line</h3>
									</div>
								</div>
								<div class="card-body">
									<input type='hidden' id='st-count'  value=''/>
									<input type='hidden' id='st-interval'  value=''/>
									<input type='hidden' id='st-type'  value=''/>
									<div class="row">
										<div class="col-md-6">
											<label>
												Cardholder Name
											</label>
											<input value=""  class="form-control" name="st-name" id="cardholder-name"  type="text" >
										</div>							
										<div class="col-md-6">
											<label>
												Card data
											</label>
											<div id="card-elementmsi" class="form-control">
											</div>											
										</div>	
										<input type="hidden" id="paystrid" value="">
										<input type="hidden" id="client_secret" value="">
									</div>																		
									<br>
									<div class="row">
										<div class="col-md-12"><center>
											<button class="btn btn-info" id="card-button">Continue</button>
											<button hidden class="btn btn-info" id="loading-card-button"><i class="fas fa-spinner fa-spin"></i> Loading...</button>
										</center></div>
									</div>
									<div class="row">
										<div class="col-md-12">
									<div id="stripe-msi">
										<!--<button id="btn-prueba">-->
									</div>
										</div>	
									</div>
									<br>		
								</div>
							</div>
						</div>
					  </div>
					  
  					<!-- <div class="shadow-sm p-3 space-down rounded">
  						<p class="auto-style3 method-pay radio-active">
							<label>
								<input id="deposito" name="radio" type="radio" value="Deposito"/>
								<img for="deposito" src="{{ asset('img/oxx.png') }}" >
						    <span class="auto-style4"> 
						        OXXO
						    </span>
							</label>
						</p>
						<div id="div1" style="display:none;">
						    <center>
								<p class="text-method">Realiza el pago de tu compra en cualquier <b>tienda oxxo</b>. 
								<br> Da clic en el botón <b>Siguiente</b> para obtenier el No. de cuenta.</p><br><br>
						    </center>	    
						</div>
  					</div> -->
  					<div class="shadow-sm p-3 space-down rounded">
  						<p class="auto-style3 method-pay radio-active">
							<label>
								<input id="espei" name="radio" type="radio" value="Espei"/>
								<img for="espei" src="{{ asset('img/spe.png') }}" />
						    <span class="auto-style4"> 
						        Transferencias o Depósitos Bancarios
						    </span>
							</label>
						</p>
						<div id="div3" style="display:none;">
						    <!-- <center>
						    	<b class="gueno">Banco: Banamex</b>
						    	<br>
						    	<b class="gueno">Titular: Enrique Barreda Aguirre</b>
						    	<br>
						    	<b class="gueno">CLABE: 002650700439134664 Suc: 7004</b>
						    </center>	     -->
							<p class="text-method">Realiza el pago de tu compra con <b>Transferencia electrónica SPEI</b>. 
						 	<br> Da clic en el botón <b>Siguiente</b> para obtener el No. de cuenta.</p><br><br>
						</div>
  					</div>
  					<div class="shadow-sm p-3 space-down rounded">
  						<p class="auto-style3 method-pay">
							<label>
								<input id="banamex" name="radio" type="radio" value="Banamex"/>
								<img for="banamex" src="{{ asset('img/Bana.png') }}">
						    <span class="auto-style4"> 
						        Depósito Bancario Banamex
						    </span>
							</label>
						</p>
						<div id="div4" style="display:none;">
						    <!-- <center>
						    	<b class="gueno">Banco: Banamex</b>
						    	<br>
						    	<b class="gueno">Titular: Enrique Barreda Aguirre</b>
						    	<br>
						    	<b class="gueno">No. de Cuenta: 3913466 Suc: 7004</b>
						    </center>	     -->
							<p class="text-method">Realiza el pago de tu compra en cualquier <b>Ventanilla de Banamex</b>. 
						 	<br> Da clic en el botón <b>Siguiente</b> para obtener el No. de cuenta.</p><br><br>
						</div>
  					</div>
  					<div class="shadow-sm p-3 space-down rounded">
  						<p class="auto-style3 method-pay">
							<label>
								<input id="paypal" name="radio" type="radio" value="PayPal"/>
								<img for="paypal" src="{{ asset('img/pay.png') }}">
						    <span class="auto-style4"> 
						        PayPal
						    </span>
							</label>
						</p>
						<div id="div5" style="display:none;">
						    <center>
						    	<p>Seras dirigido a <b>PayPal</b> al finalizar la compra <br>
								Da clic en el botón <b>Siguiente</b></p>
						    </center>	    
						</div>
  					</div>
  					
					<div class="field btns">
						<a class="prev-1 prev ante btn"><i class="fas fa-caret-left"></i> Previous </a>
					    <a class="next-1 next boro btn" id="forstripe">Next <i class="fas fa-caret-right"></i></a>
			        </div>
				</div>
				<div class="page">
					<br><br>
			        <h1 class="stilo">Review and confirm your purchase</h1>
					<br>
					<div class="container">
					
					<div class="shadow-sm p-3 space-down rounded">
						<div class="row">
							<div class="col-12" style="background-color:#4484CE; border-radius: 0.5rem;">
								<h5 class="confir-pay" style="color:#fff;"><b> Shipment detail</b></h5>
							</div>
							<br>
							<div class="col-4" style="padding-top:5%;">
								<img class="img-buy-end" src="{{ asset('img/btn-evg.png') }}">
							</div>
							<div class="col-8" style="padding-top:5%;">
								<div class="text-street">
										<b id="nomb"></b>
										<b id="apell"></b> - <span id="phone"></span>
										<br>
										<span id="call"></span><span> # </span><span id="noe"></span>
										<span id="colonia"></span>, 
										<span id="ciud"></span>
										<span id="esta"></span>
										<span id="pa"></span>
								</div>
								<br>
								<div class="text-cp">
									<span> Postal Code: </span><b id="cpost"></b>
								</div>	
								<div class="text-cp">
									<b>{{ $shiptag }}</b>
								</div>	
							</div>
						</div>	
					</div>				
					<br>
					
					<div class="shadow-sm p-3 space-down rounded">
						<div class="row">
							<div class="col-12" style="background-color:#4484CE; border-radius: 0.5rem;">
								<h5 class="confir-pay" style="color:#fff;"><b>Payment Detail</b></h5>
							</div>
							<br>
							<div class="col-4" style="padding-top:5%;">
								<img id="img-tar" class="img-buy-end" src="{{ asset('img/credit.png') }}">
								<img id="img-oxxo" class="img-buy-end" src="{{ asset('img/oxx.png') }}">
								<img id="img-spei" class="img-buy-end" src="{{ asset('img/spe.png') }}">
								<img id="img-banana" class="img-buy-end" src="{{ asset('img/Bana.png') }}">
								<img id="img-paypal" class="img-buy-end" src="{{ asset('img/pay.png') }}">
								<img id="img-mp" class="img-buy-end" src="{{ asset('img/mercadopago.png') }}">
							</div>
							<div class="col-8 instruct-text" style="text-align:left; padding-top:5%;">
								<b>Payment method: </b><b style="font-weight: 500" id="pago"></b><br>
								<b>Total to pay: </b><b style="font-weight: 500" id="precio"></b>
							</div>

							<div class="col-4"></div>
							<div class="col-8 instruct-text" style="text-align:left;">
							<p id="text-oxxo">
								<br><b>Instrucciones de pago: </b><br>
								<b>1.</b> Dile al cajero que quieres realizar un depósito a una tarjeta.<br>
								<b>2.</b> Díctale los 16 digitos de la cuenta. <br><br>
								<b>5204 1672 4720 1999 </b> <br><br>
								<b>3.</b> Envíanos una foto del Ticket de pago al Whatsapp <b>222 494 3993</b> y tu No. de Pedido.<br>
								<b>4.</b> ¡Listo! En breve recibirás una confirmación por whatsapp y la fecha de envío.<br>
								<b>Nota: Estas instrucciones te las enviaremos a tu correo.</b> <br>
							</p>
							<p id="text-spei">
								<b>Instrucciones de pago:</b> <br>
								<b>1.</b> Desde tu banca da de alta a Alabío Toys con los siguientes datos:<br><br>
								<b style="color:#777;">Razón social:</b> <b>Grupo Alabio SA. de CV.</b> <br>
								<b style="color:#777;">RFC:</b> <b>GAL1712137PA</b><br>
								<b style="color:#777;">CLABE:</b> <b>002650701189094781</b><br>
								<b style="color:#777;">Concepto:</b> Ingresa el número de tu pedido (Te lo enviamos por correo) <br><br>
								<b>2.</b> Envíanos una captura del pago al Whatsapp <b>222 494 3993</b> y tu No. de Pedido.<br>
								<b>3.</b> ¡Listo! En breve recibirás una confirmación por whatsapp y la fecha de envío.<br>
								<b>Nota: Estas instrucciones te las enviaremos a tu correo.</b> <br>
							</p>
							<p id="text-banana">
								<b>Instrucciones de pago</b><br>
								<b>1.</b> Acude a tu sucursal de Citibanamex dile al cajero que quieres realizar un depósito a la siguiente cuenta:<br><br>
								<b style="color:#777;">Razón social:</b> <b>Grupo Alabio SA. de CV.</b> <br>
								<b style="color:#777;">RFC:</b> <b>GAL1712137PA </b> <br>
								<b style="color:#777;"> Cuenta:</b> <b>8122297030</b><br><br>
								<b>2.</b> Envíanos una foto del Ticket de pago al Whatsapp <b>222 494 3993</b>  y tu No. de Pedido.<br>
								<b>3.</b> ¡Listo! En breve recibirás una confirmación por whatsapp y la fecha de envío.<br>
								<b>Nota: Estas instrucciones te las enviaremos a tu correo.</b> <br>
							</p>
							<p id="text-tar"></p>
							<p id="text-paypal"></p>
							<p id="text-mp"></p>
							</div> 
						</div>
					</div>

					</div>
					

					<br><br>
					<input type="checkbox" id="tyc" value="1"><label for="tyc" style="font-size: 18px">&nbsp;&nbsp; Acepto los <a href="{{url("/terminos-y-condiciones")}}" target="_blank">Terminos y Condiciones</a></label>
					<div class="field btns">
						<div class="row ancho">
							<div class="col">
					            <a class="prev-2 prev btn anterio"><i class="fas fa-caret-left"></i> Previous</a>
					        </div>
					        <div class="col">
								<a class="submit btn" id="btn-pagar" onClick="mensaje()">Finalize</a>
								<a class="btn btn-secondary loading" hidden id="btn-loading"><i class="fas fa-spinner fa-spin"></i> Cargando...</a>
					        </div>
					    </div>
			        </div>
				</div>
		</form>
		<br>
		
    	</div>
		
		</div>
		</center>
		
	</div>

	<br>
	<div class="container-fluid footer-bottom" style="padding-top: 2%; padding-left: 8%; background-color:white;">
			<h5 style="font-weight: 600; pagging:0%;">You are shopping at Alabio Toys!</h5>
			<div class="row">
				<div class="col-0.5" style="padding:0%; margin:0%;">
					<i class="fas fa-map-marker-alt fa-3x"></i>
				</div>
				<div class="col-11" style="margin:0%;">
					<b>Puebla Pue. México (Matriz)</b><br>
					<b>Telephone: <a href="tel:2224943993">222 494 3993</a></b>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-0.5" style="padding:0%; margin:0%;">
					<i class="fas fa-map-marker-alt fa-3x"></i>
				</div>
			
				<div class="col-11" style="margin:0%;">
					<b>Santiago de Querétaro, Qro. </b><br>
					<b>Telephone: <a href="tel:4427197317">442 719 7317</a></b>
				</div>
			</div>
				<br>
			<div class="row">
				<div class="col-12">
					<b>ventastoys@alabio.mx</b>
				</div><br><br>
			</div>
			<!--<br>
			<b style="font-weight: 500; font-size: 15px;">Calle Sur 51 #72 Col. Rafael Alvarado, Orizaba Veracruz CP 94340, Ver. (Sucursal) Teléfono: 272 215 1880</b>
			-->
			<br><br>
			
			
	</div>
	
	
	



@endsection

@section('script')
	<script type="text/javascript">
		let availablePlans = [];
		var cp;
		var name;
		var lastname;
		var phone;
		var calle;
		var noe;
		var col;
		var ciud;
		var stad;
		var pais;
		var preci;
		$(document).ready(function() {
		    $("input[type=radio]").click(function(event){
		        var valor = $(event.target).val();
				$('#paytipe').val(valor);
		        if(valor =="Deposito"){
		            $("#div1").show();
		            $("#div2").hide();
		            $("#div3").hide();
		            $("#div4").hide();
		            $("#div5").hide();
		            $("#div6").hide();
					$("#div7").hide();
					$("#div8").hide();

		            $("#img-oxxo").show();
		            $("#img-banana").hide();
		            $("#img-spei").hide();
		            $("#img-tar").hide();
		            $("#img-paypal").hide();
		            $("#img-mp").hide();

					$("#text-oxxo").show();
		            $("#text-banana").hide();
		            $("#text-spei").hide();
		            $("#text-tar").hide();
		            $("#text-paypal").hide();
		            $("#text-mp").hide();
		            //$("#pago").val("OXXO");
		            preci = ($("#selltotalm").val());		            
		            $("#pago").text("OXXO");

		            name = $("#cliname").val();
				  	lastname = $("#clilastname").val();
				  	cp = $("#CP").val();
				  	calle = $("#street").val();
				  	noe = $("#noext").val();
				  	col = $("#colony").val();
				  	ciud = $("#city").val();
				  	stad = $("#state").val();
				  	pais = $("#country").val();
				  	phone = $("#tel").val();

				  	$("#cpost").text(cp);
				  	$("#call").text(calle);
				  	$("#noe").text(noe);
				  	$("#colonia").text(col);
				  	$("#ciud").text(ciud);
				  	$("#esta").text(stad);
				  	$("#pa").text(pais);
				  	$("#nomb").text(name);
				  	$("#apell").text(lastname);
				  	$("#phone").text(phone);
				  	$("#precio").text(preci);
		        } else if (valor == "Ventanilla") {
		            $("#div1").hide();
		            $("#div2").show();
		            $("#div3").hide();
		            $("#div4").hide();
		            $("#div5").hide();
		            $("#div6").hide();
					$("#div7").hide();
					$("#div8").hide();

		            $("#img-oxxo").hide();
		            $("#img-banana").hide();
		            $("#img-spei").hide();
		            $("#img-tar").show();
		            $("#img-paypal").hide();
		            $("#img-mp").hide();

					$("#text-oxxo").hide();
		            $("#text-banana").hide();
		            $("#text-spei").hide();
		            $("#text-tar").show();
		            $("#text-paypal").hide();
		            $("#text-mp").hide();
		            //$("#pago").val("Tarjeta");
		            $("#precio").val($("#selltotalm").val());
		            $("#pago").text("Tarjeta");

		            name = $("#cliname").val();
				  	lastname = $("#clilastname").val();
				  	cp = $("#CP").val();
				  	calle = $("#street").val();
				  	noe = $("#noext").val();
				  	col = $("#colony").val();
				  	ciud = $("#city").val();
				  	stad = $("#state").val();
				  	pais = $("#country").val();
				  	phone = $("#tel").val();

				  	$("#cpost").text(cp);
				  	$("#call").text(calle);
				  	$("#noe").text(noe);
				  	$("#colonia").text(col);
				  	$("#ciud").text(ciud);
				  	$("#esta").text(stad);
				  	$("#pa").text(pais);
				  	$("#nomb").text(name);
				  	$("#apell").text(lastname);
				  	$("#phone").text(phone);
				  	preci = ($("#selltotalm").val());
					$("#precio").text(preci);
			} else if (valor == "StripeMSI") {
		            $("#div1").hide();
		            $("#div2").hide();
		            $("#div3").hide();
		            $("#div4").hide();
		            $("#div5").hide();
					$("#div6").hide();
					$("#div7").hide();
					$("#div8").show();

		            $("#img-oxxo").hide();
		            $("#img-banana").hide();
		            $("#img-spei").hide();
		            $("#img-tar").show();
		            $("#img-paypal").hide();
		            $("#img-mp").hide();

					$("#text-oxxo").hide();
		            $("#text-banana").hide();
		            $("#text-spei").hide();
		            $("#text-tar").show();
		            $("#text-paypal").hide();
		            $("#text-mp").hide();
		            //$("#pago").val("Tarjeta");
		            $("#precio").val($("#selltotalm").val());
		            $("#pago").text("Tarjeta");

		            name = $("#cliname").val();
				  	lastname = $("#clilastname").val();
				  	cp = $("#CP").val();
				  	calle = $("#street").val();
				  	noe = $("#noext").val();
				  	col = $("#colony").val();
				  	ciud = $("#city").val();
				  	stad = $("#state").val();
				  	pais = $("#country").val();
				  	phone = $("#tel").val();

				  	$("#cpost").text(cp);
				  	$("#call").text(calle);
				  	$("#noe").text(noe);
				  	$("#colonia").text(col);
				  	$("#ciud").text(ciud);
				  	$("#esta").text(stad);
				  	$("#pa").text(pais);
				  	$("#nomb").text(name);
				  	$("#apell").text(lastname);
				  	$("#phone").text(phone);
				  	preci = ($("#selltotalm").val());
					$("#precio").text(preci);
				}
				else if (valor == "Stripe") {
		            $("#div1").hide();
		            $("#div2").hide();
		            $("#div3").hide();
		            $("#div4").hide();
		            $("#div5").hide();
					$("#div6").hide();
					$("#div8").hide();
					$("#div7").show();

		            $("#img-oxxo").hide();
		            $("#img-banana").hide();
		            $("#img-spei").hide();
		            $("#img-tar").show();
		            $("#img-paypal").hide();
		            $("#img-mp").hide();

					$("#text-oxxo").hide();
		            $("#text-banana").hide();
		            $("#text-spei").hide();
		            $("#text-tar").show();
		            $("#text-paypal").hide();
		            $("#text-mp").hide();
		            //$("#pago").val("Tarjeta");
		            $("#precio").val($("#selltotalm").val());
		            $("#pago").text("Tarjeta");

		            name = $("#cliname").val();
				  	lastname = $("#clilastname").val();
				  	cp = $("#CP").val();
				  	calle = $("#street").val();
				  	noe = $("#noext").val();
				  	col = $("#colony").val();
				  	ciud = $("#city").val();
				  	stad = $("#state").val();
				  	pais = $("#country").val();
				  	phone = $("#tel").val();

				  	$("#cpost").text(cp);
				  	$("#call").text(calle);
				  	$("#noe").text(noe);
				  	$("#colonia").text(col);
				  	$("#ciud").text(ciud);
				  	$("#esta").text(stad);
				  	$("#pa").text(pais);
				  	$("#nomb").text(name);
				  	$("#apell").text(lastname);
				  	$("#phone").text(phone);
				  	preci = ($("#selltotalm").val());
					$("#precio").text(preci);
		        }
		         else if (valor == "Espei") {
		        	$("#div1").hide();
		            $("#div2").hide();
		            $("#div3").show();
		            $("#div4").hide();
		            $("#div5").hide();
					$("#div6").hide();
					$("#div7").hide();
					$("#div8").hide();

		            $("#img-oxxo").hide();
		            $("#img-banana").hide();
		            $("#img-spei").show();
		            $("#img-tar").hide();
		            $("#img-paypal").hide();
		            $("#img-mp").hide();

					$("#text-oxxo").hide();
		            $("#text-banana").hide();
		            $("#text-spei").show();
		            $("#text-tar").hide();
		            $("#text-paypal").hide();
		            $("#text-mp").hide();
		            //$("#pago").val("Spei");
		            $("#pago").text("Spei");
		            $("#precio").val($("#selltotalm").val());

		            name = $("#cliname").val();
				  	lastname = $("#clilastname").val();
				  	cp = $("#CP").val();
				  	calle = $("#street").val();
				  	noe = $("#noext").val();
				  	col = $("#colony").val();
				  	ciud = $("#city").val();
				  	stad = $("#state").val();
				  	pais = $("#country").val();
				  	phone = $("#tel").val();

				  	$("#cpost").text(cp);
				  	$("#call").text(calle);
				  	$("#noe").text(noe);
				  	$("#colonia").text(col);
				  	$("#ciud").text(ciud);
				  	$("#esta").text(stad);
				  	$("#pa").text(pais);
				  	$("#nomb").text(name);
				  	$("#apell").text(lastname);
				  	$("#phone").text(phone);
				  	preci = ($("#selltotalm").val());
					$("#precio").text(preci);
		        } else if (valor == "Banamex") {
		        	$("#div1").hide();
		            $("#div2").hide();
		            $("#div3").hide();
		            $("#div4").show();
		            $("#div5").hide();
					$("#div6").hide();
					$("#div7").hide();
					$("#div8").hide();
		            $("#img-oxxo").hide();
		            $("#img-banana").show();
		            $("#img-spei").hide();
		            $("#img-tar").hide();
		            $("#img-paypal").hide();
		            $("#img-mp").hide();
					$("#text-oxxo").hide();
		            $("#text-banana").show();
		            $("#text-spei").hide();
		            $("#text-tar").hide();
		            $("#text-paypal").hide();
		            $("#text-mp").hide();
		            //$("#pago").val("Banamex");
		            $("#pago").text("Banamex");
		            $("#precio").val($("#selltotalm").val());

		            name = $("#cliname").val();
				  	lastname = $("#clilastname").val();
				  	cp = $("#CP").val();
				  	calle = $("#street").val();
				  	noe = $("#noext").val();
				  	col = $("#colony").val();
				  	ciud = $("#city").val();
				  	stad = $("#state").val();
				  	pais = $("#country").val();
				  	phone = $("#tel").val();

				  	$("#cpost").text(cp);
				  	$("#call").text(calle);
				  	$("#noe").text(noe);
				  	$("#colonia").text(col);
				  	$("#ciud").text(ciud);
				  	$("#esta").text(stad);
				  	$("#pa").text(pais);
				  	$("#nomb").text(name);
				  	$("#apell").text(lastname);
				  	$("#phone").text(phone);
				  	preci = ($("#selltotalm").val());
					$("#precio").text(preci);
		        }else if (valor == "PayPal") {
		        	$("#div1").hide();
		            $("#div2").hide();
		            $("#div3").hide();
		            $("#div4").hide();
		            $("#div5").show();
					$("#div6").hide();
					$("#div7").hide();
					$("#div8").hide();
		            $("#img-oxxo").hide();
		            $("#img-banana").hide();
		            $("#img-spei").hide();
		            $("#img-tar").hide();
		            $("#img-paypal").show();
		            $("#img-mp").hide();
					$("#text-oxxo").hide();
		            $("#text-banana").hide();
		            $("#text-spei").hide();
		            $("#text-tar").hide();
		            $("#text-paypal").show();
		            $("#text-mp").hide();
		            //$("#pago").val("Banamex");
		            $("#pago").text("PayPal");
		            $("#precio").val($("#selltotalm").val());

		            name = $("#cliname").val();
				  	lastname = $("#clilastname").val();
				  	cp = $("#CP").val();
				  	calle = $("#street").val();
				  	noe = $("#noext").val();
				  	col = $("#colony").val();
				  	ciud = $("#city").val();
				  	stad = $("#state").val();
				  	pais = $("#country").val();
				  	phone = $("#tel").val();

				  	$("#cpost").text(cp);
				  	$("#call").text(calle);
				  	$("#noe").text(noe);
				  	$("#colonia").text(col);
				  	$("#ciud").text(ciud);
				  	$("#esta").text(stad);
				  	$("#pa").text(pais);
				  	$("#nomb").text(name);
				  	$("#apell").text(lastname);
				  	$("#phone").text(phone);
				  	preci = ($("#selltotalm").val());
					$("#precio").text(preci);
		        }else if (valor == "MP") {
		        	$("#div1").hide();
		            $("#div2").hide();
		            $("#div3").hide();
		            $("#div4").hide();
		            $("#div5").hide();
					$("#div6").show();
					$("#div7").hide();
					$("#div8").hide();
		            $("#img-oxxo").hide();
		            $("#img-banana").hide();
		            $("#img-spei").hide();
		            $("#img-tar").hide();
		            $("#img-paypal").hide();
		            $("#img-mp").show();
					$("#text-oxxo").hide();
		            $("#text-banana").hide();
		            $("#text-spei").hide();
		            $("#text-tar").hide();
		            $("#text-paypal").hide();
		            $("#text-mp").show();
		            //$("#pago").val("Banamex");
		            $("#pago").text("MercadoPago");
		            $("#precio").val($("#selltotalm").val());

		            name = $("#cliname").val();
				  	lastname = $("#clilastname").val();
				  	cp = $("#CP").val();
				  	calle = $("#street").val();
				  	noe = $("#noext").val();
				  	col = $("#colony").val();
				  	ciud = $("#city").val();
				  	stad = $("#state").val();
				  	pais = $("#country").val();
				  	phone = $("#tel").val();

				  	$("#cpost").text(cp);
				  	$("#call").text(calle);
				  	$("#noe").text(noe);
				  	$("#colonia").text(col);
				  	$("#ciud").text(ciud);
				  	$("#esta").text(stad);
				  	$("#pa").text(pais);
				  	$("#nomb").text(name);
				  	$("#apell").text(lastname);
				  	$("#phone").text(phone);
				  	preci = ($("#selltotalm").val());
					$("#precio").text(preci);
		        } else { 
		            // Otra cosa
		            $("#img-oxxo").hide();
		            $("#img-banana").hide();
		            $("#img-spei").hide();
		            $("#img-tar").hide();
		            $("#img-paypal").hide();
		            $("#img-mp").hide();

					$("#text-oxxo").hide();
		            $("#text-banana").hide();
		            $("#text-spei").hide();
		            $("#text-tar").hide();
		            $("#text-paypal").hide();
		            $("#text-mp").hide();
		        }
				$.ajax({ 
        		url: '/recalctotal',
        		type: 'GET',
        		data: { 
					pm:valor
				 },
        		success: function(result)
        		{													
					$('#selltotal').val(result.total);
					$('#precio').text('$' + parseFloat(result.total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());										           		
					$('#intabletotal').text('$' + parseFloat(result.total, 10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, "$1,").toString());	
        		}
    });	
		    });
		});
	</script>
		
<script type="text/javascript">
/*	Conekta.setPublicKey("key_dhdDoUGNrrnHbNAPk6rEJsA");
	
	var conektaSuccessResponseHandler= function(token){
	   
		$("#conektaTokenId").val(token.id);		
		jsPay();
	};

	var conektaErrorResponseHandler =function(response){
		var $form=$("#card-form");
		alert(response.message_to_purchaser);
		$("#btn-pagar").prop( "disabled", false );
	}*/
	var stripe = Stripe('pk_live_51HiTZnGob5o9zKSdlESghOJNfqaSfhKsZeKqZSyJuaSr2qZ4Y5M2XARQPFkeSypEEmdrnpZJiHyV64SbaimQhexI00gHVmsydN');

				var elements = stripe.elements();
				var cardElement = elements.create('card');
				cardElement.mount('#card-elementmsi');
	$(document).ready(function(){
		
		$(".prev-2").click(function(e){
			e.preventDefault();
			e.stopImmediatePropagation();
			$("#btn-pagar").prop( "disabled", false );
			$('#btn-pagar').removeAttr('hidden');
			$('#btn-loading').attr('hidden',true);

		})
	})
	$(document).ready(function(){
		
		$("#card-button").one("click",function(e){
			e.preventDefault();
			e.stopImmediatePropagation();
			
			if($("#paytipe").val() == "StripeMSI"){
				$('#loading-card-button').removeAttr('hidden');
				$('#card-button').attr('hidden',true);
				
				//
				var cardholderName = document.getElementById('cardholder-name');
				var form = document.getElementById('payment-form');

  stripe.createPaymentMethod({
    type: 'card',
    card: cardElement,
    billing_details: {name: cardholderName.value,
	email:$('#email').val()}
  }).then(function(result) {
	
    if (result.error) {
		alert(result.error.message);
		$('#card-button').removeAttr('hidden');
		$('#loading-card-button').attr('hidden',true);
    } else {

	  $.ajax({ 
		  		
        		url: 'http://negocad.com/collect_details',
        		type: 'GET',
			dataType: 'jsonp', 
    			crossDomain: true,
        		data: { 
					pmi:result.paymentMethod.id,
					total:$('#selltotal').val(),
					desc:$('#payconcept').val()
				 },
        		success: function(result)
        		{			
					if(result[0].error)
					{
						alert(result[0].error_message);
						$('#card-button').removeAttr('hidden');
						$('#loading-card-button').attr('hidden',true);
					}	
					else
					{
						$('#card-button').removeAttr('hidden');
						$('#loading-card-button').attr('hidden',true);
						console.log(result[0]);
						$('#paystrid').val(result[0].intent_id);
						//if(result.available_plans.length > 0){
							$label = document.createElement( "label" );
						$label.append( document.createTextNode( "Seleccione los meses" ) );
						  $select = document.createElement( "select" );
						  $select.setAttribute("id", "msi-select");
						  
						  //
						  $top =document.createElement("option");
						  $top.setAttribute("value", 1);
						  $top.append( document.createTextNode( "Pago Único/Débito" ) );
						  $select.appendChild($top);
						  //
								 			  
						  $.each( result[0].available_plans, function( key, value ) {
  								$top =document.createElement("option");
								  $top.setAttribute("value", key);
								  $top.append( document.createTextNode( value.count+" Meses" ) );
								  $select.appendChild($top);
								});
						$( "#stripe-msi" ).append( $label );
						$( "#stripe-msi" ).append( $select );
						$('#card-button').attr('hidden',true);
						availablePlans = result[0].available_plans;
						console.log(availablePlans);
  
						
					}
            		
        		}
    });	
    }
  });

			
			}
	})})
	$(document).ready(function(){
		
		$("#btn-pagar").click(function(e){
			e.preventDefault();
        	e.stopImmediatePropagation();
			var isChecked = document.getElementById('tyc').checked;
if(isChecked){
			$("#btn-pagar").prop( "disabled", true );
			$('#btn-loading').removeAttr('hidden');
			$('#btn-pagar').attr('hidden',true);
			if($("#paytipe").val() == "Ventanilla"){
				
			var $form=$("#card-form");
			Conekta.Token.create($form,conektaSuccessResponseHandler,conektaErrorResponseHandler);	
			$.ajax({ 
        		url: '/savecontract',
        		type: 'GET',
        		data: { 
					nombre:$('#cliname').val(),
					apellido:$('#clilastname').val(),
					empresa:$('#empresa').val(),
					street:$('#street').val(),
					no_ext:$('#noext').val(),
					no_int:$('#noint').val(),
					reference:$('#refe').val(),
					colony:$('#colony').val(),
					locality:$('#city').val(),
					state:$('#state').val(),
					postal_code:$('#CP').val(),
					country:$('#country').val(),
					phone:$('#tel').val(),
					phone_cell:$('#celphone').val(),
					email:$('#email').val(),
					meses:$('#meses').val(),
					description:$('#description').val(),
					contact:$('#contact').val(),
					tag:$("#paytipe").val()
				 },
        		success: function()
        		{				
            		
        		}
    });			
		}else if($("#paytipe").val() == "PayPal")
		{
			$.ajax({ 
        		url: '/savecontract',
        		type: 'GET',
        		data: { 
					nombre:$('#cliname').val(),
					apellido:$('#clilastname').val(),
					empresa:$('#empresa').val(),
					street:$('#street').val(),
					no_ext:$('#noext').val(),
					no_int:$('#noint').val(),
					reference:$('#refe').val(),
					colony:$('#colony').val(),
					locality:$('#city').val(),
					state:$('#state').val(),
					postal_code:$('#CP').val(),
					country:$('#country').val(),
					phone:$('#tel').val(),
					phone_cell:$('#celphone').val(),
					email:$('#email').val(),
					meses:$('#meses').val(),
					description:$('#description').val(),
					contact:$('#contact').val(),
					tag:$("#paytipe").val()
				 },
        		success: function()
        		{				
            		window.location.href = "ventas/paypal/pay/"+$('#selltotal').val();
        		}
    });
		}else if($("#paytipe").val() == "StripeMSI")
		{
		
		
			$.ajax({ 
        		url: '/savecontract',
        		type: 'GET',
        		data: { 
					nombre:$('#cliname').val(),
					apellido:$('#clilastname').val(),
					empresa:$('#empresa').val(),
					street:$('#street').val(),
					no_ext:$('#noext').val(),
					no_int:$('#noint').val(),
					reference:$('#refe').val(),
					colony:$('#colony').val(),
					locality:$('#city').val(),
					state:$('#state').val(),
					postal_code:$('#CP').val(),
					country:$('#country').val(),
					phone:$('#tel').val(),
					phone_cell:$('#celphone').val(),
					email:$('#email').val(),
					meses:$('#meses').val(),
					description:$('#description').val(),
					contact:$('#contact').val(),
					tag:$("#paytipe").val(),
					selected_plan:availablePlans[$('#msi-select').children("option:selected").val()],
					payment_intent_id:$('#paystrid').val()
					
				 },
        		success: function()
        		{		
			
						$.ajax({ 
        				url: 'http://negocad.com/savecontract',
        				type: 'GET',
						dataType: 'jsonp', 
    					crossDomain: true, 
        		data: { 
					tag:$("#paytipe").val(),
					selected_plan:availablePlans[$('#msi-select').children("option:selected").val()],
					payment_intent_id:$('#paystrid').val()
					
				 },
				 success: function(datos)
        		{		
					console.log(datos[0]);		
					if(datos[0].status == "succeeded")
					{
						window.location.href = "ventas/eng/thanks";
					}	
					else
					{
						swal({
						title: '¡Espera!',
						text: 'El pago no pudo procesarse vuelva a intentarlo.',
						imageUrl: 'img/roto.png',
						imageWidth: 200,
						imageHeight: 200,
						imageAlt: 'Infable Alabio',
						})
					}				
					
				},
				fail: function()
				{
					swal({
						title: '¡Espera!',
						text: 'Ocurrió un Error al procesar el Pago',
						imageUrl: 'img/roto.png',
						imageWidth: 200,
						imageHeight: 200,
						imageAlt: 'Infable Alabio',
						})
				}

				
    });
								
					
				},
				fail: function()
				{
					swal({
					title: '¡Espera!',
					text: 'Ocurrió un Error al procesar el Pago',
					imageUrl: 'img/roto.png',
					imageWidth: 200,
					imageHeight: 200,
					imageAlt: 'Infable Alabio',
					})
				}

				
    });
			
		}
		else if($("#paytipe").val() == "Stripe")
		{
			if($('#client_secret').val() != "")
			{
				stripe.confirmCardPayment($('#client_secret').val(), {
    			payment_method: {
      			card: cardElement,
      			billing_details: {
        		name: $('#cardholder-name').val(),
				email:$('#email').val()
      			}
    				}
  				}).then(function(result) {
    			if (result.error) {
      
      			alert(result.error.message);
    				} else {
      
      if (result.paymentIntent.status === 'succeeded') {
		$.ajax({ 
        		url: '/savecontract',
        		type: 'GET',
        		data: { 
					nombre:$('#cliname').val(),
					apellido:$('#clilastname').val(),
					empresa:$('#empresa').val(),
					street:$('#street').val(),
					no_ext:$('#noext').val(),
					no_int:$('#noint').val(),
					reference:$('#refe').val(),
					colony:$('#colony').val(),
					locality:$('#city').val(),
					state:$('#state').val(),
					postal_code:$('#CP').val(),
					country:$('#country').val(),
					phone:$('#tel').val(),
					phone_cell:$('#celphone').val(),
					email:$('#email').val(),
					meses:$('#meses').val(),
					description:$('#description').val(),
					contact:$('#contact').val(),
					tag:$("#paytipe").val()
				 },
        		success: function()
        		{				
            		window.location.href = "ventas/eng/thanks";
        		}
    });;
	  		}
	  			else
				{
					swal({
					title: '¡Espera!',
					text: 'El pago no pudo procesarse vuelva a intentarlo.',
					imageUrl: 'img/roto.png',
					imageWidth: 200,
					imageHeight: 200,
					imageAlt: 'Infable Alabio',
					})
				}	
    }
  });
			}
		/*
			if($("#tokentrue").val()=="1")
			{
			$.ajax({ 
        		url: '/ventas/savecontract',
        		type: 'GET',
        		data: { 
					nombre:$('#cliname').val(),
					apellido:$('#clilastname').val(),
					empresa:$('#empresa').val(),
					street:$('#street').val(),
					no_ext:$('#noext').val(),
					no_int:$('#noint').val(),
					reference:$('#refe').val(),
					colony:$('#colony').val(),
					locality:$('#city').val(),
					state:$('#state').val(),
					postal_code:$('#CP').val(),
					country:$('#country').val(),
					phone:$('#tel').val(),
					phone_cell:$('#celphone').val(),
					email:$('#email').val(),
					meses:$('#meses').val(),
					description:$('#description').val(),
					tag:$("#paytipe").val(),
					contact:$('#contact').val(),
					sttoken:$("#stripeToken").val()
					
				 },
        		success: function(result)
        		{				
					console.log(result);		
					if(result.status == "succeeded")
					{
						window.location.href = "/ventas/thanks";
					}	
					else
					{
						alert("El pago no pudo procesarse vuelva a intentarlo.");
					}	
				},
				fail: function()
				{
					alert("Ocurrió un Error al procesar el Pago")
				}

				
    });
			}
			else
			{
				alert($("#tokenerror").val());
			}*/
		}
		else{
		
			$.ajax({ 
        		url: '/savecontract',
        		type: 'GET',
        		data: { 
					nombre:$('#cliname').val(),
					apellido:$('#clilastname').val(),
					empresa:$('#empresa').val(),
					street:$('#street').val(),
					no_ext:$('#noext').val(),
					no_int:$('#noint').val(),
					reference:$('#refe').val(),
					colony:$('#colony').val(),
					locality:$('#city').val(),
					state:$('#state').val(),
					postal_code:$('#CP').val(),
					country:$('#country').val(),
					phone:$('#tel').val(),
					phone_cell:$('#celphone').val(),
					email:$('#email').val(),
					meses:$('#meses').val(),
					description:$('#description').val(),
					contact:$('#contact').val(),
					tag:$("#paytipe").val()
				 },
        		success: function()
        		{				
            		window.location.href = "ventas/eng/thanks";
        		}
    });
		
	
		}
	}
	else
	{
	swal({
    title: '¡Espera!',
    text: 'Por favor acepta los terminos y condiciones',
    imageUrl: 'img/roto.png',
    imageWidth: 200,
    imageHeight: 200,
    imageAlt: 'Infable Alabio',
  	})
	}
		})
		
	})

	function jsPay(){
		let params=$("#card-form").serialize();
		let url="conekta_resources/pay.php";
		
		$.post(url,params,function(data){
			if(data=="1"){				
				Swal.fire(
				'Pago en proceso',
				':D',
				'success'
				)
				window.location.href = "ventas/eng/thanks";
			}else{
				alert(data);
				$("#btn-pagar").prop( "disabled", false );
				$('#btn-pagar').removeAttr('hidden');
				$('#btn-loading').attr('hidden',true);
			}
		
		})

	}

	function jsClean(){
		$(".form-control").prop("value","");
		$("#conektaTokenId").prop("value","");
	}
</script>
<script>
		var activeColor = ["#4484ce", "#4484ce", "#4484ce"]; 
		var borde = ["#bbb"];
		var progre1 = document.querySelector('#progre1');
		var progre2 = document.querySelector('#progre2');
		var progre3 = document.querySelector('#progre3');
		var stepTxt1 = document.querySelector('#sub-1');
		var stepTxt2 = document.querySelector('#sub-2');
		var stepTxt3 = document.querySelector('#sub-3');
		var circle1 = document.querySelector('#circle1');
		var circle2 = document.querySelector('#circle2');
		var elements = [progre1, progre2, progre3, stepTxt1, stepTxt2, stepTxt3, circle1, circle2];
		var btno = document.querySelector('.btno');
		var boro = document.querySelector('.boro');
		var anterio = document.querySelector('.anterio');
		var ante = document.querySelector('.ante');

		btno.onclick = function() {
			progre1.style.color = activeColor[1];
			progre1.style.borderColor = borde[1];
			circle1.style.backgroundColor = activeColor[1];
			circle1.style.color = "#fff";
			progre2.style.borderColor = borde[1];
			progre2.style.backgroundColor = "#fff";
			progre2.style.borderBottomColor = "#fff";
			progre1.style.backgroundColor = "#ddd";
			progre1.style.borderBottomColor = "#fff";
			progre3.style.backgroundColor = "#ddd";
			progre3.style.borderBottomColor = "#fff";
			progre2.style.boxShadow = "offset 0 0 1.2vmin #ddd, 0 0 3vmin #ddd";
		}
			
		boro.onclick = function() {
			circle2.style.backgroundColor = activeColor[1];
			circle2.style.color = "#fff";
			progre3.style.borderColor = borde[1];
			progre3.style.backgroundColor = "#fff";
			progre3.style.borderBottomColor = "#fff";
			progre1.style.backgroundColor = "#ddd";
			progre1.style.borderBottomColor = "#fff";
			progre2.style.backgroundColor = "#ddd";
			progre2.style.borderColor = borde[1];
			progre2.style.borderBottomColor = "#fff";
			progre3.style.boxShadow = "offset 0 0 1.2vmin #ddd, 0 0 3.1vmin #ddd";
			stepTxt2.style.color = activeColor[1];
		}

		anterio.onclick = function() {
			stepTxt1.style.color = activeColor[1];
			stepTxt2.style.color = activeColor[1];
			progre2.style.color = activeColor[1];
			progre2.style.backgroundColor = "#fff";
			progre2.style.borderBottomColor = "#fff";
			progre1.style.backgroundColor = "#ddd";
			progre1.style.borderBottomColor = "#fff";
			progre3.style.backgroundColor = "#ddd";
			progre3.style.borderBottomColor = "#fff";
			progre2.style.boxShadow = "offset 0 0 1.2vmin #ddd, 0 0 3vmin #ddd";
		}

		ante.onclick = function() {
			progre1.style.color = activeColor[1];
			progre1.style.backgroundColor = "#fff";
			progre1.style.borderBottomColor = "#fff";
			progre2.style.backgroundColor = "#ddd";
			progre2.style.borderBottomColor = "#fff";
			progre3.style.backgroundColor = "#ddd";
			progre3.style.borderBottomColor = "#fff";
			progre2.style.boxShadow = "offset 0 0 1.2vmin #ddd, 0 0 3vmin #ddd";
		}

		function mensaje() {
		swal({
		type: 'success',
		timer: 2000,
		});
		}
		
</script>
<script src="{{ asset('js/checkout.js') }}"></script> 
@endsection