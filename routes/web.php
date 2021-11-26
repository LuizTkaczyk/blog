<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/', HomeController::class)->name('home');

// Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');

// Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.create');

// Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

// Route::get('cursos/{curso}',[CursoController::class, 'show'])->name('cursos.show');

// Route::get('cursos/{curso}/editar',[CursoController::class, 'edit'])->name('cursos.edit');

// Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.update');

// Route::delete('cursos/{curso}',[CursoController::class, 'destroy'])->name('cursos.destroy');

Route::resource('cursos', CursoController::class);

//rota para um conteudo estatico
Route::view('outros', 'outros')->name('outros');

//definindo as rotas de emails
Route::get('contato', [ContatoController::class, 'index'])->name('contato.index');

Route::post('contato', [ContatoController::class, 'store'])->name('contato.store');