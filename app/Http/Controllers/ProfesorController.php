<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;
class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $profesor->save();
        return 'Guardado con exito';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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