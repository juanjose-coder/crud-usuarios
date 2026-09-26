@extends('layouts.principal')

@section('content')
    <h1>Detalle del Usuario</h1>

    <div class="info-item"><strong>Id:</strong> {{ $usuario->id }}</div>
    <div class="info-item"><strong>Nombre:</strong> {{ $usuario->nombre }}</div>
    <div class="info-item"><strong>Apellido:</strong> {{ $usuario->apellido }}</div>
    <div class="info-item"><strong>Email:</strong> {{ $usuario->email }}</div>
    <div class="info-item"><strong>Fecha de Ingreso:</strong> {{ $usuario->fechaingreso }}</div>
    <div class="info-item"><strong>Cargo:</strong> {{ $usuario->cargo }}</div>

    <a href="{{ route('usuario.index') }}" class="volver">&larr; Regresar</a>
@endsection