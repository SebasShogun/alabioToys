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
        
        <div class="wrapper sticky" style="box-shadow: 0 4px 8px 0 rgba(250, 250, 250, 0.2), 0 6px 20px 0 rgba(250, 250, 250, 0.19);">
            <nav>
                <input type="checkbox" id="show-search">
                <input type="checkbox" id="show-menu">
                <label for="show-menu" class="menu-icon"><i class="fas fa-bars" hidden></i></label>
                <div class="content">
                <div class="logo"><a href="{{ url('/eng') }}"><img loading="lazy" src="{{ asset('img/logo.png') }}" class="img-m-a" style="width: 200px;"></a></div>
                    <ul class="links">
                        <li class="hide" style="margin-top: 15px;"><a href="{{ url('/eng') }}"><i class="fas fa-home"></i> &nbsp Home</a></li>
                        <li class="hide" style="margin-top: 15px;"><a href="{{ url('eng/category/Lo_más_vendido') }}"><i class="fas fa-store"></i> &nbsp Store</a></li>
                        <li style="margin-top: 15px;">
                            <a href="{{ url('eng/categories') }}" class="desktop-link"><i class="fas fa-boxes"></i> &nbsp Categories</a>
                            <input type="checkbox" id="show-services" checked>
                            <label for="show-services"><a href="{{ url('eng/categories') }}"><i class="fas fa-boxes"></i> &nbsp Categories</a></label>
                            <ul>
                                <li><a href="{{ url('eng/entrega-inmediata') }}">Immediate Delivery</a></li>
                                <li><a href="{{ url('eng/category/Lo_más_vendido') }}">The Most Sold</a></li>
                                <li>
                                    <a href="#" class="desktop-link">Inflatable Games &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-sort-down"></i></a>
                                    <input type="checkbox" id="show-items1">
                                    <label for="show-items1">Inflatable Games &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<i class="fas fa-sort-down"></i></label>
                                    <ul class="fondonav">
                                          <li><a href="{{ url('eng/category/Acuáticos') }}">Aquatic</a></li>
                                          <li><a href="{{ url('eng/category/De_Temporada') }}">Seasonal</a></li>
                                          <li><a href="{{ url('eng/category/Extremos') }}">Extremes</a></li>
                                          <li><a href="{{ url('eng/category/Inflables_para_Casa') }}">Inflatables for Home</a></li>
                                          <li><a href="{{ url('eng/category/Sensores') }}">Sensors</a></li>
                                          <li><a href="{{ url('eng/category/Inflables_Techados') }}">Roofing</a></li>
                                          <li><a href="{{ url('eng/category/Pequeños') }}">Small Size</a></li>
                                          <li><a href="{{ url('eng/category/Medianos') }}">Medium Size</a></li>
                                          <li><a href="{{ url('eng/category/Gigantes') }}">Giants</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('eng/category/Juegos_Didacticos') }}" class="desktop-link">Bounce Houses for babies &nbsp &nbsp &nbsp &nbsp <i class="fas fa-sort-down"></i></a>
                                    <input type="checkbox" id="show-items2">
                                    <label for="show-items2">Bounce Houses for babies &nbsp<i class="fas fa-sort-down"></i></label>
                                    <ul class="fondonav">
                                        <li><a href="{{ url('eng/category/Juegos_Didacticos') }}">Pool balls</a></li>
                                        <li><a href="{{ url('eng/category/Juegos_Didacticos') }}">Ball for pools</a></li>
                                        <li><a href="{{ url('eng/category/Juegos_Didacticos') }}">Rugs and Maths</a></li>
                                        <li><a href="{{ url('eng/category/Juegos_Didacticos') }}">Early Stimulation Sets</a></li>
                                        <li><a href="{{ url('eng/category/Juegos_Didacticos') }}">Figures Early Stimulation</a></li>
                                        <li><a href="{{ url('eng/category/Juegos_Didacticos') }}">Children's gyms</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('eng/category/Inflables_para_Casa') }}">Home Bounce Houses</a></li>
                                <hr>
                                <li><a href="{{ url('eng/category/Accesorios') }}">Accessories</a></li>
                                <li><a href="{{ url('eng/category/Carpas_Inflables') }}">Inflatable Tents</a></li>
                                <li><a href="{{ url('eng/category/Futbolitos_Y_Arcades') }}">Football table and Arcades</a></li>
                                <li><a href="{{ url('eng/category/Juegos_de_Feria') }}">Fair Games</a></li>
                                <li><a href="{{ url('eng/category/Pantallas_Inflables') }}">Inflatable Screens</a></li>
                                <li><a href="{{ url('eng/category/Pelotas_Gigantes') }}">Giant Balls And Spheres</a></li>
                                <li><a href="{{ url('eng/category/Reparación') }}">Repair</a></li>
                                <li></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        @yield('content')
        @yield('script')

        <!-- Footer Principal -->
        <div class="container-fluid principalfooter">
            <br><br>
            <center>
	    	<div>
			<a href="https://www.facebook.com/Alabio-Toys-1310322282448322" target="_blank"><img src="{{ asset('img/facebook.png') }}" class="ta-i"></a>
			<a href="https://www.youtube.com/channel/UCb9ZgSkrb-Zo5gFn20oolbA" target="_blank"><img src="{{ asset('img/youtube.png') }}" class="ta-i" style="margin-left: 30px;"></a>
			<a href="https://www.instagram.com/alabio_toys/" target="_blank"><img src="{{ asset('img/instagram.png') }}" class="ta-i" style="margin-left: 30px;"></a>
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
                    window.location.href = "ventas/eng/search/"+$tts;
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