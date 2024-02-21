<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PingRouterController extends Controller
{
    public function pingRouter($ip)
    {
        $cmd = stristr(PHP_OS, 'win')?"ping -n 4 $ip":"ping -c 4 $ip";
        exec($cmd, $output, $return);
        $time = '/tiempo=([0-9.]+)ms/';
        $lost = '/perdidos = ([0-9.]+)/';
        $matches = [];
        $latency = preg_match($time, implode("\n", $output), $matches)?$matches[1]:0;
        $packages = preg_match($lost, implode("\n", $output), $matches)?$matches[1]:0;
        if ($return == 0) {
            $result = ['Latencia' => $latency.'ms', 'paquetes perdidos' => $packages];
            return response()->json([
                'statusCode'=>200,
                'result'=> $result,
                'message' =>'Ping ejecutado satisfactoriamente',
            ]);
        }
        else
        {
            $result = ['Latencia' => $latency.'ms', 'paquetes perdidos' => $packages];
            return response()->json([
                'statusCode'=>200,
                'result'=> $result,
                'message' =>'Ping no ejecutado satisfactoriamente',
            ]);
        }
    }
}
