<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<style>
		.title-alabio{
			font-size: 90px;
			text-align: center;
			width: 90%;
		}
		.encabezado{
			width: 80%;			
			background-color: #00A9E0;
			color: white;
		}
		.title{
			padding: 40px 0 40px 0;
			font-family: sans-serif;
			text-align: center;
		}
		.text-cliente{
			font-family: sans-serif;
			font-size: 33px;
					
		}		
		.text{
			font-weight: 400;
			font-family: sans-serif;
			font-style: italic;
		}
		.content-text{
			width: 80%;				
		}
		.enlaceboton{
		  width: 30%;
		  background-color: #00A9E0; 
		  margin-bottom: 5%;
		  padding: 1% 0 1% 0;
		  font-size: 30px;
		}
	</style>

</head>
<body>
	<center><div class="title-alabio">¡Gracias por comprar en Alabio Toys!</div></center>
	<br>
	<br>
	<center>
		<div class="encabezado">
			<h1 class="title">No. Pedido: <strong>#{{$contract->id}}</strong></h1>
		</div>
	</center>
	<br>
	<br>
	<br>
	<center>
		<div class="content-text">	
			<p class="text-cliente">Hola <strong>{{ $contract->name }},</strong> hemos recibido tu compra de forma exitosa.</p>
		</div>
	</center>
	<br>
	<center>
		<div class="content-text">	
			<p class="text-cliente">Por este medio, te estaremos informando todos los avances de tu pedido,
			cuando esté listo te compartiremos una fotografía. Así mismo te enviaremos los datos de la paqueteria 
			por la cual será enviada tu compra.</p>
		</div>
	</center>
	<br>
	<br>
	<h2 style="margin-left: 10%; color: #00A9E0; font-family: sans-serif;">Fecha estimada de envío: {{ $newDate = date("d/m/Y", strtotime($contract->delivery_date)) }}</h2> 
	<br>
	<br>
	<h3 style="margin-left: 10%;">Este es tu pedido:</h3>
	<center>
	<div style="width: 80%; background-color: #F3F3F3; padding: 3% 0 3% 0;">
		<table class="table" style="width: 93%; border: 1.5px solid #00A9E0">		
			<thead>
				<tr style="background-color: #00A9E0; color: white;">
					<th style="text-align: center;">Imagen</th>
					<th>Cantidad</th>
					<th>Producto</th>
					<th>P. Unitario</th>
					<th>Monto</th>
				</tr>
			</thead>
			<tbody>
				@foreach($products as $item)		
				@php
					$pprice=$item[4];
					if($contract->tag == "Ventanilla" || $contract->tag == "StripeMSI" || $contract->tag == "PayPal" || $contract->tag == "Stripe")
                {
                    //$categoriesweb= DB::table('service_page_categories_rel')
                  //->select('category_id')               
                  //->where('service_id', $item[0])
                  //->get();
                  //foreach($categoriesweb as $cate)
                  //{
                      //if($cate->category_id == 17 || $cate->category_id == 27 || $cate->category_id == 2 || $cate->category_id == 14 || $cate->category_id == 11 || $cate->category_id == 7 || $cate->category_id == 5 || $cate->category_id == 29)
                      //{
                        $pprice=$item[4]*1.039;
                      //}
                  //}  
                }
				@endphp		
				<tr>
					<td><center><img src="{{ $item[1] }}" width="40%"></center></td>
					<td style="text-align: center;">{{ $item[3] }}</td>
					<td style="text-align: center;">{{ $item[2] }}</td>
					<td style="text-align: center;">${{ number_format($pprice,2) }}</td>
					<td style="text-align: center;">${{ number_format(($pprice*$item[3]),2) }}</td>
				</tr>
				@endforeach
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4" style="border-top: 1px solid #00A9E0;"><b style="float: right; font-weight: 600;">{{ $shitag }}:</b></td>
					<td style="border-top: 1px solid #00A9E0;">${{ number_format($shitot,2) }}</td>
				</tr>							
				@if($cupon != 0)
				<tr>
					<td colspan="4" style="border-top: 1px solid #00A9E0;"><b style="float: right; font-weight: 600;">Descuento:</b></td>
					<td style="border-top: 1px solid #00A9E0;">{{ $cupon*100 }}%</td>
				</tr>
				@endif							
				<tr>
					<td style="border-top: 1px solid #00A9E0;"><b style="float: right; font-weight: 600;">Forma de Pago: {!! $payment !!}</b></td>
					<td colspan="3" style="border-top: 1px solid #00A9E0;"><b style="float: right; font-weight: 600;"><strong>Total:</strong></b></td>
					<td style="border-top: 1px solid #00A9E0;"><strong>${{ number_format($contract->subtotal,2) }}</strong></td>
				</tr>
			</tfoot>			
		</table>
	</div>
	</center>
	<br>
	<br>
	<h3 style="margin-left: 10%;">Estos son las datos de envío:</h3>
	<br>
	<center>
		<div style="width: 80%; background-color: #F3F3F3;">
			<table class="table" style="width: 50%; border: 1.5px solid #00A9E0; float: left;">		
				<thead>
					<tr style="background-color: #00A9E0; color: white;">
						<th style="text-align: center;">{{ $shitag }}</th>
					</tr>
				</thead>
				<tbody>
					<tr>				
						<td><b style="font-weight: 500;">{{ $contract->name }}</b><br>
							<b style="font-weight: 500;">{{ $contract->street }} #{{ $contract->no_ext }}, {{ $contract->no_int }}</b><br>
							<b style="font-weight: 500;">{{ $contract->colony }}</b><br>
							<b style="font-weight: 500;">{{ $contract->state }}</b><br>
							<b style="font-weight: 500;">{{ $contract->country}}</b><br>
							<b style="font-weight: 500;">{{ $contract->postal_code }}</b><br>
							<b style="font-weight: 500;">{{ $contract->phone }}</b>
						</td>					
					</tr>
				</tbody>				
			</table>
		</div>
	</center>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>	
	<br>
	<br>
	<br>
	<br>
	<br>
	

	<center><a href="https://alabio.mx/ventas/" target="blank" class="btn btn-primary enlaceboton">Seguir Comprando</a></center>
		<div class="content-text">	
			<p class="text-cliente">Si tiene alguna duda o inquietud sobre su compra, puede comunicarse con nosotros.</p>
		</div>
				<center>
					<div class="row row-cols-1 row-cols-sm-2">
						<div class="col-md">
							<b class="text-contact2">Alabio Toys!</b>
							<br>
							<b class="text-contact2">Puebla (Matriz)</b>
							<br>
							<b class="contact">39 Norte 613 Valle del Rey</b>
							<br>
							<b class="contact">Puebla Pue.</b>
							<br>
							<br>
							<b class="contact">Tel : +52 1 (222) 494 3993</b>
						</div>
						<div class="col-md">
							<b class="text-contact2">Alabio Toys!</b>
							<br>
							<b class="text-contact2">Querétaro(Sucursal)</b>
							<br>
							<b class="contact">Cadereyta #121 Col. Estrella</b>
							<br>
							<b class="contact">Santiago de Querétaro, Qro.</b>
							<br>
							<br>
							<b class="contact">Tel : +52 1 (442) 719 7317</b>
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
					</div>
				</center>
	<br>
	<br>
	<br>
</body>
</html>