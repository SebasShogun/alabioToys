<!doctype html>
<html>
    <head>
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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
        <link rel='preconnect' href='https://use.fontawesome.com'>
        <link rel='dns-prefetch' href='https://use.fontawesome.com'>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.js') }}"></script>

        <script>
          //<![CDATA[
         document.cookie = 'cross-site-cookie=bar; SameSite=None; Secure';
          //]]>
         </script>
    @yield('style-product')
    @yield('style-checkout')   
      
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

  <div class="band2">
            <img loading="lazy" src="{{ asset('img/band/mex.jpg') }}" title="México" class="banderin eu" align="right" style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/eu.jpg') }}" title="EUA" class="banderin can" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/can.jpg') }}" title="Canada" class="banderin mex" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/ar.jpg') }}" title="Argentína" class="banderin ar" align="right"  style="position: absolute; color:white;">
            <img loading="lazy"src="{{ asset('img/band/col.jpg') }}" title="Colombia" class="banderin colo" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/chi.jpg') }}" title="Chíle" class="banderin chi" align="right"  style="position: absolute; color:white;">
            <img loading="lazy" src="{{ asset('img/band/per.jpg') }}" title="Perú" class="banderin per" align="right"  style="position: absolute; color:white;">
            <p style="position: absolute; color:black;"  class="envi2"> Envios Nacionales e Internacionales | <label for="idioma"> <select class="select-idioma" name="idiomas" id="idiomas" onchange="location = this.value;">
            <option value="{{ url('/eng') }}">English</option>
            <option value="{{ url('/') }}">Español</option>
            </select></label></p>
            <p style="position: absolute; color:black;"  class="envi2b"> Envíos Gratis Nacionales y a Frontera</p>
        </div>
        <!-- <div class="navbar navbar-expand-lg navbar-light bg-light" style="margin-top: 5px; margin-bottom: 5px;!important;"> -->

        <div id="button2" for="button2" class="container-fluid mb-4 bg-light bande" style="background: white;">
        <p class="band" style="position: absolute; color:black;  font-size:75%; right:42%; top:0.5%" > Envios Nacionales e Internacionales | <label for="idioma"> <select class="select-idioma" name="idiomas" id="idiomas" onchange="location = this.value;">
            <option value="{{ url('/eng') }}">English</option>
            <option value="{{ url('/') }}">Español</option>
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
                <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
                <form id="demo-b" class="search-box">
                    <input type="text" placeholder="Buscar" class="search_box">
                    <button type="submit" class="go-icon"><i class="fas fa-search"></i></button>
                </form>
                <div class="search_input form_group" hidden>
                    <input type="text" class="form_control search_text search_box" >
                </div>
          <!-- Icono carrito -->
          	<div style="color:white;" class="navcarrito cart_anchor"><a href="{{ url('eng/mycart') }}" id="cart"><img loading="lazy" src="{{ asset('img/shopping2.png') }}" style="width: 30px;"></a><span class="outbadge" style="font-family:arial;color: white; font-size: 12px;"> {{ $cant_cart}}</span></div>
          <!-- Menu de carrito -->
            </nav>
        </div>


        @yield('content')
        @yield('script')

        
<!-- Footer -->    
        <a href="{{url("/catalogo")}}" target="_blank" class="btn-flotante2" style="margin-bottom: 40px;"><i class="fas fa-download"></i> <span style="padding-right: 10px;"> &nbsp Catalogue</span></a>
        <a href="https://api.whatsapp.com/send?phone=+52-(222)4943993&text=¡Hola,%20estoy%20interesad@%20en%20comprar%20Juegos!" class="btn-flotante" target="blank"><i class="fab fa-whatsapp"></i>&nbsp &nbsp Contact us!</a>

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
                <a href="{{ url('eng/privacy-policies') }}">Notice of Privacy  </a> | <a href="{{ url('eng/offices') }}">Branch offices </a> | <a href="{{ url('eng/terms-and-conditions') }}">Terms of use</a>
                <br><br>
                <b class="dere">Alabío © <?php echo date('Y'); ?> - All rights reserved </b>
            </center>
            <br><br>
        </div>


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

  
</script>

@yield('script')
</body>
</html>
