@extends('eng.alabio')
@section('meta')
    <title>{{$OneService->meta_titlei}}</title>
    <meta name="description" content="{{$OneService->meta_desci}}">
    <meta name="keywords" content="{{$OneService->meta_keywordsi}}">
    <link rel="stylesheet" href="{{ asset('/css/OneProduct.css') }}" type="text/css"> 
    <script src="{{ asset('/js/product.js')}}"></script>
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    @php
                  $datetoday = strtotime(date("d-m-Y H:i:00",time()));
                  $datepromb = strtotime("09-11-2020 00:00:00");
                  $dateprome = strtotime("20-11-2020 23:59:59");   
    @endphp
    @endsection
    @section('content')
 
<link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick.css') }}"/>

<link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}"/>
<style type="text/css">


.car{
  font-size: 13px;
}



.quantity {
  position: relative;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button
{
  -webkit-appearance: none;
  margin: 0;
}

input[type=number]
{
  -moz-appearance: textfield;
}

.quantity input {
            width: 60px;
            height: 30px;
            line-height: 1;
            float: left;
            display: block;
            padding: 0;
            margin: 0;
            border: 1px solid #eee;
        }

        .quantity input:focus {
            outline: 0;
        }

        .quantity-nav {
            float: left;
            position: relative;
            height: 30px;
            color: white;
            margin-left: 0%;
            margin-top: 0.4%;
        }

        .quantity-button {
            position: relative;
            cursor: pointer;
            border-left: 1px solid #eee;
            width: 40px;
            text-align: left;
            color: #333;
            font-size: 20px;
            font-family: "Trebuchet MS", Helvetica, sans-serif !important;
            line-height: 1;
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
        }

        .quantity-button.quantity-up {
            position: absolute;
            border-radius: 5px 5px 0 0;
            height: 50%;
            top: 0;
            color: white;
            background-color: gray;
            width: 30px;
        }

        .quantity-button.quantity-down {
            position: absolute;
            border-radius: 0 0 5px 5px;
            bottom: -1px;
            height: 50%;
            color: white;
            background-color: gray;
            width: 30px;
        }



.slick-slide {
    margin: 0 10px;
}
.slick-list {
    margin: 0 -10px;
}

/* Arrows */
.slick-prev,
.slick-next
{
    font-size: 0;
    line-height: 0;

    position: absolute;
    top: 50%;

    display: block;

    width: 20px;
    height: 20px;
    padding: 0;
    -webkit-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);

    cursor: pointer;

    color: transparent;
    border: none;
    outline: none;
    background: transparent;
}
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus
{
    color: transparent;
    outline: none;
    background: transparent;
}
.slick-prev:hover:before,
.slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before
{
    opacity: 1;
}
.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before
{
    opacity: .25;
}

