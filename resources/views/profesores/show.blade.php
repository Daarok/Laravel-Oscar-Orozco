@extends('layouts.app')

@section('titulo','Detalle profesor')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($profesor->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$profesor->materia}}</p>
    </div>
    <br>
    <a href="/profesores/{{$profesor->id}}/edit" class="btn btn-warning">Editar Profesor</a>
</div>


@endsection
