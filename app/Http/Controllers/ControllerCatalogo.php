<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ControllerCatalogo extends Controller
{
    //
    public function acua(){    	
    	$cata2 = DB::table('services')
        ->select('service_page_categories_rel.category_id', 'services.name', 'services.short_desc', 'services.price', 'services.image_url','services.id as id','services.category_id as cid')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->orderBy('service_page_categories_rel.category_id', 'asc')           
        ->limit(50)           
        ->get();
       
        $cata = DB::table('services')
        ->select('service_page_categories_rel.category_id', 'services.name', 'services.short_desc', 'services.price', 'services.image_url','services.id as id','services.category_id as cid')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->where('service_page_categories_rel.category_id', 2)      
        ->limit(50)
        ->get();

        $pdf = PDF::loadView('Catalogo.catalogo', compact('cata', 'cata2'));
        return $pdf->download('catalogo.pdf');
		
    	//return view('Catalogo.catalogo', compact('cata', 'cata2'));
    }

     public function acua2(){        
        $cata2 = DB::table('services')
        ->select('service_page_categories_rel.category_id', 'services.name', 'services.short_desc', 'services.price', 'services.image_url','services.id as id','services.category_id as cid')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->orderBy('service_page_categories_rel.category_id', 'asc')           
        
        ->get();
       
        $cata = DB::table('services')
        ->select('service_page_categories_rel.category_id', 'services.name', 'services.short_desc', 'services.price', 'services.image_url','services.id as id','services.category_id as cid')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->where('service_page_categories_rel.category_id', 2)      
        
        ->get();        
        
        return view('Catalogo.catalogo', compact('cata', 'cata2'));
    }
    public function download()
{
    $cata2 = DB::table('services')
        ->select('services.catalog_image','service_page_categories_rel.category_id', 'services.name', 'services.short_desc', 'services.price', 'services.image_url','services.id as id','services.category_id as cid','services.drupal_path')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')        
        ->whereNotNull('services.catalog_image')
        ->whereNotNull('services.price')
        ->where('services.price','>',0)
	->where('service_page_categories_rel.category_id','!=',3)
        ->groupBy('services.id')
        ->orderByRaw(\DB::raw("FIELD(service_page_categories_rel.category_id,17,27,2,14,11,7,5,30,29,8,9,15,23,24,25,26,21,3,6,12,1,13,22,16,28) asc,service_page_categories_rel.category_order asc"))  
        //->limit(1) 
        ->get();
       




	
 
        return view('Catalogo.catalogo', compact('cata2'));
    }
}

