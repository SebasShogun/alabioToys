<?php 

namespace App\Http\Controllers;

use \stdClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Service;
use App\Web_Categories;

class ControllerService extends Controller
{
    //
    public function index()
    {
        //
        $datos = array();

        $services = Service::all();
        //$datos = $services;
        //$conta = 0;
        //foreach ($services as $x) {
        	# code...
        //	$datos[$conta] = $x;
        
        //	$conta + 1;
        //}
        $category = Web_Categories::find(14);
		return view('layouts.products', compact('services','category'));
        //return view('date_users', compact('users'));
    }
    public function indexeng()
    {
        //
        $datos = array();

        $services = Service::all();
        //$datos = $services;
        //$conta = 0;
        //foreach ($services as $x) {
        	# code...
        //	$datos[$conta] = $x;
        
        //	$conta + 1;
        //}
        $category = Web_Categories::find(14);
		return view('eng.layouts.products', compact('services','category'));
        //return view('date_users', compact('users'));
    }

    public function prueba($id)
    {
        $id = str_replace("_", " ", $id);
        $category = Web_Categories::where('name', '=', $id)->firstOrFail();
        $datos = array();
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('service_page_categories_rel.category_id', $category->id)
        ->groupBy('services.id')
        ->orderBy('service_page_categories_rel.category_order')
        ->get();
        $datos = $services;
        $totales=$this->gettotales();
        
        return view('layouts.products', compact('services','category','totales'));
    }
    public function pruebaeng($id)
    {
        $id = str_replace("_", " ", $id);
        $category = Web_Categories::where('name', '=', $id)->firstOrFail();
        $datos = array();
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_pathi','services.price','services.titlei','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('service_page_categories_rel.category_id', $category->id)
        ->where('services.titlei','!=',null)
        ->groupBy('services.id')
        ->orderBy('service_page_categories_rel.category_order')
        ->get();
        $datos = $services;
        
        $dollar = $this->getdollar();
        $totales=$this->gettotales();
        return view('eng.layouts.products', compact('services','category','totales','dollar'));
    }
    public function searchinput($tts)
    {
        $category =  new stdClass();
        $category->name="Busqueda '".$tts."'";
        $category->meta_title = "Venta de Inflables |Somos Fabricantes | Envio Gratis";
        $category->meta_description="Somos fabricantes especializados en el dise�o y venta de inflables. Inflables en entrega inmediata. Nosotros te apoyamos d�ndote el inflable personalizado a tus necesidades. Invierte de manera segura y ve tus ganancias crecer.";
        $category->meta_keywords="venta de inflables con entrega inmediata, venta de inflables, fabrica de brincolines, venta de inflables tem�ticos";
        $category->id = 0;
        $datos = array();
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->orWhere('services.name','like','%'.$tts.'%')
        ->orWhere('services.title','like','%'.$tts.'%')
        ->orWhere('services.short_desc','like','%'.$tts.'%')
        ->orWhere('services.long_desc','like','%'.$tts.'%')
        ->orWhere('services.meta_title','like','%'.$tts.'%')
        ->orWhere('services.meta_desc','like','%'.$tts.'%')
        ->orWhere('services.meta_keywords','like','%'.$tts.'%')
        ->groupBy('services.id')
        ->get();
        $datos = $services;
        $totales=$this->gettotales();

        return view('layouts.products', compact('services','category','totales'));
    }

    public function searchinputeng($tts)
    {
        $category =  new stdClass();
        $category->name="Busqueda '".$tts."'";
        $category->meta_title = "Venta de Inflables |Somos Fabricantes | Envio Gratis";
        $category->meta_description="Somos fabricantes especializados en el dise�o y venta de inflables. Inflables en entrega inmediata. Nosotros te apoyamos d�ndote el inflable personalizado a tus necesidades. Invierte de manera segura y ve tus ganancias crecer.";
        $category->meta_keywords="venta de inflables con entrega inmediata, venta de inflables, fabrica de brincolines, venta de inflables tem�ticos";
        $category->id = 0;
        $datos = array();
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->orWhere('services.name','like','%'.$tts.'%')
        ->orWhere('services.title','like','%'.$tts.'%')
        ->orWhere('services.short_desc','like','%'.$tts.'%')
        ->orWhere('services.long_desc','like','%'.$tts.'%')
        ->orWhere('services.meta_title','like','%'.$tts.'%')
        ->orWhere('services.meta_desc','like','%'.$tts.'%')
        ->orWhere('services.meta_keywords','like','%'.$tts.'%')
        ->groupBy('services.id')
        ->get();
        $datos = $services;
        $totales=$this->gettotales();

        return view('eng.layouts.products', compact('services','category','totales'));
    }

