<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- favicon --}}
    {{-- estilos --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    {{-- header --}}
    <ul class="flex">
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800 " href="{{ route('home') }}">Home</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800" href="{{ route('cursos.index') }}">Listar</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800 " href="{{ route('cursos.create') }}">Criar</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800 " href="{{ route('outros') }}">Outros</a>
        </li>
        <li class="mr-6">
            <a class="text-blue-500 hover:text-blue-800 " href="{{ route('contato.index') }}">Contato</a>
        </li>
    </ul>

    @yield('content')

    {{-- footer --}}
    {{-- scripts --}}
</body>

</html>
