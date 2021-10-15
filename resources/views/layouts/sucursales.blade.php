@extends('alabio')
@section('meta')
    <title>Contacto</title>
    {!! NoCaptcha :: renderJs () !!}
@endsection
@section('style-product')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection

@section('content')
	<div class="present">
        <div class="text-present">
          <h2>Contacto</h2>
            <a href="{{ url('/') }}">inicio</a><b> / Contacto</b>
         </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container">
    	<h4>Visitanos</h4>
    	<div class="row row-cols-1 row-cols-sm-2 place">
    		<div class="col">
    			<b class="text-sucu">Alabío! Puebla</b>
    			<br>
    			<b class="text-ubi">39 Norte, #613</b>
    			<br>
    			<b class="text-ubi">Col. Valle del Rey</b>
    			<br>
    			<b class="text-ubi">Puebla, Pue.</b>
    			<br>
    			<b class="text-ubi">Zona: por Walmart y Suburbia de Blvd Atlixco y Reforma. Estamos justo atrás del BINE, en la entrada trasera de los estudiantes, en la cerrada de la 39 norte.</b>
    			<ul class="ubi-desc">
    				<li class="sin-biñeta">Horario de atención: Lunes-Sábado de 10:00am a 6:00pm</li>
    				<br>
    				<li class="sin-biñeta"><a href="tel:2224943993"><i class="fab fa-whatsapp"></i> 22 24 94 39 93</a></li>
    				<li>Si tardamos en contestar, nuestros asesores están atendiendo a otro cliente, por favor vuelve a intenteralo más tarde.</li>
    			</ul>
    		</div>
    		<div class="col">
    			<center>
    				<a href="https://goo.gl/maps/FmLkR9jk5akvztoUA" target="_blank"><img src="{{ asset('img/ubicacion-alabio-435x435-puebla.jpg') }}" width="50%"></a>
    				<br>
    				<a href="https://goo.gl/maps/FmLkR9jk5akvztoUA" target="_blank">Calle 39 Norte #613 Col. Valle del Rey, Puebla, Pue. México</a>
    			</center>
    		</div>
    	</div>
    	<hr>
    	<div class="row row-cols-1 row-cols-sm-2 place">
    		<div class="col">
    			<b class="text-sucu">Alabío! Querétaro</b>
    			<br>
    			<b class="text-ubi">Cadereyta #121</b>
    			<br>
    			<b class="text-ubi">Col. Estrella</b>
    			<br>
    			<b class="text-ubi">Santiago de Querétaro, Qro.</b>
    			<br>   			
    			<ul class="ubi-desc">
    				<li class="sin-biñeta">Horario de atención: Lunes-Sábado de 10:00am a 6:00pm</li>
    				<br>
    				<li class="sin-biñeta"><a href="tel:4427197317"><i class="fab fa-whatsapp"></i> 44 27 19 73 17</a></li>
    				<li class="sin-biñeta"><a href="tel:4272288410"><i class="fab fa-whatsapp"></i> 42 72 28 84 10</a></li>
    				<li>Si tardamos en contestar, nuestros asesores están atendiendo a otro cliente, por favor vuelve a intenteralo más tarde.</li>
    			</ul>
    		</div>
    		<div class="col">
    			<center>
    				<a href="https://goo.gl/maps/DX8QuQc8CMnCr2jf8" target="_blank"><img src="{{ asset('img/qromap-300x277.jpg') }}" width="50%"></a>
    				<br>
    				<a href="https://goo.gl/maps/DX8QuQc8CMnCr2jf8" target="_blank">Calle Cadereyta #121 Col. Estrella, Santiago de Querétaro, Qro. México</a>
    			</center>
    		</div>
    	</div>
    	<hr>
    	<!--<div class="row row-cols-1 row-cols-sm-2 place">
    		<div class="col">
    			<b class="text-sucu">Alabío! Veracruz</b>
    			<br>
    			<b class="text-ubi">Calle Sur 51 #72</b>
    			<br>
    			<b class="text-ubi">Col. Rafael Alvarado, Orizaba</b>
    			<br>
    			<b class="text-ubi">Veracruz CP 94340, Vrc.</b>
    			<br>
    			<b class="text-ubi">Zona: en la entrada por Ixtaczoquitlán o a una cuadra de Chevrolet Orizaba.</b>
    			<ul class="ubi-desc">
    				<li class="sin-biñeta">Horario de atención: Lunes-Sábado de 10:00am a 6:00pm</li>
					<br>
					<li class="sin-biñeta"><a href="tel:2722041524"><i class="fab fa-whatsapp"></i> 27 22 04 15 24</a></li>
                    <li class="sin-biñeta"><a href="tel:2722151880"><i class="fab fa-whatsapp"></i> 27 22 15 18 80</a></li>   				
    				<li>Si tardamos en contestar, nuestros asesores están atendiendo a otro cliente, por favor vuelve a intenteralo más tarde.</li>
    			</ul>
    		</div>
    		<div class="col">
    			<center>
    				<a href="https://goo.gl/maps/VKCVgCcupA2xu5nM8" target="_blank"><img src="{{ asset('img/ubicacion-alabio_Veracruz.jpg') }}" width="50%"></a>
    				<br>
    				<a href="https://goo.gl/maps/VKCVgCcupA2xu5nM8" target="_blank">Calle Sur 51 #72 colonia Rafael Alvarado, Orizaba Veracruz</a>
    			</center>
    		</div>
    	</div>-->    	
	</div>
  <br>
  <br>
  <div style="background-color: #f8f9fa;">
    <br>
    <h4 style="margin-left: 3%;">Contactanos:</h4>
            <hr>
            
                <form style="margin-left: 3%; margin-right: 3%;" action="{{ url('/page-form') }}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre (requerido)</label>
                    <input type="text" class="form-control" id="InputName" name="name" required>    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefono (requerido)</label>
                    <input type="tel" class="form-control" id="InputPhone" name="phone" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Correo electrónico (requerido)</label>
                    <input type="email" class="form-control" id="InputCorreo" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mensaje</label>
                    <br>
                    <textarea cols="45" rows="5" name="message"></textarea>
                  </div>
                  @php
                    $enlace_actual = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                    $fecha = date("Y-m-d");                    
                    $redirect = url('/sucursales');
                  @endphp
                  <div class="form-group">
                    <input type="hidden" name="url" value="{{ $enlace_actual }}">
                    <input type="hidden" name="date" value="{{ $fecha }}">
                    <input type="hidden" name="redi" value="{{ $redirect }}">
                  </div>  
                  {!! NoCaptcha::display(['data-theme' => 'light']) !!}
                  <br>
                  <button type="submit" class="btn btn-primary">Envíar</button>                
                </form>
                <br>
  </div>            
@endsection