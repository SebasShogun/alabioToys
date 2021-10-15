<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Routing\ResponseFactory;
use Stripe;

class ControllerCheckout extends Controller
{
    //
    public function index()
    {       
        $emptycart=false;
        $arr_cart = (array)session('Cart');
        $shiptag = session('shippingtag');
        $shiptot = session('shipping');
        
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
            $shitag="Envío Gratis";
            foreach($arr_cart as $cart)
            {
                $variants= DB::table('variant_services')
                ->select('id','attr')               
                ->where('id', $cart[2])
                ->get();

                $variantid=0;
                $variantname="";
                foreach($variants as $va)
                {                                 
                    $variantid=$va->id;
                    $variantname=$va->attr;
                  
                }
                $search = Service::find($cart[0]);
                $product=array();
                $prodtitle=$search->title;
                if($prodtitle == null){
                  $prodtitle=$search->name;}
                array_push($product,$cart[0],$search->image_url,$prodtitle,$cart[1],$search->price,$search->amount,$search->minimal,$i,$search->drupal_path,$search->shipping_tag,$search->shipping_total,$variantid,$variantname);
                array_push($products,$product);
                //if($search->shipping_total>0)
                    $shitag=$search->shipping_tag;               
                $shitot=$shitot+$search->shipping_total;
                $i++;
            }
            $emptycart=true;           
            return view('layouts.checkout', compact('emptycart','products','message','arr_cart','shitot','shitag','shiptag','shiptot','coupon'));
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
        $shiptag = session('shippingtag');
        $shiptot = session('shipping');
        
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
            $shitag="Envío Gratis";
            foreach($arr_cart as $cart)
            {
                $variants= DB::table('variant_services')
                ->select('id','attr')               
                ->where('id', $cart[2])
                ->get();

                $variantid=0;
                $variantname="";
                foreach($variants as $va)
                {                                 
                    $variantid=$va->id;
                    $variantname=$va->attr;
                  
                }
                $search = Service::find($cart[0]);
                $product=array();
                $prodtitle=$search->title;
                if($prodtitle == null){
                  $prodtitle=$search->name;}
                array_push($product,$cart[0],$search->image_url,$prodtitle,$cart[1],$search->price,$search->amount,$search->minimal,$i,$search->drupal_path,$search->shipping_tag,$search->shipping_total,$variantid,$variantname);
                array_push($products,$product);
                //if($search->shipping_total>0)
                    $shitag=$search->shipping_tag;               
                $shitot=$shitot+$search->shipping_total;
                $i++;
            }
            $emptycart=true;
            $dollar = $this->getdollar();            
            return view('eng.layouts.checkout', compact('emptycart','products','dollar','message','arr_cart','shitot','shitag','shiptag','shiptot','coupon'));
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
    public function savecontract(Request $request)
    {
                
        $stripetok = $request->input("sttoken");         
       $name = $request->input("nombre")." ".$request->input("apellido");
       $empresa = $request->input("empresa");
       $street=$request->input("street");
       $no_ext=$request->input("no_ext");
       $no_int=$request->input("no_int");
       $reference=$request->input("reference");
       $colony=$request->input("colony");
       $locality=$request->input("locality");
       $state=$request->input("state");
       $postal_code=$request->input("postal_code");
       $country=$request->input("country");
       $phone=$request->input("phone");
       $phone_cell=$request->input("phone_cell");
       $email=$request->input("email");
       $tag=$request->input("tag");
       $meses=$request->input("meses");
       $description=$request->input("description"); 
       $contact = $request->input("contact");
        $canceled = 0;
      $msi=$request->input("selected_plan")['count'];

       $arr_cart = (array)session('Cart');
       $shiptag = session('shippingtag');
        $shiptot = session('shipping');
        
        if(session('Cart')!=null)
        {
            $products = array();
            $i=0;
            $proddays=0;
            $total=0;
            $shitot=0;
            $shitag="Envío Gratis";
            foreach($arr_cart as $cart)
            {
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
                $search = Service::find($cart[0]);
                $product=array();
                $prodtitle=$search->title;
                if($prodtitle == null)
                  $prodtitle=$search->name;
                array_push($product,$cart[0],$search->image_url,$prodtitle,$cart[1],$search->price,$search->amount,$search->minimal,$i,$search->drupal_path,$search->shipping_tag,$search->shipping_total,$variantid,$variantname);
                array_push($products,$product); 
                $proddays=$proddays+$search->web_production_time;
                //if($search->shipping_total>0)
                    $shitag=$search->shipping_tag;               
                $shitot=$shitot+$search->shipping_total;              
                $i++;
                if($tag == "Ventanilla" || $tag == "StripeMSI" || $tag == "PayPal" || $tag == "Stripe")
                {
                    //$categoriesweb= DB::table('service_page_categories_rel')
                  //->select('category_id')               
                  //->where('service_id', $cart[0])
                  //->get();
                  //foreach($categoriesweb as $cate)
                  //{
                      //if($cate->category_id == 17 || $cate->category_id == 27 || $cate->category_id == 2 || $cate->category_id == 14 || $cate->category_id == 11 || $cate->category_id == 7 || $cate->category_id == 5 || $cate->category_id == 29)
                     // {
                        $total=$total+(($search->price *1.039) * $cart[1]);
                        $canceled=1;
                      //}
                  //}  
                }
                else
                {
                    $total=$total+($search->price * $cart[1]);
                }
            }
            $total=$total+$shiptot;
            if(session('Cupon')!=null){
                $coupon=session('Cupon');
                $total=$total-($total*$coupon);

                if(session('Cuponid') != 7 || session('Cuponid') != 8)
                {
                DB::update('UPDATE coupons_list SET used=1 where id = ?', [session('Cuponid')]);
                }
            }
            
            $feriados = array(
            date("Y-m-d",strtotime('2020-01-01')),
            date("Y-m-d",strtotime('2020-02-05')),
            date("Y-m-d",strtotime('2020-03-16')), 
            date("Y-m-d",strtotime('2020-05-01')),
            date("Y-m-d",strtotime('2020-09-16')), 
            date("Y-m-d",strtotime('2020-11-16')),
            date("Y-m-d",strtotime('2020-12-25')),
            date("Y-m-d",strtotime('2021-01-01')),
            date("Y-m-d",strtotime('2021-02-01')),
            date("Y-m-d",strtotime('2021-03-15')),
            date("Y-m-d",strtotime('2021-05-01')),
            date("Y-m-d",strtotime('2021-09-16')),  
            date("Y-m-d",strtotime('2021-11-15')),
            date("Y-m-d",strtotime('2021-12-25')),   
            date("Y-m-d",strtotime('2022-01-01')),
            date("Y-m-d",strtotime('2022-02-05')),
            date("Y-m-d",strtotime('2022-03-14')), 
            date("Y-m-d",strtotime('2022-05-01')),
            date("Y-m-d",strtotime('2022-09-16')),  
            date("Y-m-d",strtotime('2022-11-14')),
            date("Y-m-d",strtotime('2022-12-25'))
            );   
            $fecha_actual = date("Y-m-d");
            $deliverydate = $fecha_actual;          
            for($i = 1; $i <= $proddays; $i++) {
                $deliverydate = date("Y-m-d",strtotime($deliverydate."+ 1 days")); 
                if(date("w",strtotime($deliverydate))==6)
                    {
                        $deliverydate = date("Y-m-d",strtotime($deliverydate."+ 2 days")); 
                    }
                if(date("w",strtotime($deliverydate))==0)
                    {
                        $deliverydate = date("Y-m-d",strtotime($deliverydate."+ 1 days")); 
                    }
                    if(in_array($deliverydate,$feriados))
                {                   
                    $deliverydate = date("Y-m-d",strtotime($deliverydate."+ 1 days"));                      
                }
            }
            $fechaunix = strtotime("now");

        //INSERT INTO `contracts`(`user_id`, `name`, `phone`, `phone_cell`, `origin`, 
        //`email`, `delivery_date`, `country`, `postal_code`, `state`, 
        //`municipality`, `colony`, `street`, `no_ext`, `no_int`, `reference`, 
        //`means`, `means_children`, `means_description`, `subtotal`, 
        //`status`, `modified`, `canceled`, `is_approved`, `of_planner`,
        // `created_at`, `sale_origin`,pagopendiente, tag) VALUES (1,'@name','@phone','Pue',
        //'@email','$deliverydate','@country','@CP','@state','@city','@colony',
        //'@street','@no_ext','@no_int',"",2,2,"","$subtotal",0,0,0,1,0,'$timeunix',2,0,$tag)

        $services = DB::insert('insert into contracts (user_id, name, phone, phone_cell, origin, email, delivery_date, country, postal_code, state, municipality, colony, street, no_ext, no_int, reference, means, means_children, means_description, subtotal, status, modified, canceled, is_approved, of_planner, created_at, sale_origin,pagopendiente, tag, notify,shipping_tag,shipping_total,msi) values (?,?, ?,?, ?,?, ?,?, ?,?, ?,?, ?,?, ?,?, ?,?, ?,?, ?,?, ?,?, ?,?, ?,?,?,?,?,?,?)',
         [21,$name,$phone,$phone_cell,'Pue',
         $email,$deliverydate,$country,$postal_code,$state,$locality,$colony,
         $street,$no_ext,$no_int,$reference,$contact,1,"",$total,0,0,$canceled,1,0,$fechaunix,2,0,$tag,1,
         $shiptag,$shiptot,$msi]);

         //INSERT INTO `contract_services`( `token`, `contract_id`, `service_id`, `provider_id`, `confirmed`, `amount`, `price`) 
         //VALUES (1,@id,@sid,2,1,@amount,@price)

         $cid = DB::getPdo()->lastInsertId();
         foreach( $products as  $product)
            {
                $pprice=$product[4];

                if($tag == "Ventanilla" || $tag == "StripeMSI" || $tag == "PayPal" || $tag == "Stripe")
                {
                    //$categoriesweb= DB::table('service_page_categories_rel')
                  //->select('category_id')               
                  //->where('service_id', $cart[0])
                  //->get();
                  //foreach($categoriesweb as $cate)
                  //{
                      //if($cate->category_id == 17 || $cate->category_id == 27 || $cate->category_id == 2 || $cate->category_id == 14 || $cate->category_id == 11 || $cate->category_id == 7 || $cate->category_id == 5 || $cate->category_id == 29)
                      //{
                        $pprice=$product[4]*1.039;
                      //}
                  //}  
                }
         DB::insert('insert into contract_services (token, contract_id, service_id, provider_id, confirmed, amount, price, variants) values (?, ?,?,?,?,?,?,?)',
          [1,$cid, 
          $product[0],
          2,
          1, 
          $product[3], 
          $pprice,
          $product[11]]);
            }      

          
        }
        
    }
    /*public function paymentintent(Request $request)
    {
        $pid = $request->input("pid");

        Stripe\PaymentIntent::create([
            'payment_method' => $pid,
            'amount' => 3099,
            'currency' => 'mxn',
            'payment_method_options' => [
                'card' => [
                    'installments' => [
                        'enabled' => true
                    ]
                ]
            ],
        ]);
        var_dump($pid);
    }*/
    public function stripemonths(Request $request)
    {
        Stripe\Stripe::setApiKey('sk_test_51HiTZnGob5o9zKSdYPE7T8DbgZFQ6JlVgQUoddj4nwYopWj3VRx31OjPp3IcuJ7LMcDMxG7vKNjOXxEzaFQ5pWdw00VaDHJiSj');
        try{
        $intent = Stripe\PaymentIntent::create([
            'payment_method' => $request->input("pmi"),
            'amount' => $request->input("total")*100,
            'currency' => 'mxn',
            'description' => $request->input("desc"),
            'payment_method_options' => [
                'card' => [
                    'installments' => [
                        'enabled' => true
                    ]
                ]
            ],
        ]);
        return Response::json([
            'intent_id' => $intent->id,
            'available_plans' => $intent->payment_method_options->card->installments->available_plans
        ]);
        }
        catch (Stripe\Exception\CardException $e){
            # "e" contains a message explaining why the request failed
            return Response::json(['error'=>'Card Error Message is:' . $e->getError()->message . '
          ','error_message' => $e->getError()->message]);
          }
          catch (Stripe\Exception\InvalidRequestException $e) {
            // Invalid parameters were supplied to Stripe's API
            return Response::json(['error'=> 'Invalid Parameters Message is:' . $e->getError()->message . '
          ','error_message' => $e->getError()->message]);
          }
    }
    public function stripedebitcreate(Request $request)
    {
        
        Stripe\Stripe::setApiKey('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');

        $intent = Stripe\PaymentIntent::create([
        'amount' => $request->input("total")*100,
        'currency' => 'mxn',
        "description" => $request->input("desc"),
        'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);

        return Response::json([
            'client_secret' => $intent->client_secret
        ]);
    }
    public function recalctotal(Request $request)
    {
        $pm = $request->input("pm");
        $emptycart=false;
        $arr_cart = (array)session('Cart');
        $shiptag = session('shippingtag');
        $shiptot = session('shipping');
        
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
            $shitag="Envío Gratis (Ocurre)";
            foreach($arr_cart as $cart)
            {
                //variante
                //SELECT id,attr FROM variant_services where id=11
                $variants= DB::table('variant_services')
                ->select('id','attr')               
                ->where('id', $cart[2])
                ->get();

                $variantid=0;
                $variantname="";
                foreach($variants as $va)
                {                                 
                    $variantid=$va->id;
                    $variantname=$va->attr;
                  
                }


                $search = Service::find($cart[0]);                
                $product=array();
                $prodtitle=$search->title;
                if($prodtitle == null){
                  $prodtitle=$search->name;}

                  
                array_push($product,$cart[0],$search->image_url,$prodtitle,$cart[1],$search->price,$search->amount,$search->minimal,$i,$search->drupal_path,$search->shipping_tag,$search->shipping_total,$variantid,$variantname);
                array_push($products,$product);
                //if($search->shipping_total>0)
                    $shitag=$search->shipping_tag;               
                $shitot=$shitot+$search->shipping_total;
                $i++;
            }

            $subtotal=0.00;

            foreach ($products as $service)
            {     
                $productprice=$service[4];
                if($pm == "Ventanilla" || $pm == "StripeMSI" || $pm== "PayPal" || $pm == "Stripe")
                {
                //$categoriesweb= DB::table('service_page_categories_rel')
                  //->select('category_id')               
                  //->where('service_id', $service[0])
                  //->get();
                  //foreach($categoriesweb as $cate)
                  //{
                      //if($cate->category_id == 17 || $cate->category_id == 27 || $cate->category_id == 2 || $cate->category_id == 14 || $cate->category_id == 11 || $cate->category_id == 7 || $cate->category_id == 5 || $cate->category_id == 29)
                      //{
                        $productprice=$service[4]*1.039;
                      //}
                  //}  
                }                      
                $subtotal=$subtotal+($service[3]*$productprice);  
            }
            $subtotal=$subtotal+$shiptot;
            if($coupon != 0)
            {
                $subtotal=$subtotal-($subtotal*$coupon);
            }

        }
        $newtotal = number_format($subtotal, 2, '.', '');
        return Response::json([
            'total' => $newtotal
        ]);
    }
    

}

