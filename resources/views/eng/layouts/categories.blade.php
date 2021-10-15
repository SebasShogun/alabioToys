@extends('eng.alabio')
@section('meta')
<title>Categorías</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick.css') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}"/>
  
@endsection
@section('content')
<div class="container bg-light" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<br><br><center><h1 class="stilo bluefont"><span>Categories</span></h1></center>
<br><br>
      
                <div class="row2">
                  <div class="column2">
                    <a href="{{ url('/entrega-inmediata') }}"><div class="card2">
                    <p>Entrega Inmediata</p>
                      <img loading="lazy" src="{{ asset('img/ca/PENTREGA INMEDIATA.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PENTREGA INMEDIATA.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Juegos_de_Feria') }}"><div class="card2">
                  <p>Juegos de Feria</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PJUEGOS DE FERIA.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PJUEGOS DE FERIA.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Acuaticos') }}"><div class="card2">
                  <p>Acuáticos</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PACUATICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PACUATICOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Juegos_Didacticos') }}"><div class="card2">
                  <p>Juegos Didácticos</p>
                      <img loading="lazy" src="{{ asset('img/ca/PDIDACTICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PDIDACTICOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>
                  
                </div>
                <br>
                <br>
                <div id="myDIV" class="row2" style="display: block;">
                <div class="column2">
                  <a href="{{ url('/category/Futbolitos_Y_Arcades') }}"><div class="card2">
                  <p>Futbolitos y Arcades</p>
                      <img loading="lazy" src="{{ asset('img/ca/PFUTBOLITOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PFUTBOLITOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>
                
                  <div class="column2">
                    <a href="{{ url('/category/Pantallas_Inflables') }}"><div class="card2">
                    <p>Pantallas Inflables</p>
                      <img loading="lazy" src="{{ asset('img/ca/PPANTALLAS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPANTALLAS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>
                  
                  <div class="column2">
                  <a href="{{ url('/category/Replicas') }}"><div class="card2">
                  <p class="botontext">Publicitarios</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PPUBLICITARIOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPUBLICITARIOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                    <a href="{{ url('/category/Accesorios') }}"><div class="card2">
                    <p>Accesorios</p>
                    <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PACCESORIOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PACCESORIOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>
                  
            </div>
            <br><br>

                <div class="row2">
                  <div class="column2">
                  <a href="{{ url('/category/Inflables_para_Casa') }}"><div class="card2">
                      <p>Inflables para casa</p>
                      <img loading="lazy" src="{{ asset('img/ca/PPARA CASA.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPARA CASA.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Juegos_de_Feria') }}"><div class="card2">
                  <p>Juegos de Feria</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PJUEGOS DE FERIA.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PJUEGOS DE FERIA.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                    <a href="{{ url('/category/Pantallas_Inflables') }}"><div class="card2">
                    <p>Pantallas Inflables</p>
                      <img loading="lazy" src="{{ asset('img/ca/PPANTALLAS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPANTALLAS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>
    
                  <div class="column2">
                  <a href="{{ url('/category/Reparación') }}"><div class="card2">
                  <p>Reparación</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PREPARACION.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PREPARACION.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>   
              
              </div>
    <br><br>
    <div class="row2">
                  <div class="column2">
                    <a href="{{ url('/category/Pequeños') }}"><div class="card2">
                    <p>Pequeños</p>
                    <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PPEQUEÑOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPEQUEÑOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Medianos') }}"><div class="card2">
                  <p>Medianos</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PMEDIANOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PMEDIANOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Gigantes') }}"><div class="card2">
                  <p>Gigantes</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PGIGANTES.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PGIGANTES.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Mobiliario') }}"><div class="card2">
                  <p>Mobiliario</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PMOBILIARIO.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PMOBILIARIO.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>
                  </div>
                  <br><br>

              <div class="row2">
                  <div class="column2">
                  <a href="{{ url('/category/De_Temporada') }}"><div class="card2">
                      <p>Temporada </p>
                      <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PORTADA DE TEMPORADA.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PORTADA DE TEMPORADA.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Sensores') }}"><div class="card2">
                  <p>Sensores</p>
                  <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PORTADA SENSORES.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PORTADA SENSORES.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>

                  <div class="column2">
                    <a href="{{ url('/category/Inflables_Techados') }}"><div class="card2">
                    <p>Techados</p>
                    <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PORTADA TECHADOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PORTADA TECHADOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div>
    
                  <!-- <div class="column2">
                    <a href="{{ url('/category/Accesorios') }}"><div class="card2">
                    <p>Accesorios</p>
                    <br class="ocul">
                      <img loading="lazy" src="{{ asset('img/ca/PACCESORIOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PACCESORIOS.jpg') }}" class="img-btn-peq">
                      <br>
                    </div></a>
                  </div> -->
              
              </div>
              <br><br>
</div>
                
        <br><br><br><br><br>
        <div class="box1">
          <div class="box1-sm yellow "></div>  
          <div class="box1-sm coral"></div>
        </div>
        <br>

        <div class="contenedor">
        <div class="container">
          <!-- <div class="row row-cols-1 row-cols-sm-2"> -->
            
          <!-- </div> -->
          <div class="container">
              <p class="textalabio"><strong>Alabio Toys</strong> es una <strong>Fabrica de Brincolines</strong> que cuenta con los especialistas en Costura de lona, Electrónica, Herrería, Carpintería, Soldadura de lona y Departamento de Logística necesarios para brindar soluciones en la <strong>Fabricación de Brincolines Inflables.</strong></p>
    
              <p class="textalabio">Tenemos el firme compromiso de ofrecerte productos de calidad, una experiencia de compra única, total satisfacción de las compras que realizas con nosotros, nuestro principal interés es entender y cubrir tus requerimientos en juegos para iniciar, aumentar o renovar tu negocio.</p>
             
              <h5 style="font-weight: bold;">Entrega Inmediata</h5>
              <p class="textalabio">Es momento de aprovechar el stock de <strong>Fabrica de Inflables y Brincolines</strong> disponibles, que están listos para su envío. Catálogo de <a href="{{ asset('/entrega-inmediata') }}"><strong>Venta de Brincolines para entrega Inmeditada.</strong></a>
                                Revisa la disponibilidad y <a href="{{ asset('/entrega-inmediata') }}"><strong>costo de inflables aquí.</strong></a>
              </p>
              
              <h5 style="font-weight: bold;">Inflables Publicitarios</h5>
              <p class="textalabio">Todas las personas que pasen alrededor de tu punto de venta identificarán y recordarán tu marca. Coloca tu logo en un <strong>inflable Publicitario</strong>. Fabricamos <strong>Inflables promocionales</strong>, asi como <strong>inflables personalizados</strong> para tu campaña publicitaria. <a href="{{ url('/category/Publicitarios') }}"><strong>Precios de inflables Publicitarios aquí.</strong></a>
              </p>
             
              <h5 style="font-weight: bold;">Inflables para Casa</h5>
              <p class="textalabio">
              La Diversión está garantizada con los <strong>Inflables para Casa</strong>. En Alabio encontrarás variedad de <strong>Inflables</strong> para bebés con distintos diseños para los más pequeños del hogar, los <strong>brincolines para jardin</strong> son resistentes a exteriores, fáciles de instalar y guardar. <a href="{{ url('/category/Inflables_para_Casa') }}"><strong>Venta de inflables para casa aquí.</strong></a>
              </p>             
              <h5 style="font-weight: bold;">Inflables Temáticos</h5>
              <p class="textalabio">
              Los super héroes y las princesas son los mejores aliados para iniciar tu negocio. El Catálogo  de <strong>Venta de inflables temáticos</strong> es infinito, <strong>compra el inflable</strong> con el diseño de tu preferencia. Dale clic aquí para ver precios de brincolines e <a href="{{ url('/category/Tematicos') }}"><strong>inflables temáticos.</strong></a>
              </p>
              <h5 style="font-weight: bold;">Juegos Extremos</h5>
              <p class="textalabio">
              La <strong>Venta Juegos Extremos</strong> como el <strong>Eurobungee, Demoledor, Muro de escalar, Toro Mecánico</strong> te abrirán las puertas a tener nuevos clientes. Fortalece tu negocio con los Inflables extremos.
              Revisa los <a href="{{ url('/category/Extremos') }}"><strong>costos de Inflables Extremos aquí.</strong></a>
              </p>
              <h5 style="font-weight: bold;">Inflables Acuáticos</h5>
              <p class="textalabio">
              El sol sale y tenemos que aprovechar. La <strong>venta de  Inflables Acuáticos</strong> son garantía de diversión en las fiestas, asegúrate de tener los <strong>brincolines acuáticos, deslizadores acuáticos, albercas de agua</strong>. Consulta los <a href="{{ url('/category/Acuaticos') }}"><strong>precios de inflables acuáticos</strong> aquí.</a>
              </p>  
          </div>
        </div>	
        </div>
        </div>

</div>


<br> <br> <br>


	
@endsection

@section('script')

<script type="text/javascript" src="{{ asset('slick-1.8.1/slick/slick.min.js') }}"></script>


@endsection