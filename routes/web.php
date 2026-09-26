<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/usuario/create', [UsuarioController::class, 'create'])->name('usuario.create');
Route::post('/usuario/store', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/usuario/edit/{usuario}', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::put('/usuario/update/{usuario}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::get('/usuario/show/{usuario}', [UsuarioController::class, 'show'])->name('usuario.show');
Route::delete('/usuario/destroy/{usuario}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
