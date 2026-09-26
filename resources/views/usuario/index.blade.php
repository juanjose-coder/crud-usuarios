@extends('layouts.principal')

@section('content')
    <h1>Lista de Usuarios</h1>

    <div class="top-actions">
        <a href="{{ route('usuario.create') }}" class="btn btn-primary">+ Crear Nuevo Usuario</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Fecha Ingreso</th>
                <th>Cargo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->fechaingreso }}</td>
                    <td>{{ $usuario->cargo }}</td>
                    <td class="acciones">
                        <a href="{{ route('usuario.show', $usuario->id) }}" class="btn btn-link">Ver</a>
                        <a href="{{ route('usuario.edit', $usuario->id) }}" class="btn btn-link">Editar</a>
                        <form action="{{ route('usuario.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro que desea eliminar?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" style="text-align:center; color:#888;">No hay usuarios registrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection