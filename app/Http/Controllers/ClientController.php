<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
{
    public function index(){

       $clients = (new Client)->getClients();
        
        return view('showClients')->with('values',$clients);
    }
}
