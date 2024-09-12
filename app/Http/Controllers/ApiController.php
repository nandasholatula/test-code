<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class ApiController extends Controller
{
    //
    public function feed(){
        $response = Http::get('https://pktdev.jakarta.go.id/api/jak-konek/show-data-jak-konek');
    
        // Convert the XML response to an array
        $data = simplexml_load_string($response->body());
        $json = json_encode($data);
        $getdata = json_decode($json, true);

        return view('feed', compact('getdata'));
       
    }
}

