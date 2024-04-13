<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Disc;

class DiscController extends Controller
{
    public function index(){

        $disc = (new Disc)->getDiscs();
        
        return view('stockDisc')->with('values',$disc);
    }
}
