@extends('layouts.app')

@section('titulo', 'Editar profesor')

@section('contenido')
<br>
<h3 class="text-center">Editar información del profesor</h3>
<form action="/profesores/{{$profesor->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreprofesor">Modifique el Nombre del Profesor</label>
        <input name="nombre" id="nombreprofesor" value="{{$profesor->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="apellidoprofesor">Modifique el apellido del profesor</label>
        <input name="apellido" id="apellido" value="{{$profesor->apellido}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="materiaprofesor">Modifique la materia del profesor</label>
        <input name="materia" id="materia" value="{{$profesor->materia}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="correoelectronico">Modifique el apellido del profesor</label>
        <input name="correo_electronico" id="correo_electronico" value="{{$profesor->correo_electronico}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>

@endsection
