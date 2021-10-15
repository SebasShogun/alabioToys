@extends('alabio')

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
        <!-- INICIO IMAGEN CARRUCEL -->
        <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators" style="z-index: 5;">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img loading="lazy" src="{{ asset('img/banner_1_vpc.jpg') }}" class="img-btn" alt="Somos Fabricantes de Inglables" width="1100" height="500">
            <img loading="lazy" src="{{ asset('img/banner_1.jpg') }}" class="img-btn-peq" alt="Fabricantes">
          </div>
          <div class="carousel-item">
            <img loading="lazy" src="{{ asset('img/banner_2_vpc.jpg') }}" class="img-btn" alt="Somos Fabricantes" width="1100" height="500">
            <img loading="lazy" src="{{ asset('img/banner_2.png') }}" class="img-btn-peq" alt="Fabricantes">
          </div>
          <div class="carousel-item">
            <a href="{{ url('/category/Juegos_Didacticos') }}"><img loading="lazy" src="{{ asset('img/banner_3_vpc.png') }}" class="img-btn" alt="Juegos Didácticos" width="1100" height="500"></a>
            <a href="{{ url('/category/Juegos_Didacticos') }}"><img loading="lazy" src="{{ asset('img/banner_3.png') }}" class="img-btn-peq" alt="Juegos Didácticos"></a>
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        </div>

        <div>
            <br>
            <h3 style="text-align: center;">Venta de juegos, Inflables, Acuáticos en Acapulco</h3><br>
            <h4>Emprendedores de <b>Acapulco</b>, inicien, expandan o renueven su negocio con los juegos, Infables, Brincolines, Toros Mecánicos, Euro Bungeee, Juegos de Feria, Futbolitos y mucho más...</h4>
        </div>

        <!-- SEPARADOR -->
        <br><br>
        <div class="box1">
          <div class="box1-sm yellow "></div>
          <div class="box1-sm coral"></div>
        </div>

          <!-- SECCIÓN DE CARTAS DE CATEGORÍAS -->   
              <center><a href="{{ url('/categorias') }}"><h1 class="stilo bluefont"><span>Categorías</span></h1></a></center>
              <br><br>
                <div class="row2">
                  <div class="column2">
                    <a href="{{ url('/entrega-inmediata') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PENTREGA INMEDIATA.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PENTREGA INMEDIATA.jpg') }}" class="img-btn-peq">
                      <br><br><p>Juegos, inflables y brincolines en Entrega Inmediata</p>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Temáticos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/TEMATICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/TEMATICOS.jpg') }}" class="img-btn-peq">
                      <br><br><p>Castillos de princesas, Resbaladillas de superheroes y Cubos de personajes</p>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Acuaticos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PACUATICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PACUATICOS.jpg') }}" class="img-btn-peq">
                      <br><br><p>Brincolines acuáticos, Deslizadores y Albercas de agua</p>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Juegos_Didacticos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PDIDACTICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PDIDACTICOS.jpg') }}" class="img-btn-peq">
                      <br><br><p>Juegos Didácticos y de Estimulación temprana </p>
                    </div></a>
                  </div>
                  
                </div>
                <br>
                <br>
                <div id="myDIV" class="row2" style="display: block;">
                <div class="column2">
                  <a href="{{ url('/category/Futbolitos_Y_Arcades') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PFUTBOLITOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PFUTBOLITOS.jpg') }}" class="img-btn-peq">
                      <br><br><p>Futbolitos, Mesas de Hockey y Arcades</p>
                    </div></a>
                  </div>
                
                <div class="column2">
                  <a href="{{ url('/category/Extremos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PEXTREMOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PEXTREMOS.jpg') }}" class="img-btn-peq">
                      <br><br><p>Eurobungee, Toro Mécanico y Juegos extremos</p>
                    </div></a>
                  </div>
                  
                  <div class="column2">
                  <a href="{{ url('/category/Replicas') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PPUBLICITARIOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPUBLICITARIOS.jpg') }}" class="img-btn-peq">
                      <br><br><p class="botontext">Inflables promocionales y réplicas inflables</p>
                      <p class="botontext-peq">Publicitarios</p>
                    </div></a>
                  </div>
                  
                  <div class="column2">
                  <a href="{{ url('/category/Reparación') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PREPARACION.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PREPARACION.jpg') }}" class="img-btn-peq">
                      <br><br><p>Reparación de inflables, Mantenimiento y Accesorios</p>
                    </div></a>
                  </div>
                </div>
                <br><br>

                <div>
                <center><a type="button" class="btn btn-success btn-lg" href="{{ url('/categorias') }}">Ver más </a></center>
                </div>
                
                <!--  SEPARADOR -->
                <br><br><br>
                <div class="box1">
                    <div class="box1-sm yellow "></div>
                    <div class="box1-sm coral"></div>
                </div>
                <br><br>

                <!-- SUCURSALES --> 
                <h1 class="stilo bluefont" style="text-align:center;"><span>Sucursales</span></h1>
                <br><br>
            
                <div class="row justify-content-center">
                <div class="col-xs-6 col-md-6 column2">
                <center><img loading="lazy" src="img/mapicon.png" class="icon-maps"><br><br>
                                <b>Alabío! Puebla</b><br>
                                <b style="font-weight: 500">39 Norte, #613</b><br>
                                <b style="font-weight: 500">Col. Valle del Rey</b><br>
                                <b style="font-weight: 500">Puebla, Pue.</b><br>
                                <a href="tel:2224943993"><i class="fas fa-phone-volume"></i> 22 24 94 39 93</a><br><br>
                                <a href="https://goo.gl/maps/nUaWEwUdDRGaEneD9" target="_blank"><img src="img/ubicacion-alabio-435x435-puebla.jpg" width="60% "></a>
                                <a href="https://goo.gl/maps/nUaWEwUdDRGaEneD9" target="_blank"><p class="text"><i class="fas fa-map-marker-alt"></i> Puebla</p></a></center>
                    </div>
                <div class="col-xs-6 col-md-6 column2">
                <center><img loading="lazy" src="img/mapicon.png" class="icon-maps"><br><br>
                                <b>Alabío! Querétaro</b><br> 
                                <b style="font-weight: 500">Cadereyta #121</b><br>
                                <b style="font-weight: 500">Col. Estrella</b><br>
                                <b style="font-weight: 500">Santiago de Querétaro, Qro</b><br>
                                <a href="tel:2722041524"><i class="fas fa-phone-volume"></i> 27 22 04 15 24</a><br><br>
                                <a href="https://goo.gl/maps/VesD1pdjRWGk4t789" target="_blank"><img src="img/qromap-300x277.jpg" width="60%"></a>
                                <a href="https://goo.gl/maps/VesD1pdjRWGk4t789" target="_blank"><p class="text"><i class="fas fa-map-marker-alt"></i> Querétaro</p></a></center>
                </div>
                </div><br><br>
    </div>
        
    <br><br><br>

    <!-- FOOTER DE LA PÁGINA DE INICIO-->
    <footer class="content-footer">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <!-- Grid row -->
            <div id="uno" class="row">
            <!-- Grid column -->
                <div class="col-md-3 mx-auto">
                    <!-- Links -->
                <h4 class="font-weight-bold text-uppercase mt-3 mb-4 footer" style="color:white;">Nosotros:</h4>
                    <div class="box1">
                        <div class="box1-sm white"></div>
                        <div class="box1-sm yellow"></div>
                    </div>
                    <ul  class="color-white">
                        <li>
                            <a href="{{ url('/about') }}">¿Quiénes Somos?</a>
                        </li>
                        <li>
                            <a href="#clientes">Nuestros Clientes</a>
                        </li>
                        <li>
                            <a href="{{ url('/faqs') }}">Preguntas Frecuentes</a>
                        </li>
                        <li>
                            <a href="#!">Bolsa de Trabajo</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                <!-- Links -->
                <h4 class="font-weight-bold text-uppercase mt-3 mb-4 footer" style="color:white; font-family: 'Noto Sans', sans-serif !important;">Categorías:</h4>
                    <div class="box1">
                        <div class="box1-sm white"></div>
                        <div class="box1-sm yellow"></div>
                    </div>
                    <ul class="color-white">
                        <li>
                            <a href="{{ url('/entrega-inmediata') }}">Entrega Inmediata</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Publicitarios') }}">Inflables Publicitarios</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Inflables_para_Casa') }}">Venta de Inflabes para Casa</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Inflables_para_Casa') }}">Inflables para bebé</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Acuaticos') }}">Venta de Inflables Acuáticos</a>
                        </li>
                        <li>
                            <a href="{{ url('/entrega-inmediata') }}">Compra de inflables</a>
                        </li>
                        <li>
                            <a href="{{ url('/entrega-inmediata') }}">Costo de Inflables</a>
                        </li>
                        <li>
                            <a href="{{ url('/entrega-inmediata') }}">Precio de Brincolines</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Acuaticos') }}">Venta de Alberca Inflable</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Juegos_Didacticos') }}">Juegos Didácticos</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Juegos_Didacticos') }}">Estimulación temprana</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Juegos_Didacticos') }}">Kit de Estimulación Temprana</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Juegos_Didacticos') }}">Gimnasio para bebé</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Futbolitos_y_Arcades') }}">Venta de Futbolitos</a>
                        </li>
                        <li>
                            <a href="{{ url('/category/Reparacion') }}">Reparación Inflables</a>
                        </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 mx-auto">

                        <!-- Links -->
                <h4 class="font-weight-bold text-uppercase mt-3 mb-4 footer" style="color:white;">Contacto:</h4>
                        <div class="box1">
                            <div class="box1-sm white"></div>
                            <div class="box1-sm yellow"></div>
                        </div>
                        <ul class="color-white">
                            <li>
                                <a href="{{ url('/sucursales') }}">Matriz Puebla</a>
                            </li>
                            <li>
                                <a href="{{ url('/sucursales') }}">Sucursal Queretaro</a>
                            </li>
                            <!--<li>
                                <a href="{{ url('/sucursales') }}">Sucursal Veracruz</a>
                            </li>-->
                            <li>
                                <a href="#!">Facturación en Línea</a>
                            </li>
                        </ul>
                        <h4 class="font-weight-bold text-uppercase mt-3 mb-4" style="color:white;">Políticas:</h4>
                        <div class="box1">
                            <div class="box1-sm white"></div>
                            <div class="box1-sm yellow"></div>
                        </div>
                        <ul class="color-white">
                        <li>
                            <a href="{{ url('/terminos-y-condiciones') }}">Términos de uso</a>
                        </li>
                        <li>
                            <a href="{{ url('/terminos-y-condiciones') }}">Términos y Condiciones de Venta</a>
                        </li>
                        <li>
                            <a href="{{ url('/aviso-de-privacidad') }}">Políticas de Privacidad</a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <div>
                <h4 class="font-weight-bold text-uppercase mt-3 mb-4 footer" style="color:white;"> Envío a Nivel Mundial</h4>
                    <div class="box1">
                        <div class="box1-sm white"></div>
                        <div class="box1-sm yellow"></div>
                    </div>
                    <center><i class="fas fa-plane fa-2x" style="color:white;"></i></center><br>
                    <ul>
                        <li class="color-white" style="list-style:none">Ofrecemos envíos a todo el mundo y lo ayudaremos a encontrar la mejor opción para usted.</li>
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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


   
@endsection