    public function entregainmediata(){
        
        $category =  new stdClass();
        $category->name="Entrega Inmediata";
        $category->meta_title = "Venta de Inflables | Entrega Inmediata |Somos Fabricantes | Envio Gratis";
        $category->meta_description="Somos fabricantes especializados en el dise�o y venta de inflables. Inflables en entrega inmediata. Nosotros te apoyamos d�ndote el inflable personalizado a tus necesidades. Invierte de manera segura y ve tus ganancias crecer.";
        $category->meta_keywords="venta de inflables con entrega inmediata, venta de inflables, fabrica de brincolines, venta de inflables tem�ticos";
        $category->id = 0;

        $services = DB::table('services')
            ->where('amount_pue', '>', 0)
            ->orWhere('amount_qro', '>' , 0)
            ->orWhere('amount_ver', '>', 0)
            ->orderBy('category_order','ASC')
            ->get();

        $services->category_id = 1;
        $totales=$this->gettotales();

        return view('layouts.products', compact('services','category','totales'));
    }

    public function entregainmediataeng(){
        
        $category =  new stdClass();
        $category->name="Entrega Inmediata";
        $category->meta_title = "Venta de Inflables | Entrega Inmediata |Somos Fabricantes | Envio Gratis";
        $category->meta_description="Somos fabricantes especializados en el dise�o y venta de inflables. Inflables en entrega inmediata. Nosotros te apoyamos d�ndote el inflable personalizado a tus necesidades. Invierte de manera segura y ve tus ganancias crecer.";
        $category->meta_keywords="venta de inflables con entrega inmediata, venta de inflables, fabrica de brincolines, venta de inflables tem�ticos";
        $category->id = 0;

        $services = DB::table('services')
            ->where('amount_pue', '>', 0)
            ->orWhere('amount_qro', '>' , 0)
            ->orWhere('amount_ver', '>', 0)
            ->orderBy('category_order','ASC')
            ->get();

        $services->category_id = 1;
        $dollar = $this->getdollar();
        $totales=$this->gettotales();
        // var_dump($totales); exit;
        return view('eng.layouts.products', compact('services','category','totales','dollar'));
    }
    public function get_shipmethod($id)
    {
       $shipmetodos = DB::table('service_page_shipping_rel')
       ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
       ->where('service_page_shipping_rel.service_id',$id)
       ->orderBy('service_page_shipping.shipping_total')
       ->get();

       $ship = array();
       foreach($shipmetodos as $shim)
       {
            $ship = $shim;
       break;
       }

       return $ship;
    }
    public function products(){

        $isMobile = preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

        $idpro = 28;
        $service = DB::table('services')
            ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
            ->where('service_page_categories_rel.category_id', $idpro)
            ->orderBy('service_page_categories_rel.category_order')
            ->limit('7')
            ->get();

        if($isMobile)
        {
            // Servicios de Entrega Inmediata
            $servs = DB::table('services')
                ->where('amount_pue', '>', 0)
                ->orWhere('amount_qro', '>' , 0)
                ->orWhere('amount_ver', '>', 0)
                ->orderByRaw('rand()')
                ->take(5)
                ->get();
        }
        else{
            // Servicios de Entrega Inmediata
            $servs = DB::table('services')
                ->where('amount_pue', '>', 0)
                ->orWhere('amount_qro', '>' , 0)
                ->orWhere('amount_ver', '>', 0)
                ->orderByRaw('rand()')
                ->take(10)
                ->get();
        }

        return view('welcome', compact('service', 'servs'));
    }

    public function getdollar()
    {
        return 20.24;
    }

    public function productseng(){
        $idpro = 28;
        $service = DB::table('services')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->where('service_page_categories_rel.category_id', $idpro)
        ->where('services.titlei','!=',null)
        ->orderBy('service_page_categories_rel.category_order')
        ->limit('7')
        ->get();
        $dollar = $this->getdollar();
        return view('eng.welcome', compact('service','dollar'));
    }
    public function filter(Request $request)
    {
        $pp=10000000;
        $pm=50;
        $ep=100;
        $em=0;
        if($request->input("pm") != null)
        {
            $pm=$request->input("pm");
        }
        if($request->input("pp") != null)
        {
            $pp=$request->input("pp");
        }
        if($request->input("em") != null)
        {
            $em=$request->input("em");
        }
        if($request->input("ep") != null)
        {
            $ep=$request->input("ep");
        }
        
        $category =  new stdClass();
        $category->name="Busqueda por Filtro";
        $category->meta_title = "Venta de Inflables |Somos Fabricantes | Envio Gratis";
        $category->meta_description="Somos fabricantes especializados en el dise�o y venta de inflables. Inflables en entrega inmediata. Nosotros te apoyamos d�ndote el inflable personalizado a tus necesidades. Invierte de manera segura y ve tus ganancias crecer.";
        $category->meta_keywords="venta de inflables con entrega inmediata, venta de inflables, fabrica de brincolines, venta de inflables tem�ticos";
        $category->id = 0;
        $datos = array();
        if($request->input("em") == null && $request->input("ep") == null)
        {
            $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',$pm)
        ->where('services.price','<=',$pp)         
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        }
        else
        {
            $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',$pm)
        ->where('services.price','<=',$pp)      
        ->where('services.maxage','>=',$em)   
        ->where('services.minage','<=',$ep)  
        ->where('services.maxage','>',0)   
        ->where('services.minage','>',0)  
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        }
        
        $datos = $services;
        $totales=$this->gettotales();
        return view('layouts.products', compact('services','category','totales'));
    }

    public function filtereng(Request $request)
    {
        $pp=10000000;
        $pm=50;
        $ep=100;
        $em=0;
        if($request->input("pm") != null)
        {
            $pm=$request->input("pm");
        }
        if($request->input("pp") != null)
        {
            $pp=$request->input("pp");
        }
        if($request->input("em") != null)
        {
            $em=$request->input("em");
        }
        if($request->input("ep") != null)
        {
            $ep=$request->input("ep");
        }
        
        $category =  new stdClass();
        $category->name="Search by Filter";
        $category->meta_title = "Inflatables Sale | We are manufacturers ";
        $category->meta_description="We are manufacturers specialized in the design and sale of inflatables. Inflatables in immediate delivery. We support you by giving you the inflatable customized to your needs. Invest safely and watch your earnings grow.";
        $category->meta_keywords="sale of inflatables, bounce house factory, house inflatables, water inflatables";
        $category->id = 0;
        $datos = array();
        if($request->input("em") == null && $request->input("ep") == null)
        {
            $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',$pm)
        ->where('services.price','<=',$pp)         
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        }
        else
        {
            $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',$pm)
        ->where('services.price','<=',$pp)      
        ->where('services.maxage','>=',$em)   
        ->where('services.minage','<=',$ep)  
        ->where('services.maxage','>',0)   
        ->where('services.minage','>',0)  
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        }
        
        $datos = $services;
        $totales=$this->gettotales();
        return view('eng.layouts.products', compact('services','category','totales'));
    }

    public function gettotales()
    {
        //<450
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',0)
        ->where('services.price','<=',450)         
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[0] = count($services);
        //450-1000
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',450)
        ->where('services.price','<=',1000)         
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[1] = count($services);
        //1000-5000
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',1000)
        ->where('services.price','<=',5000)         
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[2] = count($services);
        //5000-10000
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',5000)
        ->where('services.price','<=',10000)         
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[3] = count($services);
        //>10000
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')
        ->where('services.price','>=',10000)
                
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[4] = count($services);
        //<4
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')    
        ->where('services.minage','<=',3)  
        ->where('services.maxage','>',0)   
        ->where('services.minage','>',0)  
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[5] = count($services);
        //4
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')    
        ->where('services.maxage','>=',4)   
        ->where('services.minage','<=',4)  
        ->where('services.maxage','>',0)   
        ->where('services.minage','>',0)  
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[6] = count($services);
        //5-6
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')    
        ->where('services.maxage','>=',5)   
        ->where('services.minage','<=',6)  
        ->where('services.maxage','>',0)   
        ->where('services.minage','>',0)  
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[7] = count($services);
        //7-11
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')    
        ->where('services.maxage','>=',7)   
        ->where('services.minage','<=',11)  
        ->where('services.maxage','>',0)   
        ->where('services.minage','>',0)  
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[8] = count($services);
        //>12
        $services = DB::table('services')->select('services.id','services.amount_pue','services.amount_qro','services.amount_ver','services.image_url','services.drupal_path','services.price','services.title','services.name','service_page_shipping.shipping_total','service_page_shipping.shipping_tag','service_page_categories_rel.category_id')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->join('service_page_shipping_rel', 'services.id', '=', 'service_page_shipping_rel.service_id')
        ->join('service_page_shipping','service_page_shipping_rel.shipping_id','=','service_page_shipping.id')    
        ->where('services.maxage','>=',12)    
        ->where('services.maxage','>',0)   
        ->where('services.minage','>',0)  
        ->groupBy('services.id')
        ->orderBy('services.price','DESC')
        ->get();
        $res[9] = count($services);
        //Tematicos

        //Techados

        //Acuaticos

        //Peque�os

        //Medianos

        //Gigantes

        //Extremos

        //Sensores

        //De Temporada

        //Casa

        //Didacticos

        //SkyDancers

        //Arcos

        //Replicas

        //Carpas

        //Pantallas

        //Carpas

        //Futbolitos

        //Mobiliario

        //Pelotas

        //Feria

        return $res;
    }
}
