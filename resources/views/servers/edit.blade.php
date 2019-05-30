@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Modify Server {{ $server->server_name }}</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
            @endif
            <form method="post" action="{{ url('/updateServerAction/'.$server->id) }}" enctype="multipart/form-data">
            {!! csrf_field() !!}
                <div class="form-group row">
                    <label for="server_name" class="col-sm-3 col-form-label">Server Name</label>
                    <div class="col-sm-9">
                        <input name="server_name" type="text" class="form-control" id="server_name" placeholder="Server Name" value="{{old('server_name',$server->server_name)}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="server_status" class="col-sm-3 col-form-label">Server Status</label>
                    <div class="col-sm-9">
                        <input name="server_status" type="text" class="form-control" id="server_status" placeholder="Server Status" value="{{old('server_status',$server->server_status)}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="server_type" class="col-sm-3 col-form-label">Server Type</label>
                    <div class="col-sm-9">
                        <input name="server_type" type="text" class="form-control" id="server_type" placeholder="Server Type" value="{{old('server_type',$server->server_type)}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="os_name" class="col-sm-3 col-form-label">Operating System Name</label>
                    <div class="col-sm-9">
                        <input name="os_name" type="text" class="form-control" id="os_name" placeholder="Operating System Name" value="{{old('os_name',$server->os_name)}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="os_version" class="col-sm-3 col-form-label">Operating System Version</label>
                    <div class="col-sm-9">
                        <input name="os_version" type="text" class="form-control" id="os_version" placeholder="Operating System Version" value="{{old('os_version',$server->os_version)}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ip_address" class="col-sm-3 col-form-label">IP Address</label>
                    <div class="col-sm-9">
                        <input name="ip_address" type="text" class="form-control" id="ip_address" placeholder="IP Address" value="{{old('ip_address',$server->ip_address)}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="location" class="col-sm-3 col-form-label">Location</label>
                    <div class="col-sm-9">
                        <input name="location" type="text" class="form-control" id="location" placeholder="Location" value="{{old('location',$server->location)}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class=" col-sm-9">
                        <button type="submit" class="btn btn-primary">Save modications</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
