@extends('alabio')
@section('meta')
    <title>Gracias por tu compra</title>
@endsection
@section('style-checkout')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}">
@endsection

@section('content')
			<div class="container" style="background-color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				<div class="gracias">
				<br><br>
	 				<h5 class="title-end-buy">
			        <b>¡Gracias por comprar en Alabio Toys!</b>	
					</h5>
					<div class="no-pedido">
					<p>NO. Pedido: # </p>
					</div>
					<span class="text-end-checkout">
						<p style="text-align:center;">Tu pedido ha sido recibido correctamente.</p>
						Mientras realizas tu pago comenzaremos los preparativos de tus <strong> productos</strong>. Por favor avisamos cuando tengas tu <strong>comprobante de pago.</strong> 
						<br> En breve recibirás un correo con los detalles de tu compra. 
					</span><br><br>
					<!-- <center><span class="text-end-checkout">Tu pedido ha sido recibido correctamente.</b></center><br>
					<span class="text-end-checkout">Comenzamos a Fabricar tus <b>productos</b>, en breve recibirás un correo con los detalles de su compra. </span><br><br>
					<span class="text-end-checkout">Fecha estimada de envío: <b>05/09/2021</b> </span> 
					<br><br>  -->
					
					<div class="container">
						<div class="row table-title"> 
								<div class="col-3">
								</div>
								<div class="col-4">
									<b>Productos </b>
								</div>	
								<div class="col-2">
									<b class="delete1">Cantidad </b>
									<b class="delete3">Cant</b>
								</div>	
								<div class="col-3">
									<b>Precio </b>
								</div>								
						</div>
						
						<div class="row table-products"> 
							<div class="col-3">
								<img src="img/roto.png" alt="">
							</div>
							<div class="col-4 column-prod">
								<b>Asi se llama el producto</b>
							</div>
							<div class="col-2 column-prod">
								<b>2</b>
							</div>
							<div class="col-3 column-prod">
								<b>$ 4,000</b>
							</div>							
						</div>

						<div class="row table-products"> 
							<div class="col-3 column-prod">
								<img src="img/roto.png" alt="">
							</div>
							<div class="col-4 column-prod">
								<b>Asi se llama el producto</b>
							</div>
							<div class="col-2 column-prod">
								<b>2</b>
							</div>
							<div class="col-3 column-prod">
								<b>$ 4,000</b>
							</div>							
						</div>
					<br>
					<div class="container">
						<div class="row instruc-table">
							<div class="col-12" style="text-align:center;">
								<b>Forma de Pago: </b> <b style="color:#4484CE;">Deposito en Oxxo</b> <br>
							</div>
							<br>
							<div class="col-12" style="text-align:center;">
								<b>Envio Gratis a Domicilio: </b> <b style="color:#4484CE;">$0</b> <br>
							</div>
							<br><br>
							<div class="col-12" style="text-align: justify;">
								<b>Instrucciones de pago</b><br>
								<b>1.</b> Acude a tu sucursal de Citibanamex dile al cajero que quieres realizar un depósito a la siguiente cuenta:<br><br>
								<b style="color:#777;">Razón social:</b> <b>Grupo Alabio SA. de CV.</b> <br>
								<b style="color:#777;">RFC:</b> <b>GAL1712137PA </b> <br>
								<b style="color:#777;"> Cuenta:</b> <b>8122297030</b><br><br>
								<b>2.</b> Envíanos una foto del Ticket de pago al Whatsapp <a href="tel:2224943993" target=”_blank”><b>222 494 3993</b></a>  y tu No. de Pedido.<br>
								<b>3.</b> ¡Listo! En breve recibirás una confirmación por whatsapp y la fecha de envío.<br>
								<b>Nota: Estas instrucciones te las enviaremos a tu correo.</b> <br>
							</div>
						</div>
					</div>
					<br>
					</div>
					<br>
					<a href="{{ url('/entrega-inmediata') }}" class="btn btn-primary enlaceboton">Seguir Comprando</a>
					<p class="text-end-checkout" style="text-align:center; margin-bottom:1px;">
						Si tiene alguna duda o inquietud sobre su compra puede comunicarse con nosostros: <br><br>
						<i class="far fa-hand-point-down fa-2x"></i>
					</p>
					
					<div class="row row-cols-1 row-cols-sm-2 " style="text-align:center;">
						<div class="col-md">
							<b class="text-contact2">Alabio Toys!</b>
							<br>
							<b class="text-contact2">Puebla (Matriz)</b>
							<br>
							<b class="contact">Puebla Pue.</b>
							<br>
							<b class="contact">Tel : <a href="tel:2224943993" target=”_blank”>+52 1 (222) 494 3993</a></b>
						</div>
						<div class="col-md">
							<br class="delete3">
							<b class="text-contact2">Alabio Toys!</b>
							<br>
							<b class="text-contact2">Querétaro(Sucursal)</b>
							<br>
							<b class="contact">Santiago de Querétaro, Qro.</b>
							<br>
							<b class="contact">Tel : <a href="tel:4427197317" target=”_blank”>+52 1 (442) 719 7317</a></b>
						</div>
						<!--<div class="col-md">
							<b class="text-contact2">Alabio Toys!</b>
							<br>
							<b class="text-contact2">Veracruz (Sucursal)</b>
							<br>
							<b class="contact">Calle Sur 51 #72 Col. Rafael</b>
							<br>
							<b class="contact">Alvarado, Orizaba Ver.</b>
							<br>
							<br>
							<b class="contact">Tel : +52 1 (272) 215 1880</b>
						</div>-->
					</div><br><br>
			</div>
		</div><br>
@endsection