<!DOCTYPE html>
<html>
    <head>
        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-K48HWQ4');
        </script>
        <!-- End Google Tag Manager -->
        <!-- Hotjar Tracking Code for https://alabio.mx/ventas -->

        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:2144119,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        @yield('meta')

        <!-- Fonts -->

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='dns-prefetch' href='https://fonts.googleapis.com'>
        <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">  -->
        <link rel='preconnect' href='https://use.fontawesome.com'>
        <link rel='dns-prefetch' href='https://use.fontawesome.com'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script> 
        <script src="{{ asset('js/modernizr.js') }}"></script> 

        <script>
        //<![CDATA[
            document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
        //]]>
        </script>
         @yield('style-product')
            @yield('style-checkout')

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K48HWQ4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        @php
            use App\Service;
            ini_set("session.cookie_lifetime","604800");
            ini_set("session.gc_maxlifetime","604800");
            session_start();
            $arr_cart = (array)session('Cart');
            $cant_cart=0;
            $i=0;
            $products = array();
            foreach($arr_cart as $cart)
                {
                    $cant_cart=$cant_cart+$cart[1];
                    $i++;
                }
        @endphp
    </head>
    <body onload="getget()">
        <div class="band2">
            <img loading="lazy" src="{{ asset('img/band/mex.jpg') }}" title="México" class="banderin eu" align="right" style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/eu.jpg') }}" title="EUA" class="banderin can" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/can.jpg') }}" title="Canada" class="banderin mex" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/ar.jpg') }}" title="Argentína" class="banderin ar" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/col.jpg') }}" title="Colombia" class="banderin colo" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/chi.jpg') }}" title="Chíle" class="banderin chi" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/per.jpg') }}" title="Perú" class="banderin per" align="right"  style="position: absolute; color:white;">
            <p style="position: absolute; color:black;" class="envi2"> Envios Nacionales e Internacionales | <label for="idioma"> <select class="select-idioma" name="idiomas" id="idiomas" onchange="location = this.value;">
            <option value="{{ url('/') }}">Español</option>
            <option value="{{ url('/eng') }}">English</option>
            </select></label></p>
            <p style="position: absolute; color:black;"  class="envi2b"> Envíos Gratis Nacionales y a Frontera</p>
        </div>

        <div class="container-fluid mb-4" style="background-color: black;">
            <p class="band" style="position: absolute; color:black;  font-size:75%; right:42%; top:0.5%" > Envios Nacionales e Internacionales | <label for="idioma"> <select class="select-idioma" name="idiomas" id="idiomas" onchange="location = this.value;">
            <option value="{{ url('/') }}">Español</option>
            <option value="{{ url('/eng') }}">English</option>
            </select></label></p>
            <p class="band" style="position: absolute; color:black;  font-size:75%; right:22%; top:0.5%" > Envíos Gratis Nacionales y a Frontera</p>
            <img loading="lazy" src="{{ asset('img/band/mex.jpg') }}" title="México" width="2%" align="right" class="band" style="position: absolute; color:white; right:18.7%; top:0.7%">
            <img loading="lazy" src="{{ asset('img/band/eu.jpg') }}" title="EUA" width="2%" align="right" class="band" style="position: absolute; color:white; right:16.5%; top:0.7%">
            <img loading="lazy" src="{{ asset('img/band/can.jpg') }}" title="Canada" width="2%" align="right" class="band" style="position: absolute; color:white; right:14.3%; top:0.7%">
            <img loading="lazy" src="{{ asset('img/band/ar.jpg') }}" title="Argentína" width="2%" align="right" class="band" style="position: absolute; color:white; right:12.1%; top:0.7%">
            <img loading="lazy" src="{{ asset('img/band/col.jpg') }}" title="Colombia" width="2%" align="right" class="band" style="position: absolute; color:white; right:9.9%; top:0.7%">
            <img loading="lazy" src="{{ asset('img/band/chi.jpg') }}" title="Chíle" width="2%" align="right" class="band" style="position: absolute; color:white; right:7.7%; top:0.7%">
            <img loading="lazy" src="{{ asset('img/band/per.jpg') }}" title="Perú" width="2%" align="right" class="band" style="position: absolute; color:white; right:5.5%; top:0.7%">
        </div>

        <div class="wrapper sticky" style="box-shadow: 0 4px 8px 0 rgba(250, 250, 250, 0.2), 0 6px 20px 0 rgba(250, 250, 250, 0.19);">
            <nav>
                <input type="checkbox" id="show-search">
                <input type="checkbox" id="show-menu">
                <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
                <div class="content">
                    <div class="logo"><a href="{{ url('/') }}"><img loading="lazy" src="{{ asset('img/logo.png') }}" class="img-m-a" style="width: 200px;"></a></div>
                    <ul class="links">
                        <li class="hide" style="margin-top: 15px;"><a href="{{ url('/') }}"><i class="fas fa-home"></i> &nbsp Inicio</a></li>
                        <li class="hide" style="margin-top: 15px;"><a href="{{ url('/category/Lo_más_vendido') }}"><i class="fas fa-store"></i> &nbsp Tienda</a></li>
                        <li style="margin-top: 15px;">
                            <a href="{{ url('/categorias') }}" class="desktop-link"><i class="fas fa-boxes"></i> &nbsp Categorías</a>
                            <input type="checkbox" id="show-services" checked>
                            <label for="show-services"><a href="{{ url('/categorias') }}"><i class="fas fa-boxes"></i> &nbsp Categorías</a></label>
                            <ul>
                                <li><a class="backgro-li" href="{{ url('/entrega-inmediata') }}">Entrega Inmediata</a></li>
                                <li><a class="backgro-li" href="{{ url('/category/Lo_más_vendido') }}">Lo más vendido</a></li>
                                <li>
                                    <a href="#" class="desktop-link">Juegos Inflables &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-sort-down"></i></a>
                                    <input type="checkbox" id="show-items1">
                                    <label class="backgro-li" for="show-items1">Juegos Inflables &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-sort-down"></i></label>
                                    <ul class="fondonav">
                                          <li><a class="backgro-li" href="{{ url('/category/Acuáticos') }}">Acuáticos</a></li>
                                          <li><a class="backgro-li" href="{{ url('/category/De_Temporada') }}">De Temporada</a></li>
                                          <li><a class="backgro-li" href="{{ url('/category/Extremos') }}">Extremos</a></li>
                                          <li><a class="backgro-li" href="{{ url('/category/Sensores') }}">Sensores</a></li>
                                          <li><a class="backgro-li" href="{{ url('/category/Inflables_Techados') }}">Techados</a></li>
                                          <li><a class="backgro-li" href="{{ url('/category/Temáticos') }}">Temáticos</a></li>
                                          <li><a class="backgro-li" href="{{ url('/category/Pequeños') }}">Pequeños</a></li>
                                          <li><a class="backgro-li" href="{{ url('/category/Medianos') }}">Medianos</a></li>
                                          <li><a class="backgro-li" href="{{ url('/category/Gigantes') }}">Gigantes</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('/category/Juegos_Didacticos') }}" class="desktop-link">Juegos Didácticos &nbsp &nbsp &nbsp &nbsp <i class="fas fa-sort-down"></i></a>
                                    <input type="checkbox" id="show-items2">
                                    <label class="backgro-li" for="show-items2">Juegos Didácticos &nbsp &nbsp &nbsp &nbsp <i class="fas fa-sort-down"></i></label>
                                    <ul class="fondonav">
                                        <li><a class="backgro-li" href="{{ url('/category/Juegos_Didacticos') }}">Albercas de Pelotas</a></li>
                                        <li><a class="backgro-li" href="{{ url('/category/Juegos_Didacticos') }}">Pelotas para albercas</a></li>
                                        <li><a class="backgro-li" href="{{ url('/category/Juegos_Didacticos') }}">Tapetes y Colchonetas</a></li>
                                        <li><a class="backgro-li" href="{{ url('/category/Juegos_Didacticos') }}">Sets Estimulación Temprana</a></li>
                                        <li><a class="backgro-li" href="{{ url('/category/Juegos_Didacticos') }}">Figuras Estimulación Temprana</a></li>
                                        <li><a class="backgro-li" href="{{ url('/category/Juegos_Didacticos') }}">Gimnasios Infantiles</a></li>
                                    </ul>
                                </li>
                                <li><a class="backgro-li" href="{{ url('/category/Inflables_para_Casa') }}">Inflables Para Casa</a></li>

                                <li>
                                    <a href="#" class="desktop-link">Publicitarios &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-sort-down"></i></a>
                                    <input type="checkbox" id="show-items3">
                                    <label class="backgro-li" for="show-items3">Publicitarios &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-sort-down"></i></label>
                                    <ul class="fondonav">
                                        <li><a class="backgro-li" href="{{ url('/category/Arcos_de_Meta') }}">Arcos de Meta</a></li>
                                        <li><a class="backgro-li" href="{{ url('/category/Carpas_Publicitarias') }}">Carpas Publicitarias</a></li>
                                        <li><a class="backgro-li" href="{{ url('/category/Replicas') }}">Replicas</a></li>
                                        <li><a class="backgro-li" href="{{ url('/category/Sky_Dancers') }}">Sky Dancers</a></li>
                                    </ul>
                                </li>
                                <hr>                              
                                <li><a class="backgro-li" href="{{ url('/category/Carpas_Inflables') }}">Carpas Inflables</a></li>
                                <li><a class="backgro-li" href="{{ url('/category/Futbolitos_Y_Arcades') }}">Futbolitos y Arcades</a></li>
                                <li><a class="backgro-li" href="{{ url('/category/Juegos_de_Feria') }}">Juegos de Feria</a></li>
                                <li><a class="backgro-li" href="{{ url('/category/Mobiliario') }}">Mobiliario</a></li>
                                <li><a class="backgro-li" href="{{ url('/category/Pantallas_Inflables') }}">Pantallas Inflables</a></li>
                                <li><a class="backgro-li" href="{{ url('/category/Pelotas_Gigantes') }}">Pelotas Gigantes Y Esferas</a></li>
                                <li><a class="backgro-li" href="{{ url('/category/Accesorios') }}">Accesorios</a></li>
                                <li><a class="backgro-li" href="{{ url('/category/Reparación') }}">Reparación</a></li>
                                <li></li>

                            </ul>
                        </li>
                    </ul>

                </div>
                <label id="search_box" for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
                <form id="demo-b" class="search-box">
                    <input type="text" placeholder="Buscar" class="search_box">
                    <button type="submit" class="go-icon"><i class="fas fa-search"></i></button>
                </form>
                <div class="search_input form_group" hidden>
                    <input type="text" class="form_control search_text search_box" >
                </div>
          <!-- Icono carrito -->
          	<div style="color:white;" class="navcarrito cart_anchor"><b id=""><a href="{{ url('/mycart') }}"><img loading="lazy" src="{{ asset('img/shopping2.png') }}" style="width: 30px; padding-left:2px; padding-right:0px;"></a></b><span class="outbadge" style="font-family:arial;color: white; font-size: 12px;"> {{ $cant_cart}}</span></div>
          <!-- Menu de carrito -->
            </nav>
        </div>


    <!-- <div id="cd-shadow-layer"></div>
	<div id="cd-cart">
		<h1 class="stilo bluefont">Carrito</h1>
			<li>
				<span class="cd-qty">2x</span> Producto 2
				<div class="cd-price">$1900.98</div>
				<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
			</li>
		</ul> 
		<div class="cd-cart-total">
			<p>Total <span>$</span></p>
		</div> 
		<a href="{{ url('/checkout') }}" class="checkout-btn">Checkout</a>
		<p class="cd-go-to-cart"><a href="{{ url('/mycart') }}">Página de Carrito</a></p> -->
	<!--</div>  cd-cart -->


        @yield('content')
        @yield('script')

        <a href="{{url("/catalogo")}}" target="_blank" class="btn-flotante2" style="margin-bottom: 40px;"><i class="fas fa-download"></i> <span style="padding-right: 25px;"> &nbsp &nbsp &nbsp Catálogo</span></a>
        <a href="https://api.whatsapp.com/send?phone=+52-(222)4943993&text=¡Hola,%20estoy%20interesad@%20en%20comprar%20Juegos!" class="btn-flotante" target="blank"><i class="fab fa-whatsapp"></i>&nbsp &nbsp ¡Contáctanos!</a>

        <!-- Footer Principal -->
        <div class="container-fluid principalfooter">
            <br><br>
            <center>
	    	<div>
			<a href="https://www.facebook.com/Alabio-Toys-1310322282448322" target="_blank"><img loading="lazy" src="{{ asset('img/facebook.png') }}" class="ta-i"></a>
			<a href="https://www.youtube.com/channel/UCb9ZgSkrb-Zo5gFn20oolbA" target="_blank"><img loading="lazy" src="{{ asset('img/youtube.png') }}" class="ta-i" style="margin-left: 30px;"></a>
			<a href="https://www.instagram.com/alabio_toys/" target="_blank"><img loading="lazy" src="{{ asset('img/instagram.png') }}" class="ta-i" style="margin-left: 30px;"></a>
                </div>
            </center>
            <br>
            <center>
                <a href="{{ url('/aviso-de-privacidad') }}">Aviso de Privacidad  </a> | <a href="{{ url('/sucursales') }}">Sucursales </a> | <a href="{{ url('/terminos-y-condiciones') }}">Términos y Condiciones</a>
                <br><br>
                <b class="dere">Alabío © <?php echo date('Y'); ?> - Todos los derechos reservados </b>
            </center>
            <br><br>
        </div>
        <!-- Fin Footer -->

        <!-- <div class="cat-menu">
                  <a href="{{url("/catalogo")}}" target="_blank"><img src="{{ asset('img/cat.png') }}" class="img-cat"></a>
        </div>-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script>

            $(".search_box").keyup(function(event){
                if(event.keyCode == 13){
                    $tts = $('.search_box').val();
                    window.location.href = "/search/"+$tts;
                }
            });

            $("#search_box").click(function(){
                var inputsearch = $(".search_box");
                inputsearch.focus();
            });



            function move_navigation( $navigation, $MQ) {
            if ( $(window).width() >= $MQ ) {
                $navigation.detach();
                $navigation.appendTo('header');
            } else {
                $navigation.detach();
                $navigation.insertAfter('header');
            }
            }


            // icon */
            // function myFunction() {
            //     var x = document.getElementById("myTopnav");
            //     if (x.className === "topnav") {
            //         x.className += " responsive";
            //     } else {
            //         x.className = "topnav";
            //     }
            // }

            // const menuBtn = document.querySelector(".menu-icon span");
            // const searchBtn = document.querySelector(".search-icon");
            // const cancelBtn = document.querySelector(".cancel-icon");
            // const items = document.querySelector(".nav-items");
            // const form = document.querySelector("form");
            //
            // menuBtn.onclick = ()=>{
            //     items.classList.add("active");
            //     menuBtn.classList.add("hide");
            //     searchBtn.classList.add("hide");
            //     cancelBtn.classList.add("show");
            // };
            //
            // cancelBtn.onclick = ()=>{
            //     items.classList.remove("active");
            //     menuBtn.classList.remove("hide");
            //     searchBtn.classList.remove("hide");
            //     cancelBtn.classList.remove("show");
            //     form.classList.remove("active");
            //     cancelBtn.style.color = "#ff3d00";
            // };
            //
            // searchBtn.onclick = ()=>{
            //     form.classList.add("active");
            //     searchBtn.classList.add("hide");
            //     cancelBtn.classList.add("show");
            // };
        </script>

        @yield('script')
    </body>
</html>