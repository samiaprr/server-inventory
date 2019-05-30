<?php

use Illuminate\Database\Seeder;
use Entities\Servers;

class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servers')->insert([
            'server_name' => 'home_server', 
            'server_status' => 'production', 
            'server_type' => 'DHCP', 
            'os_name' => 'Windows Server 2012', 
            'os_version' => '6.2( build 9200)', 
            'ip_address' => '109.231.207.193', 
            'location' => 'Montreal, Qc',
        ]);

      
    }
}
