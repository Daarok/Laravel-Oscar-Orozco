@extends('layouts.app')

@section('titulo','Crear Espejo')

@section('contenido')

<br>
<h3 class="text-white">Crear Nuevo Espejo</h3>
<form action="/espejos" method="post" enctype="multipart/form-data" class="bg-secondary p-4 rounded">
    @csrf
    <div class="mb-3">
        <label for="nombreespejo" class="form-label text-white">Nombre</label>
        <input type="text" class="form-control form-control-dark" id="nombre" name="nombre">
    </div>
    <div class="mb-3">
        <label for="materialespejo" class="form-label text-white">Material</label>
        <input type="text" class="form-control form-control-dark" id="material" name="material">
    </div>

    <div class="mb-3">
        <label for="diseñoespejo" class="form-label text-white">Diseño</label>
        <input type="text" class="form-control form-control-dark" id="diseño" name="diseño">
    </div>

    <div class="mb-3">
        <label for="precioespejo" class="form-label text-white">Precio</label>
        <input type="text" class="form-control form-control-dark" id="precio" name="precio">
    </div>
    <div class="mb-3">
        <label for="dimensionesespejo" class="form-label text-white">Dimensiones</label>
        <input type="text" class="form-control form-control-dark" id="dimensiones" name="dimensiones">
    </div>
    <div class="mb-3">
        <label for="modeloespejo" class="form-label text-white">Modelo</label>
        <input type="text" class="form-control form-control-dark" id="modelo" name="modelo">
    </div>
    <div class="mb-3">
        <label for="pesoespejo" class="form-label text-white">Peso</label>
        <input type="text" class="form-control form-control-dark" id="peso" name="peso">
    </div>
    <div class="mb-3">
        <label for="formaespejo" class="form-label text-white">Forma</label>
        <input type="text" class="form-control form-control-dark" id="forma" name="forma">
    </div>
    <div class="mb-3">
        <label for="colorespejo" class="form-label text-white">Color</label>
        <input type="text" class="form-control form-control-dark" id="color" name="color">
    </div>
    <div class="mb-3">
        <label for="proveedorespejo" class="form-label text-white">Proveedor</label>
        <input type="text" class="form-control form-control-dark" id="proveedor" name="proveedor">
    </div>
    <div class="mb-3">
        <label for="stockespejo" class="form-label text-white">Stock</label>
        <input type="text" class="form-control form-control-dark" id="stock" name="stock">
    </div>
    <div class="mb-3">
        <label for="descripcionespejo" class="form-label text-white">Descripcion</label>
        <input type="text" class="form-control form-control-dark" id="descripcion" name="descripcion">
    </div>

    <div class="form-group">
        <label for="imagen" class="text-white">Cargar imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file" class="form-control form-control-dark">
    </div>

    <br>

    <button type="submit" class="btn btn-success">Guardar</button>
</form>

@endsection