.slick-prev:before,
.slick-next:before
{
    font-size: 30px;
    line-height: 1;

    opacity: .75;
    color: #00A9E0;

    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev
{
    left: -25px;
}
[dir='rtl'] .slick-prev
{
    right: -25px;
    left: auto;
}

.slick-next
{
    right: -15px;
}
[dir='rtl'] .slick-next
{
    right: auto;
    left: -25px;
}

#fordsk
   {
       display: block;
   }
   .formob
   {
       display: none;
   }
   .tache{
      background: url("/img/tachado.png") center center;
    }
@media only screen and (max-width: 580px) {
  #fordsk
   {
       display: none;
   }
   .formob
   {
       display: block;
   }
   }
@media only screen and(max-width: 600px){
  .slick-dots li{        
        display: inline-block;
    }
}
</style>


<div class="container" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color:white;">
<br>
<div class="row row-cols-1 row-cols-sm-2 margenes">

          @php
              $cant = count($picture);
          @endphp
        <!-- FIRST COLUMN -->
        <div class="col-md f-izq" style="background-color: white; padding-right: 8%;">
            <!-- MOBILE TITLE -->
            <div class="oculto" style="text-align: left; padding-left: 8%;">
                @if ($OneService->titlei !=null)
                    <strong><b class="product-titulo" style="font-weight: bold;" itemprop="name">{{$OneService->titlei}}</b></strong>
                @else
                    <strong><b class="product-titulo" style="font-weight: bold;" itemprop="name">{{$OneService->name}}</b></strong>
                @endif
            </div>
  
            <div class="product-gallery" style="background-color: white;">
            <!--THUMBNAILS START-->
            <div class="product-photos-side">
                        <div class="swiper-wrapper">
                            @if($OneService->image_url)
                                <div class="swiper-zoom-container">
                                    <img loading="lazy" src="{{ $OneService->image_url }}">
                                </div>
                            @else
                                <div class="swiper-zoom-container">
                                    <img loading="lazy" src="{{ asset('/img/img-available.png') }}">
                                </div>
                            @endif

                            @for ($i = 1; $i < $cant; $i++)
                                <div class="swiper-zoom-container">
                                    <img loading="lazy" src="{{ asset("/uploads/services/gallery/".$picture[$i]->picture) }}">
                                </div>
                            @endfor

                            @if($OneService->video_url != null)

                                <div class="swiper-zoom-container">
                                    @php
                                        $url=$OneService->video_url;
                                        $fetch=explode("v=", $url);
                                        $videoid=$fetch[1];
                                        echo '<style>
                                        .cover2 { padding: 10px;  background: url(http://img.youtube.com/vi/'.$videoid.'/0.jpg) no-repeat; background-size: 100% 90%;}
                                        </style>
                                        <div class="cover2"> <img loading="lazy" src="'.asset('/img/playvideo.png').'"  class="modal-hover-opacity image" itemprop="image" style="margin-left: 5%" /> </div>
                                        ';
                                    @endphp
                                </div>
                            @endif
                        </div>
                    </div>

                    @if($OneService->video_url != null)
                        <input type="hidden" value="{{ $OneService->video_url }}" id="myvideo">
                    @endif

                    <div class="product-photos-main">
                        <div class="swiper-wrapper">
                            @if($OneService->image_url)
                                <div>
                                    <img id="anima" loading="lazy" src="{{ $OneService->image_url }}" onclick="onClick(this,0)" class="modal-hover-opacity image" style="border-radius: 10px" itemprop="image">
                                </div>
                            @else
                                <div>
                                    <img id="anima" loading="lazy" src="{{ asset('/img/img-available.png') }}" onclick="onClick(this,0)" class="modal-hover-opacity image" style="border-radius: 10px" itemprop="image">
                                </div>
                            @endif

                            @for ($i = 1; $i < $cant; $i++)
                                <div>
                                    <img loading="lazy" src="{{ asset("/uploads/services/gallery/".$picture[$i]->picture) }}" onclick="onClick(this,0)" class="modal-hover-opacity image" style="border-radius: 10px" itemprop="image">
                                </div>
                            @endfor

                            @if($OneService->video_url != null)
                                <div>
                                    @php
                                        $url=$OneService->video_url;
                                        $fetch=explode("v=", $url);
                                        $videoid=$fetch[1];
                                        echo '<style>
                                        .cover { padding: 0px; padding-right: 0px; background: url(http://img.youtube.com/vi/'.$videoid.'/0.jpg) no-repeat; background-size: 100% 100%;}
                                        </style>
                                        <div class="cover"> <img loading="lazy" src="'.asset('/img/playvideo.png').'" onclick="onClick(this,1)" class="modal-hover-opacity image" style="border-radius: 10px" itemprop="image" style="margin-left: 15%" /> </div>
                                        ';
                                    @endphp
                                </div>
                            @endif
                      </div>
                </div>
            </div>   
        </div>
        <!-- PRODUCT IMAGE MODAL -->
        <div id="modal01" class="modal" onclick="this.style.display='none'">
              <div class="modal-content-prod">
                  <img id="img01" style="max-width: 200%;">
                  <iframe width="500" height="375" id="vid01" src="{{ str_replace("watch?v=", "embed/",$OneService->video_url) }}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
              </div>
        </div>

        <!-- SECOND COLUMN -->
        <div class="col-md td prod_info" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
            @if ($OneService->titlei !=null)
                <strong><b class="product-titulo oculto2" style="font-weight: bold; text-align: left;" itemprop="name">{{$OneService->titlei}}</b></strong>
            @else
                <strong><b class="product-titulo oculto2" style="font-weight: bold;" itemprop="name">{{$OneService->name}}</b></strong>
            @endif
     
            @if ($OneService->price>0)
            @php 
                $OneService->price = $OneService->price/$dollar;
            @endphp
                @if($OneService->amount_pue > 0 || $OneService->amount_qro > 0 || $OneService->amount_ver > 0)
                    @if($datetoday > $datepromb && $datetoday < $dateprome)
                    <div class="table">
                        <div class="row">
                            <div class="col-sm-8" >
                                Black Friday:
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 my-auto" style="font-size: 11px; padding-right: 0;margin-right:-4%">
                                <a class="tache">De ${{number_format($OneService->price,2)}}</a> a
                            </div>
                            <div class="col-sm-3 my-auto" style="padding-right: 0; margin-right:3%;">
                                <b style="font-size: 18px;" itemprop="price">${{number_format($OneService->price*0.80,2)}}</b> 
                            </div>
                            <div class="col-sm-4 my-auto" style="font-size: 10px; padding-right: 0;">
                                Pagando en efectivo o transferencia.
                            </div>
                            <!--<div class="col-sm-1" style="color:#00a650; font-size: 10px; padding-right: 0;">
                            20% Desc. Incluido
                            </div>-->
                        </div><br>
                        <div class="row">
                            <div class="col-sm-3 my-auto" style="font-size: 10px; padding-right: 0; margin-right:-4%">
                                <a class="tache"> De ${{number_format((($OneService->price*1.039)),2)}} </a> a
                            </div>
                            <div class="col-sm-3 my-auto" style="padding-right: 0; margin-right:-4%;">
                              <a style="font-size: 15px;" itemprop="price">${{number_format(((($OneService->price*0.85)*1.039)),2)}}</a>
                            </div>
                            <div class="col-sm-4 my-auto" style="font-size: 10px; padding-right: 0;">
                              Paying with credit card, debit or paypal.
                            </div>
                            <!--<div class="col-sm-1" style="color:#00a650; font-size: 10px; padding-right: 0;">
                            20% Desc. Incluido
                            </div>-->
                        </div>   
                        <div class="row">
                            <div class="col-sm-12 my-auto" style="font-size: 8px; padding-right: 0; color:gray;">
                              'Buen Fin' Discount: 20% Discount paying with cash or transfer and 15% paying with card. The above prices are VAT included.
                            </div>
                        </div>   
                    </div>       
                  @else
                      <!-- PRICES-->
                      <!-- If you are going to change something in this part, keep in mind the following part of prices -->
                      <b class="precio-texto" itemprop="price">${{number_format($OneService->price,2)}}</b>
                      <b style="font-size: 11px; padding-right: 0; font-weight: bold;">&nbsp;&nbsp; Paying in cash or transfer.</b><br>
                      <a class="precio-texto" itemprop="price">${{number_format(($OneService->price*1.039),2)}}</a>
                      <b style="font-size: 11px; padding-right: 0; font-weight: 500;">&nbsp;&nbsp;  Paying with credit card, debit or paypal.</b><br>
                    <br><br>
                  @endif
                  @else
                      <b class="precio-texto" itemprop="price">${{number_format($OneService->price,2)}}</b><b style="font-size: 11px; font-weight: bold; padding-right: 0; font-weight: 700;">
                      &nbsp;&nbsp;  Paying in cash or transfer.</b><br>
                      <a class="precio-texto" itemprop="price">${{number_format(($OneService->price*1.039),2)}}</a><b style="font-size: 9px; padding-right: 0; font-weight: 500;">
                      &nbsp;&nbsp;  Paying with credit card, debit or paypal.</b><br>
                    <br><br>
                  @endif
                  @endif

                  <!-- ICONOS DE DESCRIPCIÓN -->
                  <div class="container">
                        <div class="row">
                            <div class="col-2" >
                                <img loading="lazy" src="{{ asset('img/icon-medida.png') }}" class="icon-producto"><br>
                            </div>
                            <div class="col-10" style="padding: 0%;" id="description" itemprop="description">
                                <b class="icon-letras"> @if($OneService->longx>0 || $OneService->width>0 || $OneService->height>0) Measures: @if($OneService->longx>0)Largo {{(float)$OneService->longx}} m,@endif @if($OneService->width>0) Ancho {{(float)$OneService->width}} m,@endif @if($OneService->height>0) Alto {{(float)$OneService->height}} m @endif @endif </b>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-2">
                                <img loading="lazy" src="{{ asset('img/icon-elabora.png') }}" class="icon-producto"><br>
                            </div>
                            <div class="col-10" style="padding: 0%;" >
                            <b class="icon-letras">Manufacturing time:  </b>
                                    @if ($OneService->amount_pue > 0 || $OneService->amount_qro > 0 || $OneService->amount_ver > 0)
                                        <b style="font-weight: bold; font-size:12px; color: black;">Immediate delivery.</b>
                                    @else
                                        <strong><b style="font-weight: bold; font-size:13px; color: black;">{{$OneService->web_production_time}} days</b></strong>
                                    @endif
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-2">
                                <img loading="lazy" src="{{ asset('img/icon-envio.png') }}" class="icon-producto"><br>
                            </div>
                            <div class="col-10" style="padding: 0%;" >
                                <b class="icon-letras" style="font-weight: bold;">@foreach ($shippinmethods as $item) {{$item->shipping_tag}}<br>@endforeach</b>
                            </div>
                        </div>
                  </div> <br>

                  <!-- FIN DE ICONOS DE DESCRIPCIÓN -->
                  <div class="container-fluid">

                  <!-- COMPRA GENERAL -->
                  <div class="row">  

                  <div class="col-12 quantity">
                        @if ($OneService->price>0) 
                        <b style="font-size: 13px; font-weight: bold; color:black;" >Quantity:</b><br>
                            <input type="number" id="amount" min="{{$OneService->minimal}}" pattern="[0-9]*" max="{{$OneService->amount}}" step="1" value="{{$OneService->minimal}}" onchange="javascript: if (this.value > {{$OneService->amount}}){ this.value = {{$OneService->amount}};} else if (this.value < {{$OneService->minimal}}) {this.value = {{$OneService->minimal}} ;}" type="number" style="width: 35%; height: 33px; border:ridge; border-radius: 8px; font-weight: bold; text-align:center; padding-right:20px;" >            
                            <div class="quantity-nav">
                                  <div class="quantity-button quantity-up ocultar-movil" style="font-size: 16px; font-weight: bold; text-align: center;" >+</div>
                                  <div class="quantity-button quantity-down ocultar-movil" style="font-size: 16px; font-weight: bold; text-align: center;" >-</div>
                            </div>
                  </div> 

                  <div class="col-12">
                      <br>
                      @if (count($variants) > null)
                          <select class="form-control" id="variant_id">
                              @foreach ($variants as $item)
                          <option value="{{$item->id}}">{{$item->attr}}</option>
                              @endforeach
                          </select> 
                          @endif
                  </div>

                  <div class="col-12">
                      <button type="submit" id="add_cart_button" name="add-to-cart" class="btn btn-secondary btn-sm add-to-cart" value="{{$OneService->id}}" onclick="addcart();">Add to Cart</button>     
                      <button type="button" class="btn boton-compra btn-sm" onclick="buy_now();">Buy Now </button>         
                  </div>
                  <div class="col-12" id="aggcart" hidden style="color: #F9CF00; font-size: 13px; font-weight: bold;">Add to Cart</div>
                  @endif    


                  <div class="col-12" style="margin-top:10px;">
                      <span class="posted_in"style="font-size: 12px" >Category: <a href="{{ url('/category/'.str_replace(" ", "_",$mycat->name)) }}" rel="tag">{{$mycat->name}}</a></span>
                              &nbsp &nbsp
                      <span class="posted_in" style="font-size: 12px" id="sku" itemprop="sku">SKU: <b style="font-size: 13px">{{$OneService->SKU}}</b></span>
                      <br><br>
                  </div>
                  <!-- FIN DE COMPRA-->
                  </div> </div>
      
    
            
            <!-- <div class="row" style="margin-top: -3%;">
                <div class="col" style="flex-grow: 0.2">
                  <img src="{{ asset('img/actualizar.png') }}" width="25%">
                </div>
                <div class="col" style="margin: 0% -5% 0 0; margin-left: -16%;">
                    <div style="width: 80%">
                      <b style="font-size: 13px; font-weight: 500;">Did the product come to you with a problem or you just don't like it?
                      </b>
                    </div>
                    <b style="font-weight: 500; font-size: 13px;">You will have 15 days to
                    </b> <a href="{{ url("/eng/devoluciones") }}" style="font-size: 13px; font-weight: 600">return it for free.          </a><br>
                    <br>
                </div>
            </div> -->
      <br>
      
                
              
  </div>
  <div class="col-md fondo f-der" style="background-color: white;">
    <br>
    <div class="container">
    <!-- TABS DE INFORMACIÓN -->
     <div class="tabs">
            <input type="radio" name="tabs" id="tabone" checked="checked">
            <label for="tabone" id="tabone-content"><i class="fas fa-clipboard-list" style="font-size: 25px;"></i></label>
            <div class="tab" id="tabone-content">  
            <div class="background-color-1">
            <center><b style="font-size: 18px; font-weight: 700; text-align: center;">Characteristics</b>
            <hr>
                <p class="icon-letras">     
                </center>
                    <div class="car" id="description" itemprop="description" style="text-align: left;">
                            <!-- @if($OneService->longx>0 || $OneService->width>0 || $OneService->height>0) <li class="list-caract">Medida: @if($OneService->longx>0)Largo {{(float)$OneService->longx}} m,@endif @if($OneService->width>0) Ancho {{(float)$OneService->width}} m,@endif @if($OneService->height>0) Alto {{(float)$OneService->height}} m @endif</li>@endif
                            @if($OneService->weight>0)<li class="list-caract">Peso: {{(float)$OneService->weight}} Kg</li>@endif
                            @if($OneService->minage>0 && $OneService->maxage>0)<li class="list-caract">Edad recomendada: {{$OneService->minage}} – {{$OneService->maxage}} años</li>@endif
                            @if($OneService->kids>0)<li class="list-caract">Capacidad de niños recomendado: {{$OneService->kids}} niños al mismo tiempo</li>@endif -->
                            {!! $OneService->short_desci !!} 
                    </div>
            </div>
            </div>
            
            <input type="radio" name="tabs" id="tabtwo">
            <label for="tabtwo" id="tabtwo-content"><i class="fas fa-info-circle" style="font-size: 25px;"></i></label>
            <div class="tab" id="tabtwo-content">
            <center><b style="font-size: 18px; font-weight: 700; text-align: center;">What includes?</b></center><hr>
            <div class="col-12 icon-letras">
              {!! $OneService->long_desci !!}
            </div>
            </div>
            
            <input type="radio" name="tabs" id="tabthree">
            <label for="tabthree" id="tab3-content"><i class="fas fa-truck" style="font-size: 25px;"></i></label>
            
            <div class="tab" id="tab3-content">
            <center><b style="font-size: 18px; font-weight: 700; text-align: center;">Shipment information</b></center><hr>
            <div class="col-12">
                <center>
                <p class="icon-letras">
                        @foreach ($shippinmethods as $item)
                        @if($item->shipping_total > 0)
                            <b>{{$item->shipping_tag}}: </b>${{number_format($item->shipping_total)}}<br>
                        @else
                        <b>{{$item->shipping_tag}}</b><br>
                        @endif
                        @endforeach
                </p></center>
                    <p class="icon-letras" style="text-align: justify; padding-left:18px;">
                    If the parcel does not have access to your home, the package will arrive at the nearest branch.
                </p> 
                </div>
            </div>
            
            <input type="radio" name="tabs" id="tab4">
            <label for="tab4" id="tabfour-content"><i class="fas fa-comment-dollar" style="font-size: 25px;"></i></label>
            <div class="tab"id="tabfour-tab">
            <center><b style="font-size: 18px; font-weight: 700; text-align: center;">Payment Methods</b></center><hr>
                <ul style="list-style:none; font-size: 12px;">
                    <li style="text-align: left;"><a href="{{ asset('eng/method') }}"><img loading="lazy" src="{{ asset('img/spei.png') }}" class="metodos movil-position" alt="SPEI" title="Wire transfers"></a>&nbsp Wire transfers</li>
                    <li style="padding-top:5px; text-align: left;"><a href="{{ asset('eng/method') }}"><img loading="lazy" src="{{ asset('img/visa.png') }}" class="metodos movil-position" alt="VISA" title="12 months of interest-free payments"></a>&nbsp Any Visa card </li>
                    <li style="padding-top:5px; text-align: left;"><a href="{{ asset('eng/method') }}"><img loading="lazy" src="{{ asset('img/mastercard.png') }}" width="20% movil-position" style="padding-left:15px; margin-right:4px;" alt="Master" title="12 months of interest-free payments"></a> &nbsp Any Mastercard card</li>
                    <li style="padding-top:5px; text-align: left;"><a href="{{ asset('eng/method') }}"><img loading="lazy" src="{{ asset('img/american.png') }}" class="metodos movil-position" alt="American " title="12 months of interest-free payments"></a>&nbsp Any American Express card</li>
                    <li style="padding-top:5px; text-align: left;"><a href="{{ asset('eng/method') }}"><img loading="lazy" src="{{ asset('img/PayPal.png') }}" class="metodos movil-position" alt="PayPal" title="Pay in PayPal"></a>&nbsp Pay in PayPal</li>
                    <!-- <li style="padding-top:5px; text-align: left;"><a href="{{ asset('metodos-pago') }}"><img loading="lazy" src="{{ asset('img/mercado.png') }}" class="metodos movil-position" title="Paga en Mercado Pago"></a>&nbsp Paga en Mercado Pago</li> -->
                    
                </ul>
            </div>

            <!-- <input type="radio" name="tabs" id="tabfive">
            <label for="tabfive" id="tabfive-content"><i class="fas fa-star" style="font-size: 25px;"></i></label>
            <div class="tab" id="tabfive-content">
            <center><b style="font-size: 18px; font-weight: 700; text-align: center;">Comentarios</b></center><hr>
            <div class="col-12 icon-letras">
              <b>Elydé Tirzo</b>
            </div>
            <div class="col-12 icon-letras" style="color:yellow;">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="col-12 icon-letras ">
                <p>Fantastico para los niños</p>
            </div>

            <div class="col-12 icon-letras">
              <b>Ruben Aguilar</b>
            </div>
            <div class="col-12 icon-letras" style="color:yellow;">
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
            </div>
            <div class="col-12 icon-letras ">
                <p>Me llegó antes de lo esperado, perfecto estado</p>
            </div>
            </div> -->
  
</div>


   
</div>  

     
        
  </div>
</div>

<!-- DIVIDER -->
<br>
<div class="box1">
<div class="box1-sm yellow "></div>
<div class="box1-sm coral"></div>
</div>
<br>

        <!-- <h2 class="f-izq">Recommended products:</h2>
        <center>
          <div class="responsive" style="width: 80%;">
            @foreach($ser as $items)
             <center>   
                  <div class="card card-hover" style="width: 86%">
                    @if($items->image_url)
                    <a href="{{ $items->drupal_pathi }}"><img src="{{ $items->image_url }}" class="tam-img"></a>
                    @else
                    <a href="{{ $items->drupal_pathi }}"><img src="{{ asset('/img/img-available.png') }}" class="tam-img"></a>      
                    @endif
                    <br>
                    @if ($items->price>0)
                    @php 
                    $items->price = $items->price/$dollar;
                @endphp
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
                      @if($items->titlei)
                    <b class="inflable-title">{{ $items->titlei }}</b>
                    @else
                    <b class="inflable-title">{{ $items->name }}</b>
                    @endif
                    </div>
                  </div>
                
                     
              </center>
              @endforeach             
            </div>
          </center> -->

        <h2 class="f-izq">Products that might interest you:</h2>
        <center>
          <div class="responsive2" style="width: 80%;">
            @foreach($procat as $items)
             <center>   
                  <div class="card card-hover" style="width: 86%">
                    @if($items->image_url)
                    <a href="{{ $items->drupal_pathi }}"><img src="{{ $items->image_url }}" class="tam-img"></a>
                    @else
                    <a href="{{ $items->drupal_pathi }}"><img src="{{ asset('/img/img-available.png') }}" class="tam-img"></a>      
                    @endif
                    <br>
                    @if ($items->price>0)
                    @php 
                  $items->price = $items->price/$dollar;
                @endphp
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
                      @if($items->titlei)
                    <b class="inflable-title">{{ $items->titlei }}</b>
                    @else
                    <b class="inflable-title">{{ $items->name }}</b>
                    @endif
                    </div>
                  </div>
              </center>
              @endforeach             
            </div>
          </center>
          </div>
          <br>
          <br>
@endsection

@section('script')

<script type="text/javascript" src="{{ asset('slick-1.8.1/slick/slick.min.js') }}"></script>
<script type="text/javascript">
        function onClick(element,type) 
        {
        if(type==0)
        {
            document.getElementById("img01").src = element.src;
            document.getElementById("vid01").style.display = "none";
            document.getElementById("img01").style.display = "block";
            document.getElementById("modal01").style.display = "block";
        }
        if(type==1)
        {
            //var url = url.replace("watch?v=", "v/");
            //document.getElementById("vid01").src = $('#myvideo').val()+"&output=embed";
            document.getElementById("img01").style.display = "none";
            document.getElementById("vid01").style.display = "block";
            document.getElementById("modal01").style.display = "block";
        
        }
    }
</script>

<script type="text/javascript">
  $(document).ready(function () {

    // --- Thumbnails ---
    var thumbnailsSlider = $('.product-photos-side .swiper-wrapper').slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                dots: false,
                infinite: false,
                arrows: false,
                adaptiveHeight: false,
                vertical: true,
                swipe: true,
                focusOnSelect: true,
                verticalSwiping: true,
    });

    // --- Gallery ---
    var mainSlider = $('.product-photos-main .swiper-wrapper').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: false,
                infinite: true,
                adaptiveHeight: true,
                autoplay: true,
                touchThreshold: 10,
                touchMove: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 5000,
                responsive: [{
                    breakpoint: 1024,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    autoplay:true,
                    autoplaySpeed:3000,
                    dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay:true,
                    arrows:false,
                    dots: true,
                    autoplaySpeed:3000
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                    slidesToShow: 1,
                    autoplay:true,
                    arrows:false,
                    dots: true,
                    slidesToScroll: 1
                    }
                }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
            ]
        });

    if (thumbnailsSlider[0]) {
        $(thumbnailsSlider.slick('getSlick').$slides.get(mainSlider.slick('getSlick').slickCurrentSlide())).addClass('selected');
    }

    $(mainSlider).on("beforeChange", function (event, slick, current_slide_index, next_slide_index) {
        $(thumbnailsSlider.slick('getSlick').$slides.get(current_slide_index)).removeClass('selected');
        $(thumbnailsSlider.slick('getSlick').$slides.get(next_slide_index)).addClass('selected');
        thumbnailsSlider.slick('getSlick').goTo(next_slide_index);
    });


    var galleryOpen = false,
        fullscreen = false,
        navTimeout,
        fullScreenTrigger = $('.gallery-nav .fullscreen')[0],
        fullScreenGallery = $('.product-gallery-full-screen');


    // --- FUNCTIONS ---

    function openImageGallery() {
        galleryOpen = true;
        fullScreenGallery.addClass('opened');
    }    

    // --- EVENTS ---

    // select image by thumbnail if not dragging
    var thumbnailItem = $('.product-photos-side .slick-slide');
    thumbnailItem.on('mousedown', function () {
        thumbnailItem.on('mouseup mousemove', function handler(evt) {
            if (evt.type === 'mouseup') {
                var index = $(this).data('slick-index');
                mainSlider.slick('slickGoTo', index);
            }
            thumbnailItem.off('mouseup mousemove', handler);
        });
    });

    // close the large image gallery
    $('.gallery-nav .close').on('click', function () {
        closeImageGallery();
    });
    
    // showing gallery nav on mouse movement
    $('.product-gallery-full-screen img').on('mousemove click', function () {
        $('.product-gallery-full-screen .gallery-nav').css('opacity', '.65');
        try {
            clearTimeout(navTimeout);
        } catch (ignored) {
            //ignored
        }
        navTimeout = setTimeout(function () {
            $('.product-gallery-full-screen .gallery-nav').css('opacity', '0');
        }, 3000);
    });

    // navigation
    $('.product-gallery-full-screen .swiper-button-next').on('click', function () {
        $(fullScreenSlider).slick('slickNext');
    });

    $('.product-gallery-full-screen .swiper-button-prev').on('click', function () {
        $(fullScreenSlider).slick('slickPrev');
    });
   
});
</script>

