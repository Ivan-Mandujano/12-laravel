<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info/{type?}', function ($type= null) {
    //dd($type);
    //SIRVE PARA DEBUG
    $otra = 'algo';
    return view('information', compact('type', 'otra') );
    //    return view('information', ['type'=> $type]);
    //    return view('information')
    //->with('type, $type)
    //->with('algo, $algo);


});
Route::get('/contacto', function () {
    return view('formulario');
});

Route::post('/contacto-guarda', function (Request $request) {
    
    dd($request->all(), $request->nameInput);
    return "hoy me voy al soool";
    //recibir
    //validar
    //Guardar
    //redireccionar
});