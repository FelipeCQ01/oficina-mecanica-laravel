<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecânicos da Oficina</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        
        <h1>Detalhes do mecânico</h1>
        <p><strong>Nome:</strong> {{ $mecanico->nome }}</p>
        <p><strong>Registro:</strong> {{ $mecanico->registro }}</p>
        <p><strong>Especialidade:</strong> {{ $mecanico->especialidade }}</p>
        <p><strong>Telefone:</strong> {{ $mecanico->telefone }}</p>
        <a href="{{ route('mecanicos.index') }}">Voltar</a>
        
    </div>
