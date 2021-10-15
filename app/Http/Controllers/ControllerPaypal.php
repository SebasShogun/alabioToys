<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Api\PaymentExecution;

class ControllerPaypal extends Controller
{
    //
	private $apiContext;

    public function __construct(){

    	 $payPalConfig = Config::get('paypal');

    	 $this->apiContext = new ApiContext(
        	new OAuthTokenCredential(
            $payPalConfig['client_id'],     // ClientID
            $payPalConfig['secret']      // ClientSecret
        	)
		);

    	 $this->apiContext->setConfig($payPalConfig['settings']);
    }


    public function index(){
    	
    }

    public function paymentpaypal($amountx){
    	// After Step 2
		$payer = new Payer();
		$payer->setPaymentMethod('paypal');

		$amount = new Amount();
		$amount->setTotal($amountx);
		$amount->setCurrency('MXN');

		$transaction = new Transaction();
		$transaction->setAmount($amount);


		$callbackUrl = url('/paypal/status');

		$redirectUrls = new RedirectUrls();
		$redirectUrls->setReturnUrl($callbackUrl)
		    ->setCancelUrl($callbackUrl);

		$payment = new Payment();
		$payment->setIntent('sale')
		    ->setPayer($payer)
		    ->setTransactions(array($transaction))
		    ->setRedirectUrls($redirectUrls);

		try {
			    $payment->create($this->apiContext);
			    //echo $payment;
			    $approvalUrl = $payment->getApprovalLink();
			    //return redirect()->away($payment->getApprovalLink());
			    return redirect($approvalUrl);
			    //echo "\n\nRedirect user to approval_url: " . $payment->getApprovalLink() . "\n";
			}
			catch (PayPalConnectionException $ex) {
			    // This will print the detailed information on the exception.
			    //REALLY HELPFUL FOR DEBUGGING
			    echo $ex->getData();
			}
    }


    public function payPalStatus(Request $request){
    	//add($request->all());
    	$paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
            return redirect('/paypal/failed')->with(compact('status'));
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);
        //add($result);

        if ($result->getState() === 'approved') {
            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';
            return redirect('/thanks')->with(compact('status'));
        }

        $status =  'Lo sentimos! El pago a través de PayPal no se pudo realizar.';    
	return redirect('/paypal/failed')->with(compact('status'));
    }


}
