@extends('layouts.app')

@section('titulo', 'Listado de profesores')

@section('contenido')
<br>
<h3 class="text-center">Listado de profesores</h3>
<br>
<div class="row">
    @foreach ($profesor as $profe)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($profe->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$profe->nombre}}</h5>
              <h5 class="card-text">{{$profe->apellido}}</h5>
              <p class="card-text">{{$profe->materia}}</p>
              <p class="card-text">{{$profe->correo_electronico}}</p>
              <a href="/profesores/{{$profe->id}}" class="btn btn-success">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
