@extends('layouts.app')

@section('titulo', 'Editar profesor')

@section('contenido')
<br>
<h3 class="text-center">Editar información del profesor</h3>
<form action="/espejos/{{$espejo->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreespejo">Modifique el Nombre del espejo</label>
        <input name="nombre" id="nombreespejo" value="{{$espejo->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="materialespejo">Modifique material del espejo</label>
        <input name="material" id="material" value="{{$espejo->material}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="diseñoespejo">Modifique el diseño del espejo</label>
        <input name="diseño" id="diseño" value="{{$espejo->diseño}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="precioespejo">Modifique el precio del espejo </label>
        <input name="precio" id="precio" value="{{$espejo->precio}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="dimensionesespejo">Modifique las dimensiones del espejo</label>
        <input name="materia" id="materia" value="{{$espejo->dimensiones}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="modeloespeso">Modifique el Modelo del espejo</label>
        <input name="modelo" id="modelo" value="{{$espejo->modelo}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="pesoespejo">Modifique el peso del espejo</label>
        <input name="peso" id="peso" value="{{$espejo->peso}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="formaespejo">Modifique la forma del espejo</label>
        <input name="forma" id="forma" value="{{$espejo->forma}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="colorespejo">Modifique el color del espejo</label>
        <input name="color" id="color" value="{{$espejo->color}}" type="text" class="form-control">
    </div>

    <div class="mb-3">
        <label for="proveedorespejo">Modifique el proveedor del espejo</label>
        <input name="proveedor" id="proveedor" value="{{$espejo->proveedor}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="stockespejo">Modifique el stock del espejo</label>
        <input name="stock" id="stock" value="{{$espejo->stock}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="descripcionespejo">Modifique la descripcion del espejo</label>
        <input name="descripcion" id="descripcion" value="{{$espejo->descripcion}}" type="text" class="form-control">
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
