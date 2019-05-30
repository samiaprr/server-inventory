<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    protected $table = 'servers';
    public $timestamps = true;
    protected $guarded = [];
    protected $fillable = [
        'server_name', 'server_status', 'server_type', 'os_name', 'os_version', 'ip_address', 'location',
    ];
}
