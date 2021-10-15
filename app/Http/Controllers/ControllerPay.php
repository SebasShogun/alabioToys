<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ControllerPaymentConekta;

class ControllerPay extends Controller
{
    //

    $pay = ControllerPaymentConekta($conektaTokenId, $card,$name,$description,$total,$email);

    if($oPayment->pay()){
    echo "1";
	}else{
	    echo $oPayment->error;
	}
}
