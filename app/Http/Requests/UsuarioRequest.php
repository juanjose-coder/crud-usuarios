<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // El id viene de la ruta si es una actualización (para ignorar el email del mismo registro)
        $usuarioId = $this->route('usuario') ? $this->route('usuario')->id : null;

        return [
            'nombre' => 'required|max:100|min:3',
            'apellido' => 'required|max:100|min:3',
            'email' => [
                'required',
                'email',
                Rule::unique('usuarios', 'email')->ignore($usuarioId),
            ],
            'fechaingreso' => 'required|date',
            'cargo' => 'required|max:100|min:3',
        ];
    }

    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
            'email.required' => 'El email es obligatorio.',
            'email.email' => 'El email no tiene un formato válido.',
            'email.unique' => 'Este email ya está registrado.',
            'fechaingreso.required' => 'La fecha de ingreso es obligatoria.',
            'fechaingreso.date' => 'La fecha de ingreso no es válida.',
            'cargo.required' => 'El cargo es obligatorio.',
        ];
    }
}