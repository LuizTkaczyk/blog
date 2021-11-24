<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;


Route::get('/',HomeController::class);

Route::get('cursos',[CursoController::class, 'index']);

Route::get('cursos/create',[CursoController::class, 'create']);

Route::get('cursos/{curso}',[CursoController::class, 'show']);