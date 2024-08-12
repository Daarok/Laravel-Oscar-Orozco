<?php

namespace App\Http\Controllers;

use App\Models\Espejo;
use Illuminate\Http\Request;

class EspejoController extends Controller
{

    public function index()
    {
        $espejo= Espejo::all();
        return view('espejos.index', compact('espejo'));
    }


    public function create()
    {
        return view('espejos.create');
    }


    public function store(Request $request)
    {
        $espejo = new Espejo();
        $espejo->nombre= $request->input('nombre');
        $espejo->descripcion= $request->input('descripcion');
        $espejo->material= $request->input('material');
        $espejo->peso= $request->input('peso');
        $espejo->precio= $request->input('precio');
        $espejo->modelo= $request->input('modelo');
        $espejo->diseño= $request->input('diseño');
        $espejo->stock= $request->input('stock');
        $espejo->dimensiones= $request->input('dimensiones');
        $espejo->forma= $request->input('forma');
        $espejo->proveedor= $request->input('proveedor');
        $espejo->color= $request->input('color');
        if($request->hasFile('imagen')){
            $espejo->imagen = $request->file('imagen')->store('public/espejos');
        }
        $espejo->save();
        return 'Guardado con exito';
    }


    public function show(string $id)
    {
        $espejo = Espejo::find($id);

        return view('espejos.show', compact('espejo'));
    }


    public function edit(string $id)
    {
        $espejo = Espejo::find($id);
        return view('espejos.edit', compact('espejo'));
    }

    public function update(Request $request, string $id)
    {
        $espejo = Espejo::find($id);
        $espejo ->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){
            $espejo->imagen = $request -> file('imagen')-> store('public/espejos');
        }
        $espejo->save();
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
