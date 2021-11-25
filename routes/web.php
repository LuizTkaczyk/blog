<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/',HomeController::class);

Route::get('cursos',[CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create',[CursoController::class, 'create'])->name('cursos.criar');

Route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{curso}',[CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/editar',[CursoController::class, 'edit'])->name('cursos.editar');

Route::put('cursos/{curso}',[CursoController::class, 'update'])->name('cursos.atualizar');