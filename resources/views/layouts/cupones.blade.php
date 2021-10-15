@extends('alabio')
@section('meta')
    <title>Cupones</title>
    {!! NoCaptcha :: renderJs () !!}
@endsection
@section('style-product')
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pages.css') }}">
@endsection

@section('content')
	<div class="present">
        <div class="text-present">
          <h2>Genéra tu cupón de descuento</h2>
            <a href="{{ url('/') }}">inicio</a><b> / Cupones</b>
         </div>
    </div>
    <div>
        <center>
        <form action="{{ url('/promociones/generate-cupon') }}" method="post" class="cup-form">
            {{ csrf_field() }}
            <div class="form-group">
                <label><b>Nombre (Con el que hizo la compra):</b></label><br>
                <input type="text" id="InputName" name="name" class="form-control cuponinput" style = "width: 50%;" required>    
            </div>
            <div class="form-group">
              <label><b>Correo Electrónico (Con el que hizo la compra):</b></label><br>
              <input type="email" id="InputEmail" name="email" class="form-control cuponinput" style = "width: 50%;" required>    
          </div>
            <div class="form-group">
                <label><b>Plataforma de la compra anterior:</b></label>
             
                  <input id="InputPlatform" name="plataforma" class="form-control cuponinput" required>  
                   </div>
            <div class="form-group">
                <label><b>Producto de la compra anterior:</b></label><br>
                
                  <div class="dropdown">
                    <div id="myDropdown" class="dropdown-content cuponinput">
                      <input type="text" placeholder="Busca tu producto..." id="myInput" onkeyup="filterFunction()" name="service" required>
                      @foreach ($services as $s)
                        <a  style="display: none;" class="searchoptions" data-id="{{$s->id}}">{{$s->name}}</a>
                      @endforeach                    
                    </div>
                  </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar" class="cuponinput" style = "width: 50%;">
            </div>
            
        </form>
        </center>
    </div>
    <script>

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

$( ".searchoptions" ).click(function( event ) {
  
  document.getElementById("myInput").value = event.currentTarget.text;
});
$(".cup-form").click(function(event){
  $.each( $(".searchoptions"), function( key, value ) {
    value.style.display = "none";
});
  
});
    </script>
@endsection