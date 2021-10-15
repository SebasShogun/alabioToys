@extends('eng.alabio')
@section('meta')
    <title>Thanks for your purchase</title>
@endsection
@section('style-checkout')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/checkout.css') }}">
@endsection
@section('content')
@php
	$nombreinf = "";
	foreach ($products as $product) {
		$nombreinf = $nombreinf.$product[2].", ";
	}
@endphp
			<div class="container" style="background-color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
				<div class="gracias">
				<br><br>
	 				<h5 class="title-end-buy">
			        <b>Thank you for shopping at Alabio Toys!</b>	
					</h5>
					<div class="no-pedido">
					<p>Order No. #{{ $lastdata->id }}</p>
					</div>
					@if($lastdata->tag == "Banamex" || $lastdata->tag == "Espei" || $lastdata->tag == "Deposito")
					<span class="text-end-checkout">
						<p style="text-align:center;">Your order has been received correctly.</p>
						While you make your payment, we will begin the preparations of your <strong> products </strong>. Please let us know when you have your <strong> proof of payment. </strong>
						<br> You will receive an email shortly with the details of your purchase.
					</span><br><br>
					@else
					<center><span class="text-end-checkout">Your order has been received correctly.</b></center><br>
					<span class="text-end-checkout">We begin to manufacture your <b> products </b>, you will shortly receive an email with the details of your purchase. </span><br><br>
					<span class="text-end-checkout">Estimated shipping date: <b>{{ $newDate = date("d/m/Y", strtotime($lastdata->delivery_date)) }}.</b> </span> 
					<br><br> 
					@endif
					<div class="container">
						<div class="row table-title"> 
								<div class="col-3">
								</div>
								<div class="col-4">
									<b>Products </b>
								</div>	
								<div class="col-2">
									<b>Quantity </b>
								</div>	
								<div class="col-3">
									<b>Price </b>
								</div>								
						</div>
						@foreach ($products as $product)
						@php
						$pprice=$product[4];
						if($lastdata->tag == "Ventanilla" || $lastdata->tag == "StripeMSI" || $lastdata->tag == "PayPal" || $lastdata->tag == "Stripe")
					{
					  //$categoriesweb= DB::table('service_page_categories_rel')
					  //->select('category_id')               
					  //->where('service_id', $product[0])
					  //->get();
					  //foreach($categoriesweb as $cate)
					  //{
						  //if($cate->category_id == 17 || $cate->category_id == 27 || $cate->category_id == 2 || $cate->category_id == 14 || $cate->category_id == 11 || $cate->category_id == 7 || $cate->category_id == 5 || $cate->category_id == 29)
						  //{
							$pprice=$product[4]*1.039;
						  //}
					  //}  
					}
					@endphp	
						<div class="row table-products"> 
							<div class="col-3 column-prod">
								<img src="{{ $product[1] }} " alt="">
							</div>
							<div class="col-4 column-prod">
								<b>{{ $product[2] }}</b>
							</div>
							<div class="col-2 column-prod">
								<b>{{ $product[3] }}</b>
							</div>
							<div class="col-3 column-prod">
								<b>${{ number_format($pprice,2) }}</b>
							</div>							
						</div>
						@endforeach
						<br>
						<div class="container">
						<div class="row instruc-table">
							<div class="col-12" style="text-align:center;">
								<b>Payment method: </b> <b style="color:#4484CE;">{!! $payment !!}</b> <br>
							</div>
							<br>
							<div class="col-12" style="text-align:center;">
								<b>{{$shiptag}}: </b> <b style="color:#4484CE;">${{ number_format($shiptot,2) }}</b> <br>
							</div>
							<br><br>
							@if($lastdata->tag == "Banamex")
							<div class="col-12" style="text-align: justify;">
								<b>Payment instructions:</b><br>
								<b>1.</b> Acude a tu sucursal de Citibanamex dile al cajero que quieres realizar un depósito a la siguiente cuenta:<br><br>
								<b style="color:#777;">Razón social:</b> <b>Grupo Alabio SA. de CV.</b> <br>
								<b style="color:#777;">RFC:</b> <b>GAL1712137PA </b> <br>
								<b style="color:#777;"> Cuenta:</b> <b>8122297030</b><br><br>
								<b>2.</b> Envíanos una foto del Ticket de pago al Whatsapp <a href="tel:2224943993" target=”_blank”><b>222 494 3993</b></a>  y tu No. de Pedido.<br>
								<b>3.</b> ¡Listo! En breve recibirás una confirmación por whatsapp y la fecha de envío.<br>
								<b>Nota: Estas instrucciones te las enviaremos a tu correo.</b> <br>
							</div>
							@elseif($lastdata->tag == "Deposito")
							<div class="col-12" style="text-align: justify;">
								<b>Payment instructions:</b> <br>
								<b>1.</b> Dile al cajero que quieres realizar un depósito a una tarjeta.<br>
								<b>2.</b> Díctale los 16 digitos de la cuenta. <br><br>
								<b>5204 1672 4720 1999 </b> <br><br>
								<b>3.</b> Envíanos una foto del Ticket de pago al Whatsapp <a href="tel:2224943993" target=”_blank”><b>222 494 3993</b></a> y tu No. de Pedido.<br>
								<b>4.</b> ¡Listo! En breve recibirás una confirmación por whatsapp y la fecha de envío.<br>
								<b>Nota: Estas instrucciones te las enviaremos a tu correo.</b> <br>
							</div>
							@elseif($lastdata->tag == "Espei")
							<div class="col-12" style="text-align: justify;">
								<b>Payment instructions: </b><br>
								<b>1.</b> Desde tu banca da de alta a Alabío Toys con los siguientes datos<br><br>
								<b style="color:#777;">Razón social:</b> <b>Grupo Alabio SA. de CV.</b> <br>
								<b style="color:#777;">RFC:</b> <b>GAL1712137PA</b><br>
								<b style="color:#777;">CLABE:</b> <b>002650701189094781</b><br>
								<b style="color:#777;">Concepto:</b> Ingresa el número de tu pedido (Te lo enviamos por correo) <br><br>
								<b>2.</b> Envíanos una captura del pago al Whatsapp <a href="tel:2224943993" target=”_blank”><b>222 494 3993</b></a> y tu No. de Pedido.<br>
								<b>3.</b> ¡Listo! En breve recibirás una confirmación por whatsapp y la fecha de envío.<br>
								<b>Nota: Estas instrucciones te las enviaremos a tu correo.</b> <br>
							</div>
							@else
							<div class="col-12"></div>
							@endif
						</div>
					</div>
					<br>
					</div>
					<br>
					<a href="{{ url('/entrega-inmediata') }}" class="btn btn-primary enlaceboton">Keep buying</a>
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
		</div>	<br>
@endsection