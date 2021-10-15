<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPDF extends Controller
{
    public function imprimir(){
    	$pdf = \PDF::loadView('Catalogo.imprimir');
    	return $pdf->download('catalogo.pdf');
    }
    public function save(){
    	$pdf = \PDF::loadView('Catalogo.imprimir')->save(storage_path('app/public/') . 'catalogo.pdf');;    	

    }

    public function prueba(){
 		return \PDF::loadView('Catalogo.catalogo')->stream('catalogo.pdf'); 
 	}
}
