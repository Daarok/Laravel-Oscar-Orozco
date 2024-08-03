

@extends('layouts.app')

@section('titulo','Crear profesor')

@section('contenido')
<br>
<h3>Crear Nuevo Profesor</h3>
<form action="/profesores" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nombreprofesor" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>

    <div class="mb-3">
        <label for="apellidoprofesor" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
    </div>

    <div class="mb-3">
        <label for="materiaprofesor" class="form-label">Materia</label>
        <input type="text" class="form-control" id="materia" name="materia">
    </div>

    <div class="mb-3">
        <label for="correoelectronico" class="form-label">Correo</label>
        <input type="text" class="form-control" id="correo_electronico" name="correo_electronico">
    </div>

    <div class="form-group">
        <label for="imagen">Cargar imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>


    <button type="submit" class="btn btn-success">Guardar</button>
    </form>

@endsection
