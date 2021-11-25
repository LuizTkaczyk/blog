@extends('layouts.template')

@section('title', 'Criar')



@section('content')

    <div class="flex justify-center">
        <br>


        <form class="w-full max-w-sm" action="{{ route('cursos.store') }}" method="POST">
            @csrf
            <h1 class="text-xl font-semibold">Esta página é para criar os cursos</h1>

            <div class="md:flex md:items-center mb-9">
                <div class="md:w-1/3">
                    <label class="block text-black-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Nome:
                    </label>
                </div>

                {{-- FUNÇÃO OLD() NÃO DEIXA OS INPUTS SUMIREM APOS ATUALIZAR A PÁGINA --}}

                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-black-200 rounded w-full py-1 px-1 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        id="inline-full-name" type="text" name="nome" value="{{old('nome')}}">
                </div>

            </div>

            @error('nome')
                <small>*{{ $message }}</small>
            @enderror

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-black-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Categoria:
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input
                        class="bg-gray-200 appearance-none border-2 border-black-200 rounded w-full py-1 px-1 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        id="inline-password" type="text" name="categoria" value="{{old('categoria')}}">
                </div>
            </div>

            @error('categoria')
                <small>*{{ $message }}</small>
            @enderror

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-black-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Descrição:
                    </label>
                </div>
                <div class="md:w-2/3">
                    <textarea
                        class="bg-gray-200 appearance-none border-2 border-black-200 rounded w-full py-1 px-1 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                        rows="5" type="text" name="descricao"> {{old('descricao')}}
                            </textarea>
                </div>
            </div>
            @error('descricao')
                <small>*{{ $message }}</small>
            @enderror


            <div class="md:flex md:items-center">
                <div class="md:w-1/2"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        Salvar
                    </button>
                </div>

                <div class="md:w-1/4"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="button"> <a href="{{ route('cursos.index') }}">Home</a>

                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection
