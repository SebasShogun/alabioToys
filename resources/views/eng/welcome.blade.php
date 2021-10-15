@extends('eng.alabio')
@section('meta')
    <title>Venta de Inflables | Brincolines en Venta | Fabrica de Inflables| Alabio! Toys</title>
    <meta name="description" content="Fábrica de Juegos e Inflables. Venta de Brincolines Inflables. Envíos gratis en la Rep Mex. 6 y 3 Meses sin Intereses. Catalogo con gran variedad de Juegos e Inflables. Envíos a USA y Latinoamérica.">
    <meta name="keywords" content="venta de brincolines, venta de Inflables,fábrica de inflables, venta de brincolines en puebla, Juegos Inflables venta">
    <link rel="stylesheet" href="{{ asset('slick-1.8.1/slick/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}">
        @php
            $datetoday = strtotime(date("d-m-Y H:i:00",time()));
            $datepromb = strtotime("09-11-2020 00:00:00");
            $dateprome = strtotime("20-11-2020 23:59:59"); 
        @endphp
    @endsection
@section('content')
@php
 header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');   
@endphp
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
<div class="container bg-light" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <center>
            <img loading="lazy" src="{{ asset('img/banner_eng_1.jpg') }}" alt="..." style=" width:80%;">
    
        </center>
        <br>
  
        <center>
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
              <div class="row">
                <div class="col" style="">
                      <img loading="lazy" src="{{ asset('img/btn-evg.png') }}" class="img-btn-ini">
                      <img loading="lazy" src="{{ asset('img/btn-evg.png') }}" class="img-btn-peq">
                      <!-- <p class="responletter"><br class="ocul2"><strong> Envío a Domicilio </strong></p> -->
                </div>
                <div class="col">
                      <img loading="lazy" src="{{ asset('img/btn-ms.png') }}" class="img-btn-ini">
                      <img loading="lazy" src="{{ asset('img/btn-ms.png') }}" class="img-btn-peq" style="margin-top: -1%;">
                      <!-- <p class="responletter"><br class="ocul2"><strong> 12 MSI </strong></p> -->
                </div>
                <div class="col">
                      <a href="{{ asset('eng/entrega-inmediata') }}"><img loading="lazy" src="{{ asset('img/btn-ei.png') }}" class="img-btn-ini"></a>
                      <a href="{{ asset('eng/entrega-inmediata') }}"><img loading="lazy" src="{{ asset('img/btn-ei.png') }}" class="img-btn-peq" style="margin-top: 0%;"></a>
                      <!-- <p class="responletter"><br class="ocul2"><strong> Entrega Inmediata </strong></p> -->
                </div>
                <div class="col">
                      <img loading="lazy" src="{{ asset('img/btn-garantia.png') }}" class="img-btn-ini">
                      <img loading="lazy" src="{{ asset('img/btn-garantia.png') }}" class="img-btn-peq" style="margin-top: 0%;">
                      <!-- <p class="responletter"><br class="ocul2"><strong> Garantía </strong></p> -->
                </div>
              </div>
            </div>
                      
      </center>
        <!-- SEPARADOR -->
        <div class="box1">
          <div class="box1-sm yellow "></div>
          <div class="box1-sm coral"></div>
        </div>

        <br><br> 

        <!-- SECCIÓN CON CARRUCEL DE PRODUCTOS -->
        <center>
            <a href="{{ url('eng/entrega-inmediata') }}"><h1 class="stilo bluefont">Immediate delivery</h1></a>
        </center>
        <br>
        
        <br>
        <div>
            <center><a type="button" class="btn btn-success btn-lg" href="{{ url('eng/entrega-inmediata') }}">See More </a></center>
        </div>
        

          <!-- SEPARADOR--> 
          <br><br><br>              
          <div class="box1">
          <div class="box1-sm yellow "></div>
          <div class="box1-sm coral"></div>
          </div>
          <br><br>        

          <!-- SECCIÓN DE CARTAS DE CATEGORÍAS -->   
          <center><a href="{{ url('eng/categories') }}"><h1 class="stilo bluefont"><span>Categories</span></h1></a></center>
              <br><br>
                <div class="row2">
                  <div class="column3">
                    <a href="{{ url('eng/entrega-inmediata') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PENTREGA INMEDIATA.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PENTREGA INMEDIATA.jpg') }}" class="img-btn-peq">
                      <br><br><p>Games, inflatables and bouncers in immediate delivery</p>
                    </div></a>
                  </div>

                  <div class="column3">
                  <a href="{{ url('eng/category/Pequeños') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PPEQUEÑOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPEQUEÑOS.jpg') }}" class="img-btn-peq">
                      <br><br><p>Small inflatables and bouncers</p>
                    </div></a>
                  </div>

                  <div class="column3">
                  <a href="{{ url('eng/category/Acuaticos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PACUATICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PACUATICOS.jpg') }}" class="img-btn-peq">
                      <br><br><p>Water Bouncers, Sliders and Water Pools</p>
                    </div></a>
                  </div>

                  
                  
                </div>
                <br>
                <br>
                <div id="myDIV" class="row2" style="display: block;">
                <div class="column3">
                  <a href="{{ url('eng/category/Juegos_Didacticos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PDIDACTICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PDIDACTICOS.jpg') }}" class="img-btn-peq">
                      <br><br><p>Educational Games and Early Stimulation </p>
                    </div></a>
                  </div>

                  <div class="column3">
                  <a href="{{ url('eng/category/Replicas') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PPUBLICITARIOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPUBLICITARIOS.jpg') }}" class="img-btn-peq">
                      <br><br><p class="botontext">Promotional inflatables and inflatable replicas</p>
                      <p class="botontext-peq">-</p>
                    </div></a>
                  </div>
                
                <div class="column3">
                  <a href="{{ url('eng/category/Gigantes') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PGIGANTES.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PGIGANTES.jpg') }}" class="img-btn-peq">
                      <br><br><p>Giants inflatables and bouncers</p>
                    </div></a>
                  </div>
                  
         </div>
                <br><br>

                <div>
                <center><a type="button" class="btn btn-success btn-lg" href="{{ url('eng/categories') }}">See More </a></center>
                </div>
          

          <!-- SEPARADOR ALTERNATIVO--> 
          <br><br><br>                 
          <div class="box1">
          <div class="box1-sm yellow "></div>
          <div class="box1-sm coral"></div>
          </div>
          
          <br><br>


        <!-- <div class="container botto">
          <div class="row row-cols-1 row-cols-sm-2 espacio-contenedores">
            <div class="col">
              <div class="content-box text-center finbyz-fadeinup" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                            <div>
                              <a href="{{ asset('eng/entrega-inmediata') }}"><img loading="lazy" class="imgradius-tam" src="{{ asset('img/almacen-toys.jpg') }}"></div></a>
                                
                                <p class="text-content-toys">Take advantage of our amazing Bounce House Factory stock available for immediate shipment. Take a look at our Bounce House Catalog where you will see the products that are available for immediate delivery. Check the availability and cost of bounce houses here.
                                </p> -->
                                <!-- <p class="text-content-toys">Es momento de aprovechar el stock de <strong>Fabrica de Inflables y Brincolines</strong> disponibles, que están listos para su envío. Catálogo de <a href="{{ asset('eng/entrega-inmediata') }}"><strong>Venta de Brincolines para entrega Inmeditada.</strong></a>
                                Revisa la disponibilidad y <a href="{{ asset('eng/entrega-inmediata') }}"><strong>costo de inflables aquí.</strong></a>
                                </p> -->
                            <!-- </div>
            </div>
            <div class="col">
              <div class="content-box text-center finbyz-fadeinup" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                <div>
                                    <a href="{{ url('/category/Publicitarios') }}"><img loading="lazy" class="imgradius-tam" src="{{ asset('img/publicitarios-toys.jpg') }}"></div></a>
                                    
                                    <p class="text-content-toys">All the people who pass by your point of sale will identify and remember your brand. Place your logo on an advertising inflatable. We manufacture advertising inflatables as well as custom inflatables for your advertising campaign. Advertising Inflatable for sale here.
                                    </p> -->
                                    <!-- <p class="text-content-toys">Todas las personas que pasen alrededor de tu punto de venta identificarán y recordarán tu marca. Coloca tu logo en un <strong>inflable Publicitario</strong>. Fabricamos <strong>Inflables promocionales</strong>, asi como <strong>inflables personalizados</strong> para tu campaña publicitaria. <a href="{{ url('/category/Publicitarios') }}"><strong>Precios de inflables Publicitarios aquí.</strong></a>
                                    </p> -->
                <!-- </div>
            </div>
          </div>
          <br>
          <br>
          <div class="row row-cols-1 row-cols-sm-2 espacio-contenedores">
            <div class="col">
              <div class="content-box text-center finbyz-fadeinup" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                            <div>
                                <a href="{{ url('/category/Inflables_para_Casa') }}"><img loading="lazy" class="imgradius-tam" src="{{ asset('img/jec-toys.jpg') }}"></div></a>
                                
                                <p class="text-content-toys">
                                Fun is guaranteed with the Home Bounce Houses. In Alabio you will find a great variety of bounce houses for babies.  Check our different designs for even the smallest in your home. The garden bouncers are resistant to outdoors, easy to install and to store. Home Bounce Houses for sale here.
                                </p> -->
                                <!-- <p class="text-content-toys">
                                La Diversión está garantizada con los <strong>Inflables para Casa</strong>. En Alabio encontrarás variedad de <strong>Inflables</strong> para bebés con distintos diseños para los más pequeños del hogar, los <strong>brincolines para jardin</strong> son resistentes a exteriores, fáciles de instalar y guardar. <a href="{{ url('/category/Inflables_para_Casa') }}"><strong>Venta de inflables para casa aquí.</strong></a>
                                </p> -->
                            <!-- </div>
            </div>
            <div class="col">
              <div class="content-box text-center finbyz-fadeinup" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                <div>
                                    <a href="{{ url('/category/Tematicos') }}"><img loading="lazy" class="imgradius-tam" src="{{ asset('img/tem-toys.jpg') }}"></div></a>
                                    
                                    <p class="text-content-toys">
                                    Los super héroes y las princesas son ls mejores aliados para iniciar tu negocio. El Catálogo  de <strong>Venta de inflables temáticos</strong> es infinito, <strong>compra el inflable</strong> con el diseño de tu preferencia. Dale clic aquí para ver precios de brincolines e <a href="{{ url('/category/Tematicos') }}"><strong>inflables temáticos.</strong></a>
                                    </p>
                </div>
            </div>
          </div>
          <br>
          <br>
          <div class="row row-cols-1 row-cols-sm-2 espacio-contenedores">
            <div class="col">
              <div class="content-box text-center finbyz-fadeinup" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                            <div>
                                <a href="{{ url('/category/Extremos') }}"><img loading="lazy" class="imgradius-tam" src="{{ asset('img/ex-toys.jpg') }}"></div></a>
                                
                                <p class="text-content-toys">
                                Extreme Bounce House Games such as Eurobungee, Demolisher, Climbing wall and Mechanical Bull will open your doors to new customers. Strengthen your business with Extreme Bounce Houses. Extreme Bounce Houses for sale here.
                                </p> -->
                                <!-- <p class="text-content-toys">
                                La <strong>Venta Juegos Extremos</strong> como el <strong>Eurobungee, Demoledor, Muro de escalar, Toro Mecánico</strong> te abrirán las puertas a tener nuevos clientes. Fortalece tu negocio con los Inflables extremos.
                                Revisa los <a href="{{ url('/category/Extremos') }}"><strong>costos de Inflables Extremos aquí.</strong></a>
                                </p> -->
                            <!-- </div>
            </div>
            <div class="col">
              <div class="content-box text-center finbyz-fadeinup" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                <div>
                  <a href="{{ url('/category/Acuaticos') }}"><img loading="lazy" class="imgradius-tam" src="{{ asset('img/acu-toys.jpg') }}"></div></a>
                                    
                                    <p class="text-content-toys">
                                    The sun rises and we have to take advantage of it. Water Bounce Houses guarantee a fun time at parties, make sure you take a look at the water jumpers, water sliders and water pools. Aquatic Bounce Houses for sale here.
                                    </p> -->
                                    <!-- <p class="text-content-toys">
                                    El sol sale y tenemos que aprovechar. La <strong>venta de  Inflables Acuáticos</strong> son garantía de diversión en las fiestas, asegúrate de tener los <strong>brincolines acuáticos, deslizadores acuáticos, albercas de agua</strong>. Consulta los <a href="{{ url('/category/Acuaticos') }}"><strong>precios de inflables acuáticos</strong> aquí.</a>
                                    </p> -->
                <!-- </div>
            </div>                
        </div>
        <br>
        <br>
        <div class="row row-cols-1 row-cols-sm-2 espacio-contenedores">
            <div class="col">
              <div class="content-box text-center finbyz-fadeinup" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                            <div>
                              <a href="{{ url('/category/Gigantes') }}"><img loading="lazy" class="imgradius-tam" src="{{ asset('img/gig-toys.jpg') }}"></div></a>
                                
                                <p></p>
                                
                            </div>
            </div>
            <div class="col">
              <div class="content-box text-center finbyz-fadeinup" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                <div>
                  <a href="{{ url('/category/Reparación') }}"><img loading="lazy" class="imgradius-tam" src="{{ asset('img/post-toys.jpg') }}"></div></a>
                                    
                                    <p>                                  
                                    </p>
                </div>
            </div>                
        </div>
    </div> -->


        
        <!-- SECCIÓN TEXTO --> 
        <center><h1 class="stilo bluefont"><span>About our Products</span></h1></center>
        <br>
        
        <div class="contenedor">
        <div class="container">
          <!-- <div class="row row-cols-1 row-cols-sm-2"> -->
            
          <!-- </div> -->
          <div class="container">
              <p class="text-content-toys"><strong>Alabío Toys</strong> is a Bounce House Factory founded in Puebla, Mexico. With a branch in Querétaro we cover the needs of companies and entrepreneurs in the Mexican Republic. We develop products; for heavy use, with resistant materials, functional for users and proven in the market. Our products have been tested in the harshest environments to ensure a long life and durability</p>
    
              <h5 style="font-weight: bold;">Immediate delivery</h5>
              <p class="text-content-toys">
              Take advantage of our amazing Bounce House Factory stock available for immediate shipment. Take a look at our Bounce House Catalog where you will see the products that are available for immediate delivery. Check the availability and cost of bounce houses here.
              </p>
              
              <h5 style="font-weight: bold;">Advertising Inflatables</h5>
              <p class="text-content-toys">
              All the people who pass by your point of sale will identify and remember your brand. Place your logo on an advertising inflatable. We manufacture advertising inflatables as well as custom inflatables for your advertising campaign. Advertising Inflatable for sale here.
              </p>
             
              <h5 style="font-weight: bold;">Home Bounce Houses</h5>
              <p class="text-content-toys">
              Fun is guaranteed with the Home Bounce Houses. In Alabio you will find a great variety of bounce houses for babies.  Check our different designs for even the smallest in your home. The garden bouncers are resistant to outdoors, easy to install and to store. Home Bounce Houses for sale here.
              </p>      


              <h5 style="font-weight: bold;">Extreme Bounce House Games</h5>
              <p class="text-content-toys">
              Extreme Bounce House Games such as Eurobungee, Demolisher, Climbing wall and Mechanical Bull will open your doors to new customers. Strengthen your business with Extreme Bounce Houses. Extreme Bounce Houses for sale here.
              </p>
              
              <h5 style="font-weight: bold;">Aquatic Bounce House</h5>
              <p class="text-content-toys">
              The sun rises and we have to take advantage of it. Water Bounce Houses guarantee a fun time at parties, make sure you take a look at the water jumpers, water sliders and water pools. Aquatic Bounce Houses for sale here.
              </p>  
          </div>
        </div>	
        </div>
        
        <br><br><br>
        <div class="box1">
            <div class="box1-sm yellow "></div>
            <div class="box1-sm coral"></div>
        </div>
        <br>
        
        <!-- SUCURSALES --> 
        <center><h1 class="stilo bluefont"><span>Branch Offices</span></h1></center>	
        <br><br>
      
        <div class="row justify-content-center">
        <div class="col-xs-6 col-md-6 column2">
        <center><img loading="lazy" src="img/mapicon.png" class="icon-maps"><br><br>
                        <b>Alabío! Puebla</b><br>
                        <b style="font-weight: 500">39 Norte, #613</b><br>
                        <b style="font-weight: 500">Col. Valle del Rey</b><br>
                        <b style="font-weight: 500">Puebla, Pue.</b><br>
                        <a href="tel:2224943993"><i class="fas fa-phone-volume"></i> 22 24 94 39 93</a><br><br>
                        <a href="http://goo.gl/maps/1RFtZgD9ga62" target="_blank"><img src="img/ubicacion-alabio-435x435-puebla.jpg" width="60% "></a>
                        <a href="http://goo.gl/maps/1RFtZgD9ga62" target="_blank"><p class="text"><i class="fas fa-map-marker-alt"></i> Puebla</p></a></center>
            </div>
        <div class="col-xs-6 col-md-6 column2">
        <center><img loading="lazy" src="img/mapicon.png" class="icon-maps"><br><br>
                        <b>Alabío! Querétaro</b><br> 
                        <b style="font-weight: 500">Cadereyta #121</b><br>
                        <b style="font-weight: 500">Col. Estrella</b><br>
                        <b style="font-weight: 500">Santiago de Querétaro, Qro</b><br>
                        <a href="tel:2722041524"><i class="fas fa-phone-volume"></i> 27 22 04 15 24</a><br><br>
                        <a href="https://goo.gl/maps/DX8QuQc8CMnCr2jf8" target="_blank"><img src="img/qromap-300x277.jpg" width="60%"></a>
                        <a href="https://goo.gl/maps/DX8QuQc8CMnCr2jf8" target="_blank"><p class="text"><i class="fas fa-map-marker-alt"></i> Querétaro</p></a></center>
            </div>
        </div>
                  
                  
                <!-- SEPARADOR -->
        <br> <br>
        <div class="box1">
            <div class="box1-sm yellow "></div>
            <div class="box1-sm coral"></div>
        </div>
        <br> <br>

        <!-- SECCIÓN FORMAS DE PAGO -->
        <div>
            <center>
                <center><h1 class="stilo bluefont"><span>Payment Methods</span></h1></center>
                <br> <br>
                <a href="{{ asset('metodos-pago') }}"><img loading="lazy" src="img/formasdpago.png" class="tam-j"></a>
            </center> </div>
        <br> <br> <br>
        </div>
        
    <br><br>
      </div>
        
        <br>

<!-- FOOTER DE LA PÁGINA DE INICIO-->
<footer class="content-footer">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div id="uno" class="row">
            <!-- Grid column -->
                <div class="col-md-3 mx-auto">
                    <!-- Links -->
                <h4 class="font-weight-bold text-uppercase mt-3 mb-4 footer" style="color:white;">About Us:</h4>
                    <div class="box1">
                        <div class="box1-sm white"></div>
                        <div class="box1-sm yellow"></div>
                    </div>
                    <ul  class="color-white">
                        <li>
                          <a href="{{ url('eng/about') }}">Who we are?</a>
                        </li>
                        <li>
                          <a href="#!">Our Clients</a>
                        </li>
                        <li>
                          <a href="{{ url('eng/faqs') }}">Frequently Asked Questions (FAQ)</a>
                        </li>
                        <li>
                          <a href="#!">Careers</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h4 class="font-weight-bold text-uppercase mt-3 mb-4 footer" style="color:white; font-family: 'Noto Sans', sans-serif !important;">Categories:</h4>
                    <div class="box1">
                        <div class="box1-sm white"></div>
                        <div class="box1-sm yellow"></div>
                    </div>
                    <ul class="color-white">
                      <li>
                        <a href="{{ url('eng/entrega-inmediata') }}">Immediate delivery</a>
                      </li>
                      <li>
                        <a href="{{ url('eng/category/Publicitarios') }}">Advertising Inflatables</a>
                      </li>
                      <li>
                        <a href="{{ url('eng/category/Inflables_para_Casa') }}">Home Bounce Houses</a>
                      </li>
                      <li>
                        <a href="{{ url('eng/category/Inflables_para_Casa') }}">Bounce Houses for babies</a>
                      </li>
                      <li>
                          <a href="{{ url('eng/category/Acuaticos') }}">Aquatic Bounce House for sale</a>
                      </li>
                      <li>
                          <a href="#">Purchase a Bounce House</a>
                      </li>
                      <li>
                          <a href="#">Bounce House Costs</a>
                      </li>
                      <li>
                          <a href="#">Bounce House prices</a>
                      </li>
                      <li>
                          <a href="#!">Bounce House Manufacturer</a>
                      </li>
                      <li>
                          <a href="{{ url('eng/category/Acuaticos') }}">Inflatable Pools for sale</a>
                      </li>                  
                    </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                <h4 class="font-weight-bold text-uppercase mt-3 mb-4 footer" style="color:white;">Contact:</h4>
                        <div class="box1">
                            <div class="box1-sm white"></div>
                            <div class="box1-sm yellow"></div>
                        </div>
                        <ul class="color-white">
                        <li>
                            <a href="{{ url('eng/offices') }}">Puebla Branch</a>
                          </li>
                          <li>
                            <a href="{{ url('eng/offices') }}">Queretaro Branch</a>
                          </li>
                          <li>
                            <a href="{{ url('eng/offices') }}">Online Billing</a>
                          </li>
                        </ul>
                        <h4 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:white;">POLICIES:</h4>
                        <div class="box1">
                            <div class="box1-sm white"></div>
                            <div class="box1-sm yellow"></div>
                        </div>
                        <ul class="color-white">
                        <li>
                          <a href="{{ url('eng/terms-and-conditions') }}">Terms of use</a>
                        </li>
                        <li>
                          <a href="{{ url('eng/terms-and-conditions') }}">Terms and conditions of sale</a>
                        </li>
                        <li>
                          <a href="{{ url('eng/privacy-policies') }}">Privacy policies</a>
                        </li>                 
                      </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <div>
                <h4 class="font-weight-bold text-uppercase mt-3 mb-4 footer" style="color:white;"> WORLDWIDE SHIPPING </h4>
                    <div class="box1">
                        <div class="box1-sm white"></div>
                        <div class="box1-sm yellow"></div>
                    </div>
                    <center><i class="fas fa-plane fa-2x" style="color:white;"></i></center><br>
                    <ul>
                        <li class="color-white" style="list-style:none">We deliver worldwide and will help you find the option that best suits your needs.</li>
                    </ul>
                    <div>
                        <center>
                            <img src="{{ asset('img/band/mex.jpg') }}" title="México" width="10%" align="center">
                            <img src="{{ asset('img/band/eu.jpg') }}" title="EUA" width="10%" align="center">
                            <img src="{{ asset('img/band/can.jpg') }}" title="Canada" width="10%" align="center">
                            <img src="{{ asset('img/band/ar.jpg') }}" title="Argentína" width="10%" align="center"><br>
                            <img src="{{ asset('img/band/chi.jpg') }}" title="Chíle" width="10%" align="center">
                            <img src="{{ asset('img/band/col.jpg') }}" title="Colombia" width="10%" align="center">
                            <img src="{{ asset('img/band/per.jpg') }}" title="Perú" width="10%" align="center">
                        </center></div>
                        <br><br>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
    </footer>
<!-- <div class="modal fade desk" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onclick="$('#myModal').modal('hide')" style="flex-direction: inherit;">
  <div class="modal-dialog">
    <div class="modal-content" style="flex-direction: inherit;">
      <img src="{{ asset('img/bf2020h.jpg') }}">      
    </div>
  </div>
</div>
<div class="modal fade phone" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onclick="$('#myModal2').modal('hide')" style="flex-direction: inherit;">
  <div class="modal-dialog">
    <div class="modal-content" style="flex-direction: inherit;">
      <img src="{{ asset('img/bf2020v.jpg') }}" width="80%">      
    </div>
  </div>
</div> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!-- <script type="text/javascript">

  setTimeout(function(){
    if(screen.width > 600)
    {
      $('#myModal').modal('show');
    }
    else
    {
      $('#myModal2').modal('show');
    }
      
  }, 2000);

</script> -->
<script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:2,
            itemsDesktop:[1000,2],
            itemsDesktopSmall:[990,2],
            itemsTablet:[768,1],
            pagination:true,
            navigation:false,
            navigationText:["",""],
            slideSpeed:1000,
            autoPlay:true
        });
    });

    
</script>
<script>
    $(document).ready(function(){
        $("#testimonial-slider2").owlCarousel({
            items:2,
            itemsDesktop:[1000,2],
            itemsDesktopSmall:[990,2],
            itemsTablet:[768,1],
            pagination:true,
            navigation:false,
            navigationText:["",""],
            slideSpeed:1000,
            autoPlay:true
        });
    });
</script>
<script type="text/javascript">
    $('.responsive').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay:true,
  autoplaySpeed:3000,
  arrows:true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true,
        arrows:false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        arrows:false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true,
        arrows:false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


</script>
        @endsection
        