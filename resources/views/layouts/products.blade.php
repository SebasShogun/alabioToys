@extends('alabio')
@section('meta')
    <title>{{$category->meta_title}}</title>
    <meta name="description" content="{{$category->meta_description}}">
    <meta name="keywords" content="{{$category->meta_keywords}}">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    @php
    $datetoday = strtotime(date("d-m-Y H:i:00",time()));
    $datepromb = strtotime("09-11-2020 00:00:00");
    $dateprome = strtotime("20-11-2020 23:59:59");   
@endphp
@endsection
  
@section('content')

<!--  -->
 
<div class="container-fluid" style="background-color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <br>
    <div class="present">
        <div class="text-present">
          <h2 class="stilo">{{$category->name}}</h2>
            <a href="{{ url('/') }}">Inicio</a><b> / Categorías</b>
         </div>
    </div>
    
    <br>

    <div class="lateral" style="box-shadow: 0 5px 1px 0 rgba(0, 0, 0, 0.2), 0px 2px 2px 0 rgba(0, 0, 0, 0.19);">
      <h6 style="padding-left:5%; padding-top: 5%; color: #4484CE ">Precio</h6>
          <a href="{{ url("/filter?em=&ep=&pm=0&pp=450") }}"  class="menulateral" >Menos de $450</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[0]}})</a><br>
          <a href="{{ url("/filter?em=&ep=&pm=450&pp=1000") }}" class="menulateral">$450 a $1,000</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[1]}})</a><br>
          <a href="{{ url("/filter?em=&ep=&pm=1000&pp=5000") }}" class="menulateral">$1,000 a $5,000</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[2]}})</a> <br>
          <a href="{{ url("/filter?em=&ep=&pm=5000&pp=10000") }}" class="menulateral">$5,000 a $10,000</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[3]}})</a><br>
          <a href="{{ url("/filter?em=&ep=&pm=10000&pp=") }}" class="menulateral">Más de $10,000</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[4]}})</a><br>
          <a style="padding-top: 10px; padding-left:5%"><input type="number" placeholder="Mínimo" id="pm"> / <input id="pp" type="number" placeholder="Máximo">&nbsp; <i style="color: #4484CE ; cursor: pointer;" class="fa fa-search" onclick="filter()" ></i></a>
          
          <h6 style="padding-left:5%; padding-top: 5%; color: #4484CE ">Categorías</h6>
          <a class="menulateral" href="{{ url('/category/Accesorios') }}">Accesorios</a><br>
          <a class="menulateral" href="{{ url('/category/Acuáticos') }}">Acuáticos</a><br>
          <a class="menulateral" href="{{ url('/category/Arcos_de_Meta') }}">Arcos de Meta</a><br>
          <a class="menulateral" href="{{ url('/category/Carpas_Inflables') }}">Carpas Inflables</a><br>
          <a class="menulateral" href="{{ url('/category/Carpas_Publicitarias') }}">Carpas Publicitarias</a><br>
          <a class="menulateral" href="{{ url('/category/De_Temporada') }}">De Temporada</a> <br>
          <a class="menulateral" href="{{ url('/category/Extremos') }}">Extremos</a>  <br>
          <a class="menulateral" href="{{ url('/category/Futbolitos_Y_Arcades') }}">Futbolitos Y Arcades</a><br>
          <a class="menulateral" href="{{ url('/category/Inflables_para_Casa') }}">Inflables Para Casa</a>  <br>
          <a class="menulateral" href="{{ url('/category/Juegos_de_Feria') }}">Juegos de Feria</a><br>
          <a class="menulateral" href="{{ url('/category/Juegos_Didacticos') }}">Juegos Didácticos</a><br>
          <a class="menulateral" href="{{ url('/category/Mobiliario') }}">Mobiliario</a><br>
          <a class="menulateral" href="{{ url('/category/Pantallas_Inflables') }}">Pantallas Inflables</a><br>
          <a class="menulateral" href="{{ url('/category/Pelotas_Gigantes') }}">Pelotas Gigantes Y Esferas</a><br>
          <a class="menulateral" href="{{ url('/category/Replicas') }}">Replicas</a><br>
          <a class="menulateral" href="{{ url('/category/Sensores') }}">Sensores</a>  <br>
          <a class="menulateral" href="{{ url('/category/Sky_Dancers') }}">Sky Dancers</a><br>
          <a class="menulateral" href="{{ url('/category/Inflables_Techados') }}">Techados</a><br> 
          <a class="menulateral" href="{{ url('/category/Temáticos') }}">Temáticos</a><br>
          <a class="menulateral" href="{{ url('/category/Pequeños') }}">Pequeños</a><br>
		      <a class="menulateral" href="{{ url('/category/Medianos') }}">Medianos</a><br>
          <a class="menulateral" href="{{ url('/category/Gigantes') }}">Gigantes</a><br>
                      

          
          <h6 style="padding-left:5%; padding-top: 5%; color: #4484CE ">Rango de Edad</h6>
          <a href="{{ url("/filter?em=&ep=3&pm=&pp=") }}" class="menulateral">Menos de 4 años</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[5]}})</a><br>
          <a href="{{ url("/filter?em=4&ep=4&pm=&pp=") }}" class="menulateral">4 años</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[6]}})</a><br>
          <a href="{{ url("/filter?em=5&ep=6&pm=&pp=") }}" class="menulateral">5 a 6 años</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[7]}})</a> <br>
          <a href="{{ url("/filter?em=7&ep=11&pm=&pp=") }}" class="menulateral">7 a 11 años</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[8]}})</a><br>
          <a href="{{ url("/filter?em=12&ep=&pm=&pp=") }}" class="menulateral">12 años o más</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[9]}})</a><br><br>
          
    </div>
    <div class="filterpop" >
      <a style="color: #549cdb; font-size: 15px; cursor: pointer" data-toggle="modal" data-target="#exampleModal"><img src="{{ asset('img/filter.png') }}" width="25px">
      &nbsp; Filtrar</a>
    </div>
    
    <div class="container-fluid content-product tienda-container">
    @if($category->id == 8)
      <div class="container-fluid">
              <center>
                    <img loading="lazy" src="{{ asset('img/banner_3_vpc.png') }}" alt="..." style=" width:100%;">
              </center>
              <br><br>
            @elseif($category->id == 9)
              <center>
                  <img loading="lazy" src="{{ asset('img/banner_3_vpc.png') }}" alt="..." style=" width:100%;"> <br><br>
              
              <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <div class="button-group filter-button-group">
                            <button class="btn btn-warning btn-sm" style="color:black; font-weight: bold;" data-filter=".arbercas">Albercas </button>
                            <button class="btn btn-warning btn-sm" style="color:black; font-weight: bold;" data-filter=".pelotas">Pelotas</button>
                            <button class="btn btn-warning btn-sm" style="color:black; font-weight: bold;" data-filter=".tapetes">Tapetes</button>
                            <button class="btn btn-warning btn-sm" style="color:black; font-weight: bold;" data-filter=".estimulacion">Sets Estimulación</button>
                            <button class="btn btn-warning btn-sm" style="color:black; font-weight: bold;" data-filter=".temprana">Figuras Estimulación</button>
                            <button class="btn btn-warning btn-sm" style="color:black; font-weight: bold;" data-filter=".gimnasio">Gimnasios Infantiles</button>
                        </div>
                    </div>
                </div>
              </div>
              </center>
      </div>
      <br><br>
      <div class="container-fluid content-product tienda-container">
      @endif
    <div class="row row-cols-8">
      @foreach($services as $items)
      <div class="column">
        <div class="card card-hover">
          @if($items->image_url)
          <a href="{{ $items->drupal_path }}"><img loading="lazy" src="{{ asset($items->image_url) }}" class="tam-img"></a>
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
        <b class="prueba2">{{ $items->shipping_tag }}</b>
          <hr class="ocul2">      
          <div class="reveal">
            @if($items->title)
          <b class="inflable-title ocul2">{{ $items->title }}</b>
          @else
          <b class="inflable-title">{{ $items->name }}</b>
          @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- Codigo de popup -->
      <!-- @if($category->id == 8)
      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onclick="$('#myModal').modal('hide')" style="flex-direction: inherit;">
        <div class="modal-dialog">
          <div class="modal-content" style="flex-direction: inherit;">
            <img src="{{ asset('img/casain.jpg') }}">      
          </div>
        </div>
      </div>
      @elseif($category->id == 9)
      <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" onclick="$('#myModal').modal('hide')" style="flex-direction: inherit;">
        <div class="modal-dialog">
          <div class="modal-content" style="flex-direction: inherit;">
            <img src="{{ asset('img/popup-d.jpg') }}">      
          </div>
        </div>
      </div>
      @endif -->


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
          <div class="modal-content">
            <div style="background-color: #E7E4E4">
              <i style="padding-left:5%; padding-top: 5%; color:#00A9E0; font-size: 30px;" class="fa fa-arrow-left" data-dismiss="modal"></i>
              <br><br><b style="padding-left:5%; padding-top: 5%; font-size: 30px; ">Filtrar por</b><br><br>
              <a onclick="showpriceo()" style="padding-left:5%; padding-top: 5%; font-size: 20px; ">Precio<i class="fa fa-angle-down" style="color:#00A9E0; margin-left: 65%"></i></a><br><br>
                  <div class="priceo" hidden>
                  <a href="{{ url("/filter?em=&ep=&pm=0&pp=450") }}"  class="menulateral" >Menos de $450</a>&nbsp; <a  style="color: gray">({{$totales[0]}})</a><br><br>
                  <a href="{{ url("/filter?em=&ep=&pm=450&pp=1000") }}" class="menulateral">$450 a $1,000</a>&nbsp; <a style="color: gray">({{$totales[1]}})</a><br><br>
                  <a href="{{ url("/filter?em=&ep=&pm=1000&pp=5000") }}" class="menulateral">$1,000 a $5,000</a>&nbsp; <a  style="color: gray">({{$totales[2]}})</a> <br><br>
                  <a href="{{ url("/filter?em=&ep=&pm=5000&pp=10000") }}" class="menulateral">$5,000 a $10,000</a>&nbsp; <a  style="color: gray">({{$totales[3]}})</a><br><br>
                  <a href="{{ url("/filter?em=&ep=&pm=10000&pp=") }}" class="menulateral">Más de $10,000</a>&nbsp; <a  style="color: gray">({{$totales[4]}})</a><br><br>
                  <a style="padding-top: 10px; padding-left:5%"><input type="number" placeholder="Mínimo" id="pm2" class="nin">-<input id="pp2" type="number" class="nin" placeholder="Máximo">&nbsp; <i style="color: gray; cursor: pointer;" class="fa fa-chevron-circle-right" onclick="filter2()" ></i></a>
                  </div>
                  <hr>
                  <a onclick="showcato()" style="padding-left:5%; padding-top: 5%; font-size: 20px; ">Categorías<i class="fa fa-angle-down" style="color:#00A9E0; margin-left: 50%"></i></a><br><br>
                  <div class="cato" hidden>
                  <a class="menulateral" href="{{ url('/category/Accesorios') }}">Accesorios</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Acuáticos') }}">Acuáticos</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Arcos_de_Meta') }}">Arcos de Meta</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Carpas_Inflables') }}">Carpas Inflables</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Carpas_Publicitarias') }}">Carpas Publicitarias</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Decorativos') }}">De Temporada</a> <br><br>
                  <a class="menulateral" href="{{ url('/category/Extremos') }}">Extremos</a>  <br><br>
                  <a class="menulateral" href="{{ url('/category/Futbolitos_Y_Arcades') }}">Futbolitos Y Arcades</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Inflables_para_Casa') }}">Inflables Para Casa</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Juegos_de_Feria') }}">Juegos de Feria</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Juegos_Didacticos') }}">Juegos Didacticos</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Mobiliario') }}">Mobiliario</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Pantallas_Inflables') }}">Pantallas Inflables</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Pelotas_Gigantes') }}">Pelotas Gigantes Y Esferas</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Replicas') }}">Replicas</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Sensores') }}">Sensores</a>  <br> <br> 
                  <a class="menulateral" href="{{ url('/category/Sky_Dancers') }}">Sky Dancers</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Inflables_Techados') }}">Techados</a><br><br> 
                  <a class="menulateral" href="{{ url('/category/Temáticos') }}">Temáticos</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Pequeños') }}">Pequeños</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Medianos') }}">Medianos</a><br><br>
                  <a class="menulateral" href="{{ url('/category/Gigantes') }}">Gigantes</a><br><br><br>
                  </div>
                  <hr>
                  <a onclick="showedado()" style="padding-left:5%; padding-top: 5%; font-size: 20px; ">Rango de Edad<i class="fa fa-angle-down" style="color:#00A9E0; margin-left: 35%"></i></a><br><br>
                    <div class="edado" hidden>
                      <a href="{{ url("/filter?em=&ep=3&pm=&pp=") }}" class="menulateral">Menos de 4 años</a>&nbsp; <a  style="color: gray">({{$totales[5]}})</a><br><br>
                      <a href="{{ url("/filter?em=4&ep=4&pm=&pp=") }}" class="menulateral">4 años</a>&nbsp; <a  style="color: gray">({{$totales[6]}})</a><br><br>
                      <a href="{{ url("/filter?em=5&ep=6&pm=&pp=") }}" class="menulateral">5 a 6 años</a>&nbsp; <a style="color: gray">({{$totales[7]}})</a> <br><br>
                      <a href="{{ url("/filter?em=7&ep=11&pm=&pp=") }}" class="menulateral">7 a 11 años</a>&nbsp; <a  style="color: gray">({{$totales[8]}})</a><br><br>
                      <a href="{{ url("/filter?em=12&ep=&pm=&pp=") }}" class="menulateral">12 años o más</a>&nbsp; <a style="color: gray">({{$totales[9]}})</a><br><br>
                    </div>
 
                  </div>
              </div>
          </div>
        </div>
    </div>
