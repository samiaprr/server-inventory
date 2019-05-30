<?php

namespace App\Services;

use App\Servers;
use Illuminate\Http\Request;

class ServersService 
{
 
    protected $servers;

    public function __construct(Servers $server)
    {
        $this->servers = $server;
    }

    public function all()
    {
        return $this->servers->all();
    }

    public function create($data)
    {
        return $this->servers->create($data);
    }

    public function update($data, $servers_id)
    {
        $server = $this->servers->find($servers_id);

        return $server->update($data);
    }
  
    public function delete($servers_id)
    {
        return $this->servers->destroy($servers_id);
    }
  
    public function find($servers_id)
    {
        return $this->servers->find($servers_id);
    }

}
