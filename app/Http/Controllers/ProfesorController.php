<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;


class ProfesorController extends Controller
{

    public function index()
    {
        $profesor = Profesor::all();
        return view('profesores.index', compact('profesor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesores.create');

    }


    public function store (Request $request)
            {

        $profesor = new Profesor();
        $profesor->nombre= $request->input('nombre');
        $profesor->apellido= $request->input('apellido');
        $profesor->materia= $request->input('materia');
        $profesor->correo_electronico= $request->input('correo_electronico');
        if($request->hasFile('imagen')){
            $profesor->imagen = $request->file('imagen')->store('public/profesores');
        }
        $profesor->save();
        return 'Guardado con exito';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profesor = Profesor::find($id);

        return view('profesores.show', compact('profesor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profesor = Profesor::find($id);
        return view('profesores.edit', compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profesor = Profesor::find($id);
        $profesor ->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $profesor->imagen = $request -> file('imagen')-> store('public/profesores');
        }
        $profesor->save();
        return 'Información Actualizada';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
