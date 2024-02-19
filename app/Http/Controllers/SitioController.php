<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    //Metodos a llamar en web.php
    public function info($type= null){
        //dd($type);
        //SIRVE PARA DEBUG
        $otra = 'algo';
        return view('information', compact('type', 'otra') );
        //    return view('information', ['type'=> $type]);
        //    return view('information')
        //->with('type, $type)
        //->with('algo, $algo);
    }
}
