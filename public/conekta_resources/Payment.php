<?php
require_once(($_SERVER["DOCUMENT_ROOT"])."/ventas/conekta_resources/conekta-php-master/lib/Conekta.php");
class Payment{

    private $ApiKey="key_4VkBWEJFFHtzEmSJB2Wdeg";
    private $ApiVersion="2.0.0";

    /*private $UserDB="root";
    private $PassDB="";
    private $ServerDB="localhost:3308";
    private $DataBaseDB="bt_alabiomx_toys";*/

    public function __construct($token,$total,$name,$email,$meses,$description,$card){

        $this->token=$token;
        $this->name=$name;
        $this->description=$description;
        $this->total=$total;
        $this->email=$email;
        $this->card=$card;
        $this->meses=$meses;
        
    }

    public function Pay(){

        \Conekta\Conekta::setApiKey($this->ApiKey);
        \Conekta\Conekta::setApiVersion($this->ApiVersion);

        if(!$this->Validate())
            return false;

        if(!$this->CreateCustomer())
            return false;

        if(!$this->CreateOrder())
            return false;
   

        return true;

    }


    public function CreateOrder(){
        try{
          if($this->meses == 3 || $this->meses == 6 || $this->meses == 9 || $this->meses == 12)
          {
            $this->order = \Conekta\Order::create(
              array(
                "amount"=>$this->total,
                "line_items" => array(
                  array(
                    "name" => "Compra en Alabío Toys - ".$this->description,
                    "unit_price" => $this->total*100, //se multiplica por 100 conekta
                    "quantity" => 1
                  )//first line_item
                ), //line_items
                "currency" => "MXN",
                "customer_info" => array(
                  "customer_id" => $this->customer->id 
                ), //customer_info
                "charges" => array(
                    array(
                        "payment_method" => array(
                                "type" => "default",
                                "monthly_installments" => $this->meses
                        ) 
                    ) //first charge
                ) //charges
              )//order
            );
          }
          else{
            $this->order = \Conekta\Order::create(
              array(
                "amount"=>$this->total,
                "line_items" => array(
                  array(
                    "name" => "Compra en Alabío Toys - ".$this->description,
                    "unit_price" => $this->total*100, //se multiplica por 100 conekta
                    "quantity" => 1
                  )//first line_item
                ), //line_items
                "currency" => "MXN",
                "customer_info" => array(
                  "customer_id" => $this->customer->id 
                ), //customer_info
                "charges" => array(
                    array(
                        "payment_method" => array(
                                "type" => "default"
                        ) 
                    ) //first charge
                ) //charges
              )//order
            );
          }
          
        } catch (\Conekta\ProcessingError $error){
          $this->error=$error->getMessage();
          return false;
        } catch (\Conekta\ParameterValidationError $error){
          $this->error=$error->getMessage();
          return false;
        } catch (\Conekta\Handler $error){
          $this->error=$error->getMessage();
          return false;
        }
  
        return true;
      }
    public function CreateCustomer(){
        try {
          $this->customer = \Conekta\Customer::create(
            array(
              "name" => $this->name,
              "email" => $this->email,
              //"phone" => "+52181818181",
              "payment_sources" => array(
                array(
                    "type" => "card",
                    "token_id" => $this->token
                )
              )//payment_sources
            )//customer
          );
        } catch (\Conekta\ProccessingError $error){
          $this->error=$error->getMesage();
          return false;
        } catch (\Conekta\ParameterValidationError $error){
          $this->error=$error->getMessage();
          return false;
        } catch (\Conekta\Handler $error){
          $this->error=$error->getMessage();
          return false;
        }
  
        return true;
    }

    public function Validate(){
        if($this->card=="" || $this->name=="" || $this->email==""){
          $this->error="El número de tarjeta, el nombre y correo electrónico son obligatorios";
          return false;
        }
       
        if(strlen($this->card)<=14){
          $this->error="El número de tarjeta debe tener al menos 15 caracteres";
          return false;
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
          $this->error="El correo electrónico no tiene un formato de correo valido";
          return false;
        }
        if($this->total<10){
          $this->error="El monto debe ser mayor a 10 pesos";
          return false;
        }
  
        return true;
      }
      /*public function Save(){
        $link = new PDO("mysql:host=".$this->ServerDB.";dbname=".$this->DataBaseDB, $this->UserDB, $this->PassDB);
        //INSERT INTO `contracts`(`user_id`, `name`, `phone`, `origin`, 
        //`email`, `delivery_date`, `country`, `postal_code`, `state`, 
        //`municipality`, `colony`, `street`, `no_ext`, `no_int`, `reference`, 
        //`means`, `means_children`, `means_description`, `subtotal`, 
        //`status`, `modified`, `canceled`, `is_approved`, `of_planner`,
        // `created_at`, `sale_origin`,pagopendiente, tag) VALUES (1,'@name','@phone','Pue',
        //'@email','$deliverydate','@country','@CP','@state','@city','@colony',
        //'@street','@no_ext','@no_int',"",2,2,"","$subtotal",0,0,0,1,0,'$timeunix',2,0,$tag)
  
        $statement = $link->prepare("INSERT INTO contracts(user_id, name, phone, origin,email, delivery_date, country, postal_code, state, municipality, colony, street, no_ext, no_int, reference, means, means_children, means_description, subtotal,status, modified, canceled, is_approved, of_planner,created_at, sale_origin,pagopendiente, tag)
            VALUES (1,:name,:phone,'Pue',:email,:deliverydate,:country,:CP,:state,:city,:colony,:street,:no_ext,:no_int,'',2,2,'',:subtotal,0,0,0,1,0,:timeunix,2,0,:tag)");

        $statement->execute([
            'name' => $this->cliname,
            'phone' => $this->tel,
            'email' => $this->email,
            'deliverydate'=> 0,
            'country'=>$this->country,
            'CP'=>$this->cp,
            'state'=>$this->state,
            'city'=>$this->city,
            'colony'=>$this->colony,
            'street'=>$this->street,
            'no_ext'=>$this->noext,
            'no_int'=>$this->noint,
            'subtotal'=>0,
            'timeunix'=>0,
            'tag'=>$this->paytipe
        ]);
        
        $this->order_number = $link->lastInsertId();

        
            $products = array();
            $i=0;
            $proddays=0;
            $total=0;
            $arr_cart = (array)session('Cart');
            foreach($arr_cart as $cart)
            {
                $search = Service::find($cart[0]);
                $product=array();
                $prodtitle=$search->title;
                if($prodtitle == null)
                  $prodtitle=$search->name;
                array_push($product,$cart[0],$search->image_url,$prodtitle,$cart[1],$search->price,$search->amount,$search->minimal,$i,$search->drupal_path);
                array_push($products,$product); 
                $proddays=$proddays+$search->web_production_time;              
                $i++;
                $total=$total+($search->price * $cart[1]);
            }
            
            $fecha_actual = date("Y-m-d");
            $deliverydate = date("Y-m-d",strtotime($fecha_actual."+ ".$proddays." days")); 
            $fechaunix = strtotime("now");
      
      }*/
}

?>