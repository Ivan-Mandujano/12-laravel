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
        $request->validate([
            'nameInput' => 'required|max:255',
            'correoInput' => ['required', 'email', 'max:255'],
            'extra' => ['required', 'min:5'],
            'ciudad' => 'required',
        ]);
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
    public function edit(Comentario $comentario)
    {
        return view('comentarios.comentarioEdit', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
        //validar
        $request->validate([
            'nameInput' => 'required|max:255',
            'correoInput' => ['required', 'email', 'max:255'],
            'extra' => ['required', 'min:5'],
            'ciudad' => 'required',
        ]);
        //actualizar
        $comentario->nombres = $request->nameInput;
        $comentario->correo = $request->correoInput;
        $comentario->comentario = $request->extra;
        $comentario->ciudad = $request->ciudad;
        $comentario->save();
        return redirect()->route('comentario.show',$comentario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        return redirect()->route('comentario.index',$comentario);
    }
}
