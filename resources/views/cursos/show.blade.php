@extends('layouts.template')

@section('title', 'Cursos' . $curso)



@section('content')
    <h1>Esta página mostra os cursos: {{ $curso }}</h1>
@endsection
