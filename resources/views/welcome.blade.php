@extends('alabio')

@section('meta')
    <title>Venta de Inflables | Brincolines en Venta | Fabrica de Inflables| Alabio! Toys</title>
    <meta name="description" content="Fábrica de Juegos e Inflables. Venta de Brincolines Inflables. Envíos gratis en la Rep Mex. 6 y 3 Meses sin Intereses. Catalogo con gran variedad de Juegos e Inflables. Envíos a USA y Latinoamérica.">
    <meta name="keywords" content="venta de brincolines, venta de Inflables,fábrica de inflables, venta de brincolines en puebla, Juegos Inflables venta">
    <link rel="stylesheet" href="{{ asset('slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">

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

        <!-- ICONOS DE ALABÍO -->
        <center>
            <div class="shadow-sm p-3 mb-5 bg-white rounded">
                <div class="row">
                    <div class="col" style="">
                        <img loading="lazy" src="{{ asset('img/btn-evg.png') }}" class="img-btn-ini">
                        <img loading="lazy" src="{{ asset('img/btn-evg.png') }}" class="img-btn-peq">
                        <p class="responletter"><br class="ocul2"><strong> Envío a Domicilio </strong></p>
                    </div>
                    <div class="col">
                        <img loading="lazy" src="{{ asset('img/btn-ms.png') }}" class="img-btn-ini">
                        <img loading="lazy" src="{{ asset('img/btn-ms.png') }}" class="img-btn-peq" style="margin-top: -1%;">
                        <p class="responletter"><br class="ocul2"><strong> 12 MSI </strong></p>
                    </div>
                    <div class="col">
                        <a href="{{ asset('/entrega-inmediata') }}"><img loading="lazy" src="{{ asset('img/btn-ei.png') }}" class="img-btn-ini"></a>
                        <a href="{{ asset('/entrega-inmediata') }}"><img loading="lazy" src="{{ asset('img/btn-ei.png') }}" class="img-btn-peq" style="margin-top: 0%;"></a>
                        <p class="responletter"><br class="ocul2"><strong> Entrega Inmediata </strong></p>
                    </div>
                    <div class="col">
                        <img loading="lazy" src="{{ asset('img/btn-garantia.png') }}" class="img-btn-ini">
                        <img loading="lazy" src="{{ asset('img/btn-garantia.png') }}" class="img-btn-peq" style="margin-top: 0%;">
                        <p class="responletter"><br class="ocul2"><strong> Garantía </strong></p>
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
        <a href="{{ url('/entrega-inmediata') }}"><h1 class="stilo bluefont" style="text-align:center;">Entrega Inmediata</h1></a>
        <br>
        <center>
            <div class="responsive" style="width: 90%;">
                @foreach($servs as $serv)
                    <center>
                        <div class="card card-hover" style="width: 86%">
                            @if($serv->image_url)
                                <a href="{{ $serv->drupal_path }}"><img loading="lazy" src="{{ $serv->image_url }}" class="tam-img"></a>
                            @else
                                <a href="{{ $serv->drupal_path }}"><img loading="lazy" src="{{ asset('/img/img-available.png') }}" class="tam-img"></a>
                            @endif
                            <br>
                            @if ($serv->price>0)
                                @if($serv->amount_pue > 0 || $serv->amount_qro > 0 || $serv->amount_ver > 0)
                                    @if($datetoday > $datepromb && $datetoday < $dateprome)
                                        <h5><s>$ {{ number_format($serv->price,0) }}</s>&nbsp;$ {{ number_format($serv->price*0.80,0) }}</h5>
                                        <b class="prueba1">12x <?php $pre = ($serv->price)*1.039; $cre = $pre / 12;?><s>${{ number_format($cre,2) }}</s>&nbsp;${{ number_format(($pre*0.85)/12,2) }} sin intereses</b>
                                    @else
                                        <h5>$ {{ number_format($serv->price,0) }}</h5>
                                        <b class="prueba1">12x <?php $pre = ($serv->price)*1.039; $cre = $pre / 12;?>${{ number_format($cre,2) }} sin intereses</b>
                                    @endif
                                @else
                                    <h5>$ {{ number_format($serv->price,0) }}</h5>
                                    <b class="prueba1">12x <?php $pre = ($serv->price)*1.039; $cre = $pre / 12;?>${{ number_format($cre,2) }} sin intereses</b>
                                @endif
                            @endif
                            <b class="prueba1">{{ $serv->shipping_tag }}</b>
                            <hr>
                            <div class="">
                                @if($serv->title)
                                    <b class="inflable-title">{{ $serv->title }}</b>
                                @else
                                    <b class="inflable-title">{{ $serv->name }}</b>
                                @endif
                            </div>
                        </div>
                    </center>
                @endforeach
            </div>
        </center>

        <br>
        <div>
            <center><a type="button" class="btn btn-success btn-lg" href="{{ url('/entrega-inmediata') }}">Ver más </a></center>
        </div>
        

          <!-- SEPARADOR--> 
          <br><br><br>              
          <div class="box1">
          <div class="box1-sm yellow "></div>
          <div class="box1-sm coral"></div>
          </div>
          <br><br>


          <!-- SECCIÓN DE CARTAS DE CATEGORÍAS -->   
              <a href="{{ url('/categorias') }}"><h1 class="stilo bluefont" style="text-align:center;"><span>Categorías</span></h1></a>
              <br><br>
                <div class="row2">
                  <div class="column2">
                    <a href="{{ url('/entrega-inmediata') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PENTREGA INMEDIATA.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PENTREGA INMEDIATA1.jpg') }}" class="img-btn-peq">
                      <br><br><p>Entrega Inmediata</p>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Temáticos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/TEMATICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/TEMATICOS1.jpg') }}" class="img-btn-peq">
                      <br><br><p>Inflables Temáticos</p>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Acuaticos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PACUATICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PACUATICOS1.jpg') }}" class="img-btn-peq">
                      <br><br><p>Inflables Acuáticos</p>
                    </div></a>
                  </div>

                  <div class="column2">
                  <a href="{{ url('/category/Juegos_Didacticos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PDIDACTICOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PDIDACTICOS1.jpg') }}" class="img-btn-peq">
                      <br><br><p>Juegos Didácticos </p>
                    </div></a>
                  </div>
                  
                </div>
                <br>
                <br>
                <div id="myDIV" class="row2" style="display: block;">
                <div class="column2">
                  <a href="{{ url('/category/Futbolitos_Y_Arcades') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PFUTBOLITOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PFUTBOLITOS1.jpg') }}" class="img-btn-peq">
                      <br><br><p>Futbolitos, Arcades</p>
                    </div></a>
                  </div>
                
                <div class="column2">
                  <a href="{{ url('/category/Extremos') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PEXTREMOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PEXTREMOS1.jpg') }}" class="img-btn-peq">
                      <br><br><p>Juegos e inflables extremos</p>
                    </div></a>
                  </div>
                  
                  <div class="column2">
                  <a href="{{ url('/category/Replicas') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PPUBLICITARIOS.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PPUBLICITARIOS1.jpg') }}" class="img-btn-peq">
                      <br><br><p class="botontext">Inflables Promocionales</p>
                      <p class="botontext-peq">Publicitarios</p>
                    </div></a>
                  </div>
                  
                  <div class="column2">
                  <a href="{{ url('/category/Reparación') }}"><div class="card2">
                      <img loading="lazy" src="{{ asset('img/ca/PREPARACION.jpg') }}" class="img-btn">
                      <img loading="lazy" src="{{ asset('img/ca/PREPARACION1.jpg') }}" class="img-btn-peq">
                      <br><br><p>Reparación y Accesorios</p>
                    </div></a>
                  </div>
                </div>
                <br><br>

                <div>
                <center><a type="button" class="btn btn-success btn-lg" href="{{ url('/categorias') }}">Ver más </a></center>
                </div>
          

          <!-- SEPARADOR ALTERNATIVO--> 
          <br><br><br>                 
          <div class="box1">
          <div class="box1-sm yellow "></div>
          <div class="box1-sm coral"></div>
          </div>
          
          <br><br>

        <!-- SECCIÓN LMV --> 
        <a href="{{ url('/category/Lo_más_vendido') }}"><h1 class="stilo bluefont" style="text-align:center;"><span>Lo Más Vendido</span></h1></a>
        <br>
        <center>
          <div class="responsive" style="width: 90%;">
            @foreach($service as $items)
             <center>   
              
                  <div class="card card-hover" style="width: 86%">
                    @if($items->image_url)
                    <a href="{{ $items->drupal_path }}"><img loading="lazy" src="{{ $items->image_url }}" class="tam-img"></a>
                    @else
                    <a href="{{ $items->drupal_path }}"><img loading="lazy" src="{{ asset('/img/img-available.png') }}" class="tam-img"></a>      
                    @endif
                    <br>
                    @if ($items->price>0)
            @if($items->amount_pue > 0 || $items->amount_qro > 0 || $items->amount_ver > 0)
              @if($datetoday > $datepromb && $datetoday < $dateprome)
                <h5><s>$ {{ number_format($items->price,0) }}</s>&nbsp;$ {{ number_format($items->price*0.80,0) }}</h5>
                <b class="prueba1">12x <?php $pre = ($items->price)*1.039; $cre = $pre / 12;?><s>${{ number_format($cre,2) }}</s>&nbsp;${{ number_format(($pre*0.85)/12,2) }} sin intereses</b>
              @else
                <h5>$ {{ number_format($items->price,0) }}</h5>
                <b class="prueba1">12x <?php $pre = ($items->price)*1.039; $cre = $pre / 12;?>${{ number_format($cre,2) }} sin intereses</b>
              @endif
            @else
              <h5>$ {{ number_format($items->price,0) }}</h5>
              <b class="prueba1">12x <?php $pre = ($items->price)*1.039; $cre = $pre / 12;?>${{ number_format($cre,2) }} sin intereses</b>
            @endif         
          @endif  
          <b class="prueba1">{{ $items->shipping_tag }}</b>
                    <hr>      
                    <div class="">
                      @if($items->title)
                    <b class="inflable-title">{{ $items->title }}</b>
                    @else
                    <b class="inflable-title">{{ $items->name }}</b>
                    @endif
                    </div>
                  </div>
                
                     
              </center>
              @endforeach             
            </div>
          </center>
        <br>
        <br>
        
        <br><br><br>
        <div class="box1">
          <div class="box1-sm yellow "></div>
          <div class="box1-sm coral"></div>
        </div>
        <br><br>

        <!-- SECCIÓN TEXTO --> 
        <h1 class="stilo bluefont" style="text-align:center;"><span>Sobre Alabío</span></h1>
        <br>
        
        <div class="contenedor">
        <div class="container">
          <!-- <div class="row row-cols-1 row-cols-sm-2"> -->
            
          <!-- </div> -->
          <div class="container">
              <p class="textalabio"><strong>Alabío Toys</strong> es una <strong>Fabrica de Brincolines</strong> que cuenta con los especialistas en Costura de lona, Electrónica, Herrería, Carpintería, Soldadura de lona y Departamento de Logística necesarios para brindar soluciones en la <strong>Fabricación de Brincolines Inflables.</strong></p>
    
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
        
        <br><br><br>
        <div class="box1">
            <div class="box1-sm yellow "></div>
            <div class="box1-sm coral"></div>
        </div>

        <!--  SEPARADOR -->
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
                        <a href="tel:2224943993"><i class="fas fa-phone-volume"></i> 222 494 3993</a><br><br>
                        <a href="https://goo.gl/maps/nUaWEwUdDRGaEneD9" target="_blank"><img loading="lazy" class="img-btn2" src="img/ubicacion-alabio-435x435-puebla.jpg" width="60%"></a><a href="https://goo.gl/maps/nUaWEwUdDRGaEneD9" target="_blank"><img loading="lazy" class="img-btn-peq" src="img/ubicacion-alabio-435x435-puebla2.jpg" width="60%"></a>
                        <a href="https://goo.gl/maps/nUaWEwUdDRGaEneD9" target="_blank"><p class="text"><i class="fas fa-map-marker-alt"></i> Puebla</p></a></center>
            </div>
        <div class="col-xs-6 col-md-6 column2">
        <center><img loading="lazy" src="img/mapicon.png" class="icon-maps img-btn"><img loading="lazy" src="img/mapicon.png" class="icon-maps img-btn-peq"><br><br>
                        <b>Alabío! Querétaro</b><br> 
                        <b style="font-weight: 500">Cadereyta #121</b><br>
                        <b style="font-weight: 500">Col. Estrella</b><br>
                        <b style="font-weight: 500">Santiago de Querétaro, Qro</b><br>
                        <a href="tel:2722041524"><i class="fas fa-phone-volume"></i> 442 719 7317</a><br><br>
                        <a href="https://goo.gl/maps/VesD1pdjRWGk4t789" target="_blank"><img loading="lazy" class="img-btn2" src="img/qromap-300x277.jpg" width="60%"><a href="https://goo.gl/maps/VesD1pdjRWGk4t789" target="_blank"><img loading="lazy" class="img-btn-peq" src="img/qromap-300x2772.jpg" width="60%"></a>
                        <a href="https://goo.gl/maps/VesD1pdjRWGk4t789" target="_blank"><p class="text"><i class="fas fa-map-marker-alt"></i> Querétaro</p></a></center>
            </div>
        </div>
                  
                  
                <br><br><br>
                <div class="box1">
                  <div class="box1-sm yellow "></div>
                  <div class="box1-sm coral"></div>
                </div>
                <br><br>

                <!-- SECCIÓN NUESTROS EMPRENDEDORES --> 
                <h1 class="stilo bluefont" style="text-align:center;"><span>Nuestros Emprendedores</span></h1>
                  <br><br>

                  <center>
                      <div class="responsive2" style="width: 90%;">
                          <div class="card card-hover" style="width: 90%">
                          <a href="#"><img  loading="lazy" src="{{ asset('img/equipo.png') }}" class="tam-img"></a>
                          <br>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                          </div>
                          <div class="card card-hover" style="width: 90%">
                          <a href="#"><img  loading="lazy" src="{{ asset('img/equipo.png') }}" class="tam-img"></a>
                          <br>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                          </div>
                          <div class="card card-hover" style="width: 90%">
                          <a href="#"><img  loading="lazy" src="{{ asset('img/equipo.png') }}" class="tam-img"></a>
                          <br>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                          </div>
                          <div class="card card-hover" style="width: 90%">
                          <a href="#"><img  loading="lazy" src="{{ asset('img/equipo.png') }}" class="tam-img"></a>
                          <br>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                          </div>
                          <div class="card card-hover" style="width: 90%">
                          <a href="#"><img  loading="lazy" src="{{ asset('img/equipo.png') }}" class="tam-img"></a>
                          <br>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                          </div>
                          <div class="card card-hover" style="width: 90%">
                          <a href="#"><img  loading="lazy" src="{{ asset('img/equipo.png') }}" class="tam-img"></a>
                          <br>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                          </div>
                      </div>
                  </center>

                <!-- SEPARADOR -->
                <br><br>
                <div class="box1">
                  <div class="box1-sm yellow "></div>
                  <div class="box1-sm coral"></div>
                </div>
                <br><br>

                <!-- PREGUNTAS FRECUENTES o FAQS -->
                <div class="container">
                    <h1 class="stilo bluefont" style="text-align:center;"><span>Preguntas Frecuentes</span></h1>
                        <br><br>

                    <div class="accordion">
                        <div class="accordion-item">
                            <h2 id="accordion-button-1" aria-expanded="false"><span class="accordion-title">¿Cómo puedo comprar algún inflable?</span><span class="icon" aria-hidden="true"></span></h2>
                            <div class="accordion-content">
                                <p>Te recomendamos visitar todas nuestras categorías, posteriormente escoge los inflables en lo que encuentres intersad@, asegúrate de ver todas las fotos del producto, asi como de leer las características de cada Juego para confirmar que es el inflable que necesitas.</p>			  
                                <p>En todos los <strong>Brincolines e inflables</strong> se muestra un botón como este   dale clic en el botón de <button type="button" class="btn btn-success" disabled>Comprar ahora</button>, posteriormente se mostrará una ventana para completar la dirección de envío, formas de pago y confirmación de compra. Al finalizar tu pedido, recibirás un correo de confirmación y el tiempo de entrega. </p>
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

                        <br><br><div>
                            <center><a type="button" class="btn btn-success btn-lg" href="{{ url('/faqs') }}">Ver más </a></center>
                        </div><br>
                    </div>
                </div>
                    
            <!-- SEPARADOR -->
                <br><br>
                <div class="box1">
                  <div class="box1-sm yellow "></div>
                  <div class="box1-sm coral"></div>
                </div>
                <br><br>
                
        <!-- SECCIÓN NUESTROS CLIENTES CARRUSEL -->
        <h1 id="clientes" class="stilo bluefont" style="text-align:center;"><span>Nuestros Clientes</span></h1>
        <br><br><br><br>

        <center>
            <div class="responsive3" style="width: 90%;">
                <center><img loading="lazy" src="{{ asset('img/clie/comp-bank.png') }}" width="80%"></center>
                <center><img loading="lazy" src="{{ asset('img/clie/telcel.png') }}" width="80%"></center>
                <center><img loading="lazy" src="{{ asset('img/clie/gpo-exce.png') }}" width="80%"></center>
                <center><img loading="lazy" src="{{ asset('img/clie/calidra.png') }}" width="50%"></center>
                <center><img loading="lazy" src="{{ asset('img/clie/tecate.jpg') }}" width="80%"></center>
                <center><img loading="lazy" src="{{ asset('img/clie/toyota.png') }}" width="85%" style="margin-top: 10px;"></center>
                <center><img loading="lazy" src="{{ asset('img/clie/kia.png') }}" width="40%"></center>
                <center><img loading="lazy" src="{{ asset('img/clie/coca.png') }}" width="70%"></center>
            </div>
        </center>
                
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
                <h1 class="stilo bluefont" style="text-align:center;"><span>Formas De Pago</span></h1>
                <br> <br>
                <a href="{{ asset('metodos-pago') }}"><img loading="lazy" src="img/formasdpago.png" class="tam-j"></a>
            </center> </div>
        <br> <br> <br>
    </div>
        
    <br><br><br><br>

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
                            <img loading="lazy" src="{{ asset('img/band/mex.jpg') }}" title="México" width="10%" align="center">
                            <img loading="lazy" src="{{ asset('img/band/eu.jpg') }}" title="EUA" width="10%" align="center">
                            <img loading="lazy" src="{{ asset('img/band/can.jpg') }}" title="Canada" width="10%" align="center">
                            <img loading="lazy" src="{{ asset('img/band/ar.jpg') }}" title="Argentína" width="10%" align="center"><br>
                            <img loading="lazy" src="{{ asset('img/band/chi.jpg') }}" title="Chíle" width="10%" align="center">
                            <img loading="lazy" src="{{ asset('img/band/col.jpg') }}" title="Colombia" width="10%" align="center">
                            <img loading="lazy" src="{{ asset('img/band/per.jpg') }}" title="Perú" width="10%" align="center">
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

        // Esto hace que funcione mostrar y ocultar parte de FAQS

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
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        infinite: true,
                        autoplay:true,
                        autoplaySpeed:3000,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        autoplay:true,
                        arrows:false,
                        autoplaySpeed:3000
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        arrows:false,
                        slidesToScroll: 1
                    }
                }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
            ]
        });

        $('.responsive2').slick({
        dots: true,
        infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay:true,
            autoplaySpeed:3000,
            arrows:false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                    infinite: true,
                    autoplay:true,
                    autoplaySpeed:3000,
                    dots: true
        }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            autoplay:true,
            arrows:false,
            autoplaySpeed:3000
        }
    },
    {
        breakpoint: 480,
        settings: {
            slidesToShow: 2,
            arrows:false,
            slidesToScroll: 1
        }
    }
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});

        $('.responsive3').slick({
            dots: false,
            infinite: true,
  	    speed: 800,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay:true,
  	    autoplaySpeed:3000,
            arrows:false,
            responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 3,
                    infinite: true,
                    autoplay:true,
                    autoplaySpeed:3000,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    autoplay:true,
                    arrows:false,
                    autoplaySpeed:3000
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    arrows:false,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
            ]
        });

    </script>
@endsection