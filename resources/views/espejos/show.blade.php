@extends('layouts.app')

@section('titulo','Detalle espejo')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($espejo->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$espejo->nombre}}</p>
        <p class="card-text">{{$espejo->material}}</p>
        <p class="card-text">Peso: {{$espejo->peso}}kg</p>
        <p class="card-text">Precio: {{$espejo->precio}}$</p>
        <p class="card-text">{{$espejo->color}}</p>
        <p class="card-text">{{$espejo->dimensiones}}cm</p>
    </div>
    <br>
    <a href="/espejos/{{$espejo->id}}/edit" class="btn btn-warning">Editar Espejo</a>
</div>


@endsection
