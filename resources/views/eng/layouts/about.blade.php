@extends('eng.alabio')
@section('meta')
    <title>Alabío Toys!</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}"/>
@endsection
@section('content')
	<div class="present">
        <div class="text-present">
        	<h2>Nosotros</h2>
            <a href="{{ url('/eng') }}">inicio</a><b> / about</b>
         </div>
    </div>
    <br>
    <br>
	<center><h1>¿Quienes Somos?</h1></center>
	<br>
	<br>
	<div class="container">
		<p class="textalabio"><strong>Alabio Toys</strong> es una <strong>Fabrica de Juegos e Inflables</strong> fundada en <strong>Puebla</strong>. Con sucursal en <strong>Querétaro</strong> cubrimos las necesidades de las empresas y los emprendedores de <strong>México, USA y Lartinoamerica</strong>, con productos de uso rudo, de materiales resistentes, funcionales para los usuarios y con mayor accesibilidad en la zona.</p>
	</div>
	<br>
	<br>
	<br>	
	<div class="contenedor">
		<div class="container">
			<div class="row row-cols-1 row-cols-sm-2">
				<div class="col">
					<center><img src="img/obrero.png" width="50%">	</center>
				</div>
				<div class="col">
						<p class="text">En <strong>Alabio Toys</strong> contamos con los especialistas en Costura de lona, Electrónica, Herrería, Carpintería, Soldadura de lona y Departamento de Logística necesarios para brindarte soluciones en la <strong>Fabricación de Juegos e Inflables</strong>.</p>
				</div>
			</div>
		</div>	
	</div>
	<br>
	<br>
	</div>
	<br>
	<div class="container">
		<p class="textalabio">La Matriz y Fábrica está ubicada en la ciudad de Puebla, México, con sucursal en: Querétaro y trabajando para estar cada vez más cerca de nuestros clientes.</p>
		<p class="textalabio">Tenemos el firme compromiso de ofrecerte productos de calidad, una experiencia de compra única, total satisfacción de las compras que realizas con nosotros, nuestro principal interés es entender y cubrir tus requerimientos en <strong>juegos e inflables</strong> para iniciar, aumentar o renovar tu negocio.</p>
	</div>
	<br>
	<br>
	<div class="container">
		<div class="row ">
			<div class="col-sm">
					<center><a href="http://goo.gl/maps/1RFtZgD9ga62" target="_blank"><img src="img/ubicacion-alabio-435x435-puebla.jpg" width="60% "></a></center>
					<a href="http://goo.gl/maps/1RFtZgD9ga62" target="_blank"><p class="textalabio">Puebla</p></a>
			</div>
			<div class="col-sm">
					<center><a href="https://goo.gl/maps/DX8QuQc8CMnCr2jf8" target="_blank"><img src="img/qromap-300x277.jpg" width="60%"></a></center>
					<a href="https://goo.gl/maps/DX8QuQc8CMnCr2jf8" target="_blank"><p class="textalabio">Querétaro</p></a>
			</div>
			<!--<div class="col-sm">
				<center><a href="https://goo.gl/maps/VKCVgCcupA2xu5nM8" target="_blank"><img src="img/ubicacion-alabio_Veracruz.jpg" width="60%"></a></center>
				<a href="https://goo.gl/maps/VKCVgCcupA2xu5nM8" target="_blank"><p class="textalabio">Veracruz</p></a>
			</div>-->
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
	<h1 class="titulo">Valores</h1>

	<div class="container">
		<div class="row row-cols-1 row-cols-sm-2">
			<div class="col-md">
				<center><img src="{{ asset('img/proteger.png') }}" width="25%"></center>
				<br>
				<h4 class="text-valores">Calidad</h4>
				<p class="text-valores">Entendemos los requerimientos de nuestros clientes, como <strong>Fabrica de Inflables</strong> cada dia nos actualizamos para brindarles productos de superen sus expectativas.</p>
			</div>
			<div class="col-md">
				<center><img src="{{ asset('img/velocidad.png') }}" width="25%"></center>
				<br>
				<h4 class="text-valores">Innovación</h4>
				<p class="text-valores">Nos esforzamos cada día para mejorar nuestros procesos, productos y asi brindar a nuestros clientes articulos funcionales y con la durabilidad en los <strong>Brincolines</strong> que se requiere. </p>
			</div>
			<div class="col-md">
				<center><img src="{{ asset('img/amigos.png') }}" width="25%"></center>
				<br>
				<h4 class="text-valores">Confianza</h4>
				<p class="text-valores">Tenemos la seguridad de trabajar con personas honestas y humildes para aceptar la cristicas que mejoran su desempeño.</p>
			</div>
		</div>
		<center>
			<div class="row row-cols-1 row-cols-sm-2 val">
				<div class="col-md">
					<center><img src="{{ asset('img/equipo.png') }}" width="25%"></center>
					<br>
					<h4 class="text-valores">Trabajo en equipo</h4>
					<p class="text-valores">En el giro de <strong>Venta de Inflables</strong>, conocemos nuestras capacidades y habilidades, es por ello que nos complementamos con el resto de nuestros compañeros.</p>
				</div>
				<div class="colmd">
					<center><img src="{{ asset('img/disfrutar.png') }}" width="25%"></center>
					<br>
					<h4 class="text-valores">Entusiasmo</h4>
					<p class="text-valores">Trabajamos rápido, de buen modo y con una sonrisa.</p>
				</div>
			</div>
		</center>
	</div>
	<br>
	<br>
	<br>
	<div style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/child.jpg'); background-attachment: fixed; height: 350px;">
		<div class="container">
			<p class="text-alabio">Tenemos el firme compromiso de ofrecerte productos de calidad, una experiencia de compra única, total satisfacción de las compras que realizas con nosotros, nuestro principal interés es entender y cubrir tus requerimientos en juegos para iniciar, aumentar o renovar tu negocio.</p>
		</div>
	</div>
	<br>
	<br>
	<br>
	<!--<p class="textalabio">Tenemos el firme compromiso de ofrecerte productos de calidad, una experiencia de compra única, total satisfacción de las compras que realizas con nosotros, nuestro principal interés es entender y cubrir tus requerimientos en juegos para iniciar, aumentar o renovar tu negocio.</p>-->
	<h2 class="titulo">Nuestros Clientes</h2>	
	<br>	
	<center>
        <div class="responsive" style="width: 80%;">
     		<center><img src="{{ asset('img/clie/comp-bank.png') }}" width="80%"></center>
			<center><img src="{{ asset('img/clie/telcel.png') }}" width="80%"></center>
			<center><img src="{{ asset('img/clie/gpo-exce.png') }}" width="80%"></center>
			<center><img src="{{ asset('img/clie/calidra.png') }}" width="50%"></center>
			<center><img src="{{ asset('img/clie/tecate.jpg') }}" width="80%"></center>
			<center><img src="{{ asset('img/clie/toyota.png') }}" width="85%" style="margin-top: 10px;"></center>
			<center><img src="{{ asset('img/clie/kia.png') }}" width="40%"></center>
			<center><img src="{{ asset('img/clie/coca.png') }}" width="70%"></center>
     	</div>      
     </center>	
@endsection

@section('script')

<script type="text/javascript" src="{{ asset('slick-1.8.1/slick/slick.min.js') }}"></script>

<script type="text/javascript">
  $('.responsive').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 3,
slidesToScroll: 1,
autoplay:true,
autoplaySpeed:1000,
arrows:true,
nextArrow: '<i class="fas fa-arrow-circle-right slick-next"></i>',
    prevArrow: '<i class="fas fa-arrow-circle-left slick-prev"></i>',
responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1
    }
  }
]
});
</script>
@endsection