<script>
        $('.quantity-up').click(function(e) {
        e.preventDefault();
			  e.stopImmediatePropagation();
        var oldValue = parseInt($('#amount').val());
        if (oldValue >= $('#amount').attr('max')) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        $('#amount').val(newVal);
      });

      $('.quantity-down').click(function(e) {
        e.preventDefault();
			  e.stopImmediatePropagation();

        var oldValue = parseInt($('#amount').val());
        if (oldValue <= $('#amount').attr('min')) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        $('#amount').val(newVal);
      });

    
</script>
<script type="text/javascript">
  $('.responsive').slick({
dots: false,
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
<script type="text/javascript">
  $('.responsive2').slick({
dots: false,
infinite: true,
speed: 300,
slidesToShow: 4,
slidesToScroll: 1,
autoplay:true,
autoplaySpeed:3000,
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

<script type="text/javascript">
 $(document).ready(function(){
    $('.add-to-cart').on('click',function(){
        //Scroll to top if cart icon is hidden on top
        $('html, body').animate({
            'scrollTop' : $(".cart_anchor").position().top
        });
        //Select item image and pass to the function
        var itemImg = $('#anima');
        flyToElement($(itemImg), $('.cart_anchor'));
    });
});

function flyToElement(flyer, flyingTo) {
    var $func = $(this);
    var divider = 3;
    var flyerClone = $(flyer).clone();
    $(flyerClone).css({position: 'absolute', top: $(flyer).offset().top + "px", left: $(flyer).offset().left + "px", opacity: 1, 'z-index': 1000});
    $('body').append($(flyerClone));
    var gotoX = $(flyingTo).offset().left + ($(flyingTo).width() / 2) - ($(flyer).width()/divider)/2;
    var gotoY = $(flyingTo).offset().top + ($(flyingTo).height() / 2) - ($(flyer).height()/divider)/2;
     
    $(flyerClone).animate({
        opacity: 0.4,
        left: gotoX,
        top: gotoY,
        width: $(flyer).width()/divider,
        height: $(flyer).height()/divider
    }, 700,
    function () {
        $(flyingTo).fadeOut('fast', function () {
            $(flyingTo).fadeIn('fast', function () {
                $(flyerClone).fadeOut('fast', function () {
                    $(flyerClone).remove();
                });
            });
        });
    });
}
</script>
<script type=”application/ld+json”>

  {
  
  “@context”: “http://schema.org”,
  
  “@type”: “Product”,
  
  “aggregateRating”: {
  
  “@type”: “AggregateRating”,
  
  “ratingValue”: “5.0”,
  
  “reviewCount”: “1”
  
  },
  
  “description”: “{!! $OneService->short_desci !!}”,
  
  “name”: “{{$OneService->titlei}}”,
  
  “image”: “{{$OneService->image_url}}“,
  
  “offers”: {
  
  “@type”: “Offer”,
  
  “availability”: “{{$OneService->drupal_pathi}}”,
  
  “price”: “{{$OneService->price}}”,
  
  “priceCurrency”: “USD”
  
  },
  
  “review”: [
  
  {
  
  
  }
  
  ]
  
  }
  
  </script>
@endsection