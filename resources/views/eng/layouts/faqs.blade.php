@extends('eng.alabio')
@section('meta')
    <title>Alabío Toys!</title>    
	<link href="{{ asset('/css/pages.css') }}" rel="stylesheet">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('content')
<br>
		<div class="container bg-light" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<br><br>
		<h1 class="stilo bluefont" style="text-align:center;"><span>Preguntas Frecuentes</span></h1>
            <br>
				<div class="accordion">
					<div class="accordion-item">
						<h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Cómo puedo comprar algún inflable?</span><span class="icon" aria-hidden="true"></span></h2>
						<div class="accordion-content">
								<p>Te recomendamos visitar todas nuestras categorías, posteriormente escoge los inflables en lo que encuentres intersad@, asegúrate de ver todas las fotos del producto, asi como de leer las características de cada Juego para confirmar que es el inflable que necesitas.</p>			  
								<p>En todos los <b>Brincolines e inflables</b> se muestra un botón como este   dale clic en el botón de <button type="button" class="btn btn-success" disabled>Comprar ahora</button>, posteriormente se mostrará una ventana para completar la dirección de envío, formas de pago y confirmación de compra. Al finalizar tu pedido, recibirás un correo de confirmación y el tiempo de entrega. </p>
						</div>
					</div>
                    
					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿En cuánto tiempo llega mi Inflable?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
                            <p>Si realizas la compra de un inflable de <strong>Entrega Inmediata</strong> el tiempo de llegada está en función a la paquetería, esto puede tomar de 2 – 3 días para México, de 5 – 7 días para EU y Latinoamérica.</p>
                            <p>Si realizas la compra de un inflable del resto de las categorías, podrás ver el tiempo de fabricación en la descripción de cada producto, a esto le súmanos el tiempo de envío que toma la paquetería.</p>
                        </div>
                     </div>
                    
					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿En cuánto tiempo recupero mi inversión?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
                            <p> Puedes recuperar tu inversión en 6 meses o menos. Si rentas tu inflable sobre el 5% del valor del juego, aproximadamente lo recuperarás en 20 rentas.</p>
                        </div>
                    </div>

					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Mi pago está seguro?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
							<p>Todas tus compras están 100% seguras. Nosotros nos encargamos de proteger tu dinero hasta que tengas tu compra. Si por alguna razón te arrepentiste de comprar, hacemos el cambio respectivo o te devolvemos el 100% de tu pago.</p>
                        </div>
                    </div>

					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Tienes stock?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
						<p>Los productos que cuenta con stock disponible están en la categoría de <strong>Entrega Inmediata.</strong></p>
                        </div>
                    </div>

					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Cómo hago seguimiento del envío?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
							<p>Ingresa a la pagina web de la paquetería, ingresa el número de guía que te proporcionamos y veras donde está, y cuando llega tu <strong>Juegos Inflable.</strong></p>
                        </div>
                    </div>

					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Cómo se paga?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
						<p>Nuestras formas de pago son las siguientes:</p>
							<ul>
								<li>Transferencia Electrónica. </li>
								<li>Depósitos bancarios. </li>
								<li>Depósitos en Oxxo.</li>
								<li>Oficinas Alabio.</li>
								<li>Pago con tarjeta (visa, mastecard, american express)</li>
								<li>Pay Pal</li>
								<li>Mercado Pago</li>
							</ul>
                        </div>
                    </div>

					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Qué garantía tienen los productos?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
							<p>Los inflables tienen una garantía de 2 años en el inflable y 1 año en el motor. Esta garantía es variable dependiendo el producto.</p>
                        </div>
                    </div>

					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Puedo facturar mi compra?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
							<p>Claro que sí puede facturar tu compra. Todos nuestros productos ya incluyen impuestos, para generar la factura, solo debes esperar a que llegue el paquete a su destino y una vez que lo recibas puedes solicitar tu factura con tu asesor de venta.</p>
                        </div>
                    </div>

					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Los precios que aparecen en su página web están actualizados?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
							<p>Es correcto. Los precios de los juegos que tenemos públicos son los que están actualizados al momento de la consulta en nuestra página web.</p>
                        </div>
                    </div>

					<div class="accordion-item">
                        <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Qué tipo de materiales utilizan para la fabricación de los Juegos e Inflables?</span><span class="icon" aria-hidden="true"></span></h2>
                        <div class="accordion-content">
							<p>Los inflables están fabricados de lona de alta resistencia y elasticidad, es lona de uso rudo, especialmente diseñada para juegos inflables. Las costuras son hechas por profesionales en el ramo, con hilo bondeado resistente al polvo y humedad. </p>
							<p>Los juegos inflables que tienen costuras de mayor exposición para los usuarios, llevan refuerzos y protección para mayor durabilidad, con esto incrementamos el tiempo de vida del inflable.</p>
							<p>Cualquier duda adicional con gusto la responderemos.</p>
                        </div>
                    </div>

					<br><br>
					</div>
		</div>
<br><br>

@endsection

@section('script')
<script type="text/javascript">
const items = document.querySelectorAll(".accordion-item h2");

function toggleAccordion() {
const itemToggle = this.getAttribute('aria-expanded');

for (i = 0; i < items.length; i++) {
	items[i].setAttribute('aria-expanded', 'false');
}

if (itemToggle == 'false') {
	this.setAttribute('aria-expanded', 'true');
}
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
  
</script>
@endsection