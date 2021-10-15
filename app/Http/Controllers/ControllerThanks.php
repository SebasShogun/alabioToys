<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuCompraAlabioToys;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;

class ControllerThanks extends Controller
{
    //
    public function index() {
        if(session('Cart')!=null)
        {
        $lastdata = DB::table('contracts')->orderBy('id', 'desc')->first();
        $emptycart=false;
        $arr_cart = (array)session('Cart');
        $products = array();
        $message=session('Message');
        $shitot=0;
        $shitag="EnvÍo Gratis";
        $shiptag = session('shippingtag');
        $shiptot = session('shipping');
            
            $i=0;
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
                //if($search->shipping_total>0)
                    $shitag=$search->shipping_tag;               
                $shitot=$shitot+$search->shipping_total;
                $i++;
            }
            $emptycart=true;           
        
        if($lastdata->tag == "Ventanilla" || $lastdata->tag == "PayPal" || $lastdata->tag == "Stripe" || $lastdata->tag == "StripeMSI")
        {
            $origin = 0;
            if($lastdata->tag == "Ventanilla")
                $origin=13;
            else if($lastdata->tag == "PayPal")
                $origin=7;
            else if($lastdata->tag == "Stripe" || $lastdata->tag == "StripeMSI")
                $origin=11;
            DB::update('update contracts set pagopendiente = 1, canceled = 0 where id = ?', [$lastdata->id]);
            try{
            DB::insert('insert into payments (user_id, date, origin, amount, type, status, created_at ) values (?, ?, ? ,?, ?, ?, ?)', 
            [21, date("Y-m-d"),$origin,$lastdata->subtotal,1,1,$lastdata->created_at]);
            $payid = DB::getPdo()->lastInsertId();

            DB::insert('insert into contract_payments (contract_id, payment_id) values (?, ?)', 
            [$lastdata->id, $payid]);
            }
            catch(Exception $e)
            {

            }
        $wid= $this->get_free_workstation();
        foreach( $products as  $product)
            {
                //INSERT INTO productionorders 
                //(contract_id, priority, service_id,delivery_date,created_at,status,token,amountworkstation_id,sent) VALUES
                //(cid,2,sid,deldate,unixdate,0,1,amount,wid,0)


                if($product[11] != null)
                {
                    $inst = $this->in_stock_variant($product[0],$product[3],$product[11]);
                    $this->update_amount($product[0]);
                    if($inst == "x")
                    {
                        DB::insert('INSERT INTO productionorders (contract_id, priority, service_id,delivery_date,created_at,status,token,amount,workstation_id,sent,variant_id,in_stock) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)',
                        [$lastdata->id, 2,
                        $product[0],
                        $lastdata->delivery_date,
                        $lastdata->created_at,0,1,
                        $product[3],
                        $wid,0,
                        $product[11],1]
                        );
                    }
                    else
                    {
                        $tot = $product[3]-$inst;
                        if($tot>0)
                            { 
                                //Crea lo que hay de inventario con palomita
                                DB::insert('INSERT INTO productionorders (contract_id, priority, service_id,delivery_date,created_at,status,token,amount,workstation_id,sent,variant_id,in_stock) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)',
                                [$lastdata->id, 2,
                                $product[0],
                                $lastdata->delivery_date,
                                $lastdata->created_at,0,1,
                                $tot,
                                $wid,0,
                                $product[11],1]
                                );
                            }
                                
                        //Crea lo que falta de inventario con equis
                        DB::insert('INSERT INTO productionorders (contract_id, priority, service_id,delivery_date,created_at,status,token,amount,workstation_id,sent,variant_id,in_stock) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)',
                        [$lastdata->id, 2,
                        $product[0],
                        $lastdata->delivery_date,
                        $lastdata->created_at,0,1,
                        $inst,
                        $wid,0,
                        $product[11],
                        0]
                        );
                    }
                }
                else
                {
                    DB::insert('INSERT INTO productionorders (contract_id, priority, service_id,delivery_date,created_at,status,token,amount,workstation_id,sent) VALUES (?, ?,?,?,?,?,?,?,?,?)',
                    [$lastdata->id, 
                    2,
                    $product[0],
                    $lastdata->delivery_date,
                    $lastdata->created_at,
                    0,
                    1,
                    $product[3],
                    $wid,
                    0]
                    );      
                }
            }
        }
        $payment = $this->whatthepay($lastdata->tag);
        $coupon=0;
        if(session('Cupon')!=null){
            $coupon=session('Cupon');}
        else{
            $coupon=0.0;}
        try{
            // $emails = array();
            // array_push($emails,$lastdata->email,"ventastoys@alabio.mx");           
            // Mail::to($emails)->send(new SuCompraAlabioToys($lastdata,$products,$payment,$shiptot,$shiptag,$coupon));
        }
        catch(Exception $e)
        {
            echo("Error al enviar correo a ".$lastdata->email);
        }

        //Borrar session
        $empty_cart = array();
        session(['Cart'=>$empty_cart]);
        session(['Cupon'=>null]);
        session(['Cuponid'=>null]);
        //

        return view('layouts.thanks',compact('lastdata','products','payment','shitot','shiptot','shiptag'));
        }
        else
        {
            $idpro = 28;
        $service = DB::table('services')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->where('service_page_categories_rel.category_id', $idpro)
        ->orderBy('service_page_categories_rel.category_order')
        ->limit('7')
        ->get();
        return view('welcome', compact('service'));
        }
    }

    public function indexeng() {
        if(session('Cart')!=null)
        {
        $lastdata = DB::table('contracts')->orderBy('id', 'desc')->first();
        $emptycart=false;
        $arr_cart = (array)session('Cart');
        $products = array();
        $message=session('Message');
        $shitot=0;
        $shitag="Env�o Gratis";
        $shiptag = session('shippingtag');
        $shiptot = session('shipping');
            
            $i=0;
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
                //if($search->shipping_total>0)
                    $shitag=$search->shipping_tag;               
                $shitot=$shitot+$search->shipping_total;
                $i++;
            }
            $emptycart=true;           
        
        if($lastdata->tag == "Ventanilla" || $lastdata->tag == "PayPal" || $lastdata->tag == "Stripe" || $lastdata->tag == "StripeMSI")
        {
            $origin = 0;
            if($lastdata->tag == "Ventanilla")
                $origin=13;
            else if($lastdata->tag == "PayPal")
                $origin=7;
            else if($lastdata->tag == "Stripe" || $lastdata->tag == "StripeMSI")
                $origin=11;
            DB::update('update contracts set pagopendiente = 1, canceled = 0 where id = ?', [$lastdata->id]);
            try{
            DB::insert('insert into payments (user_id, date, origin, amount, type, status, created_at ) values (?, ?, ? ,?, ?, ?, ?)', 
            [21, date("Y-m-d"),$origin,$lastdata->subtotal,1,1,$lastdata->created_at]);
            $payid = DB::getPdo()->lastInsertId();

            DB::insert('insert into contract_payments (contract_id, payment_id) values (?, ?)', 
            [$lastdata->id, $payid]);
            }
            catch(Exception $e)
            {

            }
        $wid= $this->get_free_workstation();
        foreach( $products as  $product)
            {
                //INSERT INTO productionorders 
                //(contract_id, priority, service_id,delivery_date,created_at,status,token,amountworkstation_id,sent) VALUES
                //(cid,2,sid,deldate,unixdate,0,1,amount,wid,0)


                                        if($product[11] != null)
                                        {
                                            $inst = $this->in_stock_variant($product[0],$product[3],$product[11]);
                                            $this->update_amount($product[0]);
                                            if($inst == "x")
                                            {
                                                DB::insert('INSERT INTO productionorders (contract_id, priority, service_id,delivery_date,created_at,status,token,amount,workstation_id,sent,variant_id,in_stock) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)',
          [$lastdata->id, 
          2,
          $product[0],
          $lastdata->delivery_date,
          $lastdata->created_at,
          0,
          1,
          $product[3],
          $wid,
          0,
          $product[11],
          1]
          );

                                            }
                                            else
                                            {
                                            $tot = $product[3]-$inst;
                                            if($tot>0)
                                            { 
                                            //Crea lo que hay de inventario con palomita
                                            DB::insert('INSERT INTO productionorders (contract_id, priority, service_id,delivery_date,created_at,status,token,amount,workstation_id,sent,variant_id,in_stock) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)',
          [$lastdata->id, 
          2,
          $product[0],
          $lastdata->delivery_date,
          $lastdata->created_at,
          0,
          1,
          $tot,
          $wid,
          0,
          $product[11],
          1]
          );
                                            }
                                
                                            //Crea lo que falta de inventario con equis
                                            DB::insert('INSERT INTO productionorders (contract_id, priority, service_id,delivery_date,created_at,status,token,amount,workstation_id,sent,variant_id,in_stock) VALUES (?, ?,?,?,?,?,?,?,?,?,?,?)',
          [$lastdata->id, 
          2,
          $product[0],
          $lastdata->delivery_date,
          $lastdata->created_at,
          0,
          1,
          $inst,
          $wid,
          0,
          $product[11],
          0]
          );
                                            }
                                        }
                                        else
                                        {
                                            DB::insert('INSERT INTO productionorders (contract_id, priority, service_id,delivery_date,created_at,status,token,amount,workstation_id,sent) VALUES (?, ?,?,?,?,?,?,?,?,?)',
          [$lastdata->id, 
          2,
          $product[0],
          $lastdata->delivery_date,
          $lastdata->created_at,
          0,
          1,
          $product[3],
          $wid,
          0]
          );      
            }
            }
        }
        $payment = $this->whatthepay($lastdata->tag);
        $coupon=0;
        if(session('Cupon')!=null){
            $coupon=session('Cupon');}
        else{
            $coupon=0.0;}
        try{
            // $emails = array();
            // array_push($emails,$lastdata->email,"ventastoys@alabio.mx");           
            // Mail::to($emails)->send(new SuCompraAlabioToys($lastdata,$products,$payment,$shiptot,$shiptag,$coupon));
        }
        catch(Exception $e)
        {
            echo("Error al enviar correo a ".$lastdata->email);
        }

        //Borrar session
        $empty_cart = array();
        session(['Cart'=>$empty_cart]);
        session(['Cupon'=>null]);
        session(['Cuponid'=>null]);
        //

        return view('eng.layouts.thanks',compact('lastdata','products','payment','shitot','shiptot','shiptag'));
        }
        else
        {
            $idpro = 28;
        $service = DB::table('services')
        ->join('service_page_categories_rel', 'services.id', '=', 'service_page_categories_rel.service_id')
        ->where('service_page_categories_rel.category_id', $idpro)
        ->orderBy('service_page_categories_rel.category_order')
        ->limit('7')
        ->get();
        return view('eng.welcome', compact('service'));
        }
    }
    public function get_free_workstation()
    {
        $free_workstation = Null;
        $workstations_temp = array();
        $workstations = DB::select('select id from workstations');
        
        foreach($workstations as $ws)
        {
            $productionorder = DB::select('select * from productionorders where workstation_id = ? and delivery_date >= ? order by delivery_date DESC limit 1',
             [$ws->id,date('Y-m-d')]);
        
            if($productionorder != null)
            {
                $free_workstation = $ws->id;
                break;
            }
            else{ 
                $free_workstation = 1;
            }
        }

        return $free_workstation;
    }
    public function whatthepay($tag)
    {
        $metodo="";
        if($tag == "Banamex")
		    $metodo="Transferencia Banamex ";
	    else if($tag == "Espei")
		    $metodo="Transferencia Bancaria ";
		else if($tag == "Stripe")
            $metodo="Pago con Tarjeta";
        else if($tag == "StripeMSI")
            $metodo="Pago a meses con Tarjeta";
        else if($tag == "Ventanilla")
		    $metodo="Pago con Tarjeta";
		else if($tag == "Deposito")
            $metodo="Deposito en Oxxo";
        else if($tag == "PayPal")
            $metodo="PayPal";
        else
            $metodo=$tag;
        
        return $metodo;
    }
    public function in_stock_variant($id,$amount,$variant)
    {

        $svariants = DB::table('variant_services')->select('variant_services.id','variant_services.attr','variants.id','services.name','variants.service_id','variant_services.amount_pue','variant_services.amount_qro','variant_services.amount_ver')
            ->join('variants','variants.id','=','variant_services.variant_id')
            ->join('services','services.id','=','variants.service_id')
            ->where('variants.service_id',$id)
            ->where('variant_services.id',$variant)
            ->get();
 
            

        foreach($svariants as $s)
        {
            $totp=$s->amount_pue;
            $totq=$s->amount_qro;
            $totv=$s->amount_ver;
            
        }

        $response=null;

        if($amount<=$totp)
        {
                  
            DB::update('update variant_services set amount_pue = ? where id = ?', [$totp-$amount,$variant]);
        
            $response= "x";
        }
        else if($amount>$totp)
        {
            
            DB::update('update variant_services set amount_pue = 0 where id = ?', [$variant]);

            $response =  $amount-$totp;
        }
            
        else      
        $response = 0;
               
        
        $this->update_amount($id);
        return $response;
    }
    public function update_amount($sid)
    {


        $service_inv = DB::table('variant_services')->select('variant_services.id','variant_services.attr','variants.id','services.name','variants.service_id','variant_services.amount_pue','variant_services.amount_qro','variant_services.amount_ver')
            ->join('variants','variants.id','=','variant_services.variant_id')
            ->join('services','services.id','=','variants.service_id')
            ->where('variants.service_id',$sid)
            ->get();

        $ipue = 0;
        $iqro = 0;
        $iver = 0;

        foreach($service_inv as $iv)
        {
            $ipue = $ipue+$iv->amount_pue;
            $iqro = $iqro+$iv->amount_qro;
            $iver = $iver+$iv->amount_ver;
        }


        DB::update('update services set amount_pue = ?,amount_qro = ?,amount_ver = ? where id = ?', [$ipue,$iqro,$iver,$sid]);
       
    }
    public function redendmail($id)
    {
        $contract= DB::table('contracts')              
        ->where('id', $id)
        ->get();

        $lastdata=null;

        foreach($contract as $c)
        {
            $lastdata=$c;
        }       

        $contractserv= DB::table('contract_services')             
        ->where('contract_id', $id)
        ->get();

        $products=array();
        $prodtitle="";
        $i=0;
        foreach($contractserv as $cs)
        {
            $search = Service::find($cs->service_id);

            $variants= DB::table('variant_services')
            ->select('id','attr')               
            ->where('id', $cs->variants)
            ->get();

            $variantid=null;
            $variantname="";
            foreach($variants as $va)
            {                                 
                $variantid=$va->id;
                $variantname=$va->attr;
              
            }

                $product=array();
                $prodtitle=$search->title;
                if($prodtitle == null)
                  $prodtitle=$search->name;
                array_push($product,$cs->id,$search->image_url,$prodtitle,$cs->amount,$search->price,$search->amount,$search->minimal,$i,$search->drupal_path,$search->shipping_tag,$search->shipping_total,$variantid,$variantname);
                array_push($products,$product);
                $i++;
        }
        $payment = $this->whatthepay($lastdata->tag);
        $coupon=0;

        // $emails = array();
        // array_push($emails,$lastdata->email,"ventastoys@alabio.mx");           
        // Mail::to($emails)->send(new SuCompraAlabioToys($lastdata,$products,$payment,$lastdata->shipping_total,$lastdata->shipping_tag,$coupon));
    }
    
}
