@extends('eng.alabio')
@section('meta')
    <title>My Cart</title>
@endsection
@section('content')
<link href="{{ asset('/css/Cart.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
<script src="{{ asset('/js/cart.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
<div class="container-fluid"> 
    <br><br>
    <h1 class="stilo bluefont" style="text-align:center;">My Cart</h1><br>
    @if ($emptycart==true)
    <!-- DIV GRID PARA PODER TENER LOS DOS DIV EN LA MISMA ALTURA -->
    <div class="grid-cart">
    <!-- DIV IZQUIERDA -->
    <div class="izquierda delete1" style="margin-left:3%">
    <div class="row">
        <div class="col-2 tabla-products tabla-titulo" style="border-radius: 0.5rem 0 0 0">
		</div>
        <div class="col-2 tabla-products tabla-titulo">
			<b>Product</b>
		</div>
        <div class="col-2 tabla-products tabla-titulo">
            <b>Variant</b>
		</div>
		<div class="col-2 tabla-products tabla-titulo">
			<b>Price</b>
		</div>
		<div class="col-2 tabla-products tabla-titulo">
			<b>Quantity</b>
		</div>
		<div class="col-2 tabla-products tabla-titulo" style="border-radius: 0 0.5rem 0 0">
			<b>Subtotal</b>
		</div>
    </div>
        @php
            $subtotal=0.00;   
            $producttotal = 0;
            $sm = count($shipm[0]);
            $temptot = 0.00;
        @endphp
        @foreach ($products as $service)
        @php
            if($moreexpensiveproductid == $service[0])
                $producttotal = $producttotal+$service[3]
        @endphp
        <div class="row" style="background-color:white; padding: 10px !important; box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1), 0 2px 2px 0 rgba(0, 0, 0, 0.1);">
            <div class="col-2">
            <center>
                    <a href="{{ $service[8] }}" target="_blank">
                        @if ($service[1] !=null)
                            <img class="service_image" src='{{ $service[1] }}'  alt='' />
                        @else
                            <img class="service_image" src='{{asset('/img/noImage.jpg')}}'  alt='' />
                        @endif                            
                    </a>&nbsp;
                    <label class="btn-sm btn-warning btnrad btn-remove delete1" data-id="{{ $service[7] }}" onclick="deletecart();">Put off</label>
            </center>
            </div>
            <div class="col-2 tabla-products">
                {{ $service[2] }}
            </div>
            <div class="col-2 tabla-products">
                @if ($service[12] !=null)
                    {{ $service[12] }}
                @else
                    Does not apply
                @endif  
            </div>
            <div class="col-2 tabla-products">
                ${{number_format($service[4]/$dollar,2)}}
            </div>
            <div class="col-2 tabla-products">
                <input type="number" min="{{$service[6]}}" max="{{$service[5]}}" class="form-control  srvice_amount amount_{{ $service[7] }}" id="{{ $service[7] }}" value="{{ $service[3] }}" onchange="updatecart();" >
            </div>
            <div class="col-2 tabla-products">
               <b> ${{number_format(($service[3]*$service[4])/$dollar,2)}}</b>
            </div>
	    </div>
    @php
        $subtotal=$subtotal+($service[3]*$service[4])/$dollar;   
    @endphp
    @endforeach
    <div class="row">
        <div class="col-12 letter-total">
            <a class="btn btn-danger" onclick="deleteallcart();" style="color: white;">Empty cart</a> 
        </div>
    </div>
    </div>

    <!-- DIV DERECHA -->
    <div class="derecha delete1">
            <div class="row total-cuadro" style="background-color:white; border-radius: 5%; box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1), 0 2px 2px 0 rgba(0, 0, 0, 0.1);">
                <div class="col-12 title-total" style="padding-top:2%; padding-bottom:1%; text-align:center;">
                   <b class="letter-total"><span >Cart Total</span></b>
                </div>
                <div class="col-6 letter-total">
                    <b>Subtotal</b>
                </div>
                <div class="col-6 letter-total">
                    <span>${{number_format($subtotal)}}</span>
                </div>

                <input type="hidden" id="scount" value="{{count($shipm[0])}}">
                        @if($sm > 1)
                            @php
                                $temptot = $subtotal;
                            @endphp
                            <div class="col-12 letter-total">
                                <select id="shipping-select" class="form-control shipping-select" onchange="updateship();">
                                    <option value="x">Seleccionar un método de Envío...</option>
                                    @for($i=0; $i<count($shipm[0]);$i++)
                                        <option value="{{($shipm[2][$i]* $producttotal)}}" data-id="{{$shipm[1][$i]}}">{{$shipm[1][$i]}} - ${{number_format(($shipm[2][$i]*$producttotal))}}</option>
                                    @endfor    
                                </select>
                            </td>
                            @else
                                @php
                                    $temptot = $subtotal+($shipm[2][0]* $producttotal);
                                @endphp 
                                <div class="col-6 letter-total">
                                    <b>{{$shipm[1][0]}}</b>
                                </div>
                                <div class="col-6 letter-total">
                                    <input type="hidden" id="txtship" value="{{($shipm[2][0]* $producttotal)}}" data-id="{{$shipm[1][0]}}">
                                    <span>${{number_format($shipm[2][0]* $producttotal)}}</span>
                                </div>                
                        @endif
                
                @if($coupon != 0)
                <div class="col-6 letter-total">
                    <b>Descuento</b>
                </div>
                <div class="col-6 letter-total">
                    <span>{{$coupon*100}}%</span>
                </div>
                @endif

                <div class="col-6 letter-total">
                   <b>Total</b> 
                </div>
                <div class="col-6 letter-total">
                    <form>
                        <strong><span id="span-total">${{number_format($temptot)}}</span></strong>
                    </form>
                </div>

                <br>
                <div class="col-12 letter-total">
                @if($coupon == 0)
                    <div class="input-group mb-3">
                        <input id="couponcode" type="text" class="form-control" placeholder="Enter your discount code" maxlength="10" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        <button class="btn btn-danger" type="button" id="validatebuttom"  onclick="validatecoupon();">Apply</button>
                    </div>
                @endif
                </div>
                <br>

                <div class="col-12 letter-total">
                    <a class="btn boton-compra" style="width: 100%;" onclick="validship();"> Make an order</a><br><br>
                </div>
                
        </div>
    </div>
    </div>

    <!-- SIN DIVS DERECHA E IZQUIERDA -->
    <!-- TABLA PRODUCTOS MOVIL -->
    <div class="container movil delete3">
    <div class="row">
        <div class="col-2 letter-products tabla-titulo" style="border-radius: 0.5rem 0 0 0;">
		</div>
        <div class="col-4 letter-products tabla-titulo">
			<b>Product</b>
		</div>
		<div class="col-2 letter-products tabla-titulo">
			<b>Price</b>
		</div>
		<div class="col-2 letter-products tabla-titulo">
			<b>Quantity</b>
		</div>
		<div class="col-2 letter-products tabla-titulo" style="border-radius:0 0.5rem 0 0;">
			<b>Subtotal</b>
		</div>
    </div>
        @php
            $subtotal=0.00;   
            $producttotal = 0;
            $sm = count($shipm[0]);
            $temptot = 0.00;
        @endphp
        @foreach ($products as $service)
        @php
            if($moreexpensiveproductid == $service[0])
                $producttotal = $producttotal+$service[3]
        @endphp
        
        <div class="row" style="background-color:white; box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1), 0 2px 2px 0 rgba(0, 0, 0, 0.1);">
            <div class="col-2 letter-products format-pad">
                <center>
                    <a href="{{ $service[8] }}" target="_blank">
                        @if ($service[1] !=null)
                            <img class="service_image" src='{{ $service[1] }}'  alt='' />
                        @else
                            <img class="service_image" src='{{asset('/img/noImage.jpg')}}'  alt='' />
                        @endif                            
                    </a>&nbsp;
                    <label class="btn-sm btn-warning btnrad btn-remove letter-products" data-id="{{ $service[7] }}" onclick="deletecart();">Put off</label>
                </center>
                </div>
            <div class="col-4 letter-products format-pad">
                {{ $service[2] }}
            </div>
            <div class="col-2 letter-products format-pad">
                ${{number_format($service[4]/$dollar,2)}}
            </div>
            <div class="col-2 letter-products format-pad">
                <input type="number" min="{{$service[6]}}" max="{{$service[5]}}" class="form-control letter-products srvice_amount amount_{{ $service[7] }}" id="{{ $service[7] }}" value="{{ $service[3] }}" onchange="updatecart();" style="width: 50%;">
            </div>
            <div class="col-2 letter-products format-pad">
                ${{number_format(($service[3]*$service[4])/$dollar,2)}}
            </div>
	    </div>
    @php
        $subtotal=$subtotal+($service[3]*$service[4])/$dollar;   
    @endphp
    @endforeach
    <div class="row">
        <div class="col-12 letter-total">
            <center>
            <a class="btn btn-danger letter-total" onclick="deleteallcart();" style="color: white;">Empty cart</a> 
            </center>
        </div>
    </div>
    </div>
    <br>
    
    <!-- <p style="text-align:center; font-weight:bold;">Si cuentas con un cupón ingresalo y válidalo para tu compra</p> -->
    
        <!-- Cuadro del total -->
        <div class="container-fluid delete3" style="padding: 0% !important;">
            <div class="row total-square" style="background-color:white; box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.1), 0 2px 2px 0 rgba(0, 0, 0, 0.1);">
                <div class="col-12 title-total" style="padding:1% !important; text-align:center;">
                     <b class="letter-total"><span>Cart Total</span></b> 
                </div>
                <div class="col-6 letter-total">
                    <b>SubTotal</b>
                </div>
                <div class="col-6 letter-total">
                    <span>${{number_format($subtotal)}}</span>
                </div>
                <input type="hidden" id="scount" value="{{count($shipm[0])}}">
                        @if($sm > 1)
                            @php
                                $temptot = $subtotal;
                            @endphp
                            <div class="col-12 letter-total">
                                <select id="shipping-select" class="form-control shipping-select" onchange="updateship();">
                                    <option value="x">Seleccionar un método de Envío...</option>
                                    @for($i=0; $i<count($shipm[0]);$i++)
                                        <option value="{{($shipm[2][$i]* $producttotal)}}" data-id="{{$shipm[1][$i]}}">{{$shipm[1][$i]}} - ${{number_format(($shipm[2][$i]*$producttotal))}}</option>
                                    @endfor    
                                </select>
                            </td>
                            @else
                                @php
                                    $temptot = $subtotal+($shipm[2][0]* $producttotal);
                                @endphp 
                                <div class="col-6 letter-total">
                                    <b>{{$shipm[1][0]}}</b>
                                </div>
                                <div class="col-6 letter-total">
                                    <input type="hidden" id="txtship" value="{{($shipm[2][0]* $producttotal)}}" data-id="{{$shipm[1][0]}}">
                                    <span>${{number_format($shipm[2][0]* $producttotal)}}</span>
                                </div>                
                        @endif
                
                @if($coupon != 0)
                <div class="col-6 letter-total">
                    <b>Descuento</b>
                </div>
                <div class="col-6 letter-total">
                    <span>{{$coupon*100}}%</span>
                </div>
                @endif

                <div class="col-6 letter-total">
                   <b>Total</b> 
                </div>
                <div class="col-6 letter-total">
                    <form>
                        <strong><span id="span-total">${{number_format($temptot)}}</span></strong>
                    </form>
                </div>
                
                <br>
                @if($coupon == 0)
                <div class="col-12 letter-total">
                    <div class="input-group mb-3">
                        <input id="couponcode" type="text" class="form-control letter-total" placeholder="Enter your discount code" maxlength="10" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        <button class="btn btn-outline-danger letter-total" type="button" id="validatebuttom"  onclick="validatecoupon();">Apply</button>
                    </div>
                </div>
                @endif
                <br>
                <div class="col-12">
                    <a class="btn boton-compra letter-total" style="width: 100%;" onclick="validship();"> Make an order</a><br><br>
                </div>

                
        </div>
        <!-- Fin de Row y tabla de divs -->

            <!-- Esta tabla esta oculta, sin ella no funciona el total-->
            <table class="table table-striped subtotal_Table centrado ocultar_todo">
                <tbody>
                    <tr>
                        <th>SubTotal</th>
                        <td>
                            <span>${{number_format($subtotal)}}</span>
                        </td>
                    </tr>
                    <tr>
                        <input type="hidden" id="scount" value="{{count($shipm[0])}}">
                            @if($sm > 1)
                                @php
                                    $temptot = $subtotal;
                                @endphp
                                <td colspan="2">
                                    <select id="shipping-select" class="form-control shipping-select" onchange="updateship();">
                                    <option value="x">Seleccionar un método de Envío...</option>
                                    @for($i=0; $i<count($shipm[0]);$i++)
                                        <option value="{{($shipm[2][$i]* $producttotal)}}" data-id="{{$shipm[1][$i]}}">{{$shipm[1][$i]}} - ${{number_format(($shipm[2][$i]*$producttotal))}}</option>
                                    @endfor    
                                </select>
                                </td>
                                @else
                                    @php
                                        $temptot = $subtotal+($shipm[2][0]* $producttotal);
                                    @endphp 
                                    <td><b>{{$shipm[1][0]}}</b></td>
                                    <td>
                                        <input type="hidden" id="txtship" value="{{($shipm[2][0]* $producttotal)}}" data-id="{{$shipm[1][0]}}">
                                        <span>${{number_format($shipm[2][0]* $producttotal)}}</span>
                                    </td>                
                                @endif
                    <tr hidden id="var-subtotal">
                            <td  colspan="2">
                                <span>{{$subtotal}}</span>
                            </td>
                    </tr>
                    <input type="hidden" id="camount" value="{{($coupon)}}">
                    @if($coupon != 0)
                    <td><b>Descuento</b></td>
                            <td>                                   
                                <span>{{$coupon*100}}%</span>
                            </td> 
                    <td>
                    @endif
                    <form>
                        <tr><th>Total</th>
                            <td>
                                <strong><span id="span-total">${{number_format($temptot)}}</span></strong>
                            </td>
                        </tr>
                    </form>
                    </td>
                    </tr>
                        <tr>
                            <td colspan="2">
                                <a class="btn boton-compra" style="width: 100%;" onclick="validship();"> Make an order</a>
                            </td>
                        </tr>
                </tbody>
            </table> 
            <br><br>
        </div>                              
        </div>
    </div>
    
