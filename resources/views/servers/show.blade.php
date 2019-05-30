@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">         
            <h2>List of Servers</h2>
            <a href="{{ url('/createServer') }}" class="btn btn-primary">Add New Server</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Server Name</th>
                        <th scope="col">Server Status</th>
                        <th scope="col">Server type</th>
                        <th scope="col">Operating System Name</th>
                        <th scope="col">Operating System Version</th>
                        <th scope="col">IP Address</th>
                        <th scope="col">Location</th>
                        <th scope="col">Modify</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach( $data['servers'] as $server)
                    <tr>
                        <td>{{ $server->server_name }}</td>
                        <td>{{ $server->server_status }}</td>
                        <td>{{ $server->server_type }}</td>
                        <td>{{ $server->os_name }}</td>
                        <td>{{ $server->os_version }}</td>
                        <td>{{ $server->ip_address }}</td>
                        <td>{{ $server->location }}</td>
                        <td>            
                            <a href="{{ url('/modifyServer/'.$server->id) }}" class="btn btn-primary btn-sm">Modify Server</a>
                            <form action="{{ url('/deleteServerAction/'.$server->id) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-danger btn-sm" type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
