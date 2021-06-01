<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \RouterOS\Client;
use \RouterOS\Query;

class MikrotikController extends Controller
{
    public function index(){
        $client = new Client([
            'host' => '10.0.0.1',
            'user' => 'indra',
            'pass' => 'W'
        ]);

        $query = (new Query('/ppp/active/print'));  

        // Send query and read response from RouterOS
        $response = $client->query($query)->read();
        
        dd($response);
    }
}
