<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Requests\UsuarioRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UsuarioController extends Controller
{
    public function index(): View
    {
        $usuarios = Usuario::all();
        return view('usuario.index', compact('usuarios'));
    }

    public function create(): View
    {
        return view('usuario.create');
    }

    public function store(UsuarioRequest $request): RedirectResponse
    {
        Usuario::create($request->validated());

        return redirect()->route('usuario.index')->with('success', 'Usuario creado correctamente.');
    }

    public function edit(Usuario $usuario): View
    {
        return view('usuario.edit', compact('usuario'));
    }

    public function update(UsuarioRequest $request, Usuario $usuario): RedirectResponse
    {
        $usuario->update($request->validated());

        return redirect()->route('usuario.index')->with('success', 'Usuario actualizado correctamente.');
    }

    public function show(Usuario $usuario): View
    {
        return view('usuario.show', compact('usuario'));
    }

    public function destroy(Usuario $usuario): RedirectResponse
    {
        $usuario->delete();

        return redirect()->route('usuario.index')->with('success', 'Usuario eliminado correctamente.');
    }
}
