<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContollerPageForm extends Controller
{
    //

	public function insert(Request $request){
		
		$name = $request->input('name');
		$phone = $request->input('phone');
		$email = $request->input('email');
		$mess = $request->input('message');
		$url = $request->input('url');
		$date = strtotime("now");
		$redirect = $request->input('redi');
		//$message= "Enviado desde ".$url." - ".$mess;
	    DB::table('clients')->insert(
	    	['name' => $name, 'phone' => $phone, 'email' => $email, 'user_id' => 21, 'created_at' => $date, 'origin' => "Pue"]
		);
		$cid = DB::getPdo()->lastInsertId();
		DB::table('client_tracking')->insert(
	    	['user_id' => 21, 'client_id' => $cid, 'description' => $mess, 'user_id' => 21, 'created_at' => $date, 'active' => 1, 'reminder' => $date+600]
		);

	    return redirect($redirect);
	}
}
