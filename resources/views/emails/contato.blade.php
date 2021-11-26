<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- conteúdo que aparecerá no email enviado --}}
    <h1>E-mail</h1>
    <p>Primeiro email enviado!!!</p>

    <p><strong>Nome:</strong> {{$contato['nome']}}</p>
    <p><strong>Email:</strong> {{$contato['email']}}</p>
    <p><strong>Mensagem:</strong> {{$contato['mensagem']}}</p>
</body>
</html>