<script>
    function updatecart()
{
    $indx = event.target;

    if ($indx.value > {{$service[5]}})
    { $indx.value = {{$service[5]}};} 
    else if ($indx.value < {{$service[6]}}) 
    {$indx.value = {{$service[6]}} ;}

  $.ajax({ 
    url: '/update-cart',
    type: 'GET',
    data: { indx: $indx.id,
            valuex: $indx.value},
    success: function()
    {
      window.location.reload();
      
    }
});
}
</script>
<script>
function validship()
{
    if($("#shipping-select").val()=="x")
    {
        alert("Debes elegir un método de envío")
    }
    else
    {
        window.location.href = "/eng/checkout";
    }
}
</script>
<script>
function updateship(){

    if($("#scount").val() > 1){
$selectedv = $("#shipping-select").children("option:selected").val();
$selectedt =$("#shipping-select").children("option:selected").data("id");
$newvalue = parseInt($("#var-subtotal").text())+parseInt($selectedv);
$newvalue = $newvalue-($newvalue*parseFloat($('#camount').val()));
$newvalue = addCommas($newvalue);
  $.ajax({ 
    url: '/update-ship',
    type: 'GET',
    data: {shiptot: $selectedv,
            shiptag: $selectedt},
    success: function()
    {
        $("#span-total").text('$'+$newvalue);
    }
});
    }
    else
    {
        $selectedv = $("#txtship").val();
        $selectedt =$("#txtship").data("id");
        $newvalue = parseInt($("#var-subtotal").text())+parseInt($selectedv);
        $newvalue = $newvalue-($newvalue*parseFloat($('#camount').val()));
        $newvalue = addCommas($newvalue);
        $.ajax({ 
        url: '/update-ship',
        type: 'GET',
        data: {shiptot: $selectedv,
            shiptag: $selectedt},
        success: function()
            {
                $("#span-total").text('$'+$newvalue);
            }
        });
    }
}
updateship();
function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
</script>
@else
<div class="container">
        <h3>Tu carrito está vacío.</h3>
</div>
@endif

@endsection