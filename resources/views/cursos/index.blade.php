@extends('layouts.template')

@section('title', 'Cursos')



@section('content')
    {{-- <h1>Bem vindo a página principal dos cursos</h1>
    <br>
    <a href="{{ route('cursos.criar') }}">Criar mais cursos</a>
    <hr>
    <br>
    <ul>
        @foreach ($cursos as $curso)

            <li>
                <a href="{{route('cursos.show', $curso->id)}}">{{ $curso->nome }}</a>
               
                
            </li>

        @endforeach

    </ul> --}}
    <div class="flex justify-center">
       <h1> <a href="{{ route('cursos.create') }}">Criar mais cursos</a></h1>
    </div>


    <div class="flex justify-center">
        <table class="table-fixed">

            <thead>
                <tr>
                    <th class="w-1/1 px-1 py-1">Id</th>
                    <th class="w-2/2 px-1 py-1">Nome do curso</th>
                    <th class="w-1/3 px-4 py-2">Categoria</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td class="border px-4 py-1">{{ $curso->id }}</td>
                        <td class="border px-4 py-2"> <a
                                href="{{ route('cursos.show', $curso->id) }}">{{ $curso->nome }}</a>
                        </td>
                        <td class="border px-4 py-2">{{ $curso->categoria }}</td>

                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
    <br>
    <div class="flex justify-center">
        {{-- Com o método links, é mostrado o link de paginação --}}
        {{ $cursos->links() }}
    </div>

@endsection
