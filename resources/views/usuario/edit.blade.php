@extends('layouts.principal')

@section('content')
    <h1>Editar Usuario</h1>

    <form action="{{ route('usuario.update', $usuario->id) }}" method="POST" class="form-usuario">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="nombre" value="{{ old('nombre', $usuario->nombre) }}">
            @error('nombre') <div class="error-msg">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Apellido</label>
            <input type="text" name="apellido" value="{{ old('apellido', $usuario->apellido) }}">
            @error('apellido') <div class="error-msg">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $usuario->email) }}">
            @error('email') <div class="error-msg">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Fecha de Ingreso</label>
            <input type="date" name="fechaingreso" value="{{ old('fechaingreso', $usuario->fechaingreso) }}">
            @error('fechaingreso') <div class="error-msg">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label>Cargo</label>
            <input type="text" name="cargo" value="{{ old('cargo', $usuario->cargo) }}">
            @error('cargo') <div class="error-msg">{{ $message }}</div> @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
        </div>
    </form>

    <a href="{{ route('usuario.index') }}" class="volver">&larr; Regresar</a>
@endsection