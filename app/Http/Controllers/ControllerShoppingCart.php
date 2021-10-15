<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;

class ControllerShoppingCart extends Controller
{
    //
    public function index()
    {       
        $emptycart=false;
        $arr_cart = (array)session('Cart');
        
        $message=session('Message');
        if(session('Cupon')!=null){
            $coupon=session('Cupon');}
        else{
            $coupon=0.0;}
        if(session('Cart')!=null)
        {
            $products = array();
            $i=0;
            $shitot=0;
            $shitag="Env�o Gratis";
            $shipm = array();
            $shiid = array();
            $shitaga = array();
            $shitota = array();
            $moreexpensiveproductid=0;
            $moreexpensiveproduct=0;
            foreach($arr_cart as $cart)
            {
                $search = Service::find($cart[0]);
                $product=array();
                $prodtitle=$search->title;
                $variants= DB::table('variant_services')
                ->select('id','attr')               
                ->where('id', $cart[2])
                ->get();

                $variantid=null;
                $variantname="";
                foreach($variants as $va)
                {                                 
                    $variantid=$va->id;
                    $variantname=$va->attr;
                  
                }
                if($prodtitle == null)
                  $prodtitle=$search->name;
                array_push($product,$cart[0],$search->image_url,$prodtitle,$cart[1],$search->price,$search->amount,$search->minimal,$i,$search->drupal_path,$search->shipping_tag,$search->shipping_total,$variantid,$variantname);
                array_push($products,$product);
                //if($search->shipping_total>0)
                    $shitag=$search->shipping_tag;               
                $shitot=$shitot+$search->shipping_total;
                if($moreexpensiveproduct < $search->price)
                {
                    $moreexpensiveproduct=$search->price;
                    $moreexpensiveproductid=$cart[0];
                }
                $i++;
            }
                $shippinmethods = DB::table('service_page_shipping')
                ->select('service_page_shipping.id','service_page_shipping.shipping_tag','service_page_shipping.shipping_total')
                ->join('service_page_shipping_rel', 'service_page_shipping.id', '=', 'service_page_shipping_rel.shipping_id')
                ->where('service_id', $moreexpensiveproductid)
                ->orderBy('shipping_total')
                ->get();
                $j=0;
                foreach($shippinmethods as $sh)
                {
                        array_push($shiid,$sh->id);
                        array_push($shitaga,$sh->shipping_tag);
                        array_push($shitota,$sh->shipping_total);
                        $j++;
                   
            }
            $shiid = array_unique($shiid);
            $shitag = array_unique($shitaga);
            $shitota = array_unique($shitota);
            array_push($shipm,$shiid,$shitaga,$shitota);
            $emptycart=true;           
            return view('layouts.cart', compact('emptycart','products','message','arr_cart','shitot','shitag','shipm','moreexpensiveproductid','coupon'));
        }
        else
        {
            $emptycart=false;
            return view('layouts.cart', compact('emptycart'));
        }
    }

    public function indexeng()
    {       
        $emptycart=false;
        $arr_cart = (array)session('Cart');
        
        $message=session('Message');
        if(session('Cupon')!=null){
            $coupon=session('Cupon');}
        else{
            $coupon=0.0;}
        if(session('Cart')!=null)
        {
            $products = array();
            $i=0;
            $shitot=0;
            $shitag="Envio Gratis";
            $shipm = array();
            $shiid = array();
            $shitaga = array();
            $shitota = array();
            $moreexpensiveproductid=0;
            $moreexpensiveproduct=0;
            foreach($arr_cart as $cart)
            {
                $search = Service::find($cart[0]);
                $product=array();
                $prodtitle=$search->title;
                $variants= DB::table('variant_services')
                ->select('id','attr')               
                ->where('id', $cart[2])
                ->get();

                $variantid=null;
                $variantname="";
                foreach($variants as $va)
                {                                 
                    $variantid=$va->id;
                    $variantname=$va->attr;
                  
                }
                if($prodtitle == null)
                  $prodtitle=$search->name;
                array_push($product,$cart[0],$search->image_url,$prodtitle,$cart[1],$search->price,$search->amount,$search->minimal,$i,$search->drupal_path,$search->shipping_tag,$search->shipping_total,$search->titlei,$variantid,$variantname);
                array_push($products,$product);
                //if($search->shipping_total>0)
                    $shitag=$search->shipping_tag;               
                $shitot=$shitot+$search->shipping_total;
                if($moreexpensiveproduct < $search->price)
                {
                    $moreexpensiveproduct=$search->price;
                    $moreexpensiveproductid=$cart[0];
                }
                $i++;
            }
                $shippinmethods = DB::table('service_page_shipping')
                ->select('service_page_shipping.id','service_page_shipping.shipping_tag','service_page_shipping.shipping_total')
                ->join('service_page_shipping_rel', 'service_page_shipping.id', '=', 'service_page_shipping_rel.shipping_id')
                ->where('service_id', $moreexpensiveproductid)
                ->orderBy('shipping_total')
                ->get();
                $j=0;
                foreach($shippinmethods as $sh)
                {
                        array_push($shiid,$sh->id);
                        array_push($shitaga,$sh->shipping_tag);
                        array_push($shitota,$sh->shipping_total);
                        $j++;
                }
            $shiid = array_unique($shiid);
            $shitag = array_unique($shitaga);
            $shitota = array_unique($shitota);
            array_push($shipm,$shiid,$shitaga,$shitota);
            $emptycart=true;
            $dollar = $this->getdollar();           
            return view('eng.layouts.cart', compact('emptycart','products','dollar','message','arr_cart','shitot','shitag','shipm','moreexpensiveproductid','coupon'));
        }
        else
        {
            $emptycart=false;
            return view('eng.layouts.cart', compact('emptycart'));
        }
    }

    public function getdollar()
    {
        return 20.24;
    }


    public function delete_cart(Request $request)
    {
            $arr_cart = (array)session('Cart');
            unset($arr_cart[$request->input("indx")]);
            session(['Cart'=>$arr_cart]);  
    }
    public function delete_allcart(Request $request)
    {
            $arr_cart = array();
            session(['Cart'=>$arr_cart]);  
    }
    public function update_cart(Request $request)
    {
        $arr_cart = (array)session('Cart');
        $rep= array(1 => $request->input("valuex"));
        $product = $arr_cart[$request->input("indx")];
        $product = array_replace($product,$rep);
        $repl= array($request->input("indx") => $product);
        $arr_cart = array_replace($arr_cart,$repl);
        session(['Cart'=>$arr_cart]);      
                       
    }
    public function update_ship(Request $request)
    {
        $rep= $request->input("shiptot");
        $tag= $request->input("shiptag");
        session(['shipping'=>$rep]);   
        session(['shippingtag'=>$tag]);                         
    }
}

