<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \RouterOS\Client;
use \RouterOS\Query;

class MikrotikController extends Controller
{
    public function index(){
        $client = new Client([
            'host' => env("MIKROTIK_HOST"),
            'user' => env("Mikrotik_USER"),
            'pass' => env("MIKROTIK_PASS")
        ]);

        $query = (new Query('/ip/address/print'));

        // Send query and read response from RouterOS
        $response = $client->query($query)->read();
        
        dd($response);
    }
}
