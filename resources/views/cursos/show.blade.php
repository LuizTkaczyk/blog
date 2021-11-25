@extends('layouts.template')

@section('title', 'Cursos' . $curso->nome)



@section('content')
    <h1>Esta página mostra os cursos: </h1>
    <br>
    <a href="{{ route('cursos.index') }}">Página principal</a>
    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar curso</a>
    <br>
    <hr>
    <h2><strong>Nome :</strong> {{ $curso->nome }}</h2>

    <h3><strong>Categoria:</strong> {{ $curso->categoria }}</h3>
    <p><strong>Descrição:</strong> {{ $curso->descricao }}</p>

    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <div class="md:flex md:items-center">

            <div class="md:w-1/4"></div>
            <div class="md:w-2/3">
                <button
                    class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                    type="submit"> Exluir

                </button>
            </div>
        </div>


    </form>



@endsection
