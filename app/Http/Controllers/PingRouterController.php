<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\PingCheck;

class PingRouterController extends Controller
{
    public function pingRouter($ip)
    {
        
        $result = PingCheck::new()->url('https://google.com');

             
        return response()->json(['host' => 'https://google.com',
        'status' => $result->getStatus(),
        'latency' => $result->getLatency()]);
    }
}
