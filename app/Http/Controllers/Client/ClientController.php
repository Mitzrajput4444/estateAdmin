<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clientindex(){
        return view('clientindex');
    }
    public function buysalerent(){
        return view('client/clientbuysalerent');
    }
    public function home(){
        return view('client/clientindex');
    }
    public function about(){
        return view('client/clientabout');
    }
    public function agent(){
        return view('client/clientagent');
    }
    public function blog(){
        return view('client/clientblog');
    }
    public function contact(){
        return view('client/clientcontact');
    }
 
}
