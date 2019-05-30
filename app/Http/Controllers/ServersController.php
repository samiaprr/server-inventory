<?php

namespace App\Http\Controllers;

use App\Servers;
use App\Services\ServersService;
use App\Http\Requests\ServersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class ServersController extends Controller
{
    protected $servers;

    public function __construct(ServersService $server)
    {
        $this->servers = $server;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'servers' => $this->servers->all()
        ];

        return View::make('servers.show')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServersRequest $request)
    {
        $validated = $request->validated();

        $this->servers->create($validated);

        return back()->with(['status'=>'Server added successfully']);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servers  $servers_id
     * @return \Illuminate\Http\Response
     */
    public function edit($servers_id)
    {
        $server = $this->servers->find($servers_id);

        return View::make('servers.edit')->with('server', $server);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servers  $servers
     * @return \Illuminate\Http\Response
     */
    public function update(ServersRequest $request, $servers_id)
    {
        $validated = $request->validated();

        $this->servers->update($validated, $servers_id);

        return back()->with(['status'=>'Server modified successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servers  $servers
     * @return \Illuminate\Http\Response
     */
    public function destroy($servers_id)
    {
         $this->servers->delete($servers_id);

         return back()->with(['status'=>'Server deleted successfully']);
    }
}
