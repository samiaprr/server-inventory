@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Add A New Server</h2>
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
            <form method="post" action="/createServerAction" enctype="multipart/form-data">
            {!! csrf_field() !!}
                <div class="form-group row">
                    <label for="server_name" class="col-sm-3 col-form-label">Server Name</label>
                    <div class="col-sm-9">
                        <input name="server_name" type="text" class="form-control" id="server_name" placeholder="Server Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="server_status" class="col-sm-3 col-form-label">Server Status</label>
                    <div class="col-sm-9">
                        <input name="server_status" type="text" class="form-control" id="server_status" placeholder="Server Status">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="server_type" class="col-sm-3 col-form-label">Server Type</label>
                    <div class="col-sm-9">
                        <input name="server_type" type="text" class="form-control" id="server_type" placeholder="Server Type">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="os_name" class="col-sm-3 col-form-label">Operating System Name</label>
                    <div class="col-sm-9">
                        <input name="os_name" type="text" class="form-control" id="os_name" placeholder="Operating System Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="os_version" class="col-sm-3 col-form-label">Operating System Version</label>
                    <div class="col-sm-9">
                        <input name="os_version" type="text" class="form-control" id="os_version" placeholder="Operating System Version">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ip_address" class="col-sm-3 col-form-label">IP Address</label>
                    <div class="col-sm-9">
                        <input name="ip_address" type="text" class="form-control" id="ip_address" placeholder="IP Address">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="location" class="col-sm-3 col-form-label">Location</label>
                    <div class="col-sm-9">
                        <input name="location" type="text" class="form-control" id="location" placeholder="Location">
                    </div>
                </div>
                <div class="form-group row">
                    <div class=" col-sm-9">
                        <button type="submit" class="btn btn-primary">Add Server</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
