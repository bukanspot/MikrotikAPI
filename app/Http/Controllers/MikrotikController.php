<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \RouterOS\Client;
use \RouterOS\Query;

class MikrotikController extends Controller
{
    public function index(){
        $client = new Client([
            'host' => '192.168.88.1',
            'user' => 'admin',
            'pass' => null
        ]);

        $query = (new Query('/address/address/print'));

        // Send query and read response from RouterOS
        $response = $client->query($query)->read();
        
        dd($response);
    }
}
