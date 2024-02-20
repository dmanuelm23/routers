<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RouterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('routers')->truncate();
        Schema::enableForeignKeyConstraints();
        DB::table('routers')->insert([
            ['identificador'=>'R005','ip'=>'192.168.1.70','hostname'=>'POCO-X3-Pro', 'name'=>'MICEL', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R006','ip'=>'192.168.1.67','hostname'=>'Samsung', 'name'=>'TELEVISION', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R007','ip'=>'192.168.1.65','hostname'=>'Sala-de-estar', 'name'=>'GOOGLE ', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R008','ip'=>'192.168.1.64','hostname'=>'TL-WR840N', 'name'=>'ROUTER', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R009','ip'=>'192.168.1.254','hostname'=>'Router-Telmex', 'name'=>'Telmex', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R010','ip'=>'192.168.1.100','hostname'=>'Router-10', 'name'=>'Router-10', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R011','ip'=>'192.168.1.101','hostname'=>'Router-11', 'name'=>'Router-11', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R012','ip'=>'192.168.1.102','hostname'=>'Router-12', 'name'=>'Router-12', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R013','ip'=>'192.168.1.103','hostname'=>'Router-13', 'name'=>'Router-13', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R014','ip'=>'192.168.1.104','hostname'=>'Router-14', 'name'=>'Router-14', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R015','ip'=>'192.168.1.105','hostname'=>'Router-15', 'name'=>'Router-15', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R016','ip'=>'192.168.1.106','hostname'=>'Router-16', 'name'=>'Router-16', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R017','ip'=>'192.168.1.107','hostname'=>'Router-17', 'name'=>'Router-17', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R018','ip'=>'192.168.1.108','hostname'=>'Router-18', 'name'=>'Router-18', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R019','ip'=>'192.168.1.109','hostname'=>'Router-19', 'name'=>'Router-19', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R020','ip'=>'192.168.1.110','hostname'=>'Router-20', 'name'=>'Router-20', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R021','ip'=>'192.168.1.111','hostname'=>'Router-21', 'name'=>'Router-21', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R022','ip'=>'192.168.1.112','hostname'=>'Router-22', 'name'=>'Router-22', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R023','ip'=>'192.168.1.113','hostname'=>'Router-23', 'name'=>'Router-23', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R024','ip'=>'192.168.1.114','hostname'=>'Router-24', 'name'=>'Router-24', 'created_at' => date('Y-m-d H:i:s')],
            ['identificador'=>'R025','ip'=>'192.168.1.115','hostname'=>'Router-25', 'name'=>'Router-25', 'created_at' => date('Y-m-d H:i:s')]           
        ]);  
    }
}
