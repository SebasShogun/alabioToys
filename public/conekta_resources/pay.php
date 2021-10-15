<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/ventas/conekta_resources/Payment.php");
extract($_REQUEST);

$oPayment= new Payment($conektaTokenId,$selltotal,$name,$email,$meses,$description,$card);
if($oPayment->pay()){
    echo "1";
}else{
    echo $oPayment->error;
}

?>