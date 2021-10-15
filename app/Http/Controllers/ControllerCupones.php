<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\DB;
use Response;
use Illuminate\Routing\ResponseFactory;

class ControllerCupones extends Controller
{
    //
    public function index()
    {       
        $services = Service::orderBy('name', 'ASC')->get();
        
        
        return view('layouts.cupones', compact('services'));
        
    }
    public function save(Request $request)
    {

        $name = $request->input("name");
        $email = $request->input("email");
        $plat = $request->input("plataforma");
        $serv = $request->input("service");;
        $fechaunix = strtotime("now");

        DB::insert('INSERT INTO coupons(name, email, origin,  service, checked, created_at) VALUES (?,?,?,?,?,?)', 
            [$name,$email,$plat,$serv,0,$fechaunix]);

            return view('layouts.cuponesthanks');
    }
    public function validate_c(Request $request)
    {
        $validate = DB::table('coupons_list')            
            ->where('code',$request->input("code"))
            ->get();

            $res=0;
            if(count($validate)>0)
            {
                $used=1;
                $amount=0;
                $id=0;
                foreach($validate as $v)
                {
                    $used=$v->used;
                    $amount=$v->amount;
                    $id=$v->id;
                }
                if($used==0)
                {
                    $res=1;
                    session(['Cupon'=>$amount]);
                    session(['Cuponid'=>$id]);
                }
                else
                {
                    $res=-1;
                }
            }
            else
            {
                $res=0;
            }

            return Response::json([
                'status' => $res,
            ]);
    }
    
    

}

