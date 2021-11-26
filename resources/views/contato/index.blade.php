@extends('layouts.template')

@section('title', 'Editar')



@section('content')
    <div class="flex justify-center">

        <h2>Envie sua mensagem</h2>
    </div>

    <div class="flex justify-center">


        <!-- component -->
        <form class="w-full max-w-lg" action="{{ route('contato.store') }}" method="POST">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nome
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" type="text" name="nome">@error('nome')
                        <p class="text-gray-600 text-xs italic"><strong>{{ $message }}</strong></p>
                    @enderror

                </div>

            </div>


            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        E-mail
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" type="email" name="email">@error('email')
                        <p class="text-gray-600 text-xs italic"><strong>{{ $message }}</strong></p>
                    @enderror

                </div>

            </div>



            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Mensagem
                    </label>
                    <textarea
                        class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                        id="message" name="mensagem"></textarea> @error('mensagem')
                        <p class="text-gray-600 text-xs italic"><strong>{{ $message }}</strong></p>
                    @enderror

                </div>
            </div>




            <div class="md:flex md:items-center">
                <div class="md:w-2/5">
                    <button
                        class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">Enviar

                    </button>
                </div>

            </div>
        </form>
    </div>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}")
        </script>
    @endif

@endsection
