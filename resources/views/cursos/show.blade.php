@extends('layouts.template')

@section('title', 'Cursos' . $curso->nome)



@section('content')
    <h1>Esta página mostra os cursos: </h1>
    <br>
    <a href="{{ route('cursos.index') }}">Página principal</a>
    <br>
    <a href="{{ route('cursos.editar', $curso) }}">Editar curso</a>
    <br>
    <hr>
    <h2><strong>Nome :</strong> {{ $curso->nome }}</h2>

    <h3><strong>Categoria:</strong> {{ $curso->categoria }}</h3>
    <p><strong>Descrição:</strong> {{ $curso->descricao }}</p>

    

@endsection
