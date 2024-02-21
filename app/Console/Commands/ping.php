<?php

namespace App\Console\Commands;

use App\Models\Router;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class ping extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ping:routers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para verificar ping a los routers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if(Cache::has('iteracion')){
            $iteracion = Cache::get('iteracion')+1;
            Cache::put('iteracion', $iteracion,86400);
        }
        else{
            $iteracion=1;
            Cache::put('iteracion',$iteracion,86400);
        }
        $routers = Router::get();
        foreach ($routers as $key => $router){
            $cmd = stristr(PHP_OS, 'win')?"ping -n 4 $router->ip":"ping -c 4 $router->ip";
            exec($cmd, $output, $return);
            $time = '/tiempo=([0-9.]+)ms/';
            $lost = '/perdidos = ([0-9.]+)/';
            $matches = [];
            $latency = preg_match($time, implode("\n", $output), $matches)?$matches[1]:0;
            $packages = preg_match($lost, implode("\n", $output), $matches)?$matches[1]:0;
            if ($return == 0) {
                $result = ['iteracion' => $iteracion,'id'=>$router->id, 'Latencia' => $latency.'ms', 'paquetes perdidos' => $packages, 'created_at' => date('Y-m-d H:i:s')];
            }
            else
            {
                $result = ['iteracion' => $iteracion, 'id'=>$router->id, 'Latencia' => $latency.'ms', 'paquetes perdidos' => $packages, 'created_at' => date('Y-m-d H:i:s')];
            }
            Cache::put($iteracion.'info-router'.$router->id, $result,86400);
        }
    }
}
