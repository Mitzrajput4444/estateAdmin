<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminindex extends Controller
{
    public function adminindex(){
        return view('adminindex');
    }
  
    public function mainsection(){
        return view('mainsection');
    }
}
