<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class homeController extends Controller
{
    public function index(Request $request){
        
       // $ip = request()->ip();  //Dynamic
          $ip = '103.200.38.143'; //Static
          $data ='Location'::get($ip);
          //dd($data);
        return view('welcome',compact('data'));
    }
    
    public function show(){
        return view('showmap',compact('show'));
    }
}
