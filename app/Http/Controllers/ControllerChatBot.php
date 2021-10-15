<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Response;

class ControllerChatBot extends BaseController
{
    public function getdelivery()
    {
        return Response::json([
            'status' => "Prueba desde Controller",
        ]);
        
    }
}
