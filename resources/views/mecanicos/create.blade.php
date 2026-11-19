<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cadastro de Mecânicos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">

        <h1>Cadastro de Mecânicos</h1>

        <form action="{{ route('mecanicos.store') }}" method="POST" novalidate>

            @csrf

            <label for="nome">Nome</label>
            <input
                id="nome"
                name="nome"
                class="form-control"
                value="{{ old('nome') }}"
                required
            >
            @error('nome')
<div class="text-danger">{{ $message }}</div>
@enderror

            <label for="registro">Registro</label>
            <input
                id="registro"
                name="registro"
                class="form-control"
                value="{{ old('registro') }}"
                required
            >
            @error('registro')
<div class="text-danger">{{ $message }}</div>
@enderror

            <label for="especialidade">Especialidade</label>
            <input
                id="especialidade"
                name="especialidade"
                class="form-control"
                value="{{ old('especialidade') }}"
                required
            >
            @error('especialidade')
<div class="text-danger">{{ $message }}</div>
@enderror

            <label for="telefone">Telefone</label>
            <input
                id="telefone"
                name="telefone"
                class="form-control"
                value="{{ old('telefone') }}"
                required
            >
            @error('telefone')
<div class="text-danger">{{ $message }}</div>
@enderror

            <br>

            <a href="{{ route('mecanicos.index') }}">Voltar</a>

</br></br>

            <button class="btn btn-primary">Salvar</button>

        </form>

    </div>

</body>
</html>