<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return "Bem vindo a página principal";
    }

    public function create(){
        return "Esta página é para criar os cursos";
    }

    public function show($curso){
        return "Esta página mostra os cursos: $curso";
    }
}