</div> 

</div> 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="text/javascript">

   setTimeout(function(){
       $('#myModal').modal('show');
   }, 2000);
function filter()
{
  $url="/filter";
  window.location.href = $url.concat('?pm=',$('#pm').val(),'&pp=',$('#pp').val());
}
function filter2()
{
  $url="/filter";
  window.location.href = $url.concat('?pm=',$('#pm2').val(),'&pp=',$('#pp2').val());
}
function getget()
{
  
  $('#em').val(getQueryVariable('em'));
  $('#ep').val(getQueryVariable('ep'));
  $('#pp').val(getQueryVariable('pp'));
  $('#pm').val(getQueryVariable('pm'));
}
function getQueryVariable(variable) {
   var query = window.location.search.substring(1);
   var vars = query.split("&");
   for (var i=0; i < vars.length; i++) {
       var pair = vars[i].split("=");
       if(pair[0] == variable) {
           return pair[1];
       }
   }
   return null;
}
function showpriceo()
{
  $attr = $('.priceo').attr("hidden"); 
if (typeof $attr !== typeof undefined && $attr !== false) { 
    $('.priceo').removeAttr("hidden");
} 
else{
  $('.priceo').attr("hidden",true);
}
 
}
function showedado()
{
  $attr = $('.edado').attr("hidden"); 

if (typeof $attr !== typeof undefined && $attr !== false) { 
    $('.edado').removeAttr("hidden");
} 
else{
  $('.edado').attr("hidden",true);
}
 
}
function showcato()
{
  $attr = $('.cato').attr("hidden"); 

if (typeof $attr !== typeof undefined && $attr !== false) { 
    $('.cato').removeAttr("hidden");
} 
else{
  $('.cato').attr("hidden",true);
}
 
}
</script>
@endsection 