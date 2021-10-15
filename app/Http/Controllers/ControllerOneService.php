<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Web_Categories_rel;
use App\Web_Categories;
use Response;

use Illuminate\Support\Facades\DB;

class ControllerOneService extends Controller
{
    //
    public function index($name)
    {
        $ser = DB::table('services')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->where('service_page_categories_rel.category_id', 1)
        ->orderBy('service_page_categories_rel.category_order','ASC')
        ->get();
        $services = Service::all();       
        $categories = Web_Categories::all();
        $categories_ids = Web_Categories_rel::all();       
        $myid=0;
        $allcatids=array();
        $mycat = $categories[14];
        $OneService = $services[160];

        try{
        foreach ($services as $service) {
            if(strpos($service->drupal_path, $name) !== false)
            {
                $OneService=$service;
                break;
            }
        }
        foreach ($categories_ids as $id)
        {
            if($id->service_id == $OneService->id)
            {
                array_push($allcatids,$id->category_id);
                $myid=$id->category_id;
                
            }
        }
        foreach ($categories as $cat)
        {
            if($cat->id == $myid)
            {
                $mycat=$cat;
                break;
            }
        }
        if(isset($mycat) || $OneService->id != null){

         $picture = DB::table('service_pictures')
            ->select(DB::raw('concat(service_id, "_" , id, ".", type) as picture'))
            ->where('service_id', $OneService->id)
            ->orderBy('img_order')
            ->get();
            $shippinmethods = DB::table('service_page_shipping')
            ->select('service_page_shipping.id','service_page_shipping.shipping_tag','service_page_shipping.shipping_total')
            ->join('service_page_shipping_rel', 'service_page_shipping.id', '=', 'service_page_shipping_rel.shipping_id')
            ->where('service_id', $OneService->id)
            ->orderBy('service_page_shipping.shipping_total','ASC')
            ->get();
	    $procat = DB::table('services')
            ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
            ->where('service_page_categories_rel.category_id', $cat->id)
            ->orderBy('service_page_categories_rel.category_order','ASC')
            ->get();
            $variants = DB::table('variant_services')->select('variant_services.id','variant_services.attr')
            ->join('variants','variants.id','=','variant_services.variant_id')
            ->where('variants.service_id',$OneService->id)
            ->orderBy('variant_services.attr','ASC')
            ->get();
            //Questions
            $questions = DB::table('service_web_questions')->select('id','service_id','name','email','question','question_id','type','created')
            ->where('service_id',$OneService->id)
            ->where('type',1)
            ->orderBy('id','ASC')
            ->get();

            $ans = DB::table('service_web_questions')->select('id','service_id','name','email','question','question_id','type','created')
            ->where('service_id',$OneService->id)
            ->where('type',2)
            ->orderBy('id','ASC')
            ->get();

            $answers = array();

            foreach($ans as $an)
            {
                $answers[$an->question_id] = $an;
            }
        
        return view('layouts.product', compact('OneService','mycat', 'picture','shippinmethods','ser', 'procat','variants','allcatids','questions','answers'));
        }            
        else{
            return view('errors.404');
        }
    }
    catch (Exception $e){
        return view('errors.404');
    }
      
    }
    public function indexeng($name)
    {      
        //$name=str_replace("_", " ", $urlname);
        
        $ser = DB::table('services')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->where('service_page_categories_rel.category_id', 1)
        ->where('services.titlei','!=',null)
        ->orderBy('service_page_categories_rel.category_order','ASC')
        ->get();
        $services = Service::all();       
        $categories = Web_Categories::all();
        $categories_ids = Web_Categories_rel::all();       
        $myid=0;
        $allcatids=array();
        $mycat = $categories[16];
        $OneService = $services[0];

        try{
        foreach ($services as $service) {       	
            if(strpos($service->drupal_path, $name) !== false)
            {
                $OneService=$service;
                break;
            }
        }
        foreach ($categories_ids as $id)
        {
            if($id->service_id == $OneService->id)
            {
                array_push($allcatids,$id->category_id);
                $myid=$id->category_id;
                
            }
        }
        foreach ($categories as $cat)
        {
            if($cat->id == $myid)
            {
                $mycat=$cat;
                break;
            }
        }
        if(isset($mycat) || $OneService->id != null){

         $picture = DB::table('service_pictures')
            ->select(DB::raw('concat(service_id, "_" , id, ".", type) as picture'))
            ->where('service_id', $OneService->id)
            ->orderBy('img_order')
            ->get();

            //SELECT s.id,s.shipping_tag, s.shipping_total FROM service_page_shipping s inner join service_page_shipping_rel r on s.id=r.shipping_id where r.service_id=4
            $shippinmethods = DB::table('service_page_shipping')
            ->select('service_page_shipping.id','service_page_shipping.shipping_tag','service_page_shipping.shipping_total')
            ->join('service_page_shipping_rel', 'service_page_shipping.id', '=', 'service_page_shipping_rel.shipping_id')
            ->where('service_id', $OneService->id)
            ->orderBy('service_page_shipping.shipping_total','ASC')
            ->get();
	    
	    $procat = DB::table('services')
            ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
            ->where('service_page_categories_rel.category_id', $cat->id)
            ->where('services.titlei','!=',null)
            ->orderBy('service_page_categories_rel.category_order','ASC')
            ->get();

            //SELECT vs.id,vs.attr FROM variant_services vs inner join variants v on v.id=vs.variant_id inner JOIN services s on s.id=v.service_id where s.id=161
            $variants = DB::table('variant_services')->select('variant_services.id','variant_services.attr')
            ->join('variants','variants.id','=','variant_services.variant_id')
            ->where('variants.service_id',$OneService->id)
            ->orderBy('variant_services.attr','ASC')
            ->get();
        
            $dollar=$this->getdollar();

        return view('eng.layouts.product', compact('OneService','mycat', 'picture','shippinmethods','ser', 'procat','variants','allcatids','dollar'));
        }            
        else{
            return view('errors.404');
        }
    }
    catch (Exception $e){
        return view('errors.404');
    }
      
    }

    public function addcart(Request $request)
    {      
        $arr_cart = (array)session('Cart');
        array_push($arr_cart, array($request->input("id"),$request->input("amount"),$request->input("variant")));
        session(['Cart'=>$arr_cart]);
        //var_dump(session('Cart'));
    }

    public function getdollar()
    {
        return 20.24;
    }

    public function savequest(Request $request)
    {
        $id = $request->input("id");
        $name = $request->input("name");
        $mail = $request->input("mail");
        $question = $request->input("question");
        DB::table('service_web_questions')->insert(
            array('service_id' => $id, 
              'name' => $name, 
              'email' => $mail, 
              'question' => $question,
              'type' => 1,
              'created' => date("Y-m-d"))); 

         return Response::json([
            'status' => true,
        ]);
    }
}
