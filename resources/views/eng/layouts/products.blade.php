@extends('eng.alabio')
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
    <div class="present">
        <div class="text-present">
          <h2>{{$category->name}}</h2>
            <a href="{{ url('/eng') }}">Home</a><b> / Categories</b>
         </div>
    </div>
    <br>

    <div class="lateral" style="box-shadow: 0 5px 1px 0 rgba(0, 0, 0, 0.2), 0px 2px 2px 0 rgba(0, 0, 0, 0.19);">
      <h6 style="padding-left:5%; padding-top: 5%; color: #4484CE ">Price</h6>
          <a href="{{ url("/eng/filter?em=&ep=&pm=0&pp=450") }}"  class="menulateral" >Less than $450</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[0]}})</a><br>
          <a href="{{ url("/eng/filter?em=&ep=&pm=450&pp=1000") }}" class="menulateral">$450 a $1,000</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[1]}})</a><br>
          <a href="{{ url("/eng/filter?em=&ep=&pm=1000&pp=5000") }}" class="menulateral">$1,000 a $5,000</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[2]}})</a> <br>
          <a href="{{ url("/eng/filter?em=&ep=&pm=5000&pp=10000") }}" class="menulateral">$5,000 a $10,000</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[3]}})</a><br>
          <a href="{{ url("/eng/filter?em=&ep=&pm=10000&pp=") }}" class="menulateral">More than $10,000</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[4]}})</a><br>
          <a style="padding-top: 10px; padding-left:5%"><input type="number" placeholder="Minimum" id="pm"> / <input id="pp" type="number" placeholder="Maximum">&nbsp; <i style="color: #4484CE ; cursor: pointer;" class="fa fa-search" onclick="filter()" ></i></a>
          
          <h6 style="padding-left:5%; padding-top: 5%; color: #4484CE ">Categories</h6>
          <a class="menulateral" href="{{ url('/eng/category/Accesorios') }}">Accessories</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Acuáticos') }}">Aquatic</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Arcos_de_Meta') }}">Goal Arches</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Carpas_Inflables') }}">Inflatable Tents</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Carpas_Publicitarias') }}">Advertising Tents</a><br>
          <a class="menulateral" href="{{ url('/eng/category/De_Temporada') }}">Seasonal</a> <br>
          <a class="menulateral" href="{{ url('/eng/category/Extremos') }}">Extremes</a>  <br>
          <a class="menulateral" href="{{ url('/eng/category/Futbolitos_Y_Arcades') }}">Football and Arcades</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Inflables_para_Casa') }}">Bounce Houses</a>  <br>
          <a class="menulateral" href="{{ url('/eng/category/Juegos_de_Feria') }}">Fair Games</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Juegos_Didacticos') }}">Bounce Houses for babies</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Pantallas_Inflables') }}">Inflatable Screens</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Pelotas_Gigantes') }}">Giant Balls And Spheres</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Replicas') }}">Replicas</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Sensores') }}">Sensors</a>  <br>
          <a class="menulateral" href="{{ url('/eng/category/Sky_Dancers') }}">Sky Dancers</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Inflables_Techados') }}">Roofing</a><br> 
          <a class="menulateral" href="{{ url('/eng/category/Pequeños') }}">Small Size</a><br>
		      <a class="menulateral" href="{{ url('/eng/category/Medianos') }}">Medium Size</a><br>
          <a class="menulateral" href="{{ url('/eng/category/Gigantes') }}">Giants</a><br>
                       
          <h6 style="padding-left:5%; padding-top: 5%; color: #4484CE ">Age range</h6>
          <a href="{{ url("/eng/filter?em=&ep=3&pm=&pp=") }}" class="menulateral">Less than 4 years old</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[5]}})</a><br>
          <a href="{{ url("/eng/filter?em=4&ep=4&pm=&pp=") }}" class="menulateral">4 years old</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[6]}})</a><br>
          <a href="{{ url("/eng/filter?em=5&ep=6&pm=&pp=") }}" class="menulateral">5 a 6 years old</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[7]}})</a> <br>
          <a href="{{ url("/eng/filter?em=7&ep=11&pm=&pp=") }}" class="menulateral">7 a 11 years old</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[8]}})</a><br>
          <a href="{{ url("/eng/filter?em=12&ep=&pm=&pp=") }}" class="menulateral">12 years old or more</a>&nbsp; <a class="sublat" style="color: gray">({{$totales[9]}})</a><br><br>
          
    </div>
    <div class="filterpop" >
      <a style="color: #549cdb; font-size: 15px; cursor: pointer" data-toggle="modal" data-target="#exampleModal"><img src="{{ asset('img/filter.png') }}" width="25px">
      &nbsp; Filtrar</a>
    </div>
    
    
    <br>
    <center>    
    <div class="container-fluid content-product tienda-container">
    <div class="row row-cols-8">
      @foreach($services as $items)

      <div class="column">
        <div class="card card-hover">
          @if($items->image_url)
          <a href="{{ $items->drupal_pathi }}"><img loading="lazy" src="{{ asset($items->image_url) }}" class="tam-img"></a>
          @else
          <a href="{{ $items->drupal_pathi }}"><img loading="lazy" src="{{ asset('/img/img-available.png') }}" class="tam-img"></a>
          @endif
          <br>
          @if ($items->price>0)
          @php 
          $items->price = $items->price/$dollar;
          @endphp
            @if($items->amount_pue > 0 || $items->amount_qro > 0 || $items->amount_ver > 0)
              @if($datetoday > $datepromb && $datetoday < $dateprome)
                <h5><s>$USD {{ number_format($items->price,0) }}</s>&nbsp;$USD {{ number_format($items->price*0.80,0) }}</h5>
                <b class="prueba1">12x <?php $pre = ($items->price)*1.039; $cre = $pre / 12;?><s>$USD{{ number_format($cre,2) }}</s>&nbsp;$USD{{ number_format(($pre*0.85)/12,2) }} interest-free payments</b>
              @else
                <h5>$USD {{ number_format($items->price,0) }}</h5>
                <b class="prueba1">12x <?php $pre = ($items->price)*1.039; $cre = $pre / 12;?>$USD {{ number_format($cre,2) }} interest-free payments</b>
              @endif
            @else
              <h5>$USD {{ number_format($items->price,0) }}</h5>
              <b class="prueba1">12x <?php $pre = ($items->price)*1.039; $cre = $pre / 12;?>$USD {{ number_format($cre,2) }} interest-free payments</b>
            @endif         
          @endif         
        <b class="prueba1">{{ $items->shipping_tag }}</b>
          <hr>      
          <div class="reveal ">
            @if($items->titlei)
          <b class="inflable-title">{{ $items->titlei }}</b>
          @else
          <b class="inflable-title">{{ $items->name }}</b>
          @endif
          </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>
    </center>
    

      @if($category->id == 8)
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
      @endif


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
          <div class="modal-content">
            <div style="background-color: #E7E4E4">
              <i style="padding-left:5%; padding-top: 5%; color:#00A9E0; font-size: 30px;" class="fa fa-arrow-left" data-dismiss="modal"></i>
              <br><br><b style="padding-left:5%; padding-top: 5%; font-size: 30px; ">Filter by</b><br><br>
              <a onclick="showpriceo()" style="padding-left:5%; padding-top: 5%; font-size: 20px; ">Price<i class="fa fa-angle-down" style="color:#00A9E0; margin-left: 65%"></i></a><br><br>
                  <div class="priceo" hidden>
                  <a href="{{ url("/filter?em=&ep=&pm=0&pp=450") }}"  class="menulateral" >Less than $450</a>&nbsp; <a  style="color: gray">({{$totales[0]}})</a><br><br>
                  <a href="{{ url("/filter?em=&ep=&pm=450&pp=1000") }}" class="menulateral">$450 a $1,000</a>&nbsp; <a style="color: gray">({{$totales[1]}})</a><br><br>
                  <a href="{{ url("/filter?em=&ep=&pm=1000&pp=5000") }}" class="menulateral">$1,000 a $5,000</a>&nbsp; <a  style="color: gray">({{$totales[2]}})</a> <br><br>
                  <a href="{{ url("/filter?em=&ep=&pm=5000&pp=10000") }}" class="menulateral">$5,000 a $10,000</a>&nbsp; <a  style="color: gray">({{$totales[3]}})</a><br><br>
                  <a href="{{ url("/filter?em=&ep=&pm=10000&pp=") }}" class="menulateral">More than $10,000</a>&nbsp; <a  style="color: gray">({{$totales[4]}})</a><br><br>
                  <a style="padding-top: 10px; padding-left:5%"><input type="number" placeholder="Mínimo" id="pm2" class="nin">-<input id="pp2" type="number" class="nin" placeholder="Máximo">&nbsp; <i style="color: gray; cursor: pointer;" class="fa fa-chevron-circle-right" onclick="filter2()" ></i></a>
                  </div>
                  <hr>
                  <a onclick="showcato()" style="padding-left:5%; padding-top: 5%; font-size: 20px; ">Categories<i class="fa fa-angle-down" style="color:#00A9E0; margin-left: 50%"></i></a><br><br>
                  <div class="cato" hidden>
                      <a class="menulateral" href="{{ url('/eng/category/Accesorios') }}">Accessories</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Acuáticos') }}">Aquatic</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Arcos_de_Meta') }}">Goal Arches</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Carpas_Inflables') }}">Inflatable Tents</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Carpas_Publicitarias') }}">Advertising Tents</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/De_Temporada') }}">Seasonal</a> <br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Extremos') }}">Extremes</a>  <br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Futbolitos_Y_Arcades') }}">Football and Arcades</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Inflables_para_Casa') }}">Bounce Houses</a>  <br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Juegos_de_Feria') }}">Fair Games</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Juegos_Didacticos') }}">Bounce Houses for babies</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Pantallas_Inflables') }}">Inflatable Screens</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Pelotas_Gigantes') }}">Giant Balls And Spheres</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Replicas') }}">Replicas</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Sensores') }}">Sensors</a>  <br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Sky_Dancers') }}">Sky Dancers</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Inflables_Techados') }}">Roofing</a><br> <br>
                      <a class="menulateral" href="{{ url('/eng/category/Pequeños') }}">Small Size</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Medianos') }}">Medium Size</a><br><br>
                      <a class="menulateral" href="{{ url('/eng/category/Gigantes') }}">Giants</a><br>
                  </div>
                  <hr>
                  <a onclick="showedado()" style="padding-left:5%; padding-top: 5%; font-size: 20px; ">Age range<i class="fa fa-angle-down" style="color:#00A9E0; margin-left: 35%"></i></a><br><br>
                    <div class="edado" hidden>
                      <a href="{{ url("/filter?em=&ep=3&pm=&pp=") }}" class="menulateral">Less than 4 years old</a>&nbsp; <a  style="color: gray">({{$totales[5]}})</a><br><br>
                      <a href="{{ url("/filter?em=4&ep=4&pm=&pp=") }}" class="menulateral">4 years old</a>&nbsp; <a  style="color: gray">({{$totales[6]}})</a><br><br>
                      <a href="{{ url("/filter?em=5&ep=6&pm=&pp=") }}" class="menulateral">5 a 6 years old</a>&nbsp; <a style="color: gray">({{$totales[7]}})</a> <br><br>
                      <a href="{{ url("/filter?em=7&ep=11&pm=&pp=") }}" class="menulateral">7 a 11 years old</a>&nbsp; <a  style="color: gray">({{$totales[8]}})</a><br><br>
                      <a href="{{ url("/filter?em=12&ep=&pm=&pp=") }}" class="menulateral">12 years old or more</a>&nbsp; <a style="color: gray">({{$totales[9]}})</a><br><br>
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
   }, 1000);

</script>

<script type="text/javascript">

   setTimeout(function(){
       $('#myModal').modal('show');
   }, 2000);
function filter()
{
  $url="eng/filter";
  window.location.href = $url.concat('?pm=',$('#pm').val(),'&pp=',$('#pp').val());
}
function filter2()
{
  $url="eng/filter";
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