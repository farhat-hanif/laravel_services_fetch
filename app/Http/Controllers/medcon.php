<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\med;

class medcon extends Controller
{
    //
    public function abc(request $req)
    {
     $med = new med();
     $med->services = $req->services;
     $med->save();
    }
}

// public function getdata(){
// $med = med::get();
// return view('welcome',compact('med'));
// }