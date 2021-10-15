<!DOCTYPE html>
<html>
	<!-- <div id="content"> -->
   

		<style type="text/css">
			html,body{		  
			  font-family:'Opens Sans',helvetica;  
			  height:100%;
			  width:100%;
			  margin: 0px;		  
			}		
	
			.portada{
			   
			   -webkit-background-size: cover;
			   -moz-background-size: cover;
			   -o-background-size: cover;
			   width: 700px;
				 height:450px;
			   margin: auto;		   		   
			}		
	
			#contenedor {
			 text-align: left;
			 width: 100%;
			 margin: auto;
			}
	
			#lateral {
			 width: 49%;  /* Este será el ancho que tendrá tu columna */
			 margin-top: 20px;
			 float:left; /* Aquí determinas de lado quieres quede esta "columna" */
			}
	
			#lateral p{
			   display: none;
			}
	
			#lateral ul{
			   font-size: 10px;
			}
	
			#principal {
			 width: 50%;
			 float: right;
	
			}
	
			#principal p{
			 display: none;
			}
	
			#principal ul{
			 font-size: 10px;
			}
	
			/* Para limpiar los floats */
			.clearfix:after {
			  content: "";
			  display: table;
			  clear: both;
			}
			.trans { 
				background:transparent; 
				border: none !important; 
				font-size:0px; 
				}
		</style>
	
		<!-- @php
		
			
	
		function getback($id)
		{
			switch ($id) {
				case 5:
					return 'http://toys.alabio.mx/assets/img/ca/cat-extremos2.jpg';
					break;
					case 7: return 'http://toys.alabio.mx/assets/img/ca/gigantes.jpg';
				break;
		case 11: return 'http://toys.alabio.mx/assets/img/ca/medianos.jpg';
				break;
		case 14: return 'http://toys.alabio.mx/assets/img/ca/pequeños.jpg';
				break;
		case 2: return 'http://toys.alabio.mx/assets/img/ca/acua-2.jpg';
				break;
		case 16: return 'http://toys.alabio.mx/assets/img/ca/reparacion.jpg';
				break;
		case 8: return 'http://toys.alabio.mx/assets/img/ca/para-casa.jpg';
				break;
		case 9: return 'http://toys.alabio.mx/assets/img/ca/juegos-didacticos.jpg';
				break;
		case 15:  return 'http://toys.alabio.mx/assets/img/ca/publicitarios.jpg';
				break;
		case 23:  return 'http://toys.alabio.mx/assets/img/ca/publicitarios.jpg';
				break;
		case 24:  return 'http://toys.alabio.mx/assets/img/ca/publicitarios.jpg';
				break;
		case 25:  return 'http://toys.alabio.mx/assets/img/ca/publicitarios.jpg';
				break;
		case 26:  return 'http://toys.alabio.mx/assets/img/ca/publicitarios.jpg';
				break;
		case 21: return 'http://toys.alabio.mx/assets/img/ca/pantallas-inflables.jpg';
				break;
		case 6: return 'http://toys.alabio.mx/assets/img/ca/fut-arcades.jpg';
				break;
		case 12: return 'http://toys.alabio.mx/assets/img/ca/mobiliario.jpg';
				break;
		case 1: return 'http://toys.alabio.mx/assets/img/ca/accesorios.jpg';
				break;
		case 13: return 'http://toys.alabio.mx/assets/img/ca/pelotas-esferas.jpg';
				break;
		case 22: return 'http://toys.alabio.mx/assets/img/ca/juegos-feria.jpg';
				break;
				case 30: return 'http://toys.alabio.mx/assets/img/ca/cat-sen.jpg';
			break;
		default: 
					return 'http://toys.alabio.mx/assets/img/ca/default.jpg';
				break;
				
			}
		}
		function getfront($id)
		{
			switch ($id) {
				case 5:
					return 'http://toys.alabio.mx/assets/img/ca/PEXTREMOS.jpg';
					break;
					case 7: return 'http://toys.alabio.mx/assets/img/ca/PGIGANTES.jpg';
				break;
		case 11: return 'http://toys.alabio.mx/assets/img/ca/PMEDIANOS.jpg';
				break;
		case 14: return 'http://toys.alabio.mx/assets/img/ca/PPEQUEÑOS.jpg';
				break;
		case 2: return 'http://toys.alabio.mx/assets/img/ca/PACUATICOS.jpg';
				break;
		case 16: return 'http://toys.alabio.mx/assets/img/ca/PREPARACION.jpg';
				break;
		case 8: return 'http://toys.alabio.mx/assets/img/ca/PPARA CASA.jpg';
				break;
		case 9: return 'http://toys.alabio.mx/assets/img/ca/PDIDACTICOS.jpg';
				break;
		case 15:  return 'http://toys.alabio.mx/assets/img/ca/PPUBLICITARIOS.jpg';
				break;
		case 23:  return 'http://toys.alabio.mx/assets/img/ca/PPUBLICITARIOS.jpg';
				break;
				case 24:  return 'http://toys.alabio.mx/assets/img/ca/PPUBLICITARIOS.jpg';
				break;
				case 25:  return 'http://toys.alabio.mx/assets/img/ca/PPUBLICITARIOS.jpg';
				break;
				case 26:  return 'http://toys.alabio.mx/assets/img/ca/PPUBLICITARIOS.jpg';
				break;
		case 21: return 'http://toys.alabio.mx/assets/img/ca/PPANTALLAS.jpg';
				break;
		case 6: return 'http://toys.alabio.mx/assets/img/ca/PFUTBOLITOS.jpg';
				break;
		case 12: return 'http://toys.alabio.mx/assets/img/ca/PMOBILIARIO.jpg';
				break;
		case 1: return 'http://toys.alabio.mx/assets/img/ca/PACCESORIOS.jpg';
				break;
		case 13: return 'http://toys.alabio.mx/assets/img/ca/PPELOTAS GIGANTES.jpg';
				break;
		case 22: return 'http://toys.alabio.mx/assets/img/ca/PJUEGOS DE FERIA.jpg';
				break;
				case 29: return 'http://toys.alabio.mx/assets/img/ca/TEMPORADA.jpg';
			break;
	case 30: return 'http://toys.alabio.mx/assets/img/ca/SENSORES.jpg';
			break;
	case 27: return 'http://toys.alabio.mx/assets/img/ca/TECHADOS.jpg';
			break;
	case 17: return 'http://toys.alabio.mx/assets/img/ca/TEMATICOS.jpg';
			break;
		default: 
					return null;
				break;
				
			}
		}
		function getids($id)
		{
			switch ($id) {
				case 5:
					return 'ext';
					break;
					case 7: return 'gig';
				break;
		case 11: return 'med';
				break;
		case 14: return 'peq';
				break;
		case 2: return 'acu';
				break;
		case 16: return 'rep';
				break;
		case 8: return 'par';
				break;
		case 9: return 'did';
				break;
		case 15:  return 'pub';
				break;
		case 23:  return 'pub';
				break;
				case 24:  return 'pub';
				break;
				case 25:  return 'pub';
				break;
				case 26:  return 'pub';
				break;
		case 21: return 'pan';
				break;
		case 6: return 'fut';
				break;
		case 12: return 'mob';
				break;
		case 1: return 'acc';
				break;
		case 13: return 'pel';
				break;
		case 22: return 'jue';
				break;
				case 29: return 'temp';
			break;
	case 30: return 'sen';
			break;
	case 27: return 'tec';
			break;
	case 17: return 'tem';
			break;
		default: 
					return null;
				break;
				
			}
		}
	
			$c2 = count($cata2)-1;
			$counter=0; 
			$port=0;
			$portt=0; 
			@endphp -->
			
			<div class="portada page{{$counter}}" style="background: url('http://toys.alabio.mx/assets/img/ca/PORTADA.jpg') no-repeat center;"></div>
			<br>
			<center><h1 class="stilo">Selecciona el catálogo a descargar</h1></center>
			<br>
			<!-- @php $counter++; @endphp -->
			<div class="portada page{{$counter}}" style="background: url('http://toys.alabio.mx/assets/img/ca/Menu.jpg') no-repeat center;">
				<a href="#pan"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 76px; margin-left:480px" value="Pantallas"></a><br>
				<a href="#tem"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:40px" value="Tematicos"></a>
				<a href="#ext"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Extremos"></a>
				<a href="#fut"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Futbolitos"></a><br>
				<a href="#tec"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:40px" value="Techados"></a>
				<a href="#sen"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Sensores"></a>
				<a href="#mob"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Mobiliario"></a><br>
				<a href="#acu"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:40px" value="Acuaticos"></a>
				<a href="#temp"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Temporada"></a>
				<a href="#acc"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Accesorios"></a><br>
				<a href="#peq"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:40px" value="Pequeños"></a>
				<a href="#par"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Casa"></a>
				<a href="#pel"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Pelotas"></a><br>
				<a href="#med"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:40px" value="Medianos"></a>
				<a href="#did"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Didacticos"></a>
				<a href="#jue"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Feria"></a><br>
				<a href="#gig"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:40px" value="Grandes"></a>
				<a href="#pub"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Publicitarios"></a>
				<a href="#rep"><input type="button" class="trans" style="height: 30px; width: 200px; cursor: pointer; margin-top: 21px; margin-left:17px" value="Reparacion"></a>
			</div>
			<br>
			<br>
			<br>	
			<br>
			<!-- @php $counter++; @endphp
			@for($x=0; $x<$c2; $x = $x +2)
			@php
				$port=$cata2[$x]->category_id;
			@endphp
				@if($port==23 || $port==24 || $port==25 || $port==26)
					@php $port=15; @endphp
				@endif	
			
			 @if($port!=$portt && getfront($port)!= null)
			<div id="{{getids($port)}}" class="portada page{{$counter}}" style="background: url('{{getfront($port)}}') no-repeat center;"></div>
			<br>
			<br>
			<br>	
			<br>
			@php $counter++; @endphp
			 @endif
				<div class="portada page{{$counter}}" style="background: url('{{getback($cata2[$x]->category_id)}}') no-repeat center;">
					<div id="contenedor" class="clearfix">
						<div id="lateral">
							<div style="margin-left: 100px;">			
							<a href="{{$cata2[$x]->drupal_path}}" target="_blank" style="text-decoration: none; color: black"><b style="text-align: left;">{{$cata2[$x]->name}}</b></a>
								<br>
								  <b style="text-align: left;">$ {{ number_format($cata2[$x]->price) }}</b>		
								  <br>
								  {!!$cata2[$x]->short_desc!!}	
								  <a href="{{$cata2[$x]->drupal_path}}" target="_blank" ><img loading="lazy" src="{{ 'http://toys.alabio.mx/uploads/services/catalogue/'.$cata2[$x]->catalog_image }}" height="250px" style="margin-left: 10px; max-width: 90%;"></a>
							  </div>
						</div>
						@if($cata2[$x]->category_id == $cata2[$x+1]->category_id)
						<div id="principal">
							<div style="margin-left: 50px;">	
								<a href="{{$cata2[$x+1]->drupal_path}}" target="_blank" ><img loading="lazy" src="{{'http://toys.alabio.mx/uploads/services/catalogue/'.$cata2[$x+1]->catalog_image }}" height="190px" style="margin-left: 50px; max-width: 80%;"></a><br>
								<a href="{{$cata2[$x+1]->drupal_path}}" target="_blank" style="text-decoration: none; color: black"><b style="text-align: left;">{{ $cata2[$x+1]->name }}</b></a>
								  <br>
								  <b style="text-align: left;">$ {{ number_format($cata2[$x+1]->price) }}</b>
								  <br>
								  {!!$cata2[$x+1]->short_desc !!}				  	
							</div>
						</div>
						@else 
						@php
							$x=$x-1;  
						@endphp
						@endif
					</div>			  	
				</div> -->
					
				<!-- <br>	
			@php
			$counter++;
			$portt=$port;
			@endphp
		 @endfor  -->
		 <!-- <div class="portada page{{$counter}}" style="background: url('http://toys.alabio.mx/assets/img/ca/Contacto.jpg') no-repeat center;"></div> -->
	</div>
</html>