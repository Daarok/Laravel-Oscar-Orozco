@extends('layouts.app')

@section('titulo', 'Listado de espejos')

@section('contenido')
<br>
<h3 class="text-center">Listado de espejos</h3>
<br>
<div class="row">
    @foreach ($espejo as $mirror)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($mirror->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$mirror->nombre}}</h5>
            <p class="card-text">{{$mirror->descripcion}}</p>
            <a href="/espejos/{{$mirror->id}}" class="btn btn-success">Ver detalles</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
