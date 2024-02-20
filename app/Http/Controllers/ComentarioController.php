<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentarios.comentarioIndex', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comentarios.comentarioCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all(), $request->nombre, $request->input('nombre')); 

        //return "Si llegue a la ruta";
        //recibir datos

        //validar

        //guardar
        $comentario = new Comentario();
        $comentario->nombres = $request->nameInput;
        $comentario->correo = $request->correoInput;
        $comentario->comentario = $request->extra;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();//guarda en la base de datos toda la informacion mencionada en la parte de arriba

        //redireccionar
        return redirect()->route('comentario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        return view('comentarios.comentarioShow